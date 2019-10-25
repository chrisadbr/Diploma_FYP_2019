<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type = "text/css" href="css/login.css">
    <link rel="stylesheet" type = "text/css" href="css/index.css">
    <script type = "text/javascript" src = "js/main.js"></script>
    <title>Login</title>
</head>
<body>
    <div class="log-bar">
        <button onclick = "logButton()">LOGIN</button>
        <button onclick = "regButton()">REGISTER</button>
    </div>
    <div class = "top">
        <div  id = "p-title">Cyber<span id = "title">School</span></div>
            <div class="link">
                <a href="index.php">Home</a>
                <a href="about_us.php">About</a>
                <a href = "login.php">Courses</a>
                <a href="blog.php">Blog</a>
                <a href="contact.php">Contact</a> 
            </div>
    </div>    
    <div id="logPic">
       <div class="log-title">Login</div> 
    </div>    
    <div class="login-container" align = "center">
            <form action="process/log_process.php" method = "POST">
                    <div id="errorMsg">
                        <?php
                            if(@$_GET['logError'] == true){
                        ?>
                            <div>
                                <?php echo $_GET['logError'];?>
                            </div>
                        <?php
                            }
                        ?>
                    </div>
                <table align = "center"> 
                    <tr>
                        <td>
                            <label for="username">Username:</label>
                        </td>
                        <td>
                            <input type="text" id = "username" name = "username"
                            placeholder = "Enter username" autocomplete = "off">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="pass">Password:</label>
                        </td>
                        <td>
                            <input type="password" id = "pass" name = "pass"
                            placeholder = "Enter password">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan = "2">
                            <button class="loginBtn" name = "login">
                                <img src="Icons/login.png" class = "admin-btn">
                                LOGIN
                            </button>
                        </td>
                    </tr>
                </table>
            </form>
            <div class="logMsg">
                <p>Not a member please <a href="register.php">register</a></p>
            </div>
    </div>
    <!---- Footer ---->
    <footer>
            <div class="footer_container">
                <div id="smedia">
                    <div id="subscribe">
                        <p>News Letter</p>
                        <span id = "response"></span><br>
                        <input type="text" name = "subscribe" 
                        placeholder = "Enter you email here" id = "subscriber">
                        <button type = "submit" onclick = "return false"
                        onmousedown = "subscribe();">Subscribe</button>
                    </div>
                        <br>
                        <a href="#"> <img src="Icons/pinterest2.png" alt=""></a>
                        <a href="#"><img src="Icons/facebook.png" alt=""></a>
                        <a href="#"><img src="Icons/instagram.png" alt=""></a>
                        <a href="#"><img src="Icons/youtube.png" alt=""></a>
                        <a href="#"><img src="Icons/gmail_2.png" alt=""></a>
                        <a href="#"><img src="Icons/linked2.png" alt=""></a> 
                        <a href="#"><img src="Icons/twit_icon.png" alt=""></a>        
                </div>
            </div>
            <br>
            <div class="link-container">
                <div class="links">
                    <a href="admin_login.php"> Admin</a>
                    <a href="#">Expert</a>
                    <a href="#">Teacher</a>
                    <a href="login.php">Login</a>
                    <a href="register.php" class = "exclude">Register</a>       
                </div>
                
                <div id="upbtn">
                    <a href=""><img src="Icons/upbtn.png" alt=""></a>
                </div>        
            </div>
    </footer>
</body>
</html>