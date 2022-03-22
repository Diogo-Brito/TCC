<DOCTYPE html>
    <html lang="en">
    <head>
        <title>Cardápio IFRN</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="logo.jpeg" rel="icon" type="image/jpeg">
        <link rel="stylesheet" href="./css/stylefun.css" type="text/css">
        <link rel="stylesheet" href="./css/cadastrarAli.css" type="text/css">
    </head>
    <body>
       <header>
           <h1>Cadastrar Alimentos</h1>
       </header>
       <nav>
           <ul>
           <li><a href="HomeFun.php">MENSAGENS</a></li>
        <li><a href="CadastrarAli.php">CADASTRAR ALIMENTOS</a></li>
        <li><a href="AlimentosCad.php">ALIMENTOS CADASTRADOS</a></li>
        <li><a href="CadastrarNot.php">CADASTRAR NOTÍCIAS</a></li>
           </ul>
       </nav>
       <div class="row">
        <form action="cadastrarAli.php" class="card" method="post">
            <label for="inoutnome">Selecione o tipo</label>
            <select>
                <option>Lanche</option>
                <option>Almoço</option>
                <option>Jantar</option>
                <option>Vegetariano</option>
            </select>
    
            <label for="inputnome">Data</label>
            <input type="date" id="inputnome" >
    
           
            <label for="alimento">Cadastrar Alimento</label>
            <input type="text" id="inputnome" >
    
           
            <label for="acompanhamento">Cadastrar Acompanhamento</label>
            <input type="text" id="inputnome" >
       
    
      
            <label for="bebida">Cadastrar bebida</label>
            <input type="text" id="inputnome" >
    
    <input type="button" value="Cadastrar alimento" onclick="msg()">
        </form>
        <script>
    function msg() {
      alert("Alimentos cadastrados com sucesso");
    }
    </script>
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