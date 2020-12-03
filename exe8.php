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
    $n = isset($_GET["n"])?$_GET["n"]:0;
    $i = 0;
    while ($i <=10){
      $r = $n*$i;
      echo "$n X $i = $r &nbsp;&nbsp;";
      $i++;
      $r = $n*$i;
      echo " $n X $i = $r<br/>";
      $i++;
    }
    
    ?>
</div>
</body>
</html>
 