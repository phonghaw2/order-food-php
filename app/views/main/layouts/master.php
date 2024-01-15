<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="/css/main.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ionicons/7.2.2/ionicons.min.js" integrity="sha512-8O7VIjJxO2P/Vfm34bYnEbPwocNkwUQdzJCYooCDWP9MT4GpPw5Ktmk9NxVyWfrzDlXnbCsZzSUR81Etc6gv0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <div class="container">
        <?php require_once 'sidebar.php' ?>
        <div class="main-container">
            <?php require_once '../app/views/' . $content . '.php' ?>
        </div>
    </div>
    <script src="/js/front-js/jquery.min.js"></script>
    <script src="/js/front-js/sweetalert2.all.min.js"></script>
    <script src="/js/boostrap/bootstrap.min.js"></script>
</body>
</html>