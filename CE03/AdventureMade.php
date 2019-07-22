<!DOCTYPE html>
<?php
//getting the $_POST, HTMLent < &lt
//rand(3, 18);
$name = htmlentities($_POST['HeroName']);//&ndsp &lt &gt
$name = strtolower($name);
$name = ucwords($name);
$race = $_POST['Race'];
$class = $_POST['Class'];
$age = $_POST['Age'];
$gender = $_POST['gender'];
$kingdom = $_POST['KingdomName'];
//print_r($_POST);
//echo $race;

$characterport = "<img src ='Heroimages/";
$charactersheet = "<header><h4>$name from $kingdom</h4><br>"
    . "<b>$race $class</b><br>At the age of $age</header>";

switch ($race) {
    case "Human":
        $characterport = $characterport . "Hu";
        $charactersheet = $charactersheet . "<p><b>Description</b>:Human";
        break;
    case "Elf":
        $characterport = $characterport . "El";
        $charactersheet = $charactersheet . "<p><b>Description</b>:Elf";
        break;
    case "Dwarf":
        $characterport = $characterport . "Dw";
        $charactersheet = $charactersheet . "<p><b>Description</b>:Dwarf";
        break;
    case "Halfing":
        $characterport = $characterport . "Ha";
        $charactersheet = $charactersheet . "<p><b>Description</b>:Halfing";
        break;
    default:
       $characterport = $characterport . "";
       $charactersheet = $charactersheet . "You picked a race that does not exist";
 
}
switch ($class) {
   case "Fighter":
        $characterport = $characterport . "Fi";
        $charactersheet = $charactersheet . "<p>Fighter </p>";
        break;
    case "Cleric":
        $characterport = $characterport . "Cl";
        $charactersheet = $charactersheet . "<p>Cleric</p>";
        break;
    case "Thief":
        $characterport = $characterport . "Th";
        $charactersheet = $charactersheet . "<p>Thieves</p>";
        break;
    case "Magic-User":
        $characterport = $characterport . "Ma";
        $charactersheet = $charactersheet . "<p>Magic-Users</p>";
        break;
   default:
       $characterport = $characterport . "";
       $charactersheet = $charctersheet . "You picked a class that does not exist";
}
if ($gender == "Male"){
    $characterport = $characterport . "Ma.jpg'>";
} else {
    $characterport = $characterport . "Fe.jpg'>";
    
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>A made Adventure</title>
        
        <link href="STYLE.css" rel="stylesheet" type="text/css"/>
        <style>
            img{
                height:250px;
                padding:3pt;
                float:right;
            }
            p{
                margin-left: 8px;
            }
        </style>      
    </head>
    
    <body>
        <div id="form_container">
            <h3 class=" Content">The Brave Adventurer</h3>
            <div class="CharacterSheet">
        <?php
        //print_r($_POST);
        print($characterport);
        print($charactersheet);
        ?>
            </div>
        </div>
    </body>
</html>
