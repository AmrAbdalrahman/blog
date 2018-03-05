var page = 1;
var current_page = 1;
var total_page = 0;
var is_ajax_fire = 0;


manageData();


/* manage data list */
function manageData() {
    $.ajax({
        dataType: 'json',
        url: url,
        data: {page:page}
    }).done(function(data){


        total_page = data.last_page;
        current_page = data.current_page;


        $('#pagination').twbsPagination({
            totalPages: total_page,
            visiblePages: current_page,
            onPageClick: function (event, pageL) {
                page = pageL;
                if(is_ajax_fire != 0){
                    getPageData();
                }
            }
        });


        manageRow(data.data);
        is_ajax_fire = 1;
    });
}


$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


/* Get Page Data*/
function getPageData() {
    $.ajax({
        dataType: 'json',
        url: url,
        data: {page:page}
    }).done(function(data){
        manageRow(data.data);
    });
}


/* Add new article table row */
function manageRow(data) {
    var	rows = '';
    $.each( data, function( key, value ) {
        rows = rows + '<tr>';
        rows = rows + '<td>'+value.title+'</td>';
        rows = rows + '<td>'+value.description+'</td>';
        rows = rows + '<td data-id="'+value.id+'">';
        rows = rows + '<button data-toggle="modal" data-target="#edit-article" class="btn btn-primary edit-article">Edit</button> ';
        rows = rows + '<button class="btn btn-danger remove-article">Delete</button>';
        rows = rows + '</td>';
        rows = rows + '</tr>';
    });


    $("tbody").html(rows);
}


/* Create new article */
$(".crud-submit").click(function(e){
    e.preventDefault();
    var form_action = $("#create-article").find("form").attr("action");
    var title = $("#create-article").find("input[name='title']").val();
    var description = $("#create-article").find("textarea[name='description']").val();


    $.ajax({
        dataType: 'json',
        type:'POST',
        url: form_action,
        data:{title:title, description:description}
    }).done(function(data){
        getPageData();
        $(".modal").modal('hide');
        toastr.success('article Created Successfully.', 'Success Alert', {timeOut: 5000});
    });


});


/* Remove article */
$("body").on("click",".remove-article",function(){
    var id = $(this).parent("td").data('id');
    var c_obj = $(this).parents("tr");
    $.ajax({
        dataType: 'json',
        type:'delete',
        url: url + '/' + id,
    }).done(function(data){
        c_obj.remove();
        toastr.success('article Deleted Successfully.', 'Success Alert', {timeOut: 5000});
        getPageData();
    });
});


/* Edit article */
$("body").on("click",".edit-article",function(){
    var id = $(this).parent("td").data('id');
    var title = $(this).parent("td").prev("td").prev("td").text();
    var description = $(this).parent("td").prev("td").text();
    $("#edit-article").find("input[name='title']").val(title);
    $("#edit-article").find("textarea[name='description']").val(description);
    $("#edit-article").find("form").attr("action",url + '/' + id);
});


/* Updated new article */
$(".crud-submit-edit").click(function(e){
    e.preventDefault();
    var form_action = $("#edit-article").find("form").attr("action");
    var title = $("#edit-article").find("input[name='title']").val();
    var description = $("#edit-article").find("textarea[name='description']").val();


    $.ajax({
        dataType: 'json',
        type:'PUT',
        url: form_action,
        data:{title:title, description:description}
    }).done(function(data){
        getPageData();
        $(".modal").modal('hide');
        toastr.success('article Updated Successfully.', 'Success Alert', {timeOut: 5000});
    });
});