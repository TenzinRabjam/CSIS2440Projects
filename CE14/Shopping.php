 <?php
    session_start();
    
    setlocale(LC_MONETARY, 'en_US');
    $product_id = $_POST['Select_Product']; // the product id from dropdown
    $action = $_POST['action']; // the action from the URL
    switch ($action){
        case"Add";
            //echo "adding
            $_SESSION['cart'][$product_id] ++; //add one to the quantity of the product with id $product_id
            break;
        case "Remove":
            $_SESSION['cart'][$product_id]--; //remove one from the quantity of the product with id $product_id
            if ($_SESSION['cart'][$product_id] <=0)
                unset($_SESSION['cart'][$product_id]); // if quantity is zero, remove it
            //completely (using the 'unset' function) - otherwise is will show zero,
            //then -1, -2 etc when the user keeps removing items
            break;
        case "Empty":
            unset($_SESSION['cart']); //unset the whole cart, i.e. empty the cart.
            break;
        case"Info":
            $infonum = $product_id;
            break;
    }
    print_r($_SESSION);
        require_once 'DatabaseConnection.php';
        ?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

    <head>
        <meta charset="UTF-8">
        <link href="data:image/x-icon;base64,AAABAAEAEBAAAAAAAABoBQAAFgAAACgAAAAQAAAAIAAAAAEACAAAAAAAAAEAAAAAAAAAAAAAAAEAAAAAAAAAAAAA19fXAMCAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIBAQECAgICAgICAQEBAgICAQABAgICAgICAgEAAQICAgEAAQECAgECAgEBAAEBAgIBAAAAAQEAAQEAAQAAAAEBAQABAQABAAEBAAEAAQEAAQEAAQEAAQABAQABAAEBAAEBAAEBAAEAAQEAAQABAQABAQAAAAEBAAAAAQEAAAABAQIBAQECAQABAQICAQEBAgICAgICAgEAAQICAgICAgICAgICAgIBAQECAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA=" rel="icon" type="image/x-icon" />
        <title>Adventure Cart</title>
        <script type="text/javascript" src="view.js"></script>
        <script>

        </script>
       

        <link href="/CSIS2440/CodeEx/view.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="form" id="form_container">
            <form action="AdventureCart.php" method="Post">
                <div >

                    <p><span class="text">Please Select a product:</span>
                        <select id="Select_Product" name="Select_Product" onchange="productInfo(this.value)" class="select">
                            <option value=""></option>
                        <?php
                        
                        //setting the select statement and running it
                        $search = "SELECT Item, idAdventureGear FROM Library.AdventureGear order by Item";
                        $return = $con->query($search);
                        
                        
                        if(!$return){
                            $message = "Whole query: " . $search;
                            echo $message;
                            die('Invalid query: ' . mysqli_errno());
                        }
                        while ($row = mysqli_fetch_array($return)){
                            if($row['idAdventureGear'] == $product_id){
                                echo "<option value='" . $row['idAdventureGear']."' selected='selected'>". $row['Item'] . "</option>\n";
                
                            }else {
                                echo "<option value='" . $row['idAdventureGear'] . "'>". $row['Item'] . "</option>\n";
                            }
                        }
                        
                         ?>

                        </select></p>
                    <table>
                        <tr>
                            <td>
                                <input id="button_Add" type="submit" value="Add" name="action" class="button"/>
                            </td>
                            <td>
                                <input name="action" type="submit" class="button" id="button_Remove" value="Remove"/>
                            </td>
                            <td>
                                <input name="action" type="submit" class="button" id="button_empty" value="Empty"/>
                            </td>
                            <td>
                                <input name="action" type="submit" class="button" id="button_Info" value="Info"/>
                            </td>
                        </tr>                    
                    </table>

                </div>
                <div id="productInformation">

                </div>
                <div>
                    <?php
                    if ($infonum > 0){
                        $sql = "SELECT Item, Cost, Weight, ItemImage FROM Library.AdventureGear WHERE idAdventureGear = " . $infonum;
                        //echo $sql;
                        echo "<table align ='left' width='100%'><tr><th>Name</th><th>Price</th><th>Weight</th></th>";
                        $result = $con->query($sql);
                        //Only display the row if thre is a product (though ther should always be as we have already checked)
                        if (mysqli_num_rows($result) > 0){
                            list($infoname, $infoprice, $inforweight, $infoimage) = mysqli_fetch_row($result);
                            echo "<tr>";
                            //Show this information in table cells
                            echo "<td align=\"left\" width=\"450px\">$infoname</td>";
                            echo "<td align=\"left\" width=\"325px\">" .money_format('%(#8n', $infoprice) . " </td>";
                            echo "<td align=\"center\">$inforweight</td>";
                            echo "<td align=\"left\" width=\"450px\"><img src='images\\$infoimage' height=\"160\" width=\"160\"></td>";
                            echo"</tr>";
                        }
                        echo "</table>";
                    }
                    ?>
                                    </div>
                <div id="Display_cart">
                    <?php
                    if ($_SESSION['cart']){
                        // show the cart
                        echo "<table border=\"1\" padding=\"3\" width=\"640px\"<tr><th>Name</th><th>Weight</th><th>Price</th>"
                        . "<th width=\"80px\">Line</th></tr>";
                            
                        foreach($_SESSION['cart'] as $product_id => $quantity){
                            $sql = "SELECT Item, Cost, Weight FROM Library.AdventureGear WHERE idAdventureGear = " . $product_id;
                            echo $sql;
                            $result = $con->query($sql);
                            // only display the fro if there is a product (through there should always be as we have already checked)
                            if (mysqli_num_rows($result) > 0){
                                list($name, $price, $weight) = mysqli_fetch_row($result);
                                $weight = $weight * $quantity;
                                $line_cost = $price * $quantity; //work out the line cost
                                $totWeight = $totWeight + $weight;
                                $total = $total + $line_cost; //add to the total cost
                                echo "<tr>";
                                //show this information in table cells
                                echo "<td align=\"Left\" width=\"450px\">$name</td>";
                                echo "<td align=\"center\" width=\"75px\">$weight</td>";
                                
                                echo "<td align=\"center\" width=\"75px\">" . money_format('%(#8n', $price) . "</td>";
                           
                                echo "<td align=\"center\">" . money_format('%(#8n', $line_cost) . "</td>"; 
                                  
                                echo "</tr>";
                            }
                        }
                         //show the total
                         echo "<tr>";
                         echo "<td align=\"right\">Total Weight</td><td align=\"right\">$totWeight</td><td align=\"right\">Total</td>";
                         echo "<td align=\"right\">" . money_format('%(%8n', $total) . "</td>";
                         echo "</tr>";
                         echo "</table>";
                    }else{
                        echo "You have no items in your shopping cart.";
                    }
                    mysqli_close($con)
                    ?>
                    
                </div>
            </form>
        </div>
    </body>
</html>
