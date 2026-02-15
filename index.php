<?php
    require './db/index.php';

    session_start();

    $result = $db->query("SELECT rowid, * FROM task");

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/styles.css">

  </head>
  <body class='d-flex flex-column gap-5'>


    <nav class='py-3 px-5 bg-primary'>
        <a href="./index.php" class='text-white text-decoration-none fw-bold fs-4' >
            To-do
        </a>
    </nav>

    <?php require 'components/message.php';?>

    <?php require 'components/to-do-list.php';?>

    <?php require 'components/add-task.php';?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="index.js"></script>
  </body>
</html>
