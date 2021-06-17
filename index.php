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
    <p>Adicionei do lado do servidor uma pasta, será que vai funcionar ?</p>
    <a href="summary/summary.php">Home Summary</a>

    <?php

        $url = explode("/", $_GET['url'] ?? '');

        var_dump($url);
    ?>
</body>
</html>