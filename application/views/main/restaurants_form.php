<div id="kitchen" class="article">
    <div class="subdirectory">
        <div class="link_category">
            <a href="">Home<span class="arrow"></span></a>
            <a href="" class="active">Vip<span class="arrow"></span></a>
        </div>
        <h3>Information filling for restaurant booking</h3>
        <div class="form_bron" id="modal_add">
                <form id="forma_add" action="javascript:void(0)" method="post" enctype="multipart/form-data">

                <div class="res_form">
                    <label class="bron_label_style_one"><?= $form_date;?>:</label>
                    <input d="add_date" type="text" name="" value="date" class="tcal">
                </div>
                <div class="res_form">
                    <label class="bron_label_style_one"><?= $form_time;?>:</label>

                    <input id="add_houre" type="time" name="" value="houre" class="bron_input_style_two">

                </div>
                <div class="res_form">
                    <label class="bron_label_style_one"><?= $form_num_people;?>:</label>
                    <select id="options1" name="people">
                        <option disabled selected>1</option>
                        <option value="1">1s</option>
                        <option value="1">1</option>
                        <option value="1">s1</option>
                    </select>
                </div>
                <input id="add_cat_id" type="hidden" name="cat_id" value="<?=$id ?>" class="bron_input_style_two">
                <div class="knopka_res">
                    <input id="add_to_kitchen" type="submit" value="Search now" class="bron_submit">
                </div>
            </form>
        </div>
    </div>
 </div>
<script>
    $(document).ready(function() {
        $('.navbar').addClass('direct_navbar');
        $('.direct_navbar').removeClass('navbar');
        $('#add_to_kitchen').on('click', function () {
            var form_add = $("#forma_add")[0];
            var vse_polya_add = new FormData(form_add);
            $.ajax({
                method: "POST",
                url: "/actionreserve/insert_kitchen",
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
</script>
 