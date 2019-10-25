<?php
    require_once '../db_connect.php';
    if (isset($_POST['upload'])){

        if(empty($_POST['bookTitle'])){
            ?>
            <script>window.alert("Please enter book title");</script>
            <?php
        }else{
            $book_tittle = $_POST['bookTitle'];
            $file = $_FILES['fileName']['name'];
            move_uploaded_file($_FILES['fileName']['tmp_name'], $file);

            $insert_query = $conn->query("INSERT INTO addbook(book_tittle, filename)
            VALUES('$book_tittle', '$file')");
                if($insert_query == true){
                ?>
                <script>window.alert('File Added');</script>
                <?php
                }else{
                   ?>
                   <script>window.alert('File not Added');</script>
                   <?php
                }
        }
    }
?>