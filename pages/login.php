<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN | ASRAMA </title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <div class="container">
        <div class="welcome-section">
            <h2>Welcome to website</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
        </div>
        <div class="login-section">
            <h3>USER LOGIN</h3>
            <form action="login.php" method="post" enctype="multipart/form-data">
                <div class="input-group">
                    <span class="icon">&#128100;</span>
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="input-group">
                    <span class="icon">&#128274;</span>
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <div class="options">
                    <label class="remember"><input type="checkbox" name="remember"> Remember</label>
                    <a href="#" class="forgot">Forgot password?</a>
                </div>
                <input type="submit" value="LOGIN" class="login-btn">
            </form>
        </div>
    </div>
    <footer>
    </footer>
    <script src="../js/login.js"></script>
</body>
</html>