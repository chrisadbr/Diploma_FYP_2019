<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type = "text/css" href="css/index.css">
    <link rel="stylesheet" href="css/blog.css">
    <script type = "text/javascript" src = "js/main.js"></script>
    <title>Blog</title>
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
                <a href="blog.php" id = "active">Blog</a>
                <a href="contact.php">Contact</a> 
            </div>
        </div>
    </div>
    <section class="blog_banner">
        <div class="blog_header">Blog</div>
    </section>
    <div class="blog_container" align = "center">
        <div class="_article_container">
                <div class="date">
                    <time datetime = "04-04-2019">May, 5, 2019</time>
                    <div class="topic">Cryptocurrencies</div>
                </div>
                
                <div class="blog_pic">
                    <img src="Images/cryptocurrency.jpg" alt="">
                </div>
                <div class="article">
                    Cryptocurrency is a digital currency built with cryptographic 
                    protocols that make transactions secure and difficult to fake.The
                    most important feature of a cryptocurrency is that it is not 
                    controlled by any central authority: the decentralized nature of 
                    blockchain makes cryptocurrency theoretically immune to the old 
                    ways of government control and interference. Cryptocurrencies 
                    make it easier to conduct any transactions, for transfers 
                    are simplified through use of public and private keys for security 
                    and privacy purposes. These transfers can be done with minimal 
                    processing fees, allowing users to avoid the steep fees charged 
                    by traditional financial institutions.
                    <div class="blog_link">
                        <a href="blog_page/cryptocurrency.php">Read More</a>
                    </div>
                </div>
        </div>

        <div class="_article_container">
                <div class="date">
                    <time datetime = "04-04-2019">May, 4, 2019</time>
                    <div class="topic">Cryptanalysis</div>
                </div>
                <div class="blog_pic">
                    <img src="Images/blog3.jpeg" alt="">
                </div>
                <div class="article">
                    Cryptanalysis is the study of analyzing information 
                    systems in order to “discover” or “crack” the hidden 
                    or secret aspects of those systems. More specifically, 
                    cryptanalysis is the study of breaching cryptographic
                    security systems in order to obtain access to the information
                    contained within encrypted messages without necessarily knowing
                    the cryptographic key used to encrypt the information. 
                    The field also includes the study of targeting weaknesses 
                    in the implementation of cryptographic algorithms 
                    which is referred to as a side-channel attack. Throughout
                    the history of the field, the methods of cryptanalysis 
                    have evolved over the years to adapt to the increasing
                    <div class="blog_link">
                        <a href="blog_page/cryptanalysis.php">Read More</a>
                    </div> 
                </div>
        </div>

        <div class="_article_container">
                <div class="date">
                    <time datetime = "04-04-2019">May, 1, 2019</time>
                    <div class="topic">Hacking</div>
                </div>
                <div class="blog_pic">
                    <img src="Images/hacker.jpg" alt="">
                </div>
                <div class="article">
                    Hacking refers to activities that seek to compromise digital devices, 
                    such as computers, smartphones, tablets, and even entire networks. 
                    And while hacking might not always be for malicious purposes, 
                    nowadays most references to hacking, and hackers, characterize 
                    it/them as unlawful activity by cybercriminals—motivated by financial 
                    gain, protest, information gathering (spying), and even just for the 
                    “fun” of the challenge. Many think that “hacker” refers to some self-taught 
                    whiz kid or rogue programmer skilled at modifying computer hardware 
                    or software so it can be used in ways outside the original developers' 
                    intent. But this is a narrow view that doesn't begin to encompass 
                    the wide range of reasons why someone turns to hacking.
                    <div class="blog_link">
                        <a href="blog_page/hacking.php">Read More</a>
                    </div>
                </div>
        </div>

        <div class="_article_container">
                <div class="date">
                    <time datetime = "04-04-2019">April, 31, 2019</time>
                    <div class="topic">Identity theft</div>
                </div>
                <div class="blog_pic">
                    <img src="Images/id_theft.jpg" alt="">
                    <div class="article">
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
                    <div class="blog_link">
                    <a href="blog_page/identity_theft.php">Read More</a>
                    </div>
                </div>
                </div>
        </div>
                <div class="_article_container_last">
                <div class="date">
                    <time datetime = "04-04-2019">April, 30, 2019</time>
                    <div class="topic">Cryptography</div>
                </div>
                <div class="blog_pic">
                    <img src="Images/crypto.jpeg" alt="">
                </div>
                <div class="article">
                    Cryptography is an important aspect when we deal with network security.
                    ‘Crypto’ means secret or hidden. Cryptography is the science of secret 
                    writing with the intention of keeping the data secret. Cryptanalysis, 
                    on the other hand, is the science or sometimes the art of breaking 
                    cryptosystems. These both terms are a subset of what is called as Cryptology.
                    Cryptography is classified into symmetric cryptography, asymmetric cryptography and hashing.
                    Below are the description of these types.
                    <div class="blog_link">
                        <a href="blog_page/cryptography.php">Read More</a>
                    </div>
                </div>
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