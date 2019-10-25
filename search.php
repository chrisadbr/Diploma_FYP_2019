<?php
    include 'db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" type = "text/css" href="css/index.css">
    <script type = "text/javascript" src = "js/main.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search</title>
</head>
<body>
        <div class="log-bar">
            <button onclick = "logButton()">LOGIN</button>
            <button onclick = "regButton()">REGISTER</button>
        </div>
        <div class = "topNav">
            <div  id = "p-title">Cyber<span id = "title">School</span></div>                   
            <div class="link">
                <a href="index.php">Home</a>
                <a href="about_us.php">About</a>
                <a href = "login.php">Courses</a>
                <a href="blog.php">Blog</a>
                <a href="contact.php">Contact</a> 
            </div>
        </div> 
        <section class = "searchBanner"></section>
        <div class="searchContainer">
                <?php
                    if(isset($_POST['submit'])){
                        $data = mysqli_real_escape_string($conn, $_POST['tittle']);
                        $sql = "SELECT * FROM addbook WHERE  book_tittle LIKE '%$data%'";
                        $result = mysqli_query($conn, $sql);
                        $searchResults = mysqli_num_rows($result);

                        $query = "SELECT * FROM courses WHERE title LIKE '%$data'";
                        $queryResult = mysqli_query($conn, $query);
                        $totalRows = mysqli_num_rows($queryResult);
                        echo "<h3 class = 'countResults'>There are ".($searchResults + $totalRows)." results</h3>";

                        if($searchResults > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                echo "<div class = 'searchResults'>";
                                    echo "<div><img src = '".$row['image']."' height = '130px' width = '110px'></div>";
                                    echo "<div><a href = 'login.php'>".$row['book_tittle']."</a></div>";
                                    echo "<div class = 'desc'>".$row['description']."</div>";
                                echo "</div>";
                                while($myData = mysqli_fetch_assoc($queryResult)){
                                    echo "<div class = 'topicResults'>";
                                        echo "Course tittle: <a href = 'login.php'>".$myData['title']."
                                        </a>";
                                        echo " course code: ".$myData['code'];
                                    echo "</div>";
                                }
                  
                            }
                        }
                    }
                ?>
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
                    <a href="#">Expert</a>
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