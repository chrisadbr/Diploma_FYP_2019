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
      function cyrptoGraphy(){
            location.href = "cryptography/docCryptography.php";
        }
        function computetNetworking(){
            location.href = "computer_networking/docComputerNetworks.php";
        }
        function idTheft(){
            location.href = "identity_theft/docIdentityTheft.php";
        }
        function cryptanalysis(){
            location.href = "cryptanalysis/docCryptanalysis.php";
        }
        function cryptocurrency(){
            location.href = "cryptocurrency/docCryptocurrency.php";
        }
        function netSecurity(){
            location.href = "networkSecurity/docNetworkSecurity.php";
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
                <img src="Images/crypto.jpeg" alt="">
            </div>
            <div id="course_tittle">
                <h2>Cryptography</h2>
                <p>
                    Cryptography is an indispensable tool for protecting information 
                    in computer systems. In this course you will learn the inner workings
                     of cryptographic systems and how to correctly use them..
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
                <button onclick = "cyrptoGraphy()">TAKE COURSE</button>
            </div>
    </div>
        <div class="course_container">
            <div id="course_pic">
                <img src="Images/net7.jpg" alt="">
            </div>
            <div id="course_tittle">
                <h2>Computer Networking</h2>
                <p>
                    Computer networking is an engineering discipline that aims to 
                    study and analyze the communication process among various 
                    computing devices or computer systems that are linked, or networked,
                    together ...
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
                <button onclick = "computetNetworking()">TAKE COURSE</button>
            </div>
        </div>
        <div class="course_container">
            <div id="course_pic">
                <img src="Images/id_theft.jpg" alt="">
            </div>
            <div id="course_tittle">
                <h2>Identity Theft</h2>
                <p>
                   Identity theft means the thief uses personal information to 
                    open new accounts. The thief might open a new credit card account, 
                    establish cellular phone service or open a new checking account ..
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
                <button onclick = "idTheft()">TAKE COURSE</button>
            </div>
        </div>

        <div class="course_container">
            <div id="course_pic">
                <img src="Images/net_crypta.jpg" alt="">
            </div>
            <div id="course_tittle">
                <h2>Cryptanalysis</h2>
                <p>
                    Cryptanalysis is the decryption and analysis of codes, ciphers 
                    or encrypted text. Cryptanalysis uses mathematical formulas to 
                    search for algorithm vulnerabilities and break into cryptography ..
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
                <button onclick = "cryptanalysis()">TAKE COURSE</button>
            </div>
        </div>

        <div class="course_container">
            <div id="course_pic">
                <img src="Images/cryptocurrency.jpg" alt="">
            </div>
            <div id="course_tittle">
                <h2>Cryptocurrency</h2>
                <p>
                    A cryptocurrency is a digital or virtual currency that 
                    uses cryptography for security. A cryptocurrency is difficult 
                    to counterfeit because of this security feature. Many 
                    cryptocurrencies ..
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
                <button onclick = "cryptocurrency()">TAKE COURSE</button>
            </div>
        </div>

        <div class="course_container">
            <div id="course_pic">
                <img src="Images/net_sec.jpg" alt="">
            </div>
            <div id="course_tittle">
                <h2>Network security</h2>
                <p>
                    Network security is a broad term that covers a multitude
                     of technologies, devices and processes. In its simplest term, 
                     it is a set of rules and configurations designed to protect and defend..
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
                <button onclick = "netSecurity()">TAKE COURSE</button>
            </div>
        </div>
    </div>
    <br><br><br>
    <div class="center">
        <div class="pagination">
             <a href="courses.php" class="active">1</a>
            <a href="course_pg2.php">2</a>
        </div>
        <br><br>
        </div>
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
