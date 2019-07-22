<?php

require_once "DataBaseConnection.php";


    $AdvID = $_GET['AdvID'];
    if ($AdvID > 0) {
        $search = "select * from AdventureTable where idAdventureTable = $AdvID";
        $message = "Whole query " . $search;
        //echo $message;
        $return = $con->query($search);
        if (!$return) {
            $message = "Whole query " . $search;
            echo $message;
            die('Invalid query: ' . mysqli_error());
        }
        while ($row = $return->fetch_assoc()) {
            echo "<table>";
            echo "<tr class=\"row\"><thclass=\"col-md-offset-1 h2\">".$row['AdventureRoom']."</th></tr>";
            echo "<tr><td><div id=\"advText\" class=\"col-md-offset-1\">" . $row['AdventureText'] . "</div></td><tr>";
            echo "<td><div id=\"button1\"><button type=\"button\" value='" . $row['Button1Value'] . "' onclick=\"letsAdventure(this.value)\" class=\"btn-default\">" . $row['Button1Text'] . "</button></div></td></tr>";
            echo "<tr><td><div id=\"button2\"></div><button type=\"button\" value='" . $row['Button2Value'] . "' onclick=\"letsAdventure(this.value)\" class=\"btn-default\">" . $row['Button2Text'] . "</button></td></tr>";
            echo "</table>";
        }
    }else{echo "Refresh to start again";}

mysqli_close($con);

