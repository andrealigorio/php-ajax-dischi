<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <title>Dischi</title>
</head>

<body>
    <div id="app">
        <div class="header">
            <div class="logo">
                <img src="img/logo.png" alt="Logo Spotify">
            </div>
        </div>
        <div class="container">
            <div v-for="card in cards" class="card">
                <div class="poster">
                    <img :src=card.poster alt="">
                </div>
                <div class="title">
                    {{card.title}}
                </div>
                <div class="author">
                    {{card.author}}
                </div>
                <div class="year">
                    {{card.year}}
                </div>
            </div>
        </div>
    </div>
    <script src="js/main.js"></script>
</body>

</html>