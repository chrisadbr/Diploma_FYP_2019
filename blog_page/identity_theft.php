<?php
    date_default_timezone_set('Africa/Nairobi');
    include 'blogConn.php';
    include 'identityComment.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type = "text/css" href="../css/index.css">
    <link rel="stylesheet" href="../css/identityTheft.css">
    <script type = "text/javascript" src = "../js/main.js"></script>
    <title>Identity Theft</title>
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
        <div class="article_container">
            <div>
                <h1>Identity Theft</h1>
                <img src="../Images/blog1.jpg" alt="">
            </div>
            <div class="identity_container">
                <h2>What is identity theft?</h2>
                <p>
                    Identity theft is a growing problem and a very troubling one. 
                    The concept is rather simple, though the process can be complex,
                    and the consequences for the victim can be quite severe. The idea is
                    simply for one person to take on the identity of another. This is 
                    usually attempted to make purchases; but identity theft can be done
                    for other reasons, such as obtaining credit cards in the victim’s name,
                    or even driver’slicenses. If the perpetrator obtains a credit card 
                        in someone else’s name, then he can purchase products and the 
                        victim of this fraud is left with debts she was not aware of and 
                        did not authorize.
                </p>
                <p>
                    In the case of getting a driver’s license in the victim’s name, 
                    this fraud might be attempted to shield the perpetrator from the 
                    consequences of his or her own poor driving record. For example, 
                    a person might get your driving information to create a license 
                    with his or her own picture. Perhaps the criminal in this
                    case has a very bad driving record and even warrants out for 
                    immediate arrest. Should the person be stopped by law enforcement officers,
                    he or she can then show the fake license. When the police officer checks 
                    the license, it is legitimate and has no outstanding warrants. However, the ticket the criminal 
                    receives will be going on your driving record, because it is your information on 
                    the driver’s license. It is also unlikely that the perpetrator of that fraud 
                    will actually pay the ticket, so at some point you — whose identity was 
                    stolen—will receive notification that your license has been revoked for 
                    failure to pay a ticket. Unless you can then prove, with witnesses, that 
                    you were not at the location the ticket was given at the time it was 
                    given, you may have no recourse but to pay the ticket, in order to 
                    reestablish your driving privileges.
                <p>
                    The U.S. Department of Justice defines identity theft in this manner:6 <br>
                    <em>“Identity theft and identity fraud are terms used to refer to all types 
                    of crime in which someone wrongfully obtains and uses another person’s
                     personal data in some way that involves fraud or deception, typically 
                     for economic gain.”</em>
                </p>
                <h2>Phishing</h2>
                <p>
                    One of the more common ways to accomplish identity theft is via a technique
                    called phishing, which is the process of trying to induce the target to provide 
                    you with personal information. For example the attacker might send out an email 
                    purporting to be from a bank, and telling recipients that there is a problem with
                    their bank account. The email then directs them to click on a link to the bank website 
                    where they can login and verify their account. However, the link really goes to a fake
                    website set up by the attacker. When the target goes to that website and enters 
                    his information, he will have just given his username and password to the attacker.
                </p>
                <h3>Prevent yourself against identity theft</h3>
                <p>
                    When the issue is identity theft, your steps are clear:<br><br>
                    1. Do not provide your personal information to anyone if it is not absolutely 
                    necessary. This rule means that when communicating on the Internet with anyone 
                    you do not personally know, do not reveal anything about yourself; not your age, 
                    occupation, real name, nothing. <br><br>
                    2. Destroy documents that have personal information on them. If you simply throw away bank
                    statements and credit card bills, then someone rummaging through your trash can get a great
                    deal of personal data. You can obtain a paper shredder from an office supply store or many
                    retail department stores for less than Tsh. 120,000.00. Shred these documents before disposing of them.
                    This rule may not seem like it is related to computer security, but information gathered through
                    nontechnical means can be used in conjunction with the Internet to perpetrate identity theft.
                </p>
            </p>
            </div>
        </div>
    </article>
    <div class="identity_form">
        <?php 
            echo "<form action= '".identityComment($conn)."' method = 'POST'>
            <div>
                <input type='text' name = 'identity_user' placeholder = 'Enter your name here'>   
            </div>
            <div id = 'date'>
                <input type='hidden' name = 'identity_date' value = '".date('Y-m-d H:i:s')."'>   
            </div>
            <div>
                <div id = 'identity_comment'>Comment Here</div>
                <textarea name ='message'></textarea>
            </div>
            <div class = 'mButton'>
                <button type = 'submit' name = 'identitySubmit'>Comment</button>
            </div>
        </form>";
        ?>
    </div>
    <div><?php displayIdenityComments($conn)?></div>
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