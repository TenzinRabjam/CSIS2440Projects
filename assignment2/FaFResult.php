<?php
require_once 'DataBaseConnection.php';
$Firstname = $_POST['Firstname'];
$Lastname = $_POST['Lastname'];
$Phone = $_POST['Phonenumber'];
$Address = $_POST['Address'];
$City = $_POST['City'];
$State = $_POST['State'];
$Zip = $_POST['Zip'];
$Birthdate = $_POST['Birthdate'];
$Username = $_POST['Username'];
$Sex = $_POST['Sex'];
$Relationship = $_POST['Relationship'];
$action = $_POST['action'];
?>
<html>
    <head>
        <title>FandF RESULTS</title>
        <link href="style1.css" rel="stylesheet" type="text/css">
        <style>

        </style>
    </head>
    <body>


        <?php
        switch ($action) {

            case "insert":
                $insert = "INSERT INTO `Library`.`FriendsAndFamily` (`Firstname`, `Lastname`, `Phonenumber`, `Address`, `City`,`State`,`Zip`,`Birthdate`,`Username`,`Sex`,`Relationship`, "
                        . "`Active`) VALUES ('$Firstname', '$Lastname', '$Phone', '$Address', '$City', '$State', '$Zip', '$Birthdate','$Username',"
                        . "'$Sex','$Relationship', 'N')";
						
                $success = $con->query($insert);
                
				if ($success == FALSE) {
                    $failmess = "Whole query " . $insert . "<br>";
                    echo $failmess;
                    die('Invalid query: ' . mysqli_error($con));
                } else {
                    echo "$insert directory has been added<br>";
                }

                break;

            case "update":
                
				$update = "UPDATE `Library`.`FriendsAndFamily` SET `Active`='Y' "
                        . "WHERE `Firstname`='" . $insert . "'";
                
				$success = $con->query($update);
                if ($success == FALSE) {
                    $failmess = "Whole query " . $update . "<br>";
                    echo $failmess;
                    die('Invalid query: ' . mysqli_error($con));
                } else {
                    echo $Firstname . " was updated in your directory. (updated)<br>";
                }
                break;
            case "search":

                $search = "SELECT * FROM `Library`.`FriendsAndFamily` where `Firstname`= '" . $Firstname . "' AND `Lastname`= '" . $Lastname . "' Order by 'Firstname'";
                $return = $con->query($search);

                if (!$return) {
                    $message = "Whole query " . $search;
                    echo $message;
                    die('Invalid query: ' . mysqli_error($con));
                }
                echo "<table class='table'><thead><th>FirstName</th><th>LastName</th><th>Phone</th><th>Address</th><th>City</th><th>State</th><th>ZipCode</th><th>Birthdate</th><th>Sex</th><th>Relationship</th></thead><tbody>\n";
                while ($row = $return->fetch_assoc()) {
                    echo "<tr><td>" . $row['Firstname']
                    . "</td><td>" . $row['Lastname']
                    . "</td><td>" . $row['Phonenumber']
                    . "</td><td>" . $row['Address']
                    . "</td><td>" . $row['City']
                    . "</td><td>" . $row['State']
                    . "</td><td>" . $row['Zip']
                    . "</td><td>" . $row['Birthdate']
                    . "</td><td>" . $row['Sex']
                    . "</td><td>" . $row['Relationship']
                    . "</td></tr>\n";
                }
                echo "</tbody></table>";
                break;
            default: echo "This is bad<br>";
        }
        $con->close;
        ?>
        <a href="FriendsAndFamily.php">Back</a>
    
    </body>
</html>