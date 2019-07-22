<?php
session_start();
unset($_SESSION['badPass']);
//user name and password dent from form
$myusername = $_POST['myusername'];
$mypassword = $_POST['mypassword'];
//Connect to server and select database.
require_once 'DataBaseConnection.php';
///to protect MYSQL injection
//$myusername = mysql_fix_string($con,$myusername);
//$mypassword = mysql_fix_string($con,$mypassword);
//hashing
$Hashed = hash("ripemd128", $mypassword);

$sql = "SELECT * FROM Library.FriendsAndFamily WHERE Username='"
        .$myusername . "' and `Password`='" . $Hashed . "'";
echo $sql;
$result = $con->query($sql);
        
if(!result) {
    $message = "Whole query ".$sql;
    echo $message;
    die('Invalid query: '. mysqli_error());
}
//Mysql_num_row is counting table row
    $count = $result->num_rows;

    //If result matched $myusername and $mypassword, table row must be 1 row
if($count == 1){
    $_SESSION['user'] = $myusername;
    $_SESSION['password'] = $mypassword;
//register $myusername, $mypassword and redirect to file ""login_success.php
   header("Location:Catalogue.php");
echo "<a href='Catalogue.php'> To shopping</a>";
}
else{
    header("Location:CodeExLoginForm.php");
    $_SESSION['badPass']++;
    //echo "Wrong Username or Password";
}
?>