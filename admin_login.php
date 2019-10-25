<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type = "text/css" href="css/login.css">
    <title>Admin Login</title>
    <style>
        .top{
            padding-top: 10px;
            padding: 0;
            overflow: hidden;
            background-color:white;
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            width: 100%;
            height: 70px;
        }
        .link{
            margin-top: 22px;
            float: right;
            margin-right: 5px;
        }
        #p-title{
            margin-top: 10px;
            float: left;
            font-size: 2em;
            padding-left: 10px;
        }
        .top a{
            padding-right: 13px;
            display: inline-block;
            text-decoration: none;
            color: black;
            text-align: center;
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-size: 18px;
        }
        #title{
                color:#00BFFF;
        }
      body{
          background-color: #f2f2f2;
      }
      .loginContainer{
                padding-top: 20px;
                border: 2px solid #00BFFF;
                border-radius: 4px;
                width: 590px;
                height: 300px;
                margin-top: 100px;
                margin-left: 27%;
                background-color: white;
        }
    </style>
</head>
<body>
        <div class = "top">
            <div  id = "p-title">Cyber<span id = "title">School</span></div>                   
            <div class="link">
                <a href="index.php">Home</a>
                <a href="about_us.php">About</a>
                <a href = "login.php">Courses</a>
                <a href="blog.php">Blog</a>
                <a href="contact.php">Contact</a> 
            </div>
        </div>
    <div class="loginContainer" align = "center">
        <form action="process/admin_process.php" method = "POST">
        <div id="errorMsg">
                    <?php
                        if(@$_GET['logError'] == true){
                    ?>
                        <div>
                            <?php echo $_GET['logError'];?>
                        </div>
                    <?php
                        }
                    ?>
                </div>
            <table align = "center">
                <tr>
                    <td><label for="username">Username:</label></td>
                    <td><input type="text" id = "admin" name = "admin"
                    autocomplete = "off"></td>
                </tr>
                <tr>
                    <td><label for="password">Password:</label></td>
                    <td><input type="password" id = "pass" name = "pass"></td>
                </tr>
                <tr>
                    <td colspan = "2">
                        <button name = "admin_login" class = "admin-login">
                            <img src="Icons/admin_login.png" alt="" class="admin-btn">
                            Admin Login
                        </button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>