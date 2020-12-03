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
    $dia = $_GET["dia"];

    
    switch ($dia) {
      case '1':
      case '2':
      case '3':
      case '4':
      case '5':
        echo "Dia de Aula";
        break;
      default:
        echo "Não precisa ir a aula";
        break;
    }
   
    ?>
  <br/>
  <a href="exercicio5.html">Voltar</a>
</div>
</body>
</html>
 