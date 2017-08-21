function add_new_skill(id) {
    $('#common-modal').modal({
        backdrop: 'static',
        keyboard: false
    }).modal('show');

    var param='';
    if(id){
        param ='/'+id;
    }
    alert(id);

    var TargetDiv = document.getElementById('load-modal-html');
    $.ajax({
        type: 'get',
        url: base_url + '/admin/skill/add-edit'+param,
        beforeSend: function () {
            $(TargetDiv).html('<div class="modal-body"><h1> <i class="fa fa-cog fa-spin"></i> Loading......</h1></div>');
        },
        success: function (data) {
            $(TargetDiv).html(data);
        }
    });
}