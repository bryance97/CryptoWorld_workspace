<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <script defer src="server.js"></script>
    <title>Crypto World</title>
</head>

<body>
    <!-- navigation tags - block level element -->
    <header>


        <div class="header_nav">
        <li id="sitename"><a href="https://bryance97.github.io/CryptoWorld_workspace/">Crypto World</a></li>
        <form action="assets\php\login.inc.php" method="POST">
        <li>Email / Username / Number<br><input type="text" id="username-field" class="login-form-field" name="uid"></li>
        <li>Password<br><input type="password" id="password-field" class="login-form-field"  name="pwd"><br><a href="">Forgot login?</a></li>
        <li><button type="submit" id="login-form-submit" name="submit" value="Log In"></button></li>
        </form>
        </div>

    </header>
    <!-- end navigation -->

    <section class="create">
        <div class="create_img">
        <p> </p>
        <img src="assets\images\crypto-world.jpg">
        </div>
    
        
        <div class="create_account">
            <h1>Create an account</h1>
            <p>It's free ... FOREVER.</p>

            <form acction="assets/php/signup.inc.php" method="post">
            <li><input type="text" name="uid" placeholder="Username"></li>
            <li><input type="text" name="pwd" placeholder="Password"></li>
            <li><input type="password" name="pwdrepeat"placeholder="Repeat Password"></li>
            <li><input type="password" name="email" placeholder="E-mail"></li>
            <li><button type="submit" name="submit" value="Create an account"></button></li>

        </div>

    </section>

    <footer>
        <div>
        English (US)
        <p>Designed By Stephanie Plaza, Johnson Maclin, Darnell Davy and  Bryan Cifuentes-Escobar </div>
        </div>
    </footer>
</body>
                                                                                                                                                                                                                                                     
</html> 