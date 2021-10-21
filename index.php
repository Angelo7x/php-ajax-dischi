<?php 
    require __DIR__ . "/database.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php dischi</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <?php require __DIR__ . "/Partials/Template/header.php"?>

    <main>
        <div class="albums_container">
            <div class="album">
                <?php foreach($database as $album) { ?>
                    <?php
                    
                     echo echo '<img src="'$album["poster"]'">';

                    ?>

                <?php } ?>
            </div>
        </div>
    </main>
</body>
</html>