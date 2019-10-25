<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Computer Networks</title>
    <style>
    input[type = 'file']{
        border: none;
        background: #00BFFF;
        width: 200px;
        height: 35px;
        color: black;
        font-family:Georgia, 'Times New Roman', Times, serif;
    }
    input[type = "text"]{
                    width: 300px;
                    height: 32px;
                    font-family:Georgia, 'Times New Roman', Times, serif;
    }
    body{
        font-family:Georgia, 'Times New Roman', Times, serif;
        margin: 0;
    }
    div{
        margin-top: 2%;
    }
    </style>
</head>
<body>
<body>
    <h1>Cyber Forensics</h1>
    <div class="formContainer">
    <form method = "POST" action = "cyberForensics/cyber_forensics.php" enctype="multipart/form-data">
        <div>
            <input type="text" name = "tittle" placeholder="Enter lecture number">
        </div>
        <div>
            <input type="text" name = "topic" placeholder="Enter lecture tittle">
        </div>
       <div>
           <input type="file" name = "fileName">
       </div>
       <div>
           <button name = "btnUpload">Upload</button>
       </div>
    </form>
    </div>
</body>
</html>