<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="ISO-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GitHub</title>
</head>
<body>
    <a href="home">Home</a>
    <a href="teste">Teste</a><br>
    <div id="content">
        <?php

            $rota = explode("/", ((!$_GET['url'])?'home':$_GET['url']));

            if(file_exists("pages/". $rota[0] .".php")){
                include "pages/".$rota[0].".php";
            }
        ?>
    </div>
</body>
</html>