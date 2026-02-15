<!doctype html>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Task - Adicionar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body class='d-flex flex-column gap-5'>
    <nav class='py-3 px-5 bg-primary'>
        <a href="./../index.php" class='text-white text-decoration-none fw-bold fs-4' >
            To-do
        </a>
    </nav>

    <main class='container d-flex flex-column gap-3'>
      <h2 class='fw-bold '>Criar tarefa</h2>

    <form action='./../actions/create.php' method='POST'>
      <div class="mb-3 w-25">
        <input type="text" class="form-control" id="task" placeholder='Qual é sua tarefa?' name='task' required>
      </div>


      <button type="submit" class="btn btn-primary">Criar</button>
    </form>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>