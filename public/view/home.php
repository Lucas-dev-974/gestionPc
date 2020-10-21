<?php require '../Controller/action/home_action.php'; ?>

<div class="container-fluid p-3">
    <form method="post">
        <div class="input-group col-lg-2 col-sm-4 col-6 dates">
            <div class="input-group-prepend">
                <span class="input-group-text">Date</span>
            </div>
            <input class="form-control" type='text' id='datepicker' aria-label="With textarea"></input>
        </div>

        <hr class="my-3">
        <?php require '../Model_view/pc_table.php'; ?>    
    </form>


    
</div>


<script>
    $(function(){
        $(".dates #datepicker").datepicker({
            'format': 'yyyy-mm-dd', 
            'autoclose': true,
        }).datepicker('setDate', 'now');
    });
</script> 