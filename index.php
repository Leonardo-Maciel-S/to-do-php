<?php
    require './db/index.php';


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body class='d-flex flex-column gap-5'>
    <nav class='py-3 px-5 bg-primary'>
        <a href="./index.php" class='text-white text-decoration-none fw-bold fs-4' >
            To-do
        </a>
    </nav>

    <main class='container d-flex flex-column gap-3'>
        <div class='d-flex justify-content-between'>
            <h2>Minhas tarefas</h2>

            <a href='pages/add-task.php' class='btn bg-primary text-white d-flex align-items-center fw-semibold'>
                Adicionar tarefa
            </a>

        </div>

        <table class='table table-bordered table-striped'>
            <thead>
                <tr>
                    <th>id</th>
                    <th>Titulo</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
                <?php 

                $result = $db->query("SELECT rowid, * FROM task");


                if($result) {
                    while($task = $result->fetchArray(SQLITE3_ASSOC)) { 
                ?>
                    <tr>
                        <td>
                            <?php echo $task['rowid'];?>
                        </td>
                        <td>
                            <?php echo $task['description'];?>
                        </td>
                        <td>
                            <button class='btn btn-secondary btn-sm'> 
                                Visualizar
                            </button>
                            <button class='btn btn-success btn-sm'> 
                                Editar
                            </button>
                            <button class='btn btn-danger btn-sm'> 
                                Deletar
                            </button>
                        </td>
                    </tr>

                <?php 
                    }
                }
                ?>
            </tbody>
        </table>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>
