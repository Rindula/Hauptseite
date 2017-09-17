<!DOCTYPE html>
<html lang="de">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <form action="proc.php" method="POST">
            <h1>ToDo Liste</h1>
            <label>Vorschlag: </label><input type="text" name="vorschlag" id="vorschlag">
            <br>
            <button type="submit"><span>Eintragen</span></button>
        </form>
        <hr>
        <table>
            <tr><th>Timestamp</th><th>Vorschlag</th><th>Status</th></tr>
        <?php
            $conn = new mysqli("localhost", "root", "WQeYt4S8G3", "vorschlaege");
            $conn->query("SET NAMES utf8");
            $req = $conn->query("SELECT * FROM vorschlag");
            while ($r = $req->fetch_assoc()) {
                $status = ($r["done"] == 0) ? "<span class='todo'>Zu erledigen</span>" : "<span class='done'>Erledigt</span>";
                echo "<tr><td>".$r["timestamp"]."</td><td>".$r["vorschlag"]."</td><td>".$status."</td></tr>";
            }
        ?>
        
        </table>
    </body>
</html>