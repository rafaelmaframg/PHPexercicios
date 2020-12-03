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
    $i= 1;
    $j=1;
while ($i <= 5){
  $v = "num".$i;
  $url = "v".$i;
  $$v = $_GET["$url"];
  $i++;
}
while ($j<=5){
  $v2 = "num".$j;
  echo  "<br/> o Valor de Numero $j é ".$$v2;
  $j++;
}


?>


</div>
</body>
</html>
 