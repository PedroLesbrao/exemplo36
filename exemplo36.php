<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introdução ao PHP</title>
    <link type="text/css" rel="stylesheet" href="estilo.css"/>
</head>
<body>
    <h1>CT Desenvolvimento de Sistemas - Back-End</h1>
    <div id="container">
    <?php
       echo "ESTRUTURA DE REPETIÇÃO WHILE ENCADEADA NO PHP<br><br>";
       //estrutura de repetição com teste lógico no início
       $x = 1;
       $Y = 1;
       $Z = 1;
       while($x <= 2){
           $Y = 1;
           while($Y <= 2){
               $z = 1;
               while($z <= 2){
                   echo "x = $x  / y = $Y / z = $z<br>";
                   $z++;
               }
               $Y++;
           }
           $x++;
       }
      
    ?>
    </div>
</body>
</html>