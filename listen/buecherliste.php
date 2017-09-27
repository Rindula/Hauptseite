<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bücherliste</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table>
            <tr><th>Author</th><th>Name</th><th>Genre</th></tr>
        <?php
        $conn = new mysqli("25.83.12.108", "root", "SiSal2002", "gfs");
        $r = $conn->query("SET NAMES 'utf8'; SELECT z.bez, k.genre, z.author FROM bestand AS z INNER JOIN beschreibung AS b ON b.id = z.id INNER JOIN genre AS k ON b.genre = k.id");
        echo $conn->error;
        while ($a = $r->fetch_array()) {
            echo "<tr><td>".$a[2]."</td><td>".$a[0]."</td><td>".$a[1]."</td></tr>";
        }
        ?>
    </table>
</body>
</html>