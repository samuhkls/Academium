-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Out-2022 às 20:52
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `academium-bd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alura_cursos`
--

CREATE TABLE `alura_cursos` (
  `id_curso` int(11) NOT NULL,
  `curso_nome` char(255) DEFAULT NULL,
  `carga_horaria` int(11) DEFAULT NULL,
  `preco_curso` double DEFAULT NULL,
  `link_curso` char(255) DEFAULT NULL,
  `avaliacao_curso` double DEFAULT NULL,
  `topico_curso` char(100) DEFAULT NULL,
  `instrutor` char(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `alura_cursos`
--

INSERT INTO `alura_cursos` (`id_curso`, `curso_nome`, `carga_horaria`, `preco_curso`, `link_curso`, `avaliacao_curso`, `topico_curso`, `instrutor`) VALUES
(5, 'Curso React Native: criando um app', 10, 85, 'https://www.alura.com.br/curso-online-react-native-comecando-zero', 9.2, 'React Native', 'Natalia Kelim Thiel'),
(6, 'Curso React Native com Expo: navegação com menu e suporte às telas', 8, 85, 'https://www.alura.com.br/curso-online-react-native-expo-navegacao-menu-suporte-telas', 9, 'React Native', 'Natalia Kelim Thiel'),
(7, 'Curso React Native: utilizando e criando Hooks', 10, 85, 'https://www.alura.com.br/curso-online-react-native-utilizando-criando-hooks', 9.4, 'React Native', 'Natalia Kelim Thiel'),
(8, 'Curso React Native: criando menu e navegando entre telas', 10, 85, 'https://www.alura.com.br/curso-online-react-native-criando-menu-navegando-telas', 9.2, 'React Native', 'Natalia Kelim Thiel'),
(9, 'Curso React Native: utilizando Web API', 8, 85, 'https://www.alura.com.br/curso-online-react-native-utilizando-web-api', 9.3, 'React Native', 'André Cunha'),
(10, 'Curso React Native: guardando informações localmente', 8, 85, 'https://www.alura.com.br/curso-online-react-native-informacoes-localmente', 9.1, 'React Native', 'Matheus Alberto'),
(11, 'Curso React Native: criando testes para sua aplicação', 10, 85, 'https://www.alura.com.br/curso-online-react-native-criando-testes-aplicacao', 9.2, 'React Native', 'Natalia Kelim Thiel'),
(12, 'Curso React Native: utilizando o Context API nas suas aplicações', 8, 85, 'https://www.alura.com.br/curso-online-react-native-context-api-aplicacoes', 9.4, 'React Native', 'André Cunha'),
(13, 'Curso React Native: personalize apps com animações', 8, 85, 'https://www.alura.com.br/curso-online-react-native-personalize-apps-animacoes', 9.4, 'React Native', 'André Cunha'),
(14, 'Curso React Native: Firebase Authentication', 8, 85, 'https://www.alura.com.br/curso-online-react-native-firebase-authentication', 8.8, 'React Native', 'André Cunha'),
(15, 'Curso Persistência com Flutter: crie um app com armazenamento interno', 8, 85, 'https://www.alura.com.br/curso-online-flutter-persistencia-interna', 9.2, 'Flutter', 'Alex Felipe Victor Vieira'),
(16, 'Curso Testes de unidade e Widget com Mocks: boas práticas no Flutter', 10, 85, 'https://www.alura.com.br/curso-online-testes-widgets-flutter', 9.1, 'Flutter', 'Alex Felipe Victor Vieira'),
(17, 'Curso Flutter: criando um app', 15, 85, 'https://www.alura.com.br/curso-online-flutter-crie-primeiro-app', 9.2, 'Flutter', 'Alex Felipe Victor Vieira'),
(18, 'Curso Flutter Nuvigator: controle de rotas e navegação', 10, 85, 'https://www.alura.com.br/curso-online-flutter-nuvigator-controle-rotas-navegacao', 9.1, 'Flutter', 'Leonardo Marinho'),
(19, 'Curso Flutter com Web API: integrando sua app mobile', 8, 85, 'https://www.alura.com.br/curso-online-flutter-web-api', 9.2, 'Flutter', 'Alex Felipe Victor Vieira'),
(20, 'Curso Flutter: entendendo comunicação HTTP e utilizando Web API', 10, 85, 'https://www.alura.com.br/curso-online-flutter-comunicacao-http', 9.2, 'Flutter', 'Alex Felipe Victor Vieira'),
(21, 'Curso Flutter: gerenciamento de estados com Provider', 8, 85, 'https://www.alura.com.br/curso-online-flutter-gerenciamento-estados-provider', 9, 'Flutter', 'Juliana Negreiros'),
(22, 'Curso Flutter: Streams de programação reativa com BLoC', 8, 85, 'https://www.alura.com.br/curso-online-flutter-bloc', 8.7, 'Flutter', 'Guilherme Silveira'),
(23, 'Curso Flutter: crie e valide formulários para aumentar conversões', 12, 85, 'https://www.alura.com.br/curso-online-flutter-criacao-validacao-formularios-aumentar-conversoes', 9.3, 'Flutter', 'Leonardo Marinho'),
(24, 'Curso Flutter: Firebase Crashlytics, gere relatórios de erro em tempo real', 10, 85, 'https://www.alura.com.br/curso-online-flutter-firebase-crashlytics-relatorios-tempo-real', 9.2, 'Flutter', 'Leonardo Marinho'),
(25, 'Curso Flutter i18n: entenda abordagens de internacionalização', 8, 85, 'https://www.alura.com.br/curso-online-flutter-i18n-internacionalizacao', 8.8, 'Flutter', 'Guilherme Silveira'),
(26, 'Curso Flutter: Push Notifications com Firebase Cloud Messaging', 10, 85, 'https://www.alura.com.br/curso-online-flutter-push-notifications-firebase-cloud-messaging', 9.2, 'Flutter', 'Leonardo Marinho'),
(27, 'Curso Flutter: Widgets, Stateless, Stateful, Imagens e Animações', 16, 85, 'https://www.alura.com.br/curso-online-flutter-widgets-stateless-stateful-imagens-animacoes', 9.6, 'Flutter', 'Kako (Caio Couto Moreira)'),
(28, 'Curso Flutter: Controller, navegação e estados', 10, 85, 'https://www.alura.com.br/curso-online-flutter-controller-navegacao-estados', 9.4, 'Flutter', 'Kako (Caio Couto Moreira)'),
(29, 'Curso Flutter: aplicando persistência de dados', 10, 85, 'https://www.alura.com.br/curso-online-flutter-aplicando-persistencia-dados', 9.3, 'Flutter', 'Kako (Caio Couto Moreira)'),
(30, 'Curso Flutter com WebAPI: integrando sua aplicação', 10, 85, 'https://www.alura.com.br/curso-online-flutter-web-api-integrando-aplicacao', 9.4, 'Flutter', 'Ricarth Lima'),
(31, 'Curso Flutter com Web API: evoluindo na integração da aplicação', 12, 85, 'https://www.alura.com.br/curso-online-flutter-web-api-integracao-aplicacao', 8.6, 'Flutter', 'Ricarth Lima'),
(32, 'Curso Flutter: aplicando testes de unidade, de Widget e Mocks', 8, 85, 'https://www.alura.com.br/curso-online-flutter-testes-unidade-widget-mocks', 9, 'Flutter', 'Kako (Caio Couto Moreira)'),
(33, 'Curso Flutter: estilizando e reproduzindo layouts', 10, 85, 'https://www.alura.com.br/curso-online-flutter-estilizando-reproduzindo-layouts', 8.9, 'Flutter', 'Matheus Alberto'),
(34, 'Curso Dart: criando e manipulando variáveis e listas', 10, 85, 'https://www.alura.com.br/curso-online-dart-variaveis-listas', 9.4, 'Flutter', 'Kako (Caio Couto Moreira)'),
(35, 'Curso Dart: entendendo a Orientação a Objetos', 12, 85, 'https://www.alura.com.br/curso-online-dart-entendendo-orientacao-objetos', 9.4, 'Flutter', 'Ricarth Lima'),
(36, 'Curso Dart: lidando com Exceptions e Null Safety', 12, 85, 'https://www.alura.com.br/curso-online-dart-lidando-exceptions-null-safety', 9.3, 'Flutter', 'Ricarth Lima'),
(37, 'Curso Dart: sintaxe, coleções e dinamismo', 8, 85, 'https://www.alura.com.br/curso-online-dart-sintaxe-colecoes-dinamismo', 9.2, 'Flutter', 'Ricarth Lima'),
(38, 'Curso Android parte 1: crie um app mobile', 10, 85, 'https://www.alura.com.br/curso-online-android-sua-primeira-app-mobile', 9.2, 'Android', 'Alex Felipe Victor Vieira'),
(39, 'Curso Android parte 2: avançando com listeners, menu e UI', 10, 85, 'https://www.alura.com.br/curso-online-android-avancando-listeners-menu-ui', 9.3, 'Android', 'Alex Felipe Victor Vieira'),
(40, 'Curso Android parte 3: refinando o projeto', 10, 85, 'https://www.alura.com.br/curso-online-android-refinando-o-projeto', 9.3, 'Android', 'Alex Felipe Victor Vieira'),
(41, 'Curso Android com Kotlin: personalize o seu app', 14, 85, 'https://www.alura.com.br/curso-online-android-kotlin-personalize-app', 9.5, 'Android', 'Alex Felipe Victor Vieira'),
(42, 'Curso Android com Kotlin: criando um app', 16, 85, 'https://www.alura.com.br/curso-online-fundamentos-android-kotlin', 9.5, 'Android', 'Alex Felipe Victor Vieira'),
(43, 'Curso Android com Kotlin: persistência de dados com o Room', 10, 85, 'https://www.alura.com.br/curso-online-android-kotlin-persistencia-dados-room', 9.3, 'Android', 'Alex Felipe Victor Vieira'),
(44, 'Curso Android com Kotlin: Migrations e relacionamento com o Room', 10, 85, 'https://www.alura.com.br/curso-online-android-kotlin-migrations-relacionamento-room', 9.4, 'Android', 'Alex Felipe Victor Vieira'),
(45, 'Curso Android com Kotlin: comunicação com Web API', 12, 85, 'https://www.alura.com.br/curso-online-android-kotlin-comunicacao-web-api', 9.3, 'Android', 'Alex Felipe Victor Vieira'),
(46, 'Curso Android com Kotlin: testes de unidade e Mocks', 8, 85, 'https://www.alura.com.br/curso-online-android-kotlin-testes-unidade-mocks', 9, 'Android', 'Felipe Moreno Borges'),
(47, 'Curso Android com Kotlin: testes instrumentados', 6, 85, 'https://www.alura.com.br/curso-online-android-kotlin-testes-instrumentados', 9.1, 'Android', 'Felipe Moreno Borges'),
(48, 'Curso Android Brasil: implemente validações e formatações em formulários', 10, 85, 'https://www.alura.com.br/curso-online-android-validacoes-formatacoes', 9.3, 'Android', 'Alex Felipe Victor Vieira'),
(49, 'Curso Android Room parte 1: entendendo e aplicando a persistência de dados com ORM', 10, 85, 'https://www.alura.com.br/curso-online-android-room', 9.4, 'Android', 'Alex Felipe Victor Vieira'),
(50, 'Curso Android Room parte 2: implementando operações assíncronas', 10, 85, 'https://www.alura.com.br/curso-online-android-room-operacoes-assincronas', 9.1, 'Android', 'Alex Felipe Victor Vieira'),
(51, 'Curso Android parte 1: testes automatizados e TDD', 8, 85, 'https://www.alura.com.br/curso-online-android-testes-automatizados-tdd', 9.2, 'Android', 'Alex Felipe Victor Vieira'),
(52, 'Curso Android parte 2: boas práticas e novos cenários de testes', 6, 85, 'https://www.alura.com.br/curso-online-android-boas-praticas-e-cenarios-testes', 9.2, 'Android', 'Alex Felipe Victor Vieira'),
(53, 'Curso Testes no Android: Mocks e integrações', 12, 85, 'https://www.alura.com.br/curso-online-testes-android-mockito-e-integracoes', 9, 'Android', 'Alex Felipe Victor Vieira'),
(54, 'Curso Android com Espresso parte 1: teste da interface do usuário', 12, 85, 'https://www.alura.com.br/curso-online-android-espresso-teste-interface', 9.2, 'Android', 'Alex Felipe Victor Vieira'),
(55, 'Curso Android com Espresso parte 2: testes de fluxos complexos', 12, 85, 'https://www.alura.com.br/curso-online-android-espresso-testes-complexos', 9.2, 'Android', 'Alex Felipe Victor Vieira'),
(56, 'Curso Layouts Android parte 1: criando telas com Constraint Layouts', 15, 85, 'https://www.alura.com.br/curso-online-layout-android-1', 9.3, 'Android', 'Alex Felipe Victor Vieira'),
(57, 'Curso Layouts Android parte 2: boas práticas para criação de telas', 17, 85, 'https://www.alura.com.br/curso-online-layout-android-2', 9.3, 'Android', 'Alex Felipe Victor Vieira'),
(58, 'Curso Navigation parte 1: transição de telas no Android', 6, 85, 'https://www.alura.com.br/curso-online-android-navigation', 9.4, 'Android', 'Alex Felipe Victor Vieira'),
(59, 'Curso Navigation parte 2: novas features e reutilização de código', 12, 85, 'https://www.alura.com.br/curso-online-android-navigation-features', 9.4, 'Android', 'Alex Felipe Victor Vieira'),
(60, 'Curso Android: acessando uma API Web', 10, 85, 'https://www.alura.com.br/curso-online-android-api-web', 9.2, 'Android', 'Alex Felipe Victor Vieira'),
(61, 'Curso Recycler View parte 1: listas flexíveis e performáticas', 8, 85, 'https://www.alura.com.br/curso-online-recyclerview-listas-flexiveis-e-performaticas', 9.3, 'Android', 'Alex Felipe Victor Vieira'),
(62, 'Curso Recycler View parte 2: Listeners, animações e boas práticas', 8, 85, 'https://www.alura.com.br/curso-online-recyclerview-listeners-animacoes', 9.4, 'Android', 'Alex Felipe Victor Vieira'),
(63, 'Curso Android Fragments: reutilizando componentes visuais', 8, 85, 'https://www.alura.com.br/curso-online-android-fragments', 9.2, 'Android', 'Alex Felipe Victor Vieira'),
(64, 'Curso Architecture Components: ViewModel, LiveData e Room', 20, 85, 'https://www.alura.com.br/curso-online-android-archtecture-components', 9.3, 'Android', 'Alex Felipe Victor Vieira'),
(65, 'Curso Data Binding no Android: vinculando modelo com layout', 10, 85, 'https://www.alura.com.br/curso-online-android-data-binding', 9.1, 'Android', 'Alex Felipe Victor Vieira'),
(66, 'Curso Firebase Authentication: integração com apps Android', 10, 85, 'https://www.alura.com.br/curso-online-firebase-authentication-apps-android', 9.3, 'Android', 'Alex Felipe Victor Vieira'),
(67, 'Curso Firebase com Android: salve os dados NoSQL no Firestore', 8, 85, 'https://www.alura.com.br/curso-online-firebase-android-nosql-firestore', 9.4, 'Android', 'Alex Felipe Victor Vieira'),
(68, 'Curso Firebase com Android: Push Notification no Cloud Messaging', 8, 85, 'https://www.alura.com.br/curso-online-firebase-android-push-notification-cloud-messaging', 9.4, 'Android', 'Alex Felipe Victor Vieira'),
(69, 'Curso Firebase com Android: armazene imagens com o Cloud Storage', 10, 85, 'https://www.alura.com.br/curso-online-firebase-android-cloud-storage', 9.4, 'Android', 'Alex Felipe Victor Vieira'),
(70, 'Curso Appium: compreenda e aplique testes de interface', 10, 85, 'https://www.alura.com.br/curso-online-appium-compreenda-aplique-testes-interface', 9.2, 'Android', 'Ricardo Bugan Debs'),
(71, 'Curso Jetpack Compose: criando um app android', 12, 85, 'https://www.alura.com.br/curso-online-jetpack-compose-app-android', 9.3, 'Android', 'Alex Felipe Victor Vieira'),
(72, 'Curso Jetpack Compose: utilizando Lazy Layout e estados', 10, 85, 'https://www.alura.com.br/curso-online-jetpack-compose-lazy-layout-estados', 9.2, 'Android', 'Alex Felipe Victor Vieira'),
(73, 'Curso Swift parte 1: desenvolvendo para iOS no Xcode', 7, 85, 'https://www.alura.com.br/curso-online-swift-desenvolvimento-ios', 9.2, 'iOS', 'Ândriu Felipe Coelho'),
(74, 'Curso Swift parte 2: UIKit, Storyboard e o padrão Delegate', 8, 85, 'https://www.alura.com.br/curso-online-swift-uikit-storyboard', 9.1, 'iOS', 'Ândriu Felipe Coelho'),
(75, 'Curso Swift parte 3: Gestures, DAO e o Optional Chaining', 6, 85, 'https://www.alura.com.br/curso-online-swift-gestures-dao-optional-chaining', 9.2, 'iOS', 'Ândriu Felipe Coelho'),
(76, 'Curso iOS: usando recursos nativos', 10, 85, 'https://www.alura.com.br/curso-online-ios-usando-recursos-nativos', 9, 'iOS', 'Ândriu Felipe Coelho'),
(77, 'Curso IOS: autenticação, GPS e mais recursos nativos', 8, 85, 'https://www.alura.com.br/curso-online-ios-autenticacao-gps-recursos-nativos', 9, 'iOS', 'Ândriu Felipe Coelho'),
(78, 'Curso iOS e HTTP: Web Services e sincronização offline', 8, 85, 'https://www.alura.com.br/curso-online-ios-web-services-sincronizacao-offline', 9.1, 'iOS', 'Ândriu Felipe Coelho'),
(79, 'Curso Objective-C: programando para iPhone e iPad', 12, 85, 'https://www.alura.com.br/curso-online-objective-c', 8.7, 'iOS', 'Joviane Fernandes Jardim'),
(80, 'Curso iOS: testes de unidade e TDD', 8, 85, 'https://www.alura.com.br/curso-online-ios-testes-unidade-tdd', 9, 'iOS', 'Ândriu Felipe Coelho'),
(81, 'Curso iOS: auto layout com Constraints', 12, 85, 'https://www.alura.com.br/curso-online-ios-auto-layout-constraints', 9.3, 'iOS', 'Ândriu Felipe Coelho'),
(82, 'Curso iOS layout: mais recursos para criar telas responsivas', 10, 85, 'https://www.alura.com.br/curso-online-ios-layout-parte-2-recursos-telas-responsivas', 9, 'iOS', 'Ândriu Felipe Coelho'),
(83, 'Curso iOS: layouts com SwiftUI', 10, 85, 'https://www.alura.com.br/curso-online-swift-ui', 9.1, 'iOS', 'Ândriu Felipe Coelho'),
(84, 'Curso iOS SwiftUI: ScrollView, Navigation Bar e componentes', 10, 85, 'https://www.alura.com.br/curso-online-ios-swiftui-scrollview-navigation-bar-componentes', 9.1, 'iOS', 'Ândriu Felipe Coelho'),
(85, 'Curso Unity Mobile parte 1: jogos para celular com persistência de dados', 10, 85, 'https://www.alura.com.br/curso-online-trabalhando-unity-mobile', 9.1, 'Jogos', 'Ricardo Bugan Debs'),
(86, 'Curso Unity Mobile parte 2: interface responsiva e desempenho', 8, 85, 'https://www.alura.com.br/curso-online-unity-mobile-interface-responsiva-desempenho', 9.2, 'Jogos', 'Ricardo Bugan Debs'),
(87, 'Curso Unity Mobile parte 3: aprofundando em jogos Mobile', 10, 85, 'https://www.alura.com.br/curso-online-unity-mobile-aprofundando-jogos', 9.3, 'Jogos', 'Ricardo Bugan Debs');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `alura_cursos`
--
ALTER TABLE `alura_cursos`
  ADD PRIMARY KEY (`id_curso`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alura_cursos`
--
ALTER TABLE `alura_cursos`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
