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
    $c=0;
    $num = isset($_GET["num"])?$_GET["num"]:0;
    echo "O numero informado $num é divisivel por:<br/>";
    for ($i=1; $i <= $num; $i++) { 
     
      $div =  $num%$i;
      if($div == 0){
        $c++;
        echo " $i <br/>";
      }
    }
    if($c <= 2){
      echo "Numero PRIMO ele é divisivel apenas $c vezes";
    }else{
      echo "Numero não PRIMO ele é divisivel $c vezes ";
    }
    ?>
</div>
</body>
</html>
 