
<?php

include "config.php";

if (isset($_POST['Daftar'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO data (email, password) VALUES ('$email', '$password')";

#    if($db->query($sql)) {
#	    echo "data masuk";
 #   }else {
#	    echo "data gagal";
 #   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/style.css">
    <title>Login Page</title>
</head>
<body>
    <div class="aka"></div>
    <div class="login-container">
        <h2>Daftar Pesbuk</h2>
        <form action="index.php" method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" name="Daftar">
        </form>
    </div>
</body>
</html>



