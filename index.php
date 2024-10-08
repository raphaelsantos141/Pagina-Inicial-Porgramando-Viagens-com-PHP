<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="home.css">
  <script src="home.js" defer></script>
  <title>Programando Viagens</title>
  <link rel="icon" type="image/x-icon" href="imagens/favicon.ico">
  <!-- Fontawesome Link para Icones galeria-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>

<body>
  <header>
    <nav>
      <a class="logo" href="index.php"><strong>Programando<br>Viagens</strong></a>
      <div class="mobile-menu">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>

      <ul class="nav-list">
        <li class="ativo"><a href="index.php">HOME</a></li>
        <li class=""><a href="#">ÁFRICA</a></li>
        <li class=""><a href="#">AMERICA</a></li>
        <li class=""><a href="#">ÁSIA</a></li>
        <li class=""><a href="#">EUROPA</a></li>
        <li class=""><a href="#">OCEANIA</a></li>
        <!-- <li><a href="form.php"><i class="bi bi-person-circle">Cadastre-se</i></a></li> -->
        <li><a href="login.php"><i class="bi bi-box-arrow-in-left">Entrar</i></a></li>
      </ul> 
    </nav>
  </header>



  <div class="container1">
    <div class="Galeria1 fade">
    </div>

    <div class="Galeria1 fade">
    </div>

    <div class="Galeria1 fade">
    </div>
  </div>

  <section class="containerproje">
    <div class="slide-container active">
      <div class="slide">
        <div class="contentproje">
          <h3>Playa Delfines</h3>
          <p>A Playa Delfines é também conhecida como "El Mirador" devido à bela visão que se tem do lugar. É, sem
            dúvidas, a praia pública mais bonita de Cancún.</p>
          <a href="america.php" class="bntproj">Saiba mais</a>
        </div>
      </div>
    </div>

    <div class="slide-container">
      <div class="slide">
        <div class="contentproje">
          <h3>Coliseu</h3>
          <p>Construído no século I d.C., este anfiteatro romano era palco de espetáculos públicos, como gladiadores em
            combate e competições atléticas.</p>
          <a href="europa.php" class="bntproj">Saiba mais</a>
        </div>
      </div>
    </div>

    <div class="slide-container">
      <div class="slide">
        <div class="contentproje">
          <h3>Monte Fuji</h3>
          <p>Descubra os milagres naturais japoneses do Monte.</p>
          <a href="asia.php" class="bntproj">Saiba mais</a>
        </div>
      </div>
    </div>

    <div id="prev" onclick="prev()"> < </div>
    <div id="next" onclick="next()"> > </div>
  </section>

  <div class="texto">
    <h1>Programando Viagens</h1>
    <p><strong>Ei, está pensando em fazer uma viagem e não sabe para onde ir ou por onde começar?</strong>
      O Programando Viagens é perfeito para você! Este site te dará sugestões de países incríveis para conhecer.
      Colocamos aqui um compilado de pontos turísticos espalhados por todos os continentes com curiosidades históricas e
      culturais de cada um.
      <br>Então aproveite aí nossas dicas de viagens, conheça uma breve parte de todos estes pontos que você terá à sua
      disposição e escolha aquele que mais tem a sua cara. Esperamos que você goste de todo o conteúdo que preparamos, sendo
      de grande utilidade para lhe ajudar em seu destino!
      <br><strong>Programando viagens:
        Essencial para quem deseja tornar suas viagens memoráveis!</strong>
    </p>
  </div>
  <br>
  <br>
  <br>

  <div class="imagens_carrosel">
    <i id="left" class="fa-solid fa-angle-left"></i>
    <ul class="carrosel">
      <li class="card">
        <div class="img"><img src="imagens/Castelo de Osaka.jpg" alt="A imagem mostra um castelo japonês com um telhado verde e detalhes em ouro. O castelo tem vários níveis e está cercado por árvores. O céu é azul e há algumas nuvens ao fundo. O castelo parece estar em boas condições e é bem conservado.">
        </div>
        <h2>Castelo de Osaka</h2>
        <span>Ásia</span>
      </li>
      <li class="card">
        <div class="img"><img src="imagens/Arco do Cabo San Lucas.jpg" alt="Em primeiro plano o mar, logo depois a areia e ais para o fundo o Acro do Cabo San Lucas."></div>
        <h2>Arco do Cabo San Lucas</h2>
        <span>América</span>
      </li>
      <li class="card">
        <div class="img"><img src="imagens/Pão de Açucar.jpg" alt="Foto tirada debaixo, pegando o topo do Pão de Açucar, com árvores na parte debaixo e um bode já no trajeto, pendurado pelos cabos fazendo a travessia.">
        </div>
        <h2>Pão de Açucar</h2>
        <span>América</span>
      </li>
      <li class="card">
        <div class="img"><img src="imagens/Vaticano.jpg" alt="Do alto, a vista é espetacular. A praça, em forma de elipse, se estende majestosamente, revelando sua imponência e simetria perfeita. No coração da praça, o obelisco central ergue-se alto, destacando-se como um ponto focal entre as colunatas que se estendem em um semicírculo ao redor.">
        </div>
        <h2>Vaticano</h2>
        <span>Europa</span>
      </li>
      <li class="card">
        <div class="img"><img src="imagens/Tokyo Skytree.jpg" alt="A imagem mostra um deck de observação curvo com pessoas andando e tirando fotos. O deck é feito de metal branco e painéis de vidro. O deck tem um teto curvo com luzes circulares. O deck tem um corrimão de metal na borda externa. As pessoas estão vestidas com roupas casuais e estão tirando fotos com seus telefones e câmeras.">
        </div>
        <h2>Tokyoskytree</h2>
        <span>Ásia</span>
      </li>
      <li class="card">
        <div class="img"><img src="imagens/Museu do Louvre.jpg" alt="Nesta cena clássica e movimentada, a famosa Mona Lisa é o ponto focal enquanto visitantes do Museu do Louvre circulam ao redor da obra-prima. ">
        </div>
        <h2>Museu do Louvre</h2>
        <span>Europa</span>
      </li>
    </ul>
    <i id="right" class="fa-solid fa-angle-right"></i>
  </div>
  <div style="text-align:center">
    <span class="dot" onclick="imagemSlide(1)"></span>
    <span class="dot" onclick="imagemSlide(2)"></span>
    <span class="dot" onclick="imagemSlide(3)"></span>
  </div>
  <br>

  <footer class="footer">
    <div class="rodape">
      <ul class="nome_footer">
        <h2>Programando Viagens</h2>
        <p>Programando Viagens é um site dedicado a fornecer dicas e informações úteis para viajantes que desejam
          planejar suas aventuras ao redor do mundo.</p>
      </ul>
      <ul class="link_footer">
        <h2>Links</h2>
        <li><a href="#">HOME</a></li>
        <li><a href="#">ÁFRICA</a></li>
        <li><a href="#">AMERICA</a></li>
        <li><a href="#">ÁSIA</a></li>
        <li><a href="#">EUROPA</a></li>
        <li><a href="#">OCEANIA</a></li>
      </ul>
    </div>
    <div class="direitos">
      <div class="direitos-container">
        <p><small>&copy; 2023. Todos os direitos reservados </small></p>
      </div>
    </div>
  </footer>
</body>

</html>