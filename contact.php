<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type = "text/css" href="css/contact.css">
    <link rel="stylesheet" type = "text/css" href="css/index.css">
    <script type = "text/javascript" src = "js/main.js"></script>
    <title>Contact Us</title>
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
                <a href="contact.php" id = "active">Contact</a> 
            </div>
    </div>    
    <section id="contact-banner">
        <div class="title">Contact - Us</div>
    </section> 
    <div class="form-container" align = "center">     
        <form >
            <table>
                <tr>
                    <td><label for="fName">Your Name:</label></td>
                </tr>
                <tr>
                    <td><input type="text" id = "fName" placeholder = "Enter your name"
                    autocomplete = "off"></td>
                </tr>
                <tr>
                    <td><label for="email">Email:</label></td>
                </tr>
                <tr>
                    <td><input type="email" id = "email" placeholder = "Enter Email"
                    autocomplete = "off"></td>
                </tr>
                <tr>
                    <td><label for="phonenumber">Subject:</label></td>
                </tr>
                <tr>
                    <td><input type="text" id = "subject" placeholder = "Enter the subject"
                    autocomplete = "off"></td>
                </tr>
                <tr>
                    <td><label for="message">Message:</label></td>
                </tr>
                <tr>
                    <td>
                        <textarea id="message" style = "height: 190px">
                        </textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name = "submit"  value = "SEND MESSAGE"
                        onclick = "return false" onmousedown = "contactForm();">
                         <span id="msgError"></span>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <div class="s-media">
            <p align = "center" id = "add_tittle">Contact Us</p>  
                <p><img src="./Icons/home.png" alt="">P.O.Box 000 Dodoma Tanzania</p>
                <p><img src="./Icons/phone.png" alt="">0255713-564212</p>
                <p><img src="./Icons/phone_number.png">Fax: 0255782122765</p>
                <p><img src="./Icons/mail.png">cyberschool@gmail.com</p>
                <p><img src="./Icons/website.png">www.cyberschool.co.tz</p>
            </ul>       
        <div class="icons">
            <a href="#" id = "ic_first"> <img src="./Icons/pinterest.png" alt=""></a>
            <a href="#"> <img src="./Icons/twitter.png" alt=""></a>
            <a href="#"> <img src="./Icons/insta.png" alt=""></a>
            <a href="#"> <img src="./Icons/gmail.png" alt=""></a>
            <a href="#"> <img src="./Icons/linked.png" alt=""></a>
            <a href="#"> <img src="./Icons/fb2.png" alt=""></a>
            <a href="#"> <img src="./Icons/whatsapp.png" alt=""></a>
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