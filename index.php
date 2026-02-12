<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body class='d-flex flex-column gap-5'>
    <nav class='py-3 px-5 bg-primary'>
        <a href="index.php" class='text-white text-decoration-none fw-bold fs-4' >
            To-do
        </a>
    </nav>

    <main class='container d-flex flex-column gap-3'>
        <div class='d-flex justify-content-between'>
            <h2>Minhas tarefas</h2>

            <button class='btn bg-primary text-white fw-semibold'>
                Adicionar tarefa
            </button>
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
                <tr >
                    <td>22</td>
                    <td>teste</td>
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
            </tbody>
        </table>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>