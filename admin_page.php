<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type = "text/css" href="css/admin_page.css">
    <link rel="stylesheet" type = "text/css" href="css/indx.css">
    <script type = "text/javascript" src = "js/admin.js"></script>
    <title>Admin Page</title>
</head>
<body>
<div class = "top">
            <div  id = "p-title">Cyber<span id = "title">School</span></div>                
            <div class="link">
            <a href="admin_page.php?Logout">
                <button name = "Logout" class = "logBtn">
                   Logout
                </button>
            </a>
            </div>
        </div>
</div>
   <br>
    <div id="admin_header">
        <img src="./Icons/admin2.png" alt="">
        <span id="header">Welcome Admin</span>
    </div>
    <div class="container">
        <div class="leftItems">
            <button onclick = "return false" onmousedown = "addCourseForm(this.value);">Add Course</button>
            <button onclick = "return false" onmousedown = "deleteCourseForm(this.value);">Remove Course</button>
            <button onclick = 'return false' onmousedown = 'viewMessages()'>View Messages</button>
            <button onclick = 'return false' onmousedown = 'delMessage()'>Delete Message</button>
            <button onclick = "return false" onmousedown = "viewSubscribers()">Subscribers</button>
            <button onclick = "return false" onmousedown = "_addBook()">Add Book</button>
            <button onclick = "return false" onmousedown = "deleteBook()">Delete Book</button>
            <button onclick = "return false" onmousedown = "sub_Cryptography()">Cryptography</button>
            <button onclick = "return false" onmousedown = "sub_Cryptocurrency()">Cryptocurrency</button>
            <button onclick = "return false" onmousedown = "subCryptanalysis()">Cryptanalysis</button>
        </div>
        <div id="course_info"></div>
        <div class="rightItems">
            <button onclick = "return false" onmousedown = "identityTheft()">Identity Theft</button>
            <button onclick = "return false" onmousedown = "internetSecurity()">Internet Security</button>
            <button onclick = "return false" onmousedown = "hackingPage()">Hacking</button>
            <button onclick = "return false" onmousedown = "computerNetworks()">Computer Networks</button>
            <button onclick = "return false" onmousedown = "anonymous_browsing()">Anonymous Browsing</button>
            <button onclick = "return false" onmousedown = "cyber_forensics()">Cyber Forensics</button>
            <button onclick = "return false" onmousedown = "networkSecurity()">Network Security</button>
            <button onclick = "return false" onmousedown = "virusMalware()">Viruses and Malware</button>
            <button onclick = "return false" onmousedown = "inside_threat()">Inside Threats</button>
        </div>
    </div>     
</body>
<footer>
    <div>CyberSchool 2019</div>
</footer>
</html>
<?php
    session_start();
    if(isset($_GET['Logout'])){
        session_destroy();
        header("location: index.php");
    }
?>