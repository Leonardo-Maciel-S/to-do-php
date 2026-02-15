<?php 
    session_start();

   include './../db/index.php';

    if (isset($_GET['delete'])) {
        $id = intval($_GET['delete']);

        $result = $db->exec("DELETE FROM task WHERE rowid = '$id'");

        if($result) {
            header("Location: ./../index.php");
        }

    }
    
?>