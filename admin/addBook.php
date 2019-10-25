<style>
 input[type = 'file']{
     border: none;
     background: #00BFFF;
     width: 200px;
     height: 35px;
     color: black;
 }
 input[type = "text"]{
                width: 300px;
                height: 32px;
}
div{
    margin-top: 2%;
}
body{
    font-family: Georgia, 'Times New Roman', Times, serif;
}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type = "text/javascript" src = "js/admin.js"></script>
    <title>Add Book</title>
</head>
<body>
    <div class="formContainer">
    <form method = "POST" action = "books/bookProcess.php" enctype="multipart/form-data">
        <div>
            <input type="text" name = "bookTittle" placeholder="Enter book title">
        </div>
        <div>
            <input type="text" name = "file_path" placeholder="Enter file location">
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