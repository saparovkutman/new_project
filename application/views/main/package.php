
<div class="article">
    <div class="subdirectory">
        <div class="link_category">
            <a href="">Home<span class="arrow"></span></a>
            <a href="" class="active">Vip<span class="arrow"></span></a>
        </div>
        <h3>Exclusive Macau Travel Package</h3>
        <h5>Suncity Group is dedicated to providing you with our tailor-designed “Exclusive Macau Travel Package”. Guests shall be entitled to cash rebate, expense allowance, free stays in Macau hotels, transportation services, relaxing entertainment facilities, show tickets, restaurant reservations, personal itinerary arrangements, and other luxurious Macau travel packages designed to let you indulge in the infinite charms of Macau once they reach the specific minimum promotional chipsspending.
        </h5>
        <div class="directory_package">
            <div class="directory_package_img open-modal">
                <img src="<?php echo base_url()?>assets/main/image/suncity_group_3000000.png">
            </div>
            <div class="directory_package_img open-modal">
                <img src="<?php echo base_url()?>assets/main/image/suncity_group_500000.png">
            </div>
            <div class="directory_package_img open-modal">
                <img src="<?php echo base_url()?>assets/main/image/suncity_group_1000000.png">
            </div>
            <div class="directory_package_img open-modal">
                <img src="<?php echo base_url()?>assets/main/image/suncity_group_200000.jpg">
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
                    <img src="<?php echo base_url()?>assets/main/image/suncity_group_3000000.png">
                    <div class="mod_con_left_tx">
                        <h5>Exclusive Macau Travel Package</h5>
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
                    <a href="/package/reserve/<?=$id?>" class="mod_button_a">
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
    $(document).ready(function(){
        $('.navbar').addClass('direct_navbar');
        $('.direct_navbar').removeClass('navbar');
        
        $('.open-modal').on('click',function(){
//                $('#modalka').addClass('open');
            $('#modalka').css("display","flex");
        });
        $('.close-modal').click(function(){
            $('#modalka').hide();
        });
    });
</script>