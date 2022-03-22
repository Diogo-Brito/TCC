<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cardápio IFRN</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
   <header>
       <h1>Sisre IFRN</h1>
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

   <section class="home" id="home">
       <div class="content">
           <h3>Sisre</h3>
           <p>Sistema de refeição escolar</p>
           <a href="./Sobre.html" class="bnt">Venha conhecer</a>
       </div>

       <div class="controls">
           <span class="vid-btn" data-src="./vídeos/Quem somos.mp4"></span>
       </div>
       <div class="video-container">
           <video src="./vídeos/Quem somos.mp4" id="video-slider" loop autoplay muted></video>
       </div>
   </section>

   <section class="especial" id="especial">
    <h1 class="heading">
        <span>E</span>
        <span>S</span>
        <span>P</span>
        <span>E</span>
        <span>C</span>
        <span>I</span>
        <span>A</span>
        <span>L</span>
    </h1>

    <article class="imagem">
        <img src="./img/risoto vegetariano.jpg" alt="Especial do dia"
        width="600" height="400">
    </article>
</section>


<section class="destaque" id="destaque">
   <br>
   <br>
    <h1 class="heading2">
        <span>D</span>
        <span>E</span>
        <span>S</span>
        <span>T</span>
        <span>A</span>
        <span>Q</span>
        <span>U</span>
        <span>E</span>
        <span>S</span>
    </h1>

    <article class="imagem2">
        <h3> Funcionamento do novo refeitório</h3>

        <p>O Serviço Social divulgou, nesta quinta-feira (20),<br>
            as informações sobre o funcionamento diferenciado do refeitório <br>
            durante a Semana de Ciência e Tecnologia, que acontece de segunda (24)<br>
             a sexta-feira (28).</p>
        <img src="./img/refeitório.jpg" alt="Especial do dia"
        width="600" height="300">
    </article>
    <br>
    <br>
    <br>
    <br>

    <article class="imagem2">
        <h3>Funcionamento do novo refeitório</h3>

        <p>O IFRN/Campus teve o retorno das aulas na manhã de hoje (9).<br> 
            Após um pequeno recesso para as festividades de final de ano, os estudantes<br>
            têm o retorno das aulas do semestre.</p> 
        <img src="./img/destaques.jpg" alt="Especial do dia"
        width="600" height="300">
    </article>
</section>
<br>
<br>
<br>
<br>

<section class="contato" id="contato">
    <br>
    <br>
     <h1 class="heading3">
         <span>C</span>
         <span>O</span>
         <span>N</span>
         <span>T</span>
         <span>A</span>
         <span>T</span>
         <span>O</span>
     </h1>
<div class="row">
    <div class="imgcontato">
        <img src="./img/contato.jpg" alt="logo do contato">
    </div>
    <div class="row">
        <form action="form">
            <fieldset>
                <legend><b>Entrar em contato</b></legend>
                <br>
 
                <div class="inputbox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Completo</label>
                </div>
                <br>
                <br>
 
                <p>Curso</p>
             <input type="radio" id="informatica" name="curso" value="informatica" required>
             <label for="informatica">Informática</label>
             <br>
             <br>
 
             <input type="radio" id="eletronica" name="curso" value="eletronica" required>
             <label for="eletronica">Eletrônica</label>
             <br>
             <br>
 
             <input type="radio" id="comercio" name="curso" value="comercio" required>
             <label for="comercio">Comércio</label>
             <br>
             <br>
 
                <div class="inputbox">
                 <input type="text" name="email" id="email" class="inputUser" required>
                 <label for="email" class="labelInput">Email</label>
             </div>
             <br>
             <br>
 
             <div class="inputbox">
                 <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                 <label for="telefone" class="labelInput">Telefone</label>
             </div>
             <br>
             <br>
 
 
             <label for="textAreaMensagem"  class="inputArea">Mensagem:</label>
             <textarea name="message" id="textAreaMensagem" required maxlength="100"></textarea>
             <br>
             <br>
             <br>
             
             
             <input type="submit" name="submit" id="submit">
 
            </fieldset>
        </form>
 
    </div>
</div> 
</section>
<br>
<br>
<br>

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



