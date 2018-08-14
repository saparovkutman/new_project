<div class="article">
    <div class="subdirectory">
        <div class="link_category">
            <a href="">Home<span class="arrow"></span></a>
            <a href="" class="active">Vip<span class="arrow"></span></a>
        </div>
        <h3>Search for transportation</h3>
        <div class="form_bron" id="modal_add">
            <div class="form_bron">
                <form id="forma_add" action="javascript:void(0)" method="post" enctype="multipart/form-data">
                <div class="res_form">
                    <label class="bron_label_style_one"><?= $form_depar?>:</label>
                    <input type="text" name="departure_point" value="" class="bron_input_style_one">
                </div>
                <div class="res_form">
                    <label class="bron_label_style_one"><?= $form_dest?>:</label>
                    <select id="options1" name="destination">
                        <option disabled selected>1</option>
                        <option value="1">1</option>
                        <option value="Macao">Macao</option>
                    </select>
                </div>

                <div class="res_form">
                    <label class="bron_label_style_one"><?= $form_num_people?>:</label>

                    <select id="options2" name="count_people">
                        <option disabled selected>1</option>
                        <option value="1">1</option>
                        <option value="2">1</option>
                    </select>
                </div>

                <div class="res_form">
                    <label class="bron_label_style_one"><?= $form_date_depar?>:</label>
                    <input type="text" name="date_of_departure" value="" class="tcal">
                </div>

                <div class="res_form">
                    <label class="bron_label_style_one"><?= $form_date_retr?>:</label>
                    <input type="text" name="date_of_change" value="" class="tcal">
                </div>
            <input id="add_cat_id" type="hidden" name="cat_id" value="<?=$id ?>" class="bron_input_style_two">
            <div class="knopka_res">
                    <input id="add_to_transport" type="submit" value="Search now" class="bron_submit">
            </div>

            </form>
        </div>
    </div>
 </div>
 </div>
<script>
    $(document).ready(function() {

        $('#add_to_transport').on('click', function () {
            var form_add = $("#forma_add")[0];
            var vse_polya_add = new FormData(form_add);
            $.ajax({
                method: "POST",
                url: "/actionreserve/insert_transport",
                data: vse_polya_add,
                contentType: false,
                processData: false,
            }).done(function () {
                alert("GOOD JOB!!!");
                $("#forma_add")[0].reset();
            });
        });
    });
    CustomSelect.create(document.getElementById('options1'), {
        customClasses: {
            active: 'cc_active',
            base: 'cc',
            control: 'cc__control',
            option: 'cc__item',
            options: 'cc__options',
            select: 'cc__select'
        }
    });
    CustomSelect.create(document.getElementById('options2'), {
        customClasses: {
            active: 'cc_active',
            base: 'cc',
            control: 'cc__control',
            option: 'cc__item',
            options: 'cc__options',
            select: 'cc__select'
        }

    });
</script>