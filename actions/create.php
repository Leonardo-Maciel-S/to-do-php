<?php
session_start();
$_SESSION['message'] = '';

include './../db/index.php';


if(isset($_POST["task"])) {
    $task = $_POST["task"];

    $result = $db->exec("INSERT INTO task VALUES ('$task')");

    if($result) {
        $_SESSION['message'] = 'Criado com sucesso';
        header('Location: ./../index.php');
        exit;
    }
 
}

?>