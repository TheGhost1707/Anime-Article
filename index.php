<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css"> <!-- Pastikan Anda punya file style.css untuk mengatur tampilan -->
    <link rel="icon" href="img/icon.jpg">
    <title>AnimeBloggers - Login</title>
</head>
<body>
    <div class="form-login">
        <img src="img/login.png" alt="Anime Image">
        <h2 style="position:relative; text-align:center; top:10px;">Login to AnimeBlogger</h2>
        <br>
        <form action="proses_login.php" method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>
        
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
            
            <br>
            <button type="submit" style="position:relative; display:block; margin-left:auto; margin-right:auto; width:200px;">Login</button>
        </form>
    </div>
</body>
</html>
