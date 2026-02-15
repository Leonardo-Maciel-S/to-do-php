<?php 

    if(isset($_SESSION['message'])) { ?>

        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            <?php echo $_SESSION["message"]; ?>
        </div>
        </div>

<?php 
    } 
    unset($_SESSION['message']);
?>