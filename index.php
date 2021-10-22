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
            <?php foreach($database as $album) { ?>
                <div class="album">
                    <img src="<?php echo $album['poster'] ?>">
                    <h2><?php echo $album['title']?></h2>
                    <div><?php echo $album['author']?></div>
                    <div><?php echo $album['year']?></div>
                </div>
            <?php } ?>
        </div>
    </main>
</body>
</html>