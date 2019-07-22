<?php
session_start();
?>
<!DOCTYPE html>
 <html>
     <head>
         <meta charset="UTF-8">
         <link href = "">
         <title></title>
         </head>
         <body>
             <?php
             echo $_SESSION['user']." has logged in";
             ?>
         </body>
 </html>
