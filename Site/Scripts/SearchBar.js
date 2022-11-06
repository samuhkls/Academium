// const searchInput = document.querySelector("[data-search]")

// let users = document.getElementById("curso_nome").value
// console.log(users);

// searchInput.addEventListener("input", e => {
//  const value = e.target.value
//  console.log(value);
// })

const search = () =>{
    const searchbox = document.getElementById("InputAreaCourses").value.toUpperCase();
    const resultcursos = document.getElementById("resultados_cursos")
    const rescurso = document.querySelectorAll("#div_curso")
    const curname = document.getElementsByClassName("curso_nome")

    
    for (var i=0; i < curname.length; i++){
        let match = rescurso[i].getElementsByClassName("curso_nome")[0];

        if(match){
            let textvalue = match.textContent || match.innerHTML

            if(textvalue.toUpperCase().indexOf(searchbox) > -1){
                rescurso[i].style.display = "";
            }else{
                rescurso[i].style.display = "none";
            }
        }
    }
}