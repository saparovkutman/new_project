$(document).ready(function() {
    var i = 1;
    // MODALS_INSERT
    $('.open-modal').on('click',function(){
        var modal_id = $(this).data('modalka_id');
        $(modal_id).show();
        $('#add_pole_subcat_lang').show();
        $('#add_pole_subcat_lang_edit').show();
    });
    $('.close-modal').click(function(){
        var modal_id = $(this).data('modalka_id');
        $(modal_id).hide();
        $('#cont_subcat_new_inp').children().remove();
        $('#cont_subcat_new_edit').children().remove();
        i=1;
    });

    $("#add_pole_subcat_lang").on('click', function () {

        var thisis = this;
        var lang_nm = $(thisis).data('lang');
        $("#cont_subcat_new_inp").append('<p id="subs" style="font-size: 18px;">Поле для ' + lang_nm + '</p>' +
            '               <p>\n' +
            '                    <label style="float: left;">Тип Пакета</label>\n' +
            '                    <input class="w3-input w3-border form-control" name="type_package'+i+'" type="text">\n' +
            '                </p>\n' +
            '                <p>\n' +
            '                    <label style="float: left">Подробности о пакета тексе 1</label>\n' +
            '                    <input class="w3-input w3-border form-control" name="package_includes_one'+i+'" type="text">\n' +
            '                </p>\n' +
            '                <p>\n' +
            '                    <label style="float: left">Подробности о пакета текс 2</label>\n' +
            '                    <input class="w3-input w3-border form-control" name="package_includes_two'+i+'" type="text">\n' +
            '                </p>\n' +
            '                <p>\n' +
            '                    <label style="float: left">Подробности о пакета текс 3</label>\n' +
            '                    <input class="w3-input w3-border form-control" name="package_includes_three'+i+'" type="text">\n' +
            '                </p>\n' +
            '                <p>\n' +
            '                    <label style="float: left">Загаловок заказа</label>\n' +
            '                    <input class="w3-input w3-border form-control" name="book_now_text'+i+'" type="text">\n' +
            '                </p>\n' +
            '                <p>\n' +
            '                    <label style="float: left">Загаловок билета</label>\n' +
            '                    <input class="w3-input w3-border form-control" name="ticket_text'+i+'" type="text">\n' +
            '                </p>\n' +
            '                <p>\n' +
            '                    <label style="float: left">Тип Билета</label>\n' +
            '                    <input class="w3-input w3-border form-control" name="ticket_type'+i+'" type="text">\n' +
            '                </p>'
        );
        i = i + 1;

        $('.content').animate({

            scrollTop: $('#add_sub_cat_one').offset().top
        }, 'slow');
        $(thisis).data('lang', 'Китайского языка');
        if (i == 3) {
            $(thisis).data('lang', 'Английского языка');
            $(thisis).hide();
        }

    });
    $('#add_sub_cat_one').on('click',function(){
        var form_add= $("#sub_catOne_forma_add")[0];
        var vse_polya_add= new FormData(form_add);
        var cat_one_id = $("#cat_one_id").val();
        $.ajax({
            method: "POST",
            url: "/admin/subcategory_insert",
            data: vse_polya_add,
            contentType: false,
            processData: false,
        }).done(function(elem){
            if(elem){
                alert(elem);
                return;
            }
            window.location="/admin/subcategory/"+cat_one_id;


        });
    });

    $(".edit-subcat").click(function () {
        var type_package = $(this).data("type_package");
        var price = $(this).data("price");
        var package_includes_one = $(this).data("package_includes_one");
        var package_includes_two = $(this).data("package_includes_two");
        var package_includes_three = $(this).data("package_includes_three");
        var book_now_text = $(this).data("book_now_text");
        var ticket_text = $(this).data("ticket_text");
        var ticket_type = $(this).data("ticket_type");
        var sub_id = $(this).data("sub_id");

        $("#type_package").val(type_package);
        $("#price").val(price);
        $("#package_includes_one").val(package_includes_one);
        $("#package_includes_two").val(package_includes_two);
        $("#package_includes_three").val(package_includes_three);
        $("#book_now_text").val(book_now_text);
        $("#ticket_text").val(ticket_text);
        $("#ticket_type").val(ticket_type);
        $("#sub_id").val(sub_id);
    });

    $("#add_pole_subcat_lang_edit").on('click', function () {
        var id = $("#sub_id").val();
        var type_package = $("#sub_id"+id).data("type_package"+i);
        var package_includes_one = $("#sub_id"+id).data("package_includes_one"+i);
        var package_includes_two = $("#sub_id"+id).data("package_includes_two"+i);
        var package_includes_three = $("#sub_id"+id).data("package_includes_three"+i);
        var book_now_text = $("#sub_id"+id).data("book_now_text"+i);
        var ticket_text = $("#sub_id"+id).data("ticket_text"+i);
        var ticket_type = $("#sub_id"+id).data("ticket_type"+i);


        var thisis = this;
        var lang_nm = $(thisis).data('lang');
        $("#cont_subcat_new_edit").append('<p id="subs" style="font-size: 18px;">Поле для ' + lang_nm + '</p>' +
            '               <p>\n' +
            '                    <label style="float: left;">Тип Пакета</label>\n' +
            '                    <input class="w3-input w3-border form-control" name="type_package'+i+'" type="text" value="'+type_package+'">\n' +
            '                </p>\n' +
            '                <p>\n' +
            '                    <label style="float: left">Подробности о пакета тексе 1</label>\n' +
            '                    <input class="w3-input w3-border form-control" name="package_includes_one'+i+'" type="text" value="'+package_includes_one+'">\n' +
            '                </p>\n' +
            '                <p>\n' +
            '                    <label style="float: left">Подробности о пакета текс 2</label>\n' +
            '                    <input class="w3-input w3-border form-control" value="'+package_includes_two+'" name="package_includes_two'+i+'" type="text">\n' +
            '                </p>\n' +
            '                <p>\n' +
            '                    <label style="float: left">Подробности о пакета текс 3</label>\n' +
            '                    <input class="w3-input w3-border form-control" value="'+package_includes_three+'" name="package_includes_three'+i+'" type="text">\n' +
            '                </p>\n' +
            '                <p>\n' +
            '                    <label style="float: left">Загаловок заказа</label>\n' +
            '                    <input class="w3-input w3-border form-control" value="'+book_now_text+'" name="book_now_text'+i+'" type="text">\n' +
            '                </p>\n' +
            '                <p>\n' +
            '                    <label style="float: left">Загаловок билета</label>\n' +
            '                    <input class="w3-input w3-border form-control" value="'+ticket_text+'" name="ticket_text'+i+'" type="text">\n' +
            '                </p>\n' +
            '                <p>\n' +
            '                    <label style="float: left">Тип Билета</label>\n' +
            '                    <input class="w3-input w3-border form-control" value="'+ticket_type+'" name="ticket_type'+i+'" type="text">\n' +
            '                </p>'
        );
        i = i + 1;

        $('.content').animate({

            scrollTop: $('#edit_sub_cat_one').offset().top
        }, 'slow');
        $(thisis).data('lang', 'Китайского языка');
        if (i == 3) {
            $(thisis).data('lang', 'Английского языка');
            $(thisis).hide();
        }

    });

    $("#edit_sub_cat_one").on('click', function(){
        var form_edit= $("#sub_catOne_forma_edit")[0];
        var vse_polya_add= new FormData(form_edit);
        var cat_id = $("#cat_one_id").val();
        $.ajax({
            method: "POST",
            url: "/admin/subcategory_update",
            data: vse_polya_add,
            contentType: false,
            processData: false,
        }).done(function(){
            window.location="/admin/subcategory/"+cat_id;
        });
    });

    $(".sub_catOne_delete").on('click', function(){
        var subcat_id = $(this).data('sub_cat_id');
        var cat_id = $("#cat_one_id").val();
        $.ajax({
            method: "POST",
            url: "/admin/subcategory_delete",
            data: {'id': subcat_id},
        }).done(function(){
            window.location="/admin/subcategory/"+cat_id;
        });
    });
});