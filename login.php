<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <h1>Login</h1>
    <form action="handler.php" method="post">
        <input type="username" name="username" placeholder="Username.." required><br> 
        <input type="password" name="password" placeholder="Password.." required><br>
        <button type="submit" name="aksi" value="login">Login!</button>
    </form><br>
    <a href="register.php">Register disini</a>
    <a href="index.php"><button>Back home</button></a>kh
</body>
</html>