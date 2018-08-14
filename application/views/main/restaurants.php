<div class="article">
    <div class="subdirectory">
        <div class="link_category">
            <a href="">Home<span class="arrow"></span></a>
            <a href="" class="active">Vip<span class="arrow"></span></a>
        </div>
        <h3>Dining reservations</h3>
        <h5>The Sun City Group takes you on a journey of colorful beauty, travels around the world, and makes instant reservations for an unparalleled experience.!</h5>

        <div class="sub_dir_view">
            <div class="sub_dir_content">
                <div class="sub_dir_view_left">
                    <div class="sub_dir_view_left_img">
                        <a href=""><img src="<?php echo base_url()?>assets/main/image/en_us_tp_kinda.jpg"></a>
                    </div>
                    <div class="sub_dir_view_left_img">
                        <img src="<?php echo base_url()?>assets/main/image/en_us_tp_kinda.jpg">
                    </div>
                    <div class="sub_dir_view_left_img">
                        <img src="<?php echo base_url()?>assets/main/image/en_us_tp_kinda.jpg">
                    </div>
                </div>
                <div class="sub_dir_view_right">
                    <div class="sub_d_v_info">
                        <div class="sub_d_v_info_img">
                            <img src="<?php echo base_url()?>assets/main/image/old_res.jpg">
                        </div>
                        <div class="sub_d_v_info_text">
                            <h5>Old Shanghai Huyue Restaurant </h5>
                            <p><span class="span1">Date:</span><span>15.02.2018 to 31.02.2018 (20:00)</span></p>
                            <p><span class="span1">Location:</span><span>Sands Cotai Theatre</span></p>
                            <div class="sub_d_v_info_button open-modal">
                                Details
                            </div>
                        </div>
                    </div>
                    <div class="sub_d_v_info">
                        <div class="sub_d_v_info_img">
                            <img src="<?php echo base_url()?>assets/main/image/old_res.jpg">
                        </div>
                        <div class="sub_d_v_info_text">
                            <h5>Old Shanghai Huyue Restaurant </h5>
                            <p><span class="span1">Date:</span><span>15.02.2018 to 31.02.2018 (20:00)</span></p>
                            <p><span class="span1">Location:</span><span>Sands Cotai Theatre</span></p>
                            <div class="sub_d_v_info_button open-modal">
                                Details
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modals" id="modalka">
    <div class="maska close-modal"></div>
    <div class="modal_content">
        <span class="close_modal close-modal">
            <i class="material-icons">close</i>
        </span>
        <div class="content">
            <div class="content_info">
                <div class="mod_con_left">
                    <img src="<?php echo base_url()?>assets/main/image/old_res.jpg">
                    <div class="mod_con_left_tx">
                        <h5>Old Shanghai Huyue Restaurant </h5>
                        <p>The world's largest indoor stage play, the Chinese show "Journey to the West", is based on the "Journey to the West" of the ancient Chinese name Tang Sanzang. Since its inception, "Journey to the West" has been widely circulated in China and around the world. The characters in the story are undoubtedly one of the most active Chinese folk figures in world literature. On the basis of the original work, the Chinese show "Journey to the West" on the basis of the original work, further integrates elements such as myths, fairy tales, drama, comedy, comedy, and magical dramas. The scene switches between the human world, the devil world, the fairy world, and the Buddha world, from the heavens to the bottom of the mountains. The creative team hopes to show the audience the modern vitality of Chinese traditional culture and the infinite possibilities of stage performance art through rich interpretation and multi-level narrative time and space.</p>
                    </div>
                </div>
                <div class="mod_con_right">
                    <div class="mod_con_right_body">
                        <div class="mod_con_right_body_b">
                            <div class="mod_con_right_body_zg">
                                <i class="material-icons">access_time</i>
                            </div>
                            <div class="mod_con_right_body_tx">
                                <p>2018-01-05 TO 2018-08-31</p>
                            </div>
                        </div>
                        <div class="mod_con_right_body_b">
                            <div class="mod_con_right_body_zg">
                                <i class="material-icons">account_balance</i>
                            </div>
                            <div class="mod_con_right_body_tx">
                                <p>Kinsha Castle Theater</p>
                            </div>
                        </div>
                        <div class="mod_con_right_body_b">
                            <div class="mod_con_right_body_zg">
                                <i class="material-icons">attach_money</i>
                            </div>
                            <div class="mod_con_right_body_tx">
                                <p>HKD 980 (VIP area)</p>
                                <p>HKD 980 (VIP area)</p>
                                <p>HKD 980 (VIP area)</p>
                                <p>HKD 980 (VIP area)</p>
                            </div>
                        </div>
                    </div>
                    <a href="/restaurant/reserve/<?=$id?>" class="mod_button_a">
                        <div class="mod_button">
                            <?= $subm_reserve;?>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('.navbar').addClass('direct_navbar');
    $('.direct_navbar').removeClass('navbar');
    
    $('.open-modal').on('click',function(){
//                $('#modalka').addClass('open');
        $('#modalka').css("display","flex");
    });
    $('.close-modal').click(function(){
        $('#modalka').hide();
    });
</script>