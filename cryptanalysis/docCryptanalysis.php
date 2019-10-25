<?php include '../Books/config.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type = "text/css" href="../identity_theft/stylePage.css">
    <link rel="stylesheet" type = "text/css" href="../css/courses.css">
    <script type = "text/javascript" src = "../js/main.js"></script>
    <title>Cryptanalysis</title>
    <style>
    body{
        padding: 0;
        margin: 0;
        font-family:Georgia, 'Times New Roman', Times, serif;
        background-color: white;
    }
     .btnDownload{
         border: 2px solid #00BFFF;
         background-color: white;
         width: 160px;
         height: 35px;
         font-size: 1.01em;
         color: #00BFFF;
         padding: 0;
     }
     .imgBtn{
        float: right;
         width: 20px;
         height: 20px;
         margin-right: 2%;
     }
     tr:nth-child(even){
         background-color: #f5f5f5;
    }
    tr:hover {
        background-color: #ddd;
    }
     th{
         text-align: left;
         background-color: black;
         height: 50px;
         color: white;
         background-color: #00BFFF;
         font-size: 1.2em;
         padding-left: 6%;
     }
     td{
         padding-top: 1%;
         padding-bottom: 1%;
         text-align: left;
         font-size: 1.12em;
         padding-left: 6%;
     }
     table{
         width: 80%;
         border-collapse: collapse;
     }
     .book_container{
         margin-top: 10%;
         box-shadow: 5px 5px 5px 5px #f5f5f5;
         width: 27%;
         height: auto;
         margin-left: 35%;
         margin-bottom: 7%;
     }
     .img .imgBtn{
         float: right;
         margin-right: 2%;
         width: 20px;
         height: 20px;
     }
     .img img{
         width: 100%;
         height: 500px;
     }
     .img button{
         width: 100%;
     }
     ._container{
         margin-right: 1%;
     }
     .quizContainer{
         margin-top: 7%;
     }
     .bg-model{
         width: 100%;
         height: 200%;
         background-color: rgba(0, 0, 0, 0.7);
         position: absolute;
         top: 0;
         display: flex;
         justify-content: center;
         align-items: center;
         display: none;
     }
     .model-content{
         width: 700px;
         height: 400px;
         background-color: white;
         border-radius: 4px;
         position: relative;
         padding-top: 20px;
     }
     .close{
        position: absolute;
        top: 0;
        right: 14px;
        font-size: 42px;
        transform: rotate(45deg);
        cursor: pointer;
     }
     .quizContainer{
         width: 100%;
         height: 200px;
         background-color: #f5f5f5;
         display: flex;
         justify-content: center;
         align-items: center;
     }
     .btnTakeQuiz button{
         background-color: white;
         color: #00BFFF;
         width: 100%;
         border: 2px solid #00BFFF;
         height: 40px;
         font-size: 1.2em;
     }
    </style>
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
            <img src="../Book_Cover/book3.jpg" alt="">
            <a href="../Books/download.php?id=<?php echo $row['id'] + 3;?>">
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
                    $query = 'SELECT * FROM cryptanalysis';
                    $stm = $conn->prepare("select * from cryptanalysis");
                    $stm -> execute();
                    while($row = $stm->fetch()){
        
                ?>
                <tr>
                    <td><?php echo $row['tittle'];?></td>
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