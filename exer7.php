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
    $i = isset($_GET["i"])?$_GET["i"]:0; 
    $f = isset($_GET["f"])?$_GET["f"]:0;
    $incr = isset($_GET["incr"])?$_GET["incr"]:0;

    if ($i > $f){
      while($i >= $f){
        echo "$i<br/>";
        $i = $i-$incr;
      }
    }
    else{
      while($f >= $i){
        echo "$i<br/>";
        $i = $i+$incr;
      }
    }


    ?>
</div>
</body>
</html>
 