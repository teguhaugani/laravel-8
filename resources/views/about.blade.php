<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Teguh Blog | About</title>
</head>
<body>
    <h1>Halaman About</h1>
    <h2><?php echo $name; ?></h2>
    <h2><?= $email; ?></h2>
    <img src="img/<?= $image; ?>" alt="<?= $name; ?>" width="200px" >
</body>
</html>