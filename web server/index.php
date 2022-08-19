<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
    <title>Log in</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="Home.html">Home</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="membership.html">Membership</a></li>
            <li><a href="careers.html">Careers</a></li>
            <li><a href="login.html">Log in </a></li>
            <li><a href="signin.html">Sign in </a></li>
            <li><a href="shop.html">shop</a></li>
        </ul>
    </nav>
    <div class="log">
        <p>Log In</p>
        <form action="auth.php" method="post" name="log" onsubmit="verif()">
            <table>
                <tr>
                    <td id="left">email:</td>
                    <td><input type="email" name='name'id="box" required></td>
                </tr>
                <tr>
                    <td id="left">password:</td>
                    <td><input type="password" name='pass' id="box" required></td>
                </tr>
    
                <tr>
                    <td  id="left"><input type="checkbox" name="rem" required id=""><span>Remember me</span></td>
                </tr>
    
                <tr id="last">
                    <td><input type="submit" id="submit" value="Log in"></td>
                    <td><input type="reset" id="submit" value="reset"></td>
                </tr>
    
                <tr>
                    <td id="left" class="fex">  <a href="#" id="repass">Reset password</a><br><br>
                        <a href="sign.php" id="repass">Create account</a></td>
                </tr>
            </table>
        </form>
        <footer>
            <a href="#">policies</a>
            <a href="#">Feedback</a>
        </footer>
        
    </div>

</body>
</html>
