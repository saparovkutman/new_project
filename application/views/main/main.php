<div class="header_datetime">
    <div class="weather_ic">
        <img src="assets/main/image/cloudy.png">
    </div>
    <div class="weather">
        <div class="weather_gr">30</div>
        <div class="weather_c">БИШКЕК</div>
    </div>
    <div class="datetime">
        <div class="time">8:34</div>
        <div class="em">01 JUL 2018 SUN</div>
    </div>
</div>
</div>
<div class="article">
    <div class="art_slider">
        <img src="assets/main/image/40393.jpg">
    </div>
    <div class="art_count_text">
        <h3>VIP Club member services</h3>
        <h5>Suncity Group prepares and provides comprehensive and diverse services for its VIP members. We offer universal entertainment     from five-star shopping to golfing experiences, ensuring that each and every Suncity VIP Club members can richly enjoy the        highest unmatched and unrivalled form of enjoyment fitting their distinguished identity.
        </h5>
        <div class="art_c_blog">
            <?php
            foreach ($data as $res):
//                print_r($data);
            ?>
            <div class="art_cont_p">
            <div class="art_c_blog_parent">
                <div class="view view-first">
                    <img src="<?= base_url()?>assets/upload/thumb/cat_one/<?= $res['image']?>" />
                    <div class="ssylka">
                        <h3><a href="package"><?= $res['title']?> </a> </h3><span class="arrow"></span>
                    </div>
                    <div class="view_text">
                        <?= $res['desc']?>
                    </div>
                    <div class="mask">
                        <h2><?= $res['title']?></h2>
                        <p><?= $res['desc']?></p>
                        <a href="package" class="info"><?= $read_m;?></a>
                    </div>
                </div>
            </div>
            </div>
            <?php endforeach;?>
            <div class="art_cont_p">
                <div class="art_c_blog_parent">
                    <div class="view view-first">
                        <img src="http://static1.squarespace.com/static/55ac6d80e4b0a964784b2f80/t/5703eaab37013bdcee28c077/1459874476977/gw9SfTu.png" />
                        <div class="ssylka">
                            <h3> <a href="service">Elite reservation service</a> </h3> <span class="arrow"></span>
                        </div>
                        <div class="view_text">
                            Regardless of which vibrant metropolis you are in anywhere in the world, Suncity Group will always   be at your side, offering you the most exciting non-stop 24-hour VIP entertainment.
                        </div>
                        <div class="mask">
                            <h2>Elite reservation service</h2>
                            <p>Regardless of which vibrant metropolis you are in anywhere in the world, Suncity Group will always be at your side, offering you the most exciting non-stop 24-hour VIP entertainment. We are one-stop overseas service that will bring you grand enjoyment and self-indulgence at the highest level! </p>
                            <a href="service" class="info">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="art_cont_p">
                <div class="art_c_blog_parent">
                    <div class="view view-first">
                        <img src="http://static1.squarespace.com/static/55ac6d80e4b0a964784b2f80/t/5703eaab37013bdcee28c077/1459874476977/gw9SfTu.png" />
                        <div class="ssylka">
                            <h3> <a href="vip_club">Exciting activities in Macao</a> </h3> <span class="arrow"></span>
                        </div>
                        <div class="view_text">
                            Regardless of which vibrant metropolis you are in anywhere in the world, Suncity Group will always   be at your side, offering you the most exciting non-stop 24-hour VIP entertainment.
                        </div>
                        <div class="mask">
                            <h2>Exciting activities in Macao</h2>
                            <p>Regardless of which vibrant metropolis you are in anywhere in the world, Suncity Group will always be at your side, offering you the most exciting non-stop 24-hour VIP entertainment. We are one-stop overseas service that will bring you grand enjoyment and self-indulgence at the highest level! </p>
                            <a href="vip_club" class="info">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="art_cont_p">
                <div class="art_c_blog_parent">
                    <div class="view view-first">
                        <img src="http://static1.squarespace.com/static/55ac6d80e4b0a964784b2f80/t/5703eaab37013bdcee28c077/1459874476977/gw9SfTu.png" />
                        <div class="ssylka">
                            <h3> <a href="">Membership services</a> </h3> <span class="arrow"></span>
                        </div>
                        <div class="view_text">
                            Regardless of which vibrant metropolis you are in anywhere in the world, Suncity Group will always   be at your side, offering you the most exciting non-stop 24-hour VIP entertainment.
                        </div>
                        <div class="mask">
                            <h2>Membership services</h2>
                            <p>Regardless of which vibrant metropolis you are in anywhere in the world, Suncity Group will always be at your side, offering you the most exciting non-stop 24-hour VIP entertainment. We are one-stop overseas service that will bring you grand enjoyment and self-indulgence at the highest level! </p>
                            <a href="#" class="info">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>
<script>
    $(document).ready(function(){
//            script at the scroll adds a new class for NAVBAR
        $(window).scroll(function () {
            var width = $(window).width();
//                alert(width);
            if ($(this).scrollTop() > 0 && width >992) {
                $('.navbar').addClass('navbar_scr');
                $('.navbar').removeClass('navbar');
//                    $('.running_line').css('background','rgba(220, 228, 228, 1)');
            } else {
                $('.navbar_scr').addClass('navbar');
                $('.navbar').removeClass('navbar_scr');
//                    $('.running_line').css('background','rgba(255,255,255,0.4)');
            }
        });
        
    });
</script>