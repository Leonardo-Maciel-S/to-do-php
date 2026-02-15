<?php
session_start();
$_SESSION['message'] = '';

include './../db/index.php';


if(isset($_POST["task"])) {
    $task = $_POST["task"];

    $result = $db->exec("INSERT INTO task VALUES ('$task', 0)");

    if($result) {
        $_SESSION['message'] = 'Criado com sucesso';
    } else {
        $_SESSION['message'] = 'Não foi possível criar a tarefa';
    }


    header('Location: ./../index.php');
    exit;


 
}

?>