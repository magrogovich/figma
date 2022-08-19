<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
    <title>Sign in</title>
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
        <p>create account</p>
        <form action="pass.php" method="post" onsubmit="return verif()" name="f">
            <table>
                <tr>
                    <td id="left">email:</td>
                    <td><input name="email" type="email" id="box" required></td>
                </tr>
                <tr>
                    <td id="left">first name:</td>
                    <td><input type="text" name="fname" id="box"></td>
                </tr>
                <tr>
                    <td id="left">last name:</td>
                    <td><input type="text" name="lname" id="box"></td>
                </tr>
                <tr>
                    <td id="left">username:</td>
                    <td><input type="text" name="uname" id="box"></td>
                </tr>
                <tr>
                    <td id="left">password:</td>
                    <td><input type="password" name="pwd" id="box"></td>
                </tr>
                <tr>
                    <td id="left">confirm password:</td>
                    <td><input type="password" name="cpwd" id="box"></td>
                </tr>
    
                <tr>
                    <td  id="left" class="boxs">
                        <input type="checkbox" name="age" id=""><span>I'm over 13 year old</span><br><br>
                        <input type="checkbox" name="accept" id=""><span>I accept all the terms and conditions</span>
                    </td>
                </tr>
    
                <tr id="last">
                    <td><input type="submit" id="submit" value="Sign in"></td>
                    <td><input type="reset" id="submit" value="reset"></td>
                </tr>
    
                <tr>
                    <td id="left">  <a href="index.php" id="repass">I already have an account</a></td>
                </tr>
            </table>
        </form>
        <footer>
            <a href="#">policies</a>
            <a href="#">Feedback</a>
        </footer>
        
    </div>
    <script src="function/sign.js""></script>
</body>
</html>
