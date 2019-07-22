<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="data:image/x-icon;base64,AAABAAEAEBAAAAEAIABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAEISkDBCEpD0QhKN8EISjwQ+BocEPgKB8D4KgPBCDowwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAQg6RHEISkpBCEo9wQg6T9EIKj/xGGp/8Xnsf/FZW8/xGJrP0PgqLcD4GhpBCDpEgAAAAAAAAAAAAAAAAQg6QBEIOkvxCEpP8QhKT/DYKj/wV+oP8Lg6X/Fq7e/xKx5P8Yr9//GqnW/xSUu/8QgaHBEIOjAgAAAAAAAAAAEIOjBhGDpM8HgKL/An2g/xOEpf9CmLH/MJSx/zy43/9Txen/I7Th/xCy5P8TpND/EIGh0A+DowYAAAAAAAAAAA+Eow4KgaLgQpqy/5rAy//P2Nv/9Ofj/2Kswf9vyeT//////+35/P+z5/f/PbTZ/wmAouIQg6QQAAAAAAAAAAAQg6QfAn6g8ZzCzP/r5OL/q8jQ/+De3v9qrsH/H63Z/3fR7v+45/X//////3nM5P8Bf6LyEIKjIQAAAAAAAAAAEIOkMA6Co/kvka3/IIqp/wuBo//O19n/crHD/xir2P8itOP/Banc/7ro9/+V1+z/AoGm+hCCozIAAAAAAAAAABCDpEIRhKT+CYGi/wh/of8UhKX/0dja/2Sswv9qx+T/+////9Dv+f/0/P//oN3w/wOEqf8PgaJDAAAAAAAAAAAQg6RUEIOk/xCDpP8NgqP/FIWl/9DY2v9krMH/bcjk///////S7/j/7vr9/6Hg8/8GiK7/D4GhVgAAAAAAAAAAEIOkZhCDpP8Qg6T/DYKj/xSFpf/R2Nr/ZK3C/3HJ5f/k9/3/HLHg/yCy4f8quOT/Eo+z/w+BoWcAAAAAAAAAABCDo3wQg6P/EIOk/w2Co/8UhqX/0dja/2Stwv9xyeX/5Pf9/xqx4P8OrN//ErDi/xSTuf8PgaB/AAAAABCDpAMQg6SVEIOk/xCDpP8NgqP/FIWl/9jc3P9orsP/b8jk///////J7ff/yu34/63m+P8Zmb7/DX+flxCDowUPg6MOEIOjpxCDo/8Qg6P/DoOj/xSFpf+yy9H/V6e+/1vC4v/d9Pz/3PP6/+D1+//J8Pv/IZ7F/wt/n6gQg6QQEIOkGxCDpLkQg6P/EIOj/xCEpP8QhKT/EIOj/xGGp/8br97/HrXm/x205P8dtOT/H7fp/xmhzP8PgaC7D4KjHQ6CozIOgqPQDoKj/w6Co/8OgqP/DoKj/wyAov8Ng6X/FJ7J/xSizf8Uocz/FKHM/xWjzv8UmL//DoGh0xKFpTUkka1QGYmozBaIp+AXiKfcF4in3BeIp9wXiKfcF4in3BeGpNwXhaTcF4ak3BeGpNwXhaTcFoal4BqJqc0ok69Q/n8AAOAHAADAAwAAwAMAAMADAADAAwAAwAMAAMADAADAAwAAwAMAAMADAACAAQAAgAEAAIABAACAAQAAgAEAAA==" rel="icon" type="image/x-icon" />
        <title>Adventure Story</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/normalize.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>

            function letsAdventure(choice) {
                //creates the datafile with query string
                var data_file = "Adventure.php?AdvID=" + choice;
                //this is making the http request
                var http_request = new XMLHttpRequest();
                try {
                    // Opera 8.0+, Firefox, Chrome, Safari
                    http_request = new XMLHttpRequest();
                } catch (e) {
                    // Internet Explorer Browsers
                    try {
                        http_request = new ActiveXObject("Msxml2.XMLHTTP");
                    } catch (e) {
                        try {
                            http_request = new ActiveXObject("Microsoft.XMLHTTP");
                        } catch (e) {
                            // Something went wrong
                            alert("Your browser broke!");
                            return false;
                        }
                    }
                }
                http_request.onreadystatechange = function () {
                    if (http_request.readyState == 4)
                    {
                        var text = http_request.responseText;

                        //this is adding the elements to the HTML in the page
                        document.getElementById("AdvTable").innerHTML = text;
                    }
                }
                http_request.open("GET", data_file, true);
                http_request.send();
            }
        </script>
        <style>
            div #AdvTable.container{
                background-color: FFF;
            }
        </style>
    </head>
    <body>
        
        <div id="AdvTable" class="container">
            <table>
                <tr class="row">
                    <th class="col-md-offset-1 h3">Lets adventure</th>
                </tr>
                <tr>
                    <td><div id="advText" class="col-md-offset-1">Are you ready to start?</div></td>
                <tr>
                    <td><div id="button1"><button type="button" value="1" onclick="letsAdventure(this.value)" class="btn-default">Lets Start</button></div></td>
                </tr>
                </tr>
                
            </table>
        </div>
    </body>
</html>

