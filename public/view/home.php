<?php if(is_connected() == false){
    header('Location: /connexion');
}
      require '../Model_view/header/navbar.php';      // Inclut la navbar
?>

<div class="container-fluid p-3">
    <div class="input-group col-lg-2 col-sm-4 col-6 dates">
        <div class="input-group-prepend">
            <span class="input-group-text">Date</span>
        </div>
        <input class="form-control" type='text' id='datepicker' aria-label="With textarea"></input>
    </div>

    <hr class="my-3">
    <?php require '../Model_view/pc_table.php'; ?>

    
</div>


<script>
    $(function(){
        $(".dates #datepicker").datepicker({
            'format': 'yyyy-mm-dd', 
            'autoclose': true,
        }).datepicker('setDate', 'now');
    });
</script> 