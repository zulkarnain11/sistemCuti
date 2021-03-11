<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
      <div class="about">
        <img src="image/logoktd1.png" />
        <h1>Online Leave Management System</h1>
      </div>
      <div class="log-in">
        <form action="#" method="POST">
            <h1>LOGIN</h1>
                           
            <img src="icon/user.svg" width="40px"/>
            <input type="text" name="username" placeholder="Username" autocomplete="off"/><br/>
            
            <img src="icon/padlock.svg" width="40px"/>
            <input type="password" name="pwd" placeholder="Password"/>
            

            <input type="submit" name="submit" value="Login"/>
            <p><a href="adminlogin.php">Login as admin ..</p>
        </form>
      </div>
    </div>
    <div class="footer">

    </div>
</body>
</html>
