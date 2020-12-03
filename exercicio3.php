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
    $n2 = isset($_GET["n2"])?$_GET["n2"]:0;
    $m = ((int)$n1 + (int)$n2)/2 ;
    echo "A media dos numeros informados é $m<br/>";
    if($m >=8){
      echo "Aluno Aprovado!<br/>";
    }
    elseif($m >=5 && $m <= 7){
      echo "Aluno em recuperação!<br/>";
    }
    else{
      echo "Aluno Reprovado!!<br/>";
    }
    
    
    ?>
    <a href="exercicio3.html"> Voltar</a>
</div>
</body>
</html>
 