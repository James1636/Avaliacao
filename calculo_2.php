<?php 
echo "<br>"; 
function validar(){
  if (isset($_POST["enviar"])) {
      $erros = array(); // array
      $nome = filter_input(INPUT_POST, "nome",FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
      $altura = filter_input(INPUT_POST, "altura",FILTER_SANITIZE_NUMBER_FLOAT);
      $peso = filter_input(INPUT_POST, "peso",FILTER_SANITIZE_NUMBER_FLOAT);
      // str_replace(",",".", $altura);  // obs!! *------- teste 
      // str_replace(",",".", $peso);   // obs!!  -*------- teste
      // number_format($idade,2,",",".");
      // echo "idade---" . $idade;
      $vnome = strlen($_POST["nome"]);
      if ($vnome < 4) {
          $erros[] = "<h1 class='center'>Nome Inválido</h1>";
      }
      $valtura = filter_input(INPUT_POST, "altura", FILTER_VALIDATE_FLOAT);           
      if (!$valtura) {
          $erros[] = "<h1 class='center'>Altura Inválida</h1>";
      }
      $vpeso = filter_input(INPUT_POST,"peso", FILTER_VALIDATE_FLOAT);
      if (!$vpeso) {
          $erros[] = "<h1 class='center'>Peso Inválido!</h1>";
      }
      if (!empty($erros)) {
      foreach ($erros as $erro) {
          echo "$erro <br>";
      }
      exit();
      }
      echo "<h3 class='center container blue'> Seus Dados: </h3>";
      // echo "<br> Nome: " . $nome;
      echo "<h5 class='center container'>Nome: {$nome}</h5>";
     // echo "<br> Altura: " . $altura;
      echo "<h5 class='center container'>Altura: {$altura}</h5>";
      //echo "<br> Peso: " . $peso;
      echo "<h5 class='center container'>Peso: {$peso}</h5>";
  }
}
function imc($peso, $altura){
  $imc = round($peso / ($altura * $altura));
  // $imc = ($peso / ($altura * $altura));
  if ($imc < 18.5) {
      // return "Abaixo do peso <br> Seu imc é {$imc}.";
      return "<h2 class='center blue darken-4 container'>Abaixo do peso! <br> Seu imc é {$imc}.</h2>";
  }
  if ($imc >= 18.5 && $imc <= 24.5) {
     // return " Peso normal <br> Seu imc é {$imc}.";
     return "<h2 class='center blue darken-4 container'>Peso normal! <br> Seu imc é {$imc}.</h2>";
  }
  if ($imc > 24.5 && $imc <= 29.9) {
      //return "Excesso de peso <br> Seu imc é {$imc}.";
      return "<h2 class='center blue darken-4 container'>Com excesso de peso <br> Seu imc é {$imc}.</h2>";
  }
  if ($imc > 29.9 && $imc <= 34.9) {
     // return "Obesidade <br> Seu imc é {$imc}.";
     return "<h2 class='center blue darken-4 container'>Nível 1 de obesidade <br> Seu imc é {$imc}.</h2>";
  }
  if ($imc > 34.9 && $imc <= 39.9) {
      //return "Obesidade mórbida <br> Seu imc é {$imc}.";
      return "<h2 class='center blue darken-4 container'>Nível 2 de obesidade mórbida <br> Seu imc é {$imc}.</h2>";
  } else{
      return "<h2 class='center blue darken-4 container'>Nível 3 de obesidade mórbida <br> Seu imc é {$imc}.</h2>";
  }
}
//   validar(); // funcao acima*-*-*-*-*-*-
if (isset($_POST['enviar'])) {
  $nome = $_POST['nome']; 
  $altura = $_POST['altura'];
  $peso = $_POST['peso'];
      
  imc($peso, $altura);
  $cauculo_imc = imc($peso, $altura);
  validar(); // funcao acima*-*-*-*-*-*-
  echo "<h2 class='center'>{$nome}<i class='material-icons'>face</i></h2>";
  echo "<h2 class='center'>{$cauculo_imc}</h2>";
}
?>