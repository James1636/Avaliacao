<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>index</title>

    <!-- Google Icon Font -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- materialize.css -->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

    <!-- CSS Customizado -->
    <link rel="stylesheet" href="css/customizado.css">

    <!-- viewport para mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
    .descri {
        color: gray;
        text-align: center;
    }
    </style>
</head>

<body>

    <nav>
        <div class="nav-wrapper blue">
        <a href="inicial.html" class="brand-logo">  Weight Loss Clinic</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="sass.html"></a></li>
            <li><a href="collapsible.html"></a></li>
        </ul>
        </div>
    </nav><br>

    <h1 class="descri">Calcule seu IMC:</h1>

    <form action="main.php" method="post" class="container">       <!--   forma 2 -->
    <!-- <form action="#" method="post" class="container">                     forma 1 -->

        <label>Nome:</label>
        <input type="text" name="nome" id="nome" placeholder="Nome (letras minúsculas)" pattern="[a-z\s]+$" required/>
          
        <label>Altura:</label>
        <input type="text" name="altura" id="altura" placeholder="0.00" pattern="[0-9.,]+$" required/>

        <label>Peso:</label>
        <input type="text" name="peso" id="peso" placeholder="00" pattern="[0-9.,]+$" required/>

        <input class="text-color white" type="submit" value="Calcular" name="enviar" id="enviar"/>

    </form>

    <?php
      //include("calculo_1.php");        //forma 1
      include("calculo_2.php");           // forma 2        
    ?>
    
    <br>
    <footer class="page-footer blue">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <p class="grey-text text-lighten-4">WLC</p>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2019 Copyright text
            </div>
          </div>
    </footer>



    <!-- JavaScript no final do body para otimizar o carregamento -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js">
    </script>

    <script type="text/javascript" src="js/materialize.min.js"></script>

</body>

</html>