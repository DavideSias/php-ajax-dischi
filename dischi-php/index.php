<?php
    include_once __DIR__ . '/db/data.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Songs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <header>
    <div class="navbar p-2">
    <img src="assets/logo-small.svg" alt="logo">
  </div>
    </header>
    <main>
        <div class="container p-5 ">
            <div class="row row-cols-1 row-cols-lg-6 row-cols-md-4 row-cols-sm-3 justify-content-between">
                <?php foreach ($arrSongs as $song) { ?>
                    <div class="card col text-center p-2 m-1 bg_color">
                        <img src="<?= $song['poster']?>" class="card-img-top" alt="<?= $song['title']?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $song['title']?></h5>
                            <p class="card-text sub_text"><?= $song['author']?></p>
                            <p class="card-text sub_text"><?= $song['year']?></p>
                        </div>
                    </div> <?
                } ?>
            </div>
        </div>
    </main>
</body>
</html>