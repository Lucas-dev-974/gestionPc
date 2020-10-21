<?php
$pcs = getAll_pc($pdo);
?>
<div class="d-flex overflow-auto">

<?php if(is_array($pcs)):
    foreach($pcs as $k => $v):?>
        <ul class="list-group mx-3 col-4">
            <li class="list-group-item text-center text-white bg-dark"><?= $v['nom']?></li>
            
        </ul>
    <?php  endforeach; ?>
<?php  endif; ?>

</div>