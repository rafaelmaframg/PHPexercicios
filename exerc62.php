<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
    $c = 1;
    while ($c<=5){
    echo "<form method='get' action='exerc6.php'>
    Numero $c: <input type='number' name='v$c' min='0' max='10' required=''/>
   <br/> ";
    $c++;
  }
  echo "<br/><input type='submit' value='Enviar'/></form> ";
  ?>
 
</div>
</body>
</html>
 