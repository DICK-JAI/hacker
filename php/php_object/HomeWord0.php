<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form</h1>
    <form method="post">
        USER-ID: <input type="text" name="id"> <br>
        Password: <input type="password" name="passwd"> <br>
        Verification Code: <input type="text" name="captcha"> <br>
        <p>Enter the code: <?php echo $code = rand(1000, 9999); ?></p> 
        <input type="hidden" name="captcha_code" value="<?php echo $code; ?>">
        <input type="submit" value="OK" name="submit">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $user = isset($_POST['id']) ? $_POST['id'] : null;
        $psw = isset($_POST['passwd']) ? $_POST['passwd'] : null;
        $captcha = isset($_POST['captcha']) ? $_POST['captcha'] : null;
        $captcha_code = isset($_POST['captcha_code']) ? $_POST['captcha_code'] : null;

        function login($user, $psw, $captcha, $captcha_code) {
            if ($user == "root" && $psw == "root" && $captcha == $captcha_code) {
                echo "OK";
            } elseif ($captcha != $captcha_code) {
                echo "Error: Verification code incorrect.";
            } else {
                echo "Error: Invalid USER-ID or Password.";
            }
        }
        login($user, $psw, $captcha, $captcha_code);
    }
    ?>
</body>
</html>