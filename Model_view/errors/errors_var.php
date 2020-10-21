<?php if(isset($error)): ?>
    <div class="alert alert-danger" role="alert">
        <?= $error ?>
    </div>
<?php endif; ?>

<?php if(isset($success)): ?>
    <div class="alert alert-success" role="alert">
        <?= $success ?>
    </div>
<?php endif; ?>