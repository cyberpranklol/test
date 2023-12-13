<?php

   $naslov = "Postani Programer";
   $stavke = ["Glavna", "O nama", "Kontakt"];
   array_push ($stavke, "Info");

?>

<!DOCTYPE html>
<html>
<head>
   <title>Postani programer</title>
</head>
<body>
     <h1> <?php echo $naslov ?> </h1>
         <nav>
            <li> <?php echo $stavke[0] ?> </li>
            <li> <?php echo $stavke [1] ?> </li>
            <li> <?php echo $stavke [2] ?> </li>
            <li> <?php echo $stavke [3] ?> </li>
         </nav>
</body>
</html>