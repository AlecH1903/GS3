<?php
include_once("code/loginC.php");






?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
     <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='200' height='200' viewBox='0 0 200 200'><rect width='200'
   height='200' fill='black'/><text x='50%' y='50%' font-family='Roboto' font-size='100' fill='white' text-anchor='middle' dominant-baseline='middle'>V</text></svg>">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Model 3</title>
  <link rel="stylesheet" href="m3/model3.css" />
  <link rel="stylesheet" href="css/carrossel.css">
</head>

<header>
   
   <nav class="nav-elegante">
 <div class="nav-container">
   <a href="verdavolt.php" class="nav-logo">VerdaV</a>
   <ul class="nav-links">  
     <li><a href="#sobrenos">Sobre Nós</a></li>
     <li><a href="#carros">Carros</a></li>
     <li><a href="#variedades">Variedades</a></li> 
    
      <li class="dropdown">
        <?php 
        if(isset($_SESSION['nome'])){ ?>
           <a><?php echo $_SESSION['nome'];?></a>
        <ul class="submenu">
     <li><a href="code/logout.php">Sair<span ></span></a></li>
       <?php } else{ ?>
        <a href="#">Login/Cadastro <span class="seta">&#9660;</span></a>
 <ul class="submenu">
   <li><a href="login.php">Login</a></li>
   <li><a href="cadastro.php">Cadastro</a></li>
 </ul>
</li>
      <?php } ?>
       
 
   </ul>
   
 </div>
</nav>

</header>


<body>
  <div class="main-layout">
    <div class="background-section">
    <section class="section" id="carga">
  <div class="section-contentcarga">

        
    <div id="carros" class="carousel-container">
    
    

      <div class="carousel-track" id="carouselTrack">
     <button class="nav-button prev">&#10094;</button>
          <div class="carousel-slide">
            <img src="m3/vendam3.jpg" alt="">
            
          </div>

          <div class="carousel-slide">
            <img src="m3/m3lado.png" alt="">
          
          </div>

          <div class="carousel-slide">
            <img src="m3/m3tras.png" alt="">
          
          </div>

          <div class="carousel-slide">
            <img src="m3/roda.png" alt="">
          
          </div>
          
          <div class="carousel-slide">
            <img src="m3/m3dentro.png" alt="">
          
          </div>
       
      </div><button class="nav-button next">&#10095;</button>
    </div>
         
  </div>

 

  </section>
    </div>
    <div class="info-section">
    <p style="overflow: scroll;">Em linguística, a noção de texto é ampla e ainda aberta a uma definição mais precisa. Grosso modo, pode ser entendido como manifestação linguística das ideias de um autor, que serão interpretadas pelo leitor de acordo com seus conhecimentos linguísticos e culturais. Seu tamanho é variável.
Definições

Existem várias definições de texto, cada uma destacando diferentes aspectos de sua natureza e função:

    "Conjunto de palavras e frases articuladas, escritas sobre qualquer suporte";[1]

    "Obra escrita considerada na sua redação original e autêntica (por oposição a sumário, tradução, notas, comentários, etc.)";[2]

    "Um texto é uma ocorrência linguística, escrita ou falada de qualquer extensão, dotada de unidade sociocomunicativa, semântica e formal. É uma unidade de linguagem em uso".[3]

Estudo do Texto

O interesse pelo texto como objeto de estudo gerou vários trabalhos importantes de teóricos da Linguística Textual, que percorreram fases diversas cujas características principais eram transpor os limites da frase descontextualizada da gramática tradicional e ainda incluir os relevantes papéis do autor e do leitor na construção de textos.

Um texto pode ser escrito ou oral e, em sentido lato, pode ser também não verbal.

Texto crítico é uma produção textual que parte de um processo reflexivo e analítico gerando um conteúdo com crítica construtiva e bem fundamentada.

Em artes gráficas, o texto é a parte verbal, linguística, por oposição às ilustrações.
Estrutura do Texto

Todo texto tem que ter alguns aspectos formais, ou seja, tem que ter estrutura, elementos que estabelecem relação entre si. Dentro dos aspectos formais temos a coesão e a coerência, que dão sentido e forma ao texto. "A coesão textual é a relação, a ligação, a conexão entre as palavras, expressões ou frases do texto".[4] A coerência está relacionada com a compreensão, a interpretação do que se diz ou escreve. Um texto precisa ter sentido, isto é, precisa ter coerência. Embora a coesão não seja condição suficiente para que enunciados se constituam em textos, são os elementos coesivos que lhes dão maior legibilidade e evidenciam as relações entre seus diversos componentes, a coerência depende da coesão.
Textos literários e não literários
Texto

Os textos literários são aqueles que, em geral, têm o objetivo de emocionar o leitor, e para isso exploram a linguagem conotativa ou poética. Em geral, ocorre o predomínio da função emotiva e poética.

Exemplos de textos literários: poemas, romances, contos, novelas.

Os textos não literários pretendem informar o leitor de forma direta e objetiva, a partir de uma linguagem denotativa. A função referencial predomina-se nos textos não-literários.

Exemplos de textos não-literários: notícias e reportagens jornalísticas, textos de livros didáticos de História, Geografia, Ciências, textos científicos em geral, receitas culinárias, bulas de remédio.
Referências

Camargo, Ana Maria de Almeida; Heloísa Liberalli Bellotto (orgs.) (1996). Dicionário de terminologia arquivística. São Paulo: Associação dos Arquivistas Brasileiros – Núcleo de São Paulo / Secretaria de Estado da Cultura – Departamento de Museus e Arquivos. p. 74
Ferreira, Aurélio Buarque de Holanda (1999). Dicionário Aurélio eletrônico – Século XXI Versão 3.0 ed. São Paulo: Lexikon
Costa Val, M. da Graça (1991). Redação e textualidade. São Paulo: Martins Fontes

    Platão, Francisco; José Luiz Fiorin (1996). Para entender o texto: leitura e redação 3ª ed. São Paulo: Ática

Bibliografia

    Koch, Ingedore Grunfeld Villaça; Luis Carlos Travaglia (2002). Texto e coerência 8ª ed. São Paulo: Cortez

Ícone de esboço 	Este artigo sobre linguística ou um linguista é um esboço. Você pode ajudar a Wikipédia expandindo-o.
Categorias:

    Linguística textualLinguísticaLinguística aplicada

</p>
  </div>
    <script src="https://unpkg.com/lenis@1.3.3/dist/lenis.min.js"></script> 
     <script src="js/carrossel.js"></script>
     <script src="js/lenis.js"></script>
   
  

</body>
</html>
