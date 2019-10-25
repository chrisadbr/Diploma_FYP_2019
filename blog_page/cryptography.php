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
    <link rel="stylesheet" href="../css/cryptography.css">
    <script type = "text/javascript" src = "../js/main.js"></script>
    <title>Cryptography</title>
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
       <div class="articleContainer">
           <div>
               <h1>Cryptography</h1>
               <img src="../Images/crypto.jpeg" alt="">
           </div>
           <div class="crypto_container">
               <h2>What is Cryptography?</h2>
               <p>
                    Cryptography is an important aspect when we deal with network security.
                    ‘Crypto’ means secret or hidden. Cryptography is the science of secret 
                    writing with the intention of keeping the data secret. Cryptanalysis, 
                    on the other hand, is the science or sometimes the art of breaking 
                    cryptosystems. These both terms are a subset of what is called as Cryptology.
                    Cryptography is classified into symmetric cryptography, asymmetric cryptography and hashing.
                    Below are the description of these types.<br>
                    <h3>Symmetric key cryptography</h3><p>
                    It involves usage of one secret key along with encryption and decryption 
                    algorithms which help in securing the contents of the message. 
                    The strength of symmetric key cryptography depends upon the number 
                    of key bits. It is relatively faster than asymmetric key cryptography. 
                    There arises a key distribution problem as the key has to be transferred 
                    from the sender to receiver through a secure channel.</p>
                    <h3>Assymetric key cryptography</h3><p>
                    It is also known as public key cryptography because it involves usage 
                    of a public key along with secret key. It solves the problem of key 
                    distribution as both parties uses different keys for encryption/decryption. 
                    It is not feasible to use for decrypting bulk messages as it is very slow compared 
                    to symmetric key cryptography.</p>
                    <h3>Hashing </h3><p>
                    It involves taking the plain-text and converting it to a hash value of fixed 
                    size by a hash function. This process ensures integrity of the message as 
                    the hash value on both, sender’s and receiver’s side should match if the 
                    message is unaltered.</p>
               </p>
               <p>
                   <h2>Encryption Algorithms</h2>
                   <h3>Transposition Ciphers</h3><p>
                   In Cryptography, a transposition cipher is a method of encryption by which 
                   the positions held by units of plaintext (which are commonly characters or 
                   groups of characters) are shifted according to a regular system, so that 
                   the ciphertext constitutes a permutation of the plaintext.That is, the 
                   order of the units is changed (the plaintext is reordered). 
                   Mathematically, a bijective function is used on the characters’ 
                   positions to encrypt and an inverse function to decrypt.</p>
                   <div>
                       <img src="../Images/algorithm1.png" alt="">
                   </div>
                   <h3>Stream Cipher</h3><p>
                   Symmetric or secret-key encryption algorithm that encrypts a 
                   single bit at a time. With a Stream Cipher, the same plaintext 
                   bit or byte will encrypt to a different bit or byte every time 
                   it is encrypted.</p>
                   <div>
                       <img src="../Images/algorithm2.png" alt="">
                   </div>
                   <h3>Block Cipher</h3><p>
                   An encryption method that applies a deterministic algorithm 
                   along with a symmetric key to encrypt a block of text, rather 
                   than encrypting one bit at a time as in stream ciphers.</p>
                   <div>
                       <img src="../Images/algorithm3.png" alt="">
                   </div>
               </p>
           </div>
       </div>
   </article>
   <div class="crypto-form">
       <?php
               echo "<form action= '".cryptoComment($conn)."' method = 'POST'>
               <div>
                   <input type='text' name = 'crypto-user' placeholder = 'Enter your name here'>   
               </div>
               <div id = 'date'>
                   <input type='hidden' name = 'crypto-date' value = '".date('Y-m-d H:i:s')."'>   
               </div>
               <div>
                   <div id = 'crypto-comment'>Comment Here</div>
                   <textarea name ='message'></textarea>
               </div>
               <div class = 'mButton'>
                   <button type = 'submit' name = 'cryptoSubmit'>Comment</button>
               </div>
           </form>";
       ?>
   </div>
   <div><?php getCryptoComments($conn)?></div>
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
                    <a href=".log-bar"><img src="../Icons/upbtn.png" alt=""></a>
                </div>        
            </div>
    </footer>
</body>
</html>