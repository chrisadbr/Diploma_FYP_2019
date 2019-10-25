<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type = "text/css" href="css/index.css">
    <script type = "text/javascript" src = "js/main.js"></script>
    <link rel="stylesheet" type = "text/css" href="css/courses.css">
    <title>Courses</title>
    <script>
            function anonymBrowser(){
                location.href = "anonymousBrowsing/docAnonymousBrowsing.php";
            }
            function cyberForensics(){
                location.href = "cyberForensics/docCyberForensics.php";
            }
            function hacking(){
                location.href = "hacking/docHacking.php";
            }
            function insideThreat(){
                location.href = "insideThreat/docInsideThreat.php";
            }
            function internetSecurity(){
                location.href = "internetSecurity/docInternetSecurity.php";
            }
            function malVirus(){
                location.href = "viruses_malware/docVirusMalware.php";
            }
    </script>
</head>
<body>
    <div class="log-bar">
        <span id = "user">Welcome <?php echo  $_SESSION['user'];?></span>
        <a href="logout.php?logout"><button>Logout</button></a>
    </div>
     <div class = "topNav">
        <div  id = "p-title">Cyber<span id = "title">School</span></div>
            <div class="link">
                <a href="index.php">Home</a>
                <a href="about_us.php">About</a>
                <a href = "books.php">Books</a>
                <a href="blog.php">Blog</a>
                <a href="contact.php">Contact</a> 
            </div>
    </div>
    <div></div>
    <section id="course_banner">
        <div class="banner_tittle">
            <h1>Access free courses now</h1>
        </div>
    </section>
     <div class="all-courses">
         <div class="container_1">
         <div class="course_container">
            <div id="course_pic">
                <img src="Images/anonym_pic.jpg" alt="">
            </div>
            <div id="course_tittle">
                <h2>Anonymous browsing</h2>
                <p>
                    Anonymous web browsing refers to the utilization of the 
                    World Wide Web that hides a user's personally identifiable 
                    information from websites visited. Anonymous web browsing 
                    can be achieved via proxy servers...
                </p>
            </div>
            <div id="addDetails">
                <div>
                    <img src="Icons/lang.png" alt=""> 
                    <div id = "align-right">Language: English</div>
                </div>
                <div>
                    <img src="Icons/coin.png" alt="">
                     <div id = "_align-right">Course available for free</div>
                </div>
            </div>
            <div id="link_Page">
                <button onclick = "anonymBrowser()">TAKE COURSE</button>
            </div>
        </div>

        <div class="course_container">
            <div id="course_pic">
                <img src="Images/forensics.jpg" alt="">
            </div>
            <div id="course_tittle">
                <h2>Cyber Forensics</h2>
                <p>
                    Cyberforensics is an electronic discovery technique used to 
                    determine and reveal technical criminal evidence. It often 
                    involves electronic data storage extraction for legal purposes.
                    Although still in its infancy
                </p>
            </div>
            <div id="addDetails">
                <div>
                    <img src="Icons/lang.png" alt=""> 
                    <div id = "align-right">Language: English</div>
                </div>
                <div>
                    <img src="Icons/coin.png" alt="">
                     <div id = "_align-right">Course available for free</div>
                </div>
            </div>
            <div id="link_Page">
                <button onclick = "cyberForensics()">TAKE COURSE</button>
            </div>
        </div>

        <div class="course_container">
            <div id="course_pic">
                <img src="Images/hacker.jpg" alt="">
            </div>
            <div id="course_tittle">
                <h2>Hacking</h2>
                <p>
                    Hacking generally refers to unauthorized intrusion into a 
                    computer or a network. The person engaged in hacking activities 
                    is known as a hacker. This hacker may alter system or security 
                    features to accomplish 
                </p>
            </div>
            <div id="addDetails">
                <div>
                    <img src="Icons/lang.png" alt=""> 
                    <div id = "align-right">Language: English</div>
                </div>
                <div>
                    <img src="Icons/coin.png" alt="">
                     <div id = "_align-right">Course available for free</div>
                </div>
            </div>
            <div id="link_Page">
                <button onclick = "hacking()">TAKE COURSE</button>
            </div>
        </div>

        <div class="course_container">
            <div id="course_pic">
                <img src="Images/insideThreat.jpg" alt="">
            </div>
            <div id="course_tittle">
                <h2>Inside Threat</h2>
                <p>
                    An insider threat is a malicious threat to an organization that comes 
                    from people within the organization, such as employees, former 
                    employees, contractors or business associates, who have inside 
                    information
                </p>
            </div>
            <div id="addDetails">
                <div>
                    <img src="Icons/lang.png" alt=""> 
                    <div id = "align-right">Language: English</div>
                </div>
                <div>
                    <img src="Icons/coin.png" alt="">
                     <div id = "_align-right">Course available for free</div>
                </div>
            </div>
            <div id="link_Page">
                <button onclick = "insideThreat()">TAKE COURSE</button>
            </div>
        </div>

        <div class="course_container">
            <div id="course_pic">
                <img src="Images/internetSec.jpg" alt="">
            </div>
            <div id="course_tittle">
                <h2>Internet Security</h2>
                <p>                  
                    Internet security is a catch-all term for a very broad 
                    issue covering security for transactions made over the 
                    Internet. Generally, Internet security encompasses browser 
                    security, the security of data entered through a Web form.
                </p>
            </div>
            <div id="addDetails">
                <div>
                    <img src="Icons/lang.png" alt=""> 
                    <div id = "align-right">Language: English</div>
                </div>
                <div>
                    <img src="Icons/coin.png" alt="">
                     <div id = "_align-right">Course available for free</div>
                </div>
            </div>
            <div id="link_Page">
                <button onclick = "internetSecurity()">TAKE COURSE</button>
            </div>
        </div>

        <div class="course_container">
            <div id="course_pic">
                <img src="Images/virus.jpg" alt="">
            </div>
            <div id="course_tittle">
                <h2>Malware and Viruses</h2>
                <p>
                    A computer virus is a program that can replicate itself and 
                    spread through all computers. Malware is any kind of 
                    unwanted software that is installed without your consent on 
                    your computer. Viruses..
                </p>
            </div>
            <div id="addDetails">
                <div>
                    <img src="Icons/lang.png" alt=""> 
                    <div id = "align-right">Language: English</div>
                </div>
                <div>
                    <img src="Icons/coin.png" alt="">
                     <div id = "_align-right">Course available for free</div>
                </div>
            </div>
            <div id="link_Page">
                <button onclick = "malVirus()">TAKE COURSE</button>
            </div>
        </div>
    </div>
    <br><br><br><br>
    <div class="center">
        <div class="pagination">
             <a href="courses.php">1</a>
            <a href="course_pg2.php" class="active">2</a>
        </div>
     </div>
     <br><br>
</div>

     <!---- Footer ---->
     <footer class = "footer">
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
                    <a href="register.php" class = 'exclude'>Register</a>       
                </div>             
                <div id="upbtn">
                    <a href=""><img src="Icons/upbtn.png" alt=""></a>
                </div>        
            </div>
    </footer>
</body>
</html>