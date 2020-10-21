<?php require '../Controller/action/home_action.php'; ?>

<div class="container-fluid p-3">
    <form method="post">
        <div class="d-flex">
            <div class="input-group-prepend ">
                <label for="datepicker" class="input-group-text mx-0">Date</label>
            </div>
            <div class="dates">
                <input class="form-control mx-0" type='text' id='datepicker' aria-label="With textarea" style='border-radius: 0;'></input>
            </div>
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