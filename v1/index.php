<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi PHP</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="../style.css">

</head>
<body>

    <?php include('../database.php') ?>

    <header>

    </header>

    <main>
        <div class="container d-flex justify-content-center flex-wrap">
            <?php foreach($disks as $disk) { ?>
            <div class="disk-card text-center">
                <img src="<?php echo $disk['coverImgSrc']; ?>" alt="">
                <h5><?php echo $disk['title']; ?></h5>
                <p><?php echo $disk['author']; ?></p>
                <p><?php echo $disk['releaseYear']; ?></p>
            </div>
            <?php }; ?>
        </div>
    </main>
</body>
</html>