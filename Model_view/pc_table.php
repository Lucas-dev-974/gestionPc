<?php
$pcs = getAll_pc($pdo);
?>
<div class="d-flex overflow-auto">

<?php if(is_array($pcs)):
    foreach($pcs as $k => $v):?>
        <ul class="list-group mx-3 col-lg-4" style="min-width: 250px;">
            <li class="list-group-item  text-white bg-dark">
                <div class="d-flex">
                    <h5 class="col-10"><?= $v['nom']?> </h5>
                    <button type="submit" class="btn text-white glyphicon glyphicon-off"></button>
                </div>
            </li>

        </ul>
    <?php  endforeach; ?>
<?php  endif; ?>

</div>