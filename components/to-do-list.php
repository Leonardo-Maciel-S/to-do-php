<?php
    require './db/index.php';

    session_start();

    $result = $db->query("SELECT rowid, * FROM task");

?>

<main class='container d-flex flex-column gap-3'>
    <div class='d-flex justify-content-between'>
        <h2>Minhas tarefas</h2>

    
        <button type="button" class="btn bg-primary text-white d-flex align-items-center fw-semibold" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Adicionar tarefa
        </button>

    </div>

    <table class='table table-bordered table-striped'>
        <thead>
            <tr>
                <th>id</th>
                <th>Titulo</th>
                <th>Realizado?</th>
                <th>Ações</th>
            </tr>
        </thead>
        

            <tbody>
                <?php 

                
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
                            <?php if($task['is_done'] === 1) { ?>

                                <img src="./public/images/check.png" alt="" width="25">

                            <?php } else { ?>

                                <img src="./public/images/fail.png" alt="" width="25">

                            <?php } ?>
                        </td>
                        <td>
                            <a href="./actions/is-done.php?is_done=<?php echo $task['is_done']?>&id=<?php echo $task['rowid']?>">
                                <button class='btn btn-secondary btn-sm'> 
                                    <?php if($task['is_done'] === 1) { ?>

                                    Desfazer

                                    <?php } else { ?>

                                        Concluir
                                        
                                    <?php } ?>
                                </button>                               
                            </a>

                            <button class='btn btn-success btn-sm'> 
                                Editar
                            </button>

                            <a href="./actions/delete.php?delete=<?php echo $task['rowid']?>">
                                <button class='btn btn-danger btn-sm' type="submit" > 
                                    Deletar
                                </button>
                            </a>
                        

                        </td>
                    </tr>

                <?php 
                    }
                }
                ?>
            </tbody>



    </table>

    <?php if(!$result->fetchArray()) { ?>
        <p class="text-center fw-semibold fs-5">Nenhuma tarefa cadastrada!</p>
    <?php } ?>

</main>
