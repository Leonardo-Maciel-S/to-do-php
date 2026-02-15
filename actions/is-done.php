<?php 
    require_once './../db/index.php';

    if(isset($_GET['is_done'])) {

        
        $is_done =  intval($_GET['is_done']) === 1 ? 0 : 1;
        $id = $_GET['id'];

        $result = $db->exec("UPDATE task SET is_done = $is_done WHERE rowid = '$id'");

    }


    header('Location: ./../index.php');
    exit;

?>