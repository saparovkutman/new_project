$(document).ready(function(){
    var i = 1;
    // OPEN AND CLOSE MODAL
    $('.open-modal').on('click',function(){
        var modal_id = $(this).data('modalka_id');
        $(modal_id).show();
        $('#add_pole_cat_lang').show();
        $('#add_pole_edit_cat_lang').show();
    });
    $('.close-modal').on('click',function(){
        var modal_id = $(this).data('modalka_id');
        $(modal_id).hide();
        $('#cont_new_inp').children().remove();
        $('#cont_new_inp_edit').children().remove();
        i=1;
    });

    // MODALS_INSERT

    $("#add_pole_cat_lang").on('click', function () {
        // alert(i);
        var thisis = this;
        var lang_nm = $(thisis).data('lang');
        $("#cont_new_inp").append('<p style="font-size: 18px;">Поле для '+lang_nm+'</p><p>\n' +
            '                    <label style="float: left;">Заголовок</label>\n' +
            '                    <input id="add_title" class="w3-input w3-border form-control" name="title'+i+'" type="text">\n' +
            '                </p>' +
            '                <p>\n' +
            '                    <label style="float: left">Описание</label>\n' +
            '                    <textarea id="add_content" rows="6" class="w3-input w3-border form-control" name="content'+i+'"></textarea>\n' +
            '                </p>'
        );
        i=i+1;

        $('.content').animate({
            scrollTop: $('#add_cat_one').offset().top
        }, 'slow');
        $(thisis).data('lang', 'Китайского языка');
        if(i ==3){
            $(thisis).data('lang', 'Английского языка');
            $(thisis).hide();
        }
    });

    $('#add_cat_one').click(function(){
        var form_add= $("#forma_add")[0];
        var vse_polya_add= new FormData(form_add);
        $.ajax({
            method: "POST",
            url: "requestCatOne/insert_cat_one",
            data: vse_polya_add,
            contentType: false,
            processData: false,
        }).done(function(elem){
            if(elem){
                alert(elem);
                return;
            }
            window.location="/admin/catalogs_one";
        });
    });

    // MODALS_UPDATE

    $(".edit_cat").click(function () {
        var cat_id = $(this).data("id");
        var cat_title = $(this).data("title");
        var cat_content = $(this).data("description");
        var cat_image_name = $(this).data("img");

        $("#update_title").val(cat_title);
        $("#update_id").val(cat_id);
        $("#update_content").val(cat_content);
        $("#update_img_name").val(cat_image_name);

    });

    $("#add_pole_edit_cat_lang").on('click', function () {
        var id = $("#update_id").val();
        var cat_title = $("#edit_cat"+id).data("title"+i);
        var cat_content = $("#edit_cat"+id).data("description"+i);
        var thisis = this;
        var lang_nm = $(thisis).data('lang');
        $("#cont_new_inp_edit").append('<p style="font-size: 18px;">Поле для '+lang_nm+'</p><p>\n' +
            '                    <label style="float: left;">Заголовок</label>\n' +
            '                    <input id="add_title" class="w3-input w3-border form-control" name="title'+i+'" type="text" value="'+cat_title+'">\n' +
            '                </p>' +
            '                <p>\n' +
            '                    <label style="float: left">Описание</label>\n' +
            '                    <textarea id="add_content" rows="6" class="w3-input w3-border form-control" name="content'+i+'">'+cat_content+'</textarea>\n' +
            '                </p>'
        );
        i=i+1;
        $('.content').animate({
            scrollTop: $('#update_cat_one').offset().top
        }, 'slow');
        $(thisis).data('lang', 'Китайского языка');
        if(i ==3){
            $(thisis).data('lang', 'Английского языка');
            $(thisis).hide();
        }
    });

    $("#update_cat_one").on('click', function(){
        var form_edit= $("#forma_update")[0];
        var vse_polya_add= new FormData(form_edit);
        $.ajax({
            method: "POST",
            url: "requestCatOne/update_cat_one",
            data: vse_polya_add,
            contentType: false,
            processData: false,
        }).done(function(){
            // window.location="/admin/catalogs_one";
        });
    });

    // DELETE

    $(".delete_cat").on('click', function(){
        var cat_id = $(this).data('id');
        var cat_img = $(this).data('img');
        $.ajax({
            method: "POST",
            url: "requestCatOne/delete_cat_one",
            data: {'id': cat_id, 'img':cat_img},
        }).done(function(){
            window.location="/admin/catalogs_one";
        });
    });
});
