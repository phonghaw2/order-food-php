<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link href="/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="/css/login.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="w-350 mx-auto mt-30vh">
                <div class="card border-0 shadow rounded-3 my-5">
                    <form action="/admin/auth/loginProcess" class="form-login" method="post">
                        <input name="username" placeholder="Your name" class="<?php echo (isset($error)) ? $error : ''; ?> enter-name login-input" value="">
                        <input type="password" name="password" placeholder="password" class="enter-name login-input" value="">
                        <button class="btn-enter" type="submit">Enter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="/js/bootstrap/bootstrap.min.js"></script>
</body>

</html>