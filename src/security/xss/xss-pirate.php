<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de piratage</title>
</head>
<body>
    <?php 
    if (isset($_POST["cookies"])){
        echo "Les cookies piratés : " . $_POST["cookie"];
    }
    ?>
</body>
</html>