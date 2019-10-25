<?php include 'config.php'; 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type = "text/css" href="../css/courses.css">
    <link rel="stylesheet" href="stylesPage.css">
    <script type = "text/javascript" src = "../js/main.js"></script>
</head>
<script>
    function navPrompt(){
            document.querySelector('.bg-model').style.display = 'flex';
    };
   /* document.querySelector('.close').addEventListener('click', function(){
        document.querySelector('.bg-model').style.display = 'none';
    });*/
    function closeDoc(){
        document.querySelector('.bg-model').style.display = 'none';
    }
</script>
    <title>Cryptography</title>
</head>
<body>
    <div class="log-bar">
        <span id = "user">Welcome <?php echo  $_SESSION['user'];?></span>
        <a href="../logout.php?logout"><button>Logout</button></a>
    </div>
     <div class = "top">
        <div  id = "p-title">Cyber<span id = "title">School</span></div>
            <div class="link">
                <a href = "../courses.php">Courses</a>
                <a href="../books.php">Books</a>
            </div>
    </div>
    <?php
        $query = 'SELECT * FROM addbook';
        $stm = $conn->prepare("select * from addbook");
        $stm -> execute();
        $row = $stm->fetch();
    ?>
     <div class="book_container">
         <div class="img">
            <img src="../Book_Cover/book1.jpg" alt="">
            <a href="../Books/download.php?id=<?php echo $row['id'] + 0;?>">
                <button class = "btnDownload">
                        Download
                        <img src="../Icons/download.png" alt="" class = "imgBtn">
                </button>  
            </a> 
         </div>
     </div>
  <div class="container">
        <table align = "center">
            <thead>
                <tr>
                    <th>Lecture ID</th>
                    <th>Lecture Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = 'SELECT * FROM cryptography';
                    $stm = $conn->prepare("select * from cryptography");
                    $stm -> execute();
                    while($row = $stm->fetch()){
        
                ?>
                <tr>
                    <td><?php echo $row['title'];?></td>
                    <td><?php echo $row['topic'];?></td>
                    <td><a href="download.php?id=<?php echo $row['id'];?>">
                    <button class = "btnDownload">
                        Download
                        <img src="../Icons/download.png" alt="" class = "imgBtn">
                    </button>
                    </a></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
    <div class="quizContainer">
        <div class="btnTakeQuiz">
            <button onclick = 'navPrompt();' class = 'clkBtn'>Take an Assessment</button>
        </div>
    </div>
    <div class="bg-model">
        <div class="model-content">
            <div class="close" onclick = 'closeDoc()'>+</div>
                <?php include 'quetionaire.php';?>
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
                    <a href="../register.php">Register</a>       
                </div>             
                <div id="upbtn">
                    <a href=""><img src="../Icons/upbtn.png" alt=""></a>
                </div>        
            </div>
    </footer>
</body>
</html>