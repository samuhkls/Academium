<<<<<<< HEAD
#Instale o pip ( python -m ensurepip )
#De upgrade no pip (pip install --upgrade pip)
#instale o selenium ( pip install selenium )
#Instale o bs4 ( pip install beautifulsoup4 )
#Instale o webdriver manager ( pip install webdriver_manager )
#Instale o conector de MySQL x Python ( pip install mysql-connector-python ) 

#imports
from bs4 import BeautifulSoup
from selenium import webdriver
from webdriver_manager.chrome import ChromeDriverManager
from selenium.webdriver.chrome.service import Service
from selenium.webdriver.common.by import By
import mysql.connector
import time

#Fazendo a conexão com o banco de dados
conexao = mysql.connector.connect(
    host='localhost',
    user='root',
    password='',
    database='academium-bd',
)
cursor = conexao.cursor()


#Intalando o ChromeDriver
servico = Service(ChromeDriverManager().install())
driver = webdriver.Chrome(service=servico)

#URL da Alura
url = "https://www.alura.com.br/planos-cursos-online"
driver.get(url)
time.sleep(1)

#Pegando o preço dos cursos
div_mae = driver.find_element(By.XPATH, "//*[@id='planos-cursos-online'  ]/div[1]")
html_content = div_mae.get_attribute("outerHTML")
soup = BeautifulSoup(html_content, 'html.parser')
preco_assinatura = soup.find_all("span", class_="planos-pagamento__valor-parcela")


#Abrindo a página dos cursos disponíveis
url = "https://www.alura.com.br/cursos-online-devops"
driver.get(url)
# time.sleep(1)


#Pegando as informações dos cursos disponíveis
div_mae = driver.find_element(By.XPATH, '/html/body/main/div[1]/div/section[1]/div[2]/div')
html_content = div_mae.get_attribute("outerHTML")
soup = BeautifulSoup(html_content, 'html.parser')
link_curso = soup.find_all("a", class_="card-curso")
nomes_cursos = soup.find_all("span", class_="card-curso__nome")
horas_cursos = soup.find_all("span", class_="card-curso__carga")

#Definindo váriaveis e listas
preco_cursos = ""
links_cursos = [""]*len(link_curso)
avaliacao_cursos = [""]*len(links_cursos)
topico_cursos = [""]*len(links_cursos)
instrutor_curso = [""]*len(links_cursos)

#Formando a lista com as strings de URL dos cursos / Formando a lista com as cargas horárias dos cursos
for x in range(0, len(link_curso), 1):
    links_cursos[x] = "https://www.alura.com.br{}".format(link_curso[x].get("href"))
    horas_cursos[x] = horas_cursos[x].getText()
    horas_cursos[x] = horas_cursos[x].lstrip()
    horas_cursos[x] = horas_cursos[x].rstrip()

#Abrindo cada guia dos cursos para pegar as notas dos cursosv
for x in range(0, len(links_cursos), 1):
    #Abrindo a guia dos cursos
    url = links_cursos[x]
    # print(x, url)
    driver.get(url)
    time.sleep(0.5)
    
    #Pegando as informações dos cursos (avaliação, tópico do curso, nome do instrutor)
    try:
        div_mae = driver.find_element(By.XPATH, '/html/body/div[2]/div[1]/div/div[2]')
        html_content = div_mae.get_attribute("outerHTML")
        soup = BeautifulSoup(html_content, 'html.parser')
    except:
        print("ERROR / MotherDivNotFound")
    
    #Pega a avaliação do curso  
    try:
        avaliacao = soup.find_all("p", class_="courseInfo-card-wrapper-infos")
        avaliacao_cursos[x] = avaliacao[4].getText()
        
    except:
        print("ERROR / CourseGradeNotFound")
        avaliacao_cursos[x] = "None"
        
    #Coleta o tópico do curso
    try:
        topico = soup.find("span", class_="lista-guides__nome")
        topico_cursos[x] = topico.getText()
    except:
        print("ERROR / SubjectNotFound")
        topico_cursos[x] = "None"
        
    #Adquire o nome do instrutor
    try:
        instrutor = soup.find("h3", class_="instrutores-item-nome")
        instrutor_curso[x] = instrutor.getText()
        instrutor_curso[x] = instrutor_curso[x].strip()
    except:
        print("ERROR / InstructorNotFound")
        instrutor_curso[x] = "None"
    
    #Mudando todas as váriaveis com as tipagens corretas 1/2
    nomes_cursos[x] = nomes_cursos[x].getText()
    horas_cursos[x] = horas_cursos[x].replace("h", "")
    preco_cursos = preco_assinatura[0].getText()
    preco_cursos = preco_cursos.replace("R", "")
    preco_cursos = preco_cursos.replace("$", "")
    
    #Mostra as informações coletadas do curso
    print(f"\nCurso n° {x}")
    print(f"Nome do curso: {nomes_cursos[x]}:")
    print(f"Carga horária: {horas_cursos[x]}h")
    print(f"Preço: R${preco_cursos}")
    print(f"Link de acesso: {links_cursos[x]}")
    print(f"Avaliação desse curso é nota: {avaliacao_cursos[x]}")
    print(f"O tópico do curso é: {topico_cursos[x]}")
    print(f"O nome do professor(a) do curso é: {instrutor_curso[x]}")
    
print(avaliacao_cursos)

#Mudando todas as váriaveis com as tipagens corretas 2/2
for x in range(len(avaliacao_cursos)):
    int(horas_cursos[x])
    float(avaliacao_cursos[x])

#Tranformando o preço em int
int(preco_cursos)
    
for x in range(len(avaliacao_cursos)):
    comando = f'INSERT INTO alura_cursos (curso_nome, carga_horaria, preco_curso, link_curso, avaliacao_curso, topico_curso, instrutor) VALUES ("{nomes_cursos[x]}", "{horas_cursos[x]}", "{preco_cursos}", "{links_cursos[x]}", "{avaliacao_cursos[x]}", "{topico_cursos[x]}", "{instrutor_curso[x]}")'
    cursor.execute(comando)  
    conexao.commit()
    print("Integração feita")
    

#Mostrando qual o curso com a melhor avaliação
print("|-------------------Summary-------------------|\n")
maximun = max(avaliacao_cursos)
maximun_loc = avaliacao_cursos.index(maximun)

print(f"\nCurso n° {maximun_loc}")
print(f"Nome do curso: {nomes_cursos[maximun_loc].getText()}:")
print(f"Carga horária: {horas_cursos[maximun_loc]}")
print(f"Preço:{preco_cursos}")
print(f"Link de acesso: {links_cursos[maximun_loc]}")
print(f"Avaliação desse curso é nota: {avaliacao_cursos[maximun_loc]}")
print(f"O tópico do curso é: {topico_cursos[maximun_loc]}")
print(f"O nome do professor(a) do curso é: {instrutor_curso[maximun_loc]}")
print("\n|-------------------Summary-------------------|")

#Fechando a conexão com o banco
cursor.close()
=======
#Instale o pip ( python -m ensurepip )
#De upgrade no pip (pip install --upgrade pip)
#instale o selenium ( pip install selenium )
#Instale o bs4 ( pip install beautifulsoup4 )
#Instale o webdriver manager ( pip install webdriver_manager )
#Instale o conector de MySQL x Python ( pip install mysql-connector-python ) 

#imports
from bs4 import BeautifulSoup
from selenium import webdriver
from webdriver_manager.chrome import ChromeDriverManager
from selenium.webdriver.chrome.service import Service
from selenium.webdriver.common.by import By
import mysql.connector
import time

#Fazendo a conexão com o banco de dados
conexao = mysql.connector.connect(
    host='localhost',
    user='root',
    password='',
    database='academium-bd',
)
cursor = conexao.cursor()


#Intalando o ChromeDriver
servico = Service(ChromeDriverManager().install())
driver = webdriver.Chrome(service=servico)

#URL da Alura
url = "https://www.alura.com.br/planos-cursos-online"
driver.get(url)
time.sleep(1)

#Pegando o preço dos cursos
div_mae = driver.find_element(By.XPATH, "//*[@id='planos-cursos-online'  ]/div[1]")
html_content = div_mae.get_attribute("outerHTML")
soup = BeautifulSoup(html_content, 'html.parser')
preco_assinatura = soup.find_all("span", class_="planos-pagamento__valor-parcela")


#Abrindo a página dos cursos disponíveis
url = "https://www.alura.com.br/cursos-online-devops"
driver.get(url)
# time.sleep(1)


#Pegando as informações dos cursos disponíveis
div_mae = driver.find_element(By.XPATH, '/html/body/main/div[1]/div/section[1]/div[2]/div')
html_content = div_mae.get_attribute("outerHTML")
soup = BeautifulSoup(html_content, 'html.parser')
link_curso = soup.find_all("a", class_="card-curso")
nomes_cursos = soup.find_all("span", class_="card-curso__nome")
horas_cursos = soup.find_all("span", class_="card-curso__carga")

#Definindo váriaveis e listas
preco_cursos = ""
links_cursos = [""]*len(link_curso)
avaliacao_cursos = [""]*len(links_cursos)
topico_cursos = [""]*len(links_cursos)
instrutor_curso = [""]*len(links_cursos)

#Formando a lista com as strings de URL dos cursos / Formando a lista com as cargas horárias dos cursos
for x in range(0, len(link_curso), 1):
    links_cursos[x] = "https://www.alura.com.br{}".format(link_curso[x].get("href"))
    horas_cursos[x] = horas_cursos[x].getText()
    horas_cursos[x] = horas_cursos[x].lstrip()
    horas_cursos[x] = horas_cursos[x].rstrip()

#Abrindo cada guia dos cursos para pegar as notas dos cursosv
for x in range(0, len(links_cursos), 1):
    #Abrindo a guia dos cursos
    url = links_cursos[x]
    # print(x, url)
    driver.get(url)
    time.sleep(0.5)
    
    #Pegando as informações dos cursos (avaliação, tópico do curso, nome do instrutor)
    try:
        div_mae = driver.find_element(By.XPATH, '/html/body/div[2]/div[1]/div/div[2]')
        html_content = div_mae.get_attribute("outerHTML")
        soup = BeautifulSoup(html_content, 'html.parser')
    except:
        print("ERROR / MotherDivNotFound")
    
    #Pega a avaliação do curso  
    try:
        avaliacao = soup.find_all("p", class_="courseInfo-card-wrapper-infos")
        avaliacao_cursos[x] = avaliacao[4].getText()
        
    except:
        print("ERROR / CourseGradeNotFound")
        avaliacao_cursos[x] = ""
        
    #Coleta o tópico do curso
    try:
        topico = soup.find("span", class_="lista-guides__nome")
        topico_cursos[x] = topico.getText()
    except:
        print("ERROR / SubjectNotFound")
        topico_cursos[x] = ""
        
    #Adquire o nome do instrutor
    try:
        instrutor = soup.find("h3", class_="instrutores-item-nome")
        instrutor_curso[x] = instrutor.getText()
        instrutor_curso[x] = instrutor_curso[x].strip()
    except:
        print("ERROR / InstructorNotFound")
        instrutor_curso[x] = ""
    
    #Mudando todas as váriaveis com as tipagens corretas 1/2
    nomes_cursos[x] = nomes_cursos[x].getText()
    horas_cursos[x] = horas_cursos[x].replace("h", "")
    preco_cursos = preco_assinatura[0].getText()
    preco_cursos = preco_cursos.replace("R", "")
    preco_cursos = preco_cursos.replace("$", "")
    
    #Mostra as informações coletadas do curso
    print(f"\nCurso n° {x}")
    print(f"Nome do curso: {nomes_cursos[x]}:")
    print(f"Carga horária: {horas_cursos[x]}h")
    print(f"Preço: R${preco_cursos}")
    print(f"Link de acesso: {links_cursos[x]}")
    print(f"Avaliação desse curso é nota: {avaliacao_cursos[x]}")
    print(f"O tópico do curso é: {topico_cursos[x]}")
    print(f"O nome do professor(a) do curso é: {instrutor_curso[x]}")
    


#Mudando todas as váriaveis com as tipagens corretas 2/2
for x in range(len(avaliacao_cursos)):
    int(horas_cursos[x])
    float(avaliacao_cursos[x])

#Tranformando o preço em int
int(preco_cursos)
    
for x in range(len(avaliacao_cursos)):
    comando = f'INSERT INTO alura_cursos (curso_nome, carga_horaria, preco_curso, link_curso, avaliacao_curso, topico_curso, instrutor) VALUES ({nomes_cursos[x]}, {horas_cursos[x]}, {preco_cursos}, {links_cursos[x]}, {links_cursos[x]}, {avaliacao_cursos[x]}, {topico_cursos[x]}, {instrutor_curso[x]})'
    cursor.execute(comando)  
    conexao.commit()
    print("Integração feita")
    

#Mostrando qual o curso com a melhor avaliação
print("|-------------------Summary-------------------|\n")
maximun = max(avaliacao_cursos)
maximun_loc = avaliacao_cursos.index(maximun)

print(f"\nCurso n° {maximun_loc}")
print(f"Nome do curso: {nomes_cursos[maximun_loc].getText()}:")
print(f"Carga horária: {horas_cursos[maximun_loc]}")
print(f"Preço:{preco_cursos}")
print(f"Link de acesso: {links_cursos[maximun_loc]}")
print(f"Avaliação desse curso é nota: {avaliacao_cursos[maximun_loc]}")
print(f"O tópico do curso é: {topico_cursos[maximun_loc]}")
print(f"O nome do professor(a) do curso é: {instrutor_curso[maximun_loc]}")
print("\n|-------------------Summary-------------------|")

#Fechando a conexão com o banco
cursor.close()
>>>>>>> 58d38de5ac4b2e6123c3433c97955a9d921303ec
conexao.close()