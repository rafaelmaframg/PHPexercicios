<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
  <style>
    h2{
    font:12pt Arial;
    color: #171559;
    font-weight: bold;
    }
  </style>
</head>
<body>
<div>
    <?php
    $n1 = isset($_GET["n1"])?$_GET["n1"]:0;
    $op = isset($_GET["op"])?$_GET["op"]:false;
    echo "o numero informado foi $n1 <br/>";
    
    switch($op){
    case "dobro":
      echo " Você selecionou Dobro";
      echo "<br/> o dobro de $n1 é ".($n1*2);
      break;
    case "cubo":
      echo "Você selecionou Cubo";
      echo "<br/>o Cubo de $n1 é ".pow($n1,3);
      break;
    case "raiz":
       echo "Você selecionou Raiz Quadrada";
       echo "<br/>a Raiz Quadrada de $n1 é ".sqrt($n1);
      break;
    default:
    echo "Erro ao coletar valores";
    
    }
    
    ?>
    <br/>
    <a href="exerc4.html">Voltar</a>
</div>
</body>
</html>
 