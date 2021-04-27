<?php
include __DIR__ . '/partials/db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Dischi</title>
</head>

<body>
    <?php
    include __DIR__ . '/partials/header.php';
    ?>
    <div class="container">
        <?php foreach ($database as $disc) { ?>
            <div class="card">
                <div class="poster">
                    <img src="<?php echo $disc["poster"] ?>" alt="">
                </div>
                <div class="title">
                    <?php echo $disc["title"] ?>
                </div>
                <div class="author">
                    <?php echo $disc["author"] ?>
                </div>
                <div class="year">
                    <?php echo $disc["year"] ?>
                </div>
            </div>
        <?php } ?>
    </div>
    <script src="js/main.js"></script>
</body>

</html>