<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type = "text/css" href="css/index.css">
    <script type = "text/javascript" src = "js/main.js"></script>
    <title>Home</title>
</head>
<body>
        <div class="log-bar">
            <button onclick = "logButton()">LOGIN</button>
            <button onclick = "regButton()">REGISTER</button>
        </div>
        <div class = "top">
            <div  id = "p-title">Cyber<span id = "title">School</span></div>                   
            <div class="link">
                <a href="index.php" id = "active">Home</a>
                <a href="about_us.php">About</a>
                <a href = "login.php">Courses</a>
                <a href="blog.php">Blog</a>
                <a href="contact.php">Contact</a> 
            </div>
        </div>    
        <section id ="banner">
        <div id="info">
                <p><img src="Icons/lecture.png" alt=""><span class = 
                "segHeader">Lecture notes</span></p>
                <p id = "p1">
                    CyberSchool provides its learners with
                    lecture notes along with quizes at the 
                    end of these lectures just to test their
                    knowledge about the subject.
                </p>
                <div id="info2">
                    <p><img src="Icons/expert1.png" alt=""><span class = 
                "segHeader">Experts</span></p>
                    <p id = "p2">
                        Certified proffesionnal experts are ready to answer
                        any questions accurately that a student might have 
                        at any point.
                    </p>
                    <div id="info3">
                        <p><img src="Icons/computer2.png" alt=""><span class = 
                "segHeader">E - Books</span></p>
                    <p id = "p3">
                        CyberSchool provides students a full access for 
                        available e-books at no extra cost. CyberSchool 
                        is equiped with the large collection of books.
                    </p>
                </div>
                </div>
            </div>   
            <div class="search_courses">
                    <form action= "search.php" method = "POST" >
                        <!-- <input type="text" placeholder = "Search Courses and Books" onkeyup = "liveSearch(this.value)">-->
                        <input type="text" placeholder = "Search Courses and Books" name = 'tittle'>
                        <input type="submit" value = "Search" name = 'submit'>
                </form>
            </div>
            <div id="result"></div>
        </section>
        <section id = "courseInfo">
        <div id="courseHeader">
                <h1 align = "center">Our Courses Categories</h1>
                <p  align = "center">
                    We are currently offering the following caregories of
                    courses and more. Join now!
                </p>
            </div>
            <div class="container">
                <div class="gallery">
                    <img src="Images/crypto.jpeg" alt="">
                </div>
                <div class="desc">
                        <h3>Cryptography</h3>
                        <p>
                            Cryptography is an indispensable tool for protecting 
                            information in computer systems. In this course you 
                            will learn the inner workings of cryptographic systems 
                            and how to correctly use them
                        </p>
                        <h3>Lecure notes</h3> 
                        <h3>Free e-book</h3>
                </div>
            </div>
            <div class="container">
             <div class="gallery">
                    <img src="Images/net_crypta.jpg" alt="">
                    <div class="desc">
                        <h3>Cryptanalysis</h3>
                        <p>
                            Cryptanalysis is the decryption and analysis of codes, ciphers 
                            or encrypted text. Cryptanalysis uses mathematical formulas to 
                            search for algorithm vulnerabilities and break into cryptography ..
                        </p>
                        <h3>Lecure notes</h3> 
                        <h3>Free e-book</h3>
                    </div>
                </div>
            </div>
            <div class="container">
            <div class="gallery">
                    <img src="Images/forensics.jpg" alt="">
                    <div class="desc">
                        <h3>Cyber Forensics</h3>
                        <p>
                            Cyberforensics is an electronic discovery technique used to 
                            determine and reveal technical criminal evidence. It often 
                            involves electronic data storage extraction for legal purposes.
                            Although still in its infancy
                    </p>
                    <h3>Lecure notes</h3> 
                    <h3>Free e-book</h3>
                    </div>
                </div>
            </div>
            <div class="container">
            <div class="gallery">
                    <img src="Images/cryptocurrency.jpg" alt="">
                    <div class="desc">
                        <h3>Cryptocurrencies</h3>
                        <p>
                            A cryptocurrency is a digital or virtual currency that 
                            uses cryptography for security. A cryptocurrency is difficult 
                            to counterfeit because of this security feature. Many 
                            cryptocurrencies ..
                        </p>
                        <h3>Lecure notes</h3> 
                        <h3>Free e-book</h3>
                    </div>
                </div>
            </div>
            <div class="container">
            <div class="gallery">
                    <img src="Images/idTheft.jpg" alt="">
                    <div class="desc">
                        <h3>Identity theft</h3>
                        <p>
                            Identity theft means the thief uses personal information to 
                            open new accounts. The thief might open a new credit card account, 
                            establish cellular phone service or open a new checking account ..
                        </p>
                        <h3>Lecure notes</h3> 
                        <h3>Free e-book</h3>
                    </div>
                </div>
            </div>
            <div class="container">
            <div class="gallery">
                    <img src="Images/net_sec.jpg" alt="">
                    <div class="desc">
                        <h3>Network security</h3>
                        <p>
                            Network security is a broad term that covers a multitude
                            of technologies, devices and processes. In its simplest term, 
                            it is a set of rules and configurations designed to protect and defend..
                        </p>
                        <h3>Lecure notes</h3> 
                        <h3>Free e-book</h3>             
                    </div>
                </div>
            </div>
        </section>
        <section id="cover2">
            <div id="container2">
                <div id="containerDetails">
                    <p>
                        "I have really enjoyed learning Cryptocurrencies through
                        CyberSchool. I have learned a lot in a short
                        time compared to any other avilable online
                        learnig programs. CyberSchool is equiped with 
                        full online support that is available 24/7".
                </div>
                <div id="stu_name">
                    <p>  Rashida Jones Malale   </p>
                </div>
                <div id="btnJoin">
                    <button onclick = "redirect()">JOIN US NOW</button>
                </div>
            </div>
        </section>
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