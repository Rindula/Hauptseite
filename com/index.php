<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <script>
            function cmd(c) {
                command = c.getAttribute("cmd");

                var xhttp = new XMLHttpRequest();
                // stat.innerHTML = "<div class=\"lds-css ng-scope\"><div style=\"width:100%;height:100%\" id=\"loader\" class=\"lds-dual-ring\"><div></div><div></div><div></div><div></div></div></div>";
                xhttp.onreadystatechange = function() {
                    stat.innerHTML = "<table>" + xhttp.responseText + "</table>";   
                };
                xhttp.open("GET", "command.php?c=" + command, true);
                xhttp.send();
            }
            
        </script>
    </head>
    <body>
        <div id="container">
            <div class="item" onclick="cmd(this)" cmd="apt list">Pakete Auflisten</div>
            <div class="item" onclick="cmd(this)" cmd="ifconfig">Netzwerk Info</div>
            <div class="item" onclick="cmd(this)" cmd="bash ./test.sh">Netzwerk Info 2</div>
        </div>
        <hr>
        <code id="stats"></code>
    </body>
    <script>
        var stat = document.getElementById("stats");
    </script>
</html>