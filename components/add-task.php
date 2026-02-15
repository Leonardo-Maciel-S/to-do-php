
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">

    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-4" id="exampleModalLabel">Criar tarefa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    
      <form action='./../actions/create.php' method='POST'>

      <div class="modal-body">
        
        <div class="mb-3">
            <input type="text" class="form-control fs-6 fw-semibold" id="task" placeholder='Qual é sua tarefa?' name='task' required>
        </div>


      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>

        <button type="submit" class="btn btn-primary">Criar</button>
      </div>
        </form>

    </div>
  </div>
</div>