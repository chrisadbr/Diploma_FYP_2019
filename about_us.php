<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type = "text/css" href="css/index.css">
    <link rel="stylesheet" type = "text/css" href="css/aboutUs.css">
    <script type = "text/javascript" src = "js/main.js"></script>
    <title>About Us</title>
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
                <a href="about_us.php" id = "active">About</a>
                <a href = "login.php">Courses</a>
                <a href="blog.php">Blog</a>
                <a href="contact.php">Contact</a> 
            </div>
        </div> 
        <section id="aboutCover">
                <div id="aboutUsHeader">About - Us</div>
        </section>
        <section>
        <div class = "contain">           
            <div class ="row">                
                <div>
                    <table>
                        <tr>
                            <td class = "col-left">
                                <p>
                                    <span class = "header">Mission</span><br>
                                    Cyber school has a purpose to educate and reduce
                                    cyber crime that has left people and their families 
                                    in great loss. We are here to give you assistance by 
                                    providing you the knowledge.
                                </p>
                            </td>
                            <td>
                                <p>
                                <span class = "header">Goal</span><br>
                                Cyber school is making a great effort trying to reach
                                everybody regardless of their economic status by
                                providing free education at no charge at all. We understand
                                many people have become victims due to lack of knowledge.
                                We are bridging the gap by providing free education.
                                </p>      
                            </td>
                        </tr>
                        <tr>
                            <td class = "col-left">
                                <p>
                                <span class = "header">Focus</span><br>
                                The Cyber school platform is going to cover all people 
                                in World who are interested in security matter like cyber-crime, 
                                hacking that will help the society in general to free from crime 
                                also help the government in case of attacking crimes this knowledge 
                                is provided via some books, question and answers and have profession 
                                skills in security field.
                                </p>
                            </td>
                            <td>
                                <p>
                                <span class = "header">Purpose</span><br>
                                Cyber security is a major issue that has affected 
                                many online users in the modern world. 
                                This is mainly attributed to the current technological 
                                development that has resulted to invention of many 
                                applications thus putting the life of many online users at 
                                risk due to the increased cases of cyber attackers. 
                                </p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            </div>
        </div>     
    </section>
    <!-----
    <div class="teamContainer">
        <div class="stmTeam">
            <h1>Meet</h1>
            <h1>our</h1>
            <h1>Team</h1>
        </div>
        <div class="teamPic">
            <div>
                    <img src="Images/student2.jpg" alt="">
                    <h3>Name</h3>
                     <p>System Admin</p>
            </div>
            <div>
                    <img src="Images/student2.jpg" alt="">
                    <h3>Name</h3>
                     <p>System Admin</p>
            </div>
            <div>       
                     <img src="Images/student2.jpg" alt="">
                    <h3>Name</h3>
                     <p>System Admin</p>
            </div>
    </div>
    </div>
    ------>
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
                    <a href="expert.php">Expert</a>
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