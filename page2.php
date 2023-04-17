<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>

<body>
    <h1>Badwords</h1>

    <p><?php echo $_GET['paragraph'] ?></p>

    <?php
    echo '<small>Questo testo contiene <strong>' .strlen($_GET['paragraph']). '</strong> caratteri.</small>';
    ?>

    <hr>
    <p><?php echo str_replace($_GET['word'], '***', $_GET['paragraph']); ?></p><br>

    <?php
    $newStrLen = str_replace($_GET['word'], '***', $_GET['paragraph']);
    echo '<small>Questo testo contiene <strong>' .strlen($newStrLen). '</strong> caratteri.</small>';
    ?>



</body>

</html>