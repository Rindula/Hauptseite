<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Titelbildschirm | rindula.de</title>
    <style>
        html {
            background-color: #878787;
            overflow: hidden;
        }

        .image {
            display: block;
            left: 0;
            top: 0;
            width: 100%;
        }

        img {
            width: 100%;
        }

        .image a{
            display: block;      
            position: absolute;
            transition: background-color 0.2s linear;
        }

        .image a:hover{
            display: block;      
            position: absolute;
            background-color: rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div class="image">
        <img src="img/preview.png" alt="">
        <a href="http://schule.rindula.de" title="Zum Schulbereich" style="top: 0; left: 0; width: 45%; height: 100%;"></a>
        <a href="/main" title="Zur Hauptseite" style="top: 0; right: 0; width: 45%; height: 100%;"></a>
    </div>
</body>
</html>