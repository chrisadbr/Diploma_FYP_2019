<?php
    include '../Books/config.php';
    
        $id = $_GET['id'];
        $stm = $conn->prepare("select * from networkSecurity where id = ?");
        $stm->bindParam(1, $id);
        $stm -> execute();
        $data = $stm->fetch();

        $file = $data['doc'];
        if(file_exists($file)){
            header('Content-Description: File Transfer');
            header('Content-Type: application/octetstream');
            header('Content-Disposition: attachment'.';filename = "'.basename($file).'"');
            header('Expires: '. 0);
            header('Casche-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: '.filesize($file));
            readfile($file);
            exit;
        }
?>