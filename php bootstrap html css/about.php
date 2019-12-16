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
        <h3>Контактная информация</h3>
        <form action="check.php" method="post">
            <input type="email" name="email" placeholder="Введите ваш email" class= "form-control" ><br>
            <textarea name="message" placeholder="Введите ваше сообщение" class= "form-control" ></textarea><br>
            <button type="submit" name="send" class="btn btn-success">Отправить</button>
        </form>
    </div>

    <?php require "blocks/footer.php" ?>
</body>

</html>