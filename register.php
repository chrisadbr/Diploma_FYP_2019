<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type = "text/javascript" src = "js/main.js"></script>
    <link rel="stylesheet" type = "text/css" href="css/index.css">
    <link rel="stylesheet" type = "text/css" href="css/register.css">
    <title>Register</title>
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
                <a href = "#">Courses</a>
                <a href="blog.php">Blog</a>
                <a href="contact.php">Contact</a> 
            </div>
    </div>    
    <section id ="banner">
            <div id="reg-title">Register</div>
     </section>    
    <div class="reg-container" align = "center">
        <form>
      
            <table >
                <tr>
                    <td><label for="fName">Firstname:</label></td>
                    <td><input type="text" name = "fname" id = "fname" 
                    placeholder = "Enter firstname" autocomplete = "off"></td>
                </tr>
                <tr>
                    <td><label for="lName">Lastname:</label></td>
                    <td><input type="text" name = "lname" id = "lname" 
                    placeholder = "Enter lastname" autocomplete = "off"></td>
                </tr>
                <tr>
                    <td><label for="email">Email:</label></td>
                    <td><input type="email" id = "email" name = "email" 
                    placeholder = "username@email.com" autocomplete = "off"></td>
                </tr>
                <tr>
                    <td><label for="pNumber">Phone Number:</label></td>
                    <td><input type="text" id = "pNumber" name = "pNumber" 
                    placeholder = "000-000-000" autocomplete = "off"></td>
                </tr>
                <tr>
                    <td><label for="dob">Date of birth:</label></td>
                    <td><input type="date" id = "dob" name = "dob"></td>
                </tr>
                <tr>
                    <td><label for="username">Username:</label></td>
                    <td><input type="text" id = "username" name = "username"
                    placeholder = "Enter username"></td>
                </tr>
                <tr>
                    <td><label for="pass1">Password:</label></td>
                    <td><input type="password" name = "pass1" id = "pass1"
                    placeholder = "Enter password"></td>
                </tr>
                <tr>
                    <td><label for="pass2">Repeat Password:</label></td>
                    <td><input type="password" name = "pass2" id = "pass2"
                    placeholder = "Reenter password"></td>
                </tr>
                <tr>
                    <td colspan = "2"><input type="submit" id = "erase" value = "Register" 
                    onclick = "return false" onmousedown = "regUser();"> <span id="errorMsg"></span></td>
                </tr>
            </table>
        </form>
    </div
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