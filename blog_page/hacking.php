<?php
     date_default_timezone_set('Africa/Nairobi');
     include 'blogConn.php';
     include 'hacking_Comment.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type = "text/css" href="../css/hacking_blog.css">
    <link rel="stylesheet" type = "text/css" href="../css/index.css">
    <script type = "text/javascript" src = "../js/main.js"></script>
    <title>Hacking</title>
</head>
<body>
<div class="log-bar">
            <button onclick = "_logButton()">LOGIN</button>
            <button onclick = "_regButton()">REGISTER</button>
        </div>
        <div class = "top">
            <div  id = "p-title">Cyber<span id = "title">School</span></div>                   
            <div class="link">
                <a href="../index.php">Home</a>
                <a href="../about_us.php">About</a>
                <a href = "../login.php">Courses</a>
                <a href="../blog.php">Blog</a>
                <a href="../contact.php">Contact</a> 
            </div>
        </div>
    </div>  
    <article>
        <div class="hacker_container">
            <h2>Hacking</h2>
            <div>
                <img src="../Images/hacker.jpg" alt="">
            </div>
            <div class="hackingInfo">
                <h2>Who is a hacker?</h2>
                <p>
                    An intelligent individual with excellent computer skills, 
                    with the ability to create and exploreinto the computer's 
                    software and hardware. Hacker's do hack for the sake of their hobbie,
                    showing off, stealing business data, credit card information, email passwords, etc
                </p>
                <h2>Hacking Classes</h2>
                <h3>I.  Black Hackers</h3>
                <p>
                    Individuals with extraordinary computing skills, resorting to malicious or 
                    destructive activities and are also known as crackers.
                </p>
                <h3>II. White Hacker</h3>
                <p>
                    Individuals professing hacker skills and using them for defensive purposes 
                    and are also known as security analyst.
                </p>
                <h3>III.  Grey Hacker</h3>
                <p>
                    Individuals who work both offensively and defensively at various times.
                </p>
                <h2>Phases of hacking</h2>
                <h3>1.  Reconnaissance</h3>
                   <p>
                    This is the first phase where the Hacker tries to collect information about the target. It may include Identifying the Target, finding out the target’s 
                    IP Address Range, Network, DNS records, etc.Let’s assume that an attacker is about to hack a websites’ contacts.
                    He may do so by : using a search engine like maltego, researching the target say a website (checking links, jobs,
                     job titles, email, news, etc.), or a tool like HTTPTrack to download the entire website for later enumeration, 
                     the hacker is able to determine the following:  Staff names, positions, and email addresses.

                   </p>
                <h3>2.	Scanning</h3>
                <p>
                    This phase includes usage of tools like dialers, port scanners, network mappers,
                    sweepers, and vulnerability scanners to scan data. Hackers are now probably 
                    seeking any information that can help them perpetrate attack such as computer
                    names, IP addresses, and user accounts.Now that the hacker has some basic 
                    information, the hacker now moves to the next phase and begins to test the 
                    network for other avenues of attacks. The hacker decides to use a couple methods 
                    for this end to help map the network (i.e. Kali Linux, Maltego and find an email 
                    to contact to see what email server is being used).  The hacker looks for an 
                    automated email if possible or based on the information gathered he may decide 
                    to email HR with an inquiry about a job posting.
                </p>
                <h3>3.  Scanning</h3>
                <p>
                    In this phase, hacker designs the blueprint of the network of the target with the help of data collected during Phase 1 and Phase 2. 
                    The hacker has finished enumerating and scanning the network and now decide that they have a some options to gain access to the network.
                    For example, say hacker chooses Phishing Attack: The hacker decides to play it safe and use a simple phishing attack to gain access.
                    The hacker decides to infiltrate from the IT department.  They see that there have been some recent hires and they are likely not up
                    to speed on the procedures yet.  A phishing email will be sent using the CTO’s actual email address using a program and sent out to
                    the techs.  The email contains a phishing website that will collect their login and passwords.  Using any number of options (phone 
                    app, website email spoofing, Zmail, etc) the hacker sends a email asking the users to login to a new Google portal with their credentials.  
                </p>
                <h3>4.  Maintaining Access</h3>
                <p>
                    Once a hacker has gained access, they want to keep that access for future exploitation and attacks. Once the hacker 
                    owns the system, they can use it as a base to launch additional attacks. In this case, the owned system is sometimes
                    referred to as a zombie system.Now that the hacker has multiple e-mail accounts, the hacker begins to test the 
                    accounts on the domain.  The hacker from this point creates a new administrator account for themselves based on 
                    the naming structure and try and blend in.  As a precaution, the hacker begins to look for and identify accounts
                    that have not been used for a long time.  The hacker assumes that these accounts are likely either forgotten or
                    not used so they change the password and elevate privileges to an administrator as a secondary account in order
                        to maintain access to the network.  The hacker may also send out emails to other users with an exploited file 
                        such as a PDF with a reverse shell in order to extend their possible access.  No overt exploitation or attacks
                        will occur at this time.  
                </p>
                <h3>5.	Clearing Tracks (so no one can reach them)</h3>
                <p>
                    Prior to the attack, the attacker would change their MAC address and run the attacking machine
                     through at least one VPN to help cover their identity.  They will not deliver a direct attack
                      or any scanning technique that would be deemed “noisy”.Once access is gained and privileges 
                      have been escalated, the hacker seek to cover their tracks.  This includes clearing out Sent 
                      emails, clearing server logs, temp files, etc.  The hacker will also look for indications of 
                      the email provider alerting the user or possible unauthorized logins under their account.
                </p>
        </div>
    </article>
    <div class="hacker_form">
        <?php 
            echo "<form action= '".hackerComment($conn)."' method = 'POST'>
            <div>
                <input type='text' name = 'userName' placeholder = 'Enter your name here'>   
            </div>
            <div id = 'date'>
                <input type='hidden' name = 'date' value = '".date('Y-m-d H:i:s')."'>   
            </div>
            <div>
                <div id = 'hacker_comment'>Comment Here</div>
                <textarea name ='message'></textarea>
            </div>
            <div class = 'hacker_btn'>
                <button type = 'submit' name = 'hackingSubmit'>Comment</button>
            </div>
        </form>";
        ?>
    </div>
    <div><?php getHacker_Comment($conn)?></div>
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
                        <a href="#"> <img src="../Icons/pinterest2.png" alt=""></a>
                        <a href="#"><img src="../Icons/facebook.png" alt=""></a>
                        <a href="#"><img src="../Icons/instagram.png" alt=""></a>
                        <a href="#"><img src="../Icons/youtube.png" alt=""></a>
                        <a href="#"><img src="../Icons/gmail_2.png" alt=""></a>
                        <a href="#"><img src="../Icons/linked2.png" alt=""></a> 
                        <a href="#"><img src="../Icons/twit_icon.png" alt=""></a>        
                </div>
            </div>
            <br>
            <div class="link-container">
                <div class="links">
                    <a href="../admin_login.php"> Admin</a>
                    <a href="../expert.php">Expert</a>
                    <a href="../login.php">Login</a>
                    <a href="../register.php" class = 'exclude'>Register</a>       
                </div>             
                <div id="upbtn">
                    <a href=""><img src="../Icons/upbtn.png" alt=""></a>
                </div>        
            </div>
    </footer>
</body>
</html>