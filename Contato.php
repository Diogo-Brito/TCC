<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cardápio IFRN</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Contato.css" type="text/css">
</head>
<body>
   <header>
       <h1>Contato</h1>
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
   <div class="textoInicio">
    <h4>Informações, sugestões, dúvidas ou reclamações? Entre em contato com a nossa equipe!
        <br>A sua opinião é fundamental para que possamos melhorar cada vez mais o Sisre.
       </h4>

   </div>

   
   <div class="box">
       <form action="https://api.staticforms.xyz/submit1" method="post">
           <fieldset>
               <legend><b>Entrar em contato</b></legend>
               <br>

               <div class="inputbox">
                <input type="hidden" name="redirectTo" value="Contato.html">
                <input type="hidden" name="accessKey" value="e09738b2-e12f-4d47-87ba-56dbb44fa11f">
                   <input type="text" name="name" id="nome" class="inputUser" required>
                   <label for="nome" class="labelInput">Nome Completo</label>
               </div>
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
