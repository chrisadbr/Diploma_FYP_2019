<?php 
    include 'Books/config.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/books.css">
    <script type = "text/javascript" src = "js/main.js"></script>
    <link rel="stylesheet" href="css/index.css">
    <title>Books</title>
</head>
<body>
    <div class="log-bar">
        <span id = "user">Welcome <?php echo  $_SESSION['user'];?></span>
        <a href="logout.php?logout"><button>Logout</button></a>
    </div>
     <div class = "books_top">
        <div  id = "p-title">Cyber<span id = "title">School</span></div>
            <div class="link">
                <a href = "courses.php">Courses</a>
                <a href="#">Books</a>
            </div>
    </div>
    <section class="booksBanner">
        <div class="book_text">
            <h1>Access free e-books now</h1>
        </div>
    </section>
    <div class="allBooks">
            <div class="container1">
            <?php
                $query = 'SELECT * FROM addbook';
                $stm = $conn->prepare("select * from addbook");
                $stm -> execute();
                $row = $stm->fetch();
                while($row = $stm->fetch()){
            ?>
                <div class="book_Container">                
                        <a href="Books/download.php?id=<?php echo $row['id'] ?>">
                            <img src="<?php echo $row['image'];?>"
                            height = "300px" width = "250px" class = "bookCover">
                        </a>
                </div>
                <?php 
                }
                ?>
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
                    <a href="expert.php">Expert</a>
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