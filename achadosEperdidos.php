<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cardápio IFRN</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="logo.jpeg" rel="icon" type="image/jpeg">
    <link rel="stylesheet" href="./css/achados.css" type="text/css">
    <script src="./js/scriptAchados.js"></script>
</head>
<body>
   <header>
       <h1>Achados e Perdidos</h1>
   </header>
   <nav>
    <ul>
    <li><a href="HomeAlunos.php">HOME</a></li>
        <li><a href="Cardápio.php">CARDÁPIO</a></li>
        <li><a href="achadosEperdidos.php">ACHADOS E PERDIDOS</a></li>
        <li><a href="Notícias.php">NOTÍCIAS</a></li>
        <li><a href="Contato.php">CONTATO</a></li>
        <li><a href="Sobre.php">SOBRE</a></li>
       </ul>
   </nav>

   <div class="tab">
       <button id="tab-padrao" class="tab-button" onclick="abrirTab(event, 'achado')">Achados</button>
       <button  class="tab-button" onclick="abrirTab(event, 'perdido')">Perdidos</button>
   </div>

   <div id="achado" class="conteudo">
       <h3>Objeto achado</h3>
       <img src="./img/bolsa.jpg"
       width="25%">
       <p>O objeto foi perdido durante o horári de aula. Entrar em contato caso encontrem.</p>

       <button>Entrar em contato</button>
   </div>

   <div id="perdido" class="conteudo">
    <h3>Objeto perdido</h3>
    <img src="./img/celular.jpg"
       width="25%">
    <p>O objeto foi perdido durante o horári de aula. Entrar em contato caso encontrem.</p>

    <button>Entrar em contato</button>
</div>

   <footer>
      <dl>
          <dt>Instituto Federal de Educação, Ciência e Tecnologia do Rio Grande do Norte</dt>
          <dd>Rua Dr. Nilo Bezerra Ramalho, 1692, Tirol<br>
            CEP: 59015-300
            </dd><br>
          <dt>Assessoria de Comunicação Social e Eventos (ASCE)</dt><br>
          <dt>E-mail</dt>
          <dd>comunicacao.reitoria@ifrn.edu.br</dd><br>
          <dt>Telefone</dt>
          <dd>(84) 4005-0757</dd>
        </dl>

        <p>Cardápio IFRN</p>

   </footer>
</body>
</html>