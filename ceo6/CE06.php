<html>
    <head>
        <link href="data:image/x-icon;base64,AAABAAEAEBAAAAAAAABoBQAAFgAAACgAAAAQAAAAIAAAAAEACAAAAAAAAAEAAAAAAAAAAAAAAAEAAAAAAAC9qnMA9ubeAObKrAD///8A7s60AO7WvQDNupQA1bJ7AMWqcwD/8v8A//r2AM2qcwDevpwAtJ1aAN7StAC9oWIA//b2AN7CiwD27uYAtJlaAMWhYgCkhTEAzbqLAP/y7gD24s0A5trFAP/6/wD26t4AzaFiAN7KrADNtoMA/+7uAM2ycwD23s0A1cKcAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMiHQMDAwMDAwMDAwMDAwMNBQMDAwMDAwMDGgkDAwMaHRwCAwMDAwMPGCIDAwMDAw4RGgMDAwMEAhUDAwMDARMhAwMDAwMDEQoCAwMDAw8aAwMDAwMDAyIDAwMDAx8eAwMDAwMDAwMYGQMDAwMgEgMDAwMDAwMDBwMDAwMBAAMDAwMDAwMDEgIaAwMKDQMDAwMDAwMDAwwJBQMhExoDAwMDAwMDAxsiFxYUBgMDAwMDAwMDAwMECAsQAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA=" rel="icon" type="image/x-icon" />
        <title>MySQL Demo</title>
    </head>
    <body><?php
        /*
         * Table: Monsters
          Columns:
          idMonsters int(11) AI PK
          MonsterName varchar(80)
          MonsterAC int(11)
          HitDice int(11)
          MonsterAttack int(11)
          MonsterDamage varchar(45)
          MonsterMove int(11)
          MonsterTreasure varchar(45)
          MonsterXP int(11)
          Active varchar(1)
         * 
         * sudo yum install php-mysql
         */
        require_once 'DataBaseConnection.php';
//Get in canvas
        $newMob = array(
            array("Giant Ant", 17, 4, 1, "2d6", 60, "U", 240),
            array("Ape", 14, 4, 2, "1d4", 40, "N", 240),
            array("Assassin Vine", 15, 6, 1, "1d8", 5, "U", 500),
            array("Basilisk", 16, 6, 2, "1d10", 20, "F", 610),
            array("Dire Bear", 15, 7, 3, "2d8", 40, "N", 670),
            array("Fire Beetle", 16, 2, 1, "2d4", 40, "N", 25),
            array("Blink Dog", 15, 4, 1, "1d6", 40, "C", 280),
            array("Dragon", 18, 7, 4, "2d10", 80, "H", 800),
            array("Dryad", 15, 2, 1, "1d4", 40, "D", 100),
            array("Elemental", 18, 8, 1, "1d12", 20, "N", 945),
            array("Gelatinous Cube", 12, 4, 1, "2d4", 20, "V", 280)
        );
//print_r($newAuth);

        foreach ($newMob as $insertArray) {
            //INSERT INTO `Library`.`Monsters` (`MonsterName`, `MonsterAC`, `HitDice`, `MonsterAttack`, 
            //`MonsterDamage`, `MonsterMove`, `MonsterTreasure`, `MonsterXP`, `Active`) 
            //VALUES ('Joe', '2', '2', '2', '2d', '23', 'e', '12', 'Y')

            $insert = "INSERT INTO `Library`.`Monsters` (`MonsterName`, `MonsterAC`, `HitDice`,"
                    . " `MonsterAttack`, `MonsterDamage`,`MonsterMove`, `MonsterTreasure`, "
                    . "`MonsterXP`, `Active`) VALUES ('$insertArray[0]', $insertArray[1], "
                    . "$insertArray[2], $insertArray[3], '$insertArray[4]', $insertArray[5],"
                    . "'$insertArray[6]',$insertArray[7],'Y')";
            //echo $insert;
            $success = $con->query($insert);

            if ($success == FALSE) {
                $failmess = "Whole query " . $insert . "<br>";
                echo $failmess;
                die('Invalid query: ' . mysqli_error($con));
            } else {
                echo "$insertArray[0] was added<br>";
            }
        }

        echo "<br><h2>Now removing</h2><br><hr>";
        for ($i = 0; $i < sizeof($newMob); $i += 2) {
            $update = "UPDATE `Library`.`Monsters` SET `Active`='N' "
                    . "WHERE `MonsterName`='" . $newMob[$i][0] . "'";
            $success = $con->query($update);
            if ($success == FALSE) {
                $failmess = "Whole query " . $update . "<br>";
                echo $failmess;
                die('Invalid query: ' . mysqli_error($con));
            } else {
                echo $newMob[$i][0] . " was removed<br>";
            }
        }
        echo "<br>This is who is left<hr>";
        $search = "SELECT * FROM Library.Monsters where Active = 'Y' Order by MonsterName";

        $return = $con->query($search);

        if (!$return) {
            $message = "Whole query " . $search;
            echo $message;
            die('Invalid query: ' . mysqli_error($con));
        }
        echo "<table><th>Name</th><th>AC</th><th>Hit Dice</th><th>XP</th>";
        while ($row = $return->fetch_assoc()) {
            echo "<tr><td>Name: " . $row['MonsterName']
            . "</td><td> AC: " . $row['MonsterAC']
            . "</td><td> HD:" . $row['HitDice']
            . " </td><td> XP:" . $row['MonsterXP'] . "</td></tr>";
        }
        echo "</table>";
        mysqli_close($con);
        ?></body>
</html>
