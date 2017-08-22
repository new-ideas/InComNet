function closeModal(id) {
    $(id + ' .modal-dialog').css('width', '30%');
    $('#common-modal').modal('hide');
    $('#load-modal-html').html('');
}

function add_new_skill(id) {
    $('#common-modal').modal({
        backdrop: 'static',
        keyboard: false
    }).modal('show');

    var param = '';
    if (id) {
        param = '/' + id;
    }
    alert(id);

    var TargetDiv = document.getElementById('load-modal-html');
    $.ajax({
        type: 'get',
        url: base_url + '/admin/skill/add-edit' + param,
        beforeSend: function () {
            $(TargetDiv).html('<div class="modal-body"><h1> <i class="fa fa-cog fa-spin"></i> Loading......</h1></div>');
        },
        success: function (data) {
            $(TargetDiv).html(data);
        }
    });
}


/* Load Category Add form */
function addNewCategory(type) {
    var load_data_url = '';
    var TargetDiv = document.getElementById('load-modal-html');
    $('#common-modal').modal({
        backdrop: 'static',
        keyboard: false
    }).modal('show');

    var url = base_url + '/admin/category/add-edit';

    $.ajax({
        type: 'get',
        url: url,
        data: {type: type},
        beforeSend: function () {
            $(TargetDiv).html('<div class="modal-body"><h2><i class="fa fa-cog fa-spin"></i> Loading....</h2></div>');
        },
        success: function (response) {
            $(TargetDiv).html(response);
            $('#common-modal .modal-dialog').css('width', '45%');
        }
    });
}
