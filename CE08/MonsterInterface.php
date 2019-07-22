
    <head>
        <link href="data:image/x-icon;base64,AAABAAEAEBAAAAAAAABoBQAAFgAAACgAAAAQAAAAIAAAAAEACAAAAAAAAAEAAAAAAAAAAAAAAAEAAAAAAAC9qnMA9ubeAObKrAD///8A7s60AO7WvQDNupQA1bJ7AMWqcwD/8v8A//r2AM2qcwDevpwAtJ1aAN7StAC9oWIA//b2AN7CiwD27uYAtJlaAMWhYgCkhTEAzbqLAP/y7gD24s0A5trFAP/6/wD26t4AzaFiAN7KrADNtoMA/+7uAM2ycwD23s0A1cKcAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMiHQMDAwMDAwMDAwMDAwMNBQMDAwMDAwMDGgkDAwMaHRwCAwMDAwMPGCIDAwMDAw4RGgMDAwMEAhUDAwMDARMhAwMDAwMDEQoCAwMDAw8aAwMDAwMDAyIDAwMDAx8eAwMDAwMDAwMYGQMDAwMgEgMDAwMDAwMDBwMDAwMBAAMDAwMDAwMDEgIaAwMKDQMDAwMDAwMDAwwJBQMhExoDAwMDAwMDAxsiFxYUBgMDAwMDAwMDAwMECAsQAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA=" rel="icon" type="image/x-icon" />
        <meta charset="UTF-8">
        <title>Monster Manager</title>
        <meta name="viewport"
              content="width=device-width, initial-scale=1">      
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/normalize.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <style>

        </style>
    </head>
    <body>
        <img src="dragon.png" alt=""/>
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-7">
                    <h4>Here is a list of the monsters we have in the Database</h4><table class='table'><thead><th>Name</th><th>AC</th><th>Hit Dice</th><th>XP</th><th>Active</th></thead><tbody>
<tr><td>Ape</td><td>14</td><td>4 </td><td>240 </td><td>Y</td></tr>
<tr><td>Assassin Vine</td><td>15</td><td>6 </td><td>500 </td><td>N</td></tr>
<tr><td>Basilisk</td><td>16</td><td>6 </td><td>610 </td><td>Y</td></tr>
<tr><td>Blink Dog</td><td>15</td><td>4 </td><td>280 </td><td>N</td></tr>
<tr><td>Dire Bear</td><td>15</td><td>7 </td><td>670 </td><td>N</td></tr>
<tr><td>Dragon</td><td>18</td><td>7 </td><td>800 </td><td>Y</td></tr>
<tr><td>Dryad</td><td>15</td><td>2 </td><td>100 </td><td>N</td></tr>
<tr><td>Elemental</td><td>18</td><td>8 </td><td>945 </td><td>Y</td></tr>
<tr><td>Fire Beetle</td><td>16</td><td>2 </td><td>25 </td><td>Y</td></tr>
<tr><td>Gelatinous Cube</td><td>12</td><td>4 </td><td>280 </td><td>N</td></tr>
<tr><td>Giant Ant</td><td>17</td><td>4 </td><td>240 </td><td>N</td></tr>
<tr><td>Mimmick</td><td>12</td><td>4 </td><td>250 </td><td>Y</td></tr>
<tr><td>Snake</td><td>3</td><td>5 </td><td>4 </td><td>N</td></tr>
</tbody></table>                </div>
                <div class="col-md-5 col-sm-5">
                    <form action="MonsterResult.php" method="post" role="form">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class = "form-group">
                                    <label for = "name">Monster Name:</label>
                                    <input name='name'type="text" class = "form-control">
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class = "form-group">
                                    <label for = "ac">Monster AC:</label>
                                        <input type="number" name="ac" class = "form-control">
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class = "form-group">
                                    <label for = "hd">Hit Dice:</label>
                                        <input type="number" name="hd" class = "form-control">
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class = "form-group">
                                    <label for = "att">Attack:</label>
                                    <input type="number" name="att" class = "form-control">
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class = "form-group">
                                    <label for = "damage">Damage:</label>
                                    <input name='damage'type="text" class = "form-control">
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class = "form-group">
                                    <label for = "move">Movement:</label>
                                    <input type="number" name="move" class = "form-control">
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class = "form-group">
                                    <label for = "treasure">Treasure:</label>
                                    <select name='treasure' class = "form-control">
                                        <option value='--'>--</option>
                                        <option value='A'>A</option>
<option value='B'>B</option>
<option value='C'>C</option>
<option value='D'>D</option>
<option value='E'>E</option>
<option value='F'>F</option>
<option value='G'>G</option>
<option value='H'>H</option>
<option value='I'>I</option>
<option value='J'>J</option>
<option value='K'>K</option>
<option value='L'>L</option>
<option value='M'>M</option>
<option value='N'>N</option>
<option value='O'>O</option>
<option value='P'>P</option>
<option value='Q'>Q</option>
<option value='R'>R</option>
<option value='S'>S</option>
<option value='T'>T</option>
<option value='U'>U</option>
<option value='V'>V</option>
                                    </select>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class = "form-group">
                                    <label for = "xp">Experience Value:</label>
                                    <input type="number" name="xp" class = "form-control">
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class = "form-group">
                                    <input type="submit" value="insert" name='action' class = "btn btn-default">
                                    <input type="submit" value="update" name='action' class = "btn btn-default">
                                    <input type="submit" value="search" name='action' class = "btn btn-default">
                                </div>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>

