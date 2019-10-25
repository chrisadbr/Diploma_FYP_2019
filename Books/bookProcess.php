<?php
    require_once '../db_connect.php';
    if (isset($_POST['btnUpload'])){

        if(empty($_POST['bookTittle'])){
            ?>
            <script>window.alert("Please enter book title");</script>
            <?php
        }else{
            $book_tittle = $_POST['bookTittle'];
            $filePath = $_POST['file_path'];
            $file = $_FILES['fileName']['name'];
            move_uploaded_file($_FILES['fileName']['tmp_name'], $file);

            $insert_query = $conn->query("INSERT INTO addbook(book_tittle, filename, image)
            VALUES('$book_tittle', '$file', '$filePath')");
                if($insert_query == true){
                    header('Location: ../admin_page.php');
                }else{
                    echo "File not added";
                }
        }
    }
?>