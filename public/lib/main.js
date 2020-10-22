function requestModal(form){
    let date = $('#datepicker').val();
    let heure= component.getAttribute("heure");
    let pc_id= component.getAttribute("id");
    let pc_nom = component.getAttribute("pc_name");
    $.ajax({
        type: 'POST',
        url:   '/addAttr',
        data:  'date='+date + "&heure="+heure + "&pcId="+pc_id + "pcName="+pc_nom
    })
}

function setModalAddAttrInfo(component){
    // Param a get
    let date = $('#datepicker').val();
    let heure= component.getAttribute("heure");
    let pc_id= component.getAttribute("id");
    let pc_nom = component.getAttribute("pc_name");

    $('#modal-title-name').html(pc_nom);
    $('#modal-title-heure').html( date + ' ' + heure);
}