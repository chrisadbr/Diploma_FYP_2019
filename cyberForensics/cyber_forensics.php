<?php
    require_once '../db_connect.php';
    if (isset($_POST['btnUpload'])){

        if(empty($_POST['topic'])){
            ?>
            <script>window.alert("Please enter topics title");</script>
            <?php
        }else{
            $tittle = $_POST['tittle'];
            $topic_tittle = $_POST['topic'];
            $file = $_FILES['fileName']['name'];
            move_uploaded_file($_FILES['fileName']['tmp_name'], $file);

            $insert_query = $conn->query("INSERT INTO cyber_foreinsics(tittle, topic, doc)
            VALUES('$tittle', '$topic_tittle', '$file')");
                if($insert_query == true){
                    header('Location: ../admin_page.php');
                }else{
                    echo "File not added";
                }
        }
    }
?>