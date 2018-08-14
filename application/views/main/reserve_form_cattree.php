 <div class="article">
            <div class="subdirectory">
                <div class="link_category">
                    <a href="">Home<span class="arrow"></span></a>
                    <a href="" class="active">Vip<span class="arrow"></span></a>
                </div>
                <h3>Fill in booking information of VIP Suites</h3>
                <div class="form_bron">
                    <form action="">
                        <div class="res_form">
                            <label class="bron_label_style_one">Room number:</label>
                            <input type="text" name="" value="" class="bron_input_style_one">
                        </div>
                        <div class="res_form">
                            <label class="bron_label_style_one">Data:</label>
                            <input type="text" name="" value="" class="tcal">
                        </div>
                        <div class="res_form">
                            <label class="bron_label_style_one">Time:</label>

                            <input type="time" name="" value="" class="bron_input_style_two">

                        </div>

                        <div class="res_form">
                            <label class="bron_label_style_one">Sum:</label>
                            <input type="text" name="" value="" class="bron_input_style_two"> ten thousand

                        </div>
                        <div class="res_form">
                            <label class="bron_label_style_one">Type of chip :</label>
                            <select id="options1">
                                <option disabled selected>1</option>
                                <option value="1">1</option>
                                <option value="3">Issue marker</option>
                            </select>
                        </div>
                        <div class="res_form">
                            <label class="bron_label_style_one">Withrawal type:</label>
                            <select id="options2">
                                <option disabled selected>1</option>
                                <option value="1">1</option>
                                <option value="2">Issue marker</option>
                            </select>
                        </div>
                        <div class="res_form">
                            <label class="bron_label_style_one">Customer number:</label>
                            <input type="text" name="" value="" class="bron_input_style_one">
                        </div>
                        <div class="res_form">
                            <label class="bron_label_style_one">The phone number:</label>
                            <input type="text" name="" value="" class="bron_input_style_one">
                        </div>
                        <div class="res_form">
                            <label class="bron_label_style_one">Special req:</label>
                            <textarea class="bron_input_style_one" style="height: 80px;"></textarea>
                        </div>
                        <div class="knopka_res">
                            <input type="submit" value="Search now" class="bron_submit">
                        </div>
                    </form>
                </div>
            </div>
         </div>

<script>
    $('.navbar').addClass('direct_navbar');
    $('.direct_navbar').removeClass('navbar');
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
 