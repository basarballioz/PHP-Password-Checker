<!--BB-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Check Password </title>
</head>
<body style="text-align: center;">
<h1> Check Password </h1>
    <form action="" method="post">
        <input type="text" name="password" value="" size="50">
        <button type="submit"> Submit </button>
    </form>

</body>
</html>

<?php

if (isset($_POST['password'])) {
    $password = $_POST['password'];

    if (strlen($password) <= 6) echo "Şifreniz en az 6 karakterden oluşmalıdır!";
    elseif (!preg_match("/[A-ZÖZÇŞÜĞa]+/", $password)) echo "Şifreniz en az bir büyük harf içermelidir!";
    elseif (!preg_match("/[a-zöçşüğ]+/", $password)) echo "Şifreniz en az bir küçük harf içermelidir!";
    elseif (!preg_match("/[0-9]+/", $password)) echo "Şifreniz en az bir rakam içermelidir!";
    elseif (!preg_match("/[\'^£$%&*()}{@#~?><>,|=_+!-.]/" , $password)) echo "Şifreniz en az bir özel karakter içermelidir!";
    else echo "Şifreniz geçerlidir";
}

/*$check = preg_match("@[a-c]@", "abc", $result);

if ($check) {
    echo "Successful!"."<br>";
    print_r($result);
}
else echo  "Halted.";*/