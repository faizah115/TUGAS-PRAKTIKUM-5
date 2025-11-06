<!DOCTYPE html>
<html>
<head>
<title>Login Website</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<section class="login-box">
<h2>Login</h2>
<form method="post" action="ceklogin.php">
    <label>Username</label>
    <input type="text" name="username" id="username" placeholder="Masukkan Username" required>

    <label>Password</label>
    <input type="password" name="password" id="password" placeholder="Masukkan Password" required>

    <input type="submit" value="Login">
</form>
</section>
</div>

</body>
</html>
