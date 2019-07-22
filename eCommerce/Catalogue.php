<?php
session_start();

$product_id = $_POST['Select_Product']; //the product id from dropdowns
$action = $_POST['action']; //action from the url

switch ($action) {//decider
    case "Add":
        //ECHO "adding
        $_SESSION['cart'][$product_id] ++;//add one to the quantity of the product with id $product_id
        break;

    case "Remove":
        //echo "Your item has been removed";
        $_SESSION['cart'][$product_id] --;//remove one from the quantity of the product with id $product_id
        if ($_SESSION['cart'][$product_id] <= 0)
            unset($_SESSION['cart'][$product_id]); //IF Quantitiy is zero
        break;

    case "Empty":
        unset($_SESSION['cart']); //unset the whole cart,i.e. empty the cart.
        break;

    case "Info":
        $infonum = $product_id;
        break;
}
//print_r($_SESSION);
require_once 'DataBaseConnection.php';
?>


<html>
    <head>

        <link href="style1.css" rel="stylesheet" type="text/css">
        <title>Ecommerce site</title>
        <script type="text/javascript"></script>
        <script>

        </script>

    </head>
    <body>
        <div class="form">
            <form action="Catalogue.php" method="Post">
                <div>
                    <h1>WELCOME TO THE CATALOGUE!!</h1>
                    <p><span class="text">Please Select a product:</span>
                        <select name="Select_Product" onchange="productInfo(this.value)" class="select">
                            <option value=""></option>
                            <?php
                            //setting the select select statement and running it for the project
                            $search = "SELECT name, idproducts FROM Library.products order by name";
                            //echo $search;
                            $return = $con->query($search);

                            if (!$return) {
                                $message = "Whole query " . $search;
                                echo $message;
                                die('invalid query: ' . mysqli_error());
                            }
                            while ($row = mysqli_fetch_array($return)) {
                                if ($row['idproducts'] == $product_id) {
                                    echo "<option value = '" . $row['idproducts'] . "' selected ='selected'>"
                                    . $row['name'] . "</option>\n";
                                } else {
                                    echo"<option value='" . $row['idproducts'] . "'>"
                                    . $row['name'] . "</option>\n";
                                }
                            }
                            ?>
                        </select>
                    </p>
                    <table>
                        <tr>
                            <td>
                                <input type="submit" value="Add" name="action" class="button"/>
                            </td>
                            <td>
                                <input name="action" type="submit" class="button" value="Remove"/>
                            </td>
                            <td>
                                <input name="action" type="submit" class="button" value="Empty"/>
                            </td>
                            <td>
                                <input name="action" type="submit" class="button" value="Info"/>
                            </td>
                        </tr>
                    </table>

                </div>
                <div id="productInformation">

                </div>
                <div>
                    <?php
                    if ($infonum > 0) {
                        $sql = "SELECT `name`, `desc`, price, image FROM Library.products WHERE idproducts = " . $infonum;
                        echo "<table align = 'left' width = '100%'><tr><th><b><i>NAME</b></i></th><th><b><i>DESCRIPTION</b></i></th><th><b><i>PRICE</b></i></th><th><b><i>IMAGE</b></i></th></tr>";
                        $result = $con->query($sql);
                        if (mysqli_num_rows($result) > 0) {
                            list($infoname, $infordesc, $infoprice, $infoimage) = mysqli_fetch_row($result);
                            echo"<tr>";
                            //show this information in table cells
                            echo "<td align=\"left\" width=\"450px\">$infoname</td><br>";
                            echo "<td align=\"center\">Item Description: $infordesc</td><br>";
                            echo "<td align=\"right\" width=\"325px\">Item Price: " . money_format('%(#8n', $infoprice) . "</td><br>";
                           
                            echo "<td align=\"right\" width=\"450px\"><img src='productImages\\$infoimage' height=\"160\" width=\160\"></td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                        //echo "hello";
                    }
                    ?>
                </div>
                <div>
                    <?php
                    if ($_SESSION['cart']) {//if the cart isn't empty
                        //show the cart
                        echo "<table border=\"1\" padding=\"3\" width=\"640px\"><tr><th>Name</th><th>Desc</th><th>Price</th></tr>"; //format the cart using a HTML table
                        //Iterate through the cart, the $product_id id the key and $quantity is the value
                        foreach ($_SESSION['cart'] as $product_id => $quantity) { //if the cart isnt empty
                            $sql = "SELECT `name`, `desc`, price FROM Library.products WHERE idproducts = " . $product_id;
                            //echo $sql;
                            $result = $con->query($sql);
                            //Only display teh row if there is a product(through there should always be as we have already checked)
                            if (mysqli_num_rows($result) > 0) {
                                list($name, $desc, $price) = mysqli_fetch_row($result);

                                $line_cost = $price * $quantity; //workout the lie of cost

                                $total = $total + $line_cost; //add to total cost
                                echo "<tr>";
                                //show this information in table cells
                                echo "<td align = \"left\" width = \"450px\">$name</td>";
                                echo "<td align = \"center\" width = \"75px\">$desc</td>";
                                echo "<td align = \"center\" width = \"75px\">" . money_format('%(#8n', $price) . "</td>";
                                //echo "<td align = \"center\">" . money_format('%(#8n', $line_cost) . "</td>";
                                echo "</tr>";
                            }
                        }
                        //show the total
                        echo "<tr>";
                        echo "<td align=\"right\">Total</td>";

                        echo "<td align = \"right\">" . money_format('%(#8n', $total) . "</td>";
                        echo "</tr>";
                        echo "</table>";
                    } else {
                        //otherwise tell the user they have no items in their cart
                        echo "You have no items in your shopping cart.";
                    }
                    mysqli_close($con)
                    ?>
                </div>
            </form>
        </div>
    </body>
</html>
