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
    $a = isset($_GET["ano"])?$_GET["ano"]:1900;
    $i = date("Y") - (int)$a;
    echo "Você nasceu em $a e tem $i anos de idade ";
    if($i >= 18){
      echo "<br/>Já pode Dirigir";
    }
    else{
      echo "<br/> Não pode dirigir"; 
    };
    if($i >=16 && $i < 18 || $i > 65){
      echo "<br/>Seu voto é Opcional";
    }
    elseif($i >= 18 && $i <= 65){
      echo "<br/>Seu voto é Obrigatorio";
    }
  else{
    echo "<br/>Seu Voto não é Obrigatorio";
  } 

    ?>
</div>
</body>
</html>
 