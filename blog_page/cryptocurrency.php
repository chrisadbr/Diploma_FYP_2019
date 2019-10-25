<?php
    date_default_timezone_set('Africa/Nairobi');
    include 'blogConn.php';
    include 'comment.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type = "text/css" href="../css/cryptocurrency.css">
    <link rel="stylesheet" type = "text/css" href="../css/index.css">
    <script type = "text/javascript" src = "../js/main.js"></script>
    <title>Cryptocurrency</title>
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
        <div class="cry-container">
            <div>
                <h1>Cryptocurrencies</h1>
                <img src="../Images/cryptocurrency.jpg" alt="">
            </div>
            <div class="crypto-info">
                <h3>What is Cryptocurrencies?</h3>
                <p>
                    Cryptocurrency is a digital currency built with cryptographic protocols that 
                    make transactions secure and difficult to fake. The most important 
                    feature of a cryptocurrency is that it is not controlled by any central authority: 
                    the decentralized nature of blockchain makes cryptocurrency theoretically immune 
                    to the old ways of government control and interference. Cryptocurrencies make 
                    it easier to conduct any transactions, for transfers are simplified through use of 
                    public and private keys for security and privacy purposes. These transfers can be done 
                    with minimal processing fees, allowing users to avoid the steep fees charged by traditional 
                    financial institutions.
                </p>
                <h3>How do miners create coins and create transactions?</h3>
                <p>
                    Let‘s have a look at the mechanism ruling the databases of cryptocurrencies. 
                    A cryptocurrency like Bitcoin consists of a network of peers. Every peer has 
                    a record of the complete history of all transactions and thus of the balance 
                    of every account. A transaction is a file that says, “Bob gives X Bitcoin to 
                    Alice“ and is signed by Bob‘s private key. It‘s basic public key cryptography, 
                    nothing special at all. After signed, a transaction is broadcasted in the network, 
                    sent from one peer to every other peer. This is basic p2p-technology. 
                    Nothing special at all, again.
                </p>
                <h3>Blockchain and Cryptocurrency</h3>
                <p>
                    The transaction is known almost immediately by the whole network. But only after a 
                    specific amount of time it gets confirmed. Confirmation is a critical concept in 
                    cryptocurrencies. You could say that cryptocurrencies are all about confirmation.
                    As long as a transaction is unconfirmed, it is pending and can be forged. When 
                    a transaction is confirmed, it is set in stone. It is no longer forgeable, it 
                    can‘t be reversed, it is part of an immutable record of historical transactions: 
                    of the so-called blockchain. Only miners can confirm transactions. This is their 
                    job in a cryptocurrency-network. They take transactions, stamp them as legit and 
                    spread them in the network. After a transaction is confirmed by a miner, every node 
                    has to add it to its database. It has become part of the blockchain.
                </p>
                <h3>Bitcoin</h3>
                <p>
                    The one and only, the first and most famous cryptocurrency. Bitcoin serves as a digital 
                    gold standard in the whole cryptocurrency-industry, is used as a global means of payment 
                    and is the de-facto currency of cyber-crime like darknet markets or ransomware. After 
                    seven years in existence, Bitcoin‘s price has increased from zero to more than 650 Dollar, 
                    and its transaction volume reached more than 200.000 daily transactions.
                </p>
                <h3>Litecoin</h3>
                <p>
                    Litecoin was one of the first cryptocurrencies after Bitcoin and tagged as the silver to the 
                    digital gold bitcoin. Faster than bitcoin, with a larger amount of token and a new mining 
                    algorithm, Litecoin was a real innovation, perfectly tailored to be the smaller brother of 
                    bitcoin. “It facilitated the emerge of several other cryptocurrencies which used its codebase 
                    but made it, even more, lighter“. Examples are Dogecoin or Feathercoin.
                </p>
                <h3>Ethereum</h3>
                <p>
                    The brainchild of young crypto-genius Vitalik Buterin has ascended to the second place in the 
                    hierarchy of cryptocurrencies. Other than Bitcoin its blockchain does not only validate a set of 
                    accounts and balances but of so-called states. This means that Ethereum can not only process 
                    transactions but complex contracts and programs.
                </p>
            </div>
        </div>
    </article>
    
    <div class="formcontainer">
        <?php 
        echo "<form action= '".setComment($conn)."' method = 'POST'>
        <div>
            <input type='text' name = 'userName'placeholder = 'Enter your name here'>   
        </div>
        <div id = 'date'>
            <input type='hidden' name = 'date' value = '".date('Y-m-d H:i:s')."'>   
        </div>
        <div>
            <div id = 'cry_Comment'>Comment Here</div>
            <textarea name ='ujumbe'></textarea>
        </div>
        <div class = 'cryBtn'>
            <button type = 'submit' name = 'commentSubmit'>Comment</button>
        </div>
    </form>";
    ?>
    </div>
    <div id ="cryptoComments"><?php getComment($conn);?></div>
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