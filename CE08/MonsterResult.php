<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require_once 'DataBaseConnection.php';
$name = $_POST['name'];
$ac = $_POST['ac'];
$hd = $_POST['hd'];
$att = $_POST['att'];
$damage = $_POST['damage'];
$move = $_POST['move'];
$treasure = $_POST['treasure'];
$xp = $_POST['xp'];
$action = $_POST['action'];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Monsterous Results</title>
    </head>
    <body>
        <div class="container">
            <div class ="row">
                <div class="col-sm-offset-1 col-sm-10 col-md-offset-2 col-md-8">

                    <?php
                    // put your code here
                    print_r($_POST);
                    switch ($action) {
                        case "insert":
                            $insert = "INSERT INTO `Library`.`Monsters` (`MonsterName`, `MonsterAC`, `HitDice`, `MonsterAttack`,"
                                    . "`MonsterDamage`,`MonsterMove`,`MonsterTreasure`,`MonsterXP`, `Active`)"
                                    . "VALUES ('$name', $ac, $hd, $att,'$damage', $move,'$treasure',$xp,'N')";


                            $success = $con->query($insert);
                            
                            if ($success == FALSE) {
                                $failmess = "Whole query " . $insert . "<br>";
                                echo $failmess;
                                die('Invalid query: ' . mysqli_error($con));
                            } else {
                                echo "$name was added<br>";
                            }

                            break;

                        case "update":
                            $update = "UPDATE `Library`.`Monsters` SET `Active`='Y' "
                                    . "WHERE `MonsterName`= '$name'";
                            $success = $con->query($update);
                            if ($success == FALSE) {
                                $failmess = "Whole query " . $update . "<br>";
                                echo $failmess;
                                die('Invalid query: ' . mysqli_error($con));
                            } else {
                                echo $name . " was made Active<br>";
                            }

                            break;
                        case "search":
                            $search = "SELECT * FROM Library.Monsters where MonsterName Like '%$name%' Order by MonsterName";


                            $return = $con->query($search);

                            if (!$return) {
                                $message = "Whole query " . $search;
                                echo $message;
                                die('Invalid query: ' . mysqli_error($con));
                            }
                            echo "<table class ='table'><thead><th>Name</th><th>AC</th><th>Hit Dice</th><th>XP</th></thead><tbody>";

                            while ($row = $return->fetch_assoc()) {
                                echo "<tr><td>Name: " . $row['MonsterName']
                                . "</td><td> AC: " . $row['MonsterAC']
                                . "</td><td> HD:" . $row['HitDice']
                                . " </td><td> XP:" . $row['MonsterXP'] . "</td></tr>";
                            }
                            echo "</tbody></table>";
                            break;
                        default: echo "This is bad<br>";
                    }

                    $con->close;
                    ?>
                    <a href ="MonsterInterface.php">Back</a>
                </div>
            </div>
        </div>
    </body>
</html>
