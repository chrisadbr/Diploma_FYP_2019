<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type = "text/javascript" src = "js/admin.js"></script>
    <style>
                 label{
                font-size: 18px;
            }
            input[type = "text"]{
                width: 300px;
                height: 32px;
            }
            input[type = "submit"]{
                width: 150px;
                height: 32px;
                background-color: #00BFFF;;
                border: none;
                color: white;
                font-family: Georgia, 'Times New Roman', Times, serif;
            }
            div{
                padding: 10px;
            }
    </style>
    <title>Delete Message</title>
</head>
<body>
    <form method = "POST">
    <div id="delContainer">
        <div id="response"></div>
            <div><label for="">Email:</label></div>
            <div>
                <input type="text" id = "email" autocomplete = "off">
            </div>
            <div>
                <input type="submit" onclick = "return false"
                onmousedown = "deleteMessage();" value = "DELETE MESSAGE">
            </div>
    </div>
    </form>
</body>
</html>