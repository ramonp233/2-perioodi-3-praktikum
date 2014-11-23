<!DOCTYPE HTML>
<html>
<head>
    <title>Praktikum 3</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" type"text/css" href="style.css">
</head>
<body>
    <?php
    $username = $_POST["username"];
    $password = $_POST["password"];
    ?>
    <pre>
        <?php
        print_r($_POST);
        ?>
    </pre>
    <br><br>
    <?php
    echo "Tere {$username}! Teie parool on {$password}.";
    ?>
    <br><br>
    <?php if ($username = $_POST["username"] && $password = $_POST["password"]) {
        echo "Tere {$username}! Teie parool on {$password}";}
    else {echo "Kasutajanimi või parool on puudu.";};
    ?>
</body>
</html>