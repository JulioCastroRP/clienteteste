<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="ISO-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GitHub</title>
</head>
<body>
    <h3>Teste GitHub - SFTP Deploy</h3>
    <p>Adicionei do lado do servidor uma pasta, ser� que vai funcionar ?</p>
    <a href="summary">Home Summary</a>
    <div id="content">
        <?php

            $url = explode("/", ((!isset($_GET['url']))?"summary":$_GET['url']));

            var_dump($url);

            if(file_exists($url[0] ."/". $url[0] .".php")){
                include_once $url[0]."/".$url[0].".php";
            }
        ?>
    </div>
</body>
</html>