<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>my first php progect</title>
</head>

<body>
<?php require "blocks/header.php" ?>
<div class="container mt-5">
        <h1 class="mb-5">Мои статьи</h1>
        <div class=" d-flex flex-wrap">
            <?php
            for ($i = 0; $i < 5; $i++) :
                ?>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Картинка № <?php echo ($i + 1) ?> </h4>
                    </div>
                    <div class="card-body">
                        <img src="img/<?php echo ($i + 1) ?>.jpg" class="img-thumbnail">
                        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Открыть</button>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
        </div>

 <?php require "blocks/footer.php" ?>
</body>

</html>