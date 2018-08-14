<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Sun city</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<!--        <link href="../css/style.css" rel="stylesheet" type="text/css">-->
<!--        <link href="../css/media_style.css" rel="stylesheet" type="text/css">-->
        <?php 
        echo link_tag('assets/main/css/style.css');
        echo link_tag('assets/main/css/media_style.css');
        echo link_tag('assets/main/css/tcal.css');
        ?>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css' />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="<?php echo base_url()?>assets/main/js/tcal.js"></script>
        <script src="<?php echo base_url()?>assets/main/js/custom-select.min.js"></script>
        <script>
            $(document).ready(function () {
                $("#lang").on('change',function () {
                    var lang = $('#sel_lang').val();
                    var reference = $('body').data('reference');
                    $.ajax({
                        method: "POST",
                        url: "/main/lang_show",
                        data: {'lang': lang}
                    }).done(function(){
                        window.location=reference;
                    });
                })
            })
        </script>
    </head>             
    <body data-reference="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>">
    <?php

    $hmpage = $this->lang->line('header_menu_hmpage');
    $about = $this->lang->line('header_menu_about');
    $voiti = $this->lang->line('text_login_sumbit');
    $sign = $this->lang->line('text_signup_sumbit');
    $logout = $this->lang->line('text_log_sumbit');


    ?>
        <div class="header">
            <div class="running_line">
                <div class="marquee">
                    <span>Наш бегущий текст. Текст, который будет двигаться с права налево.</span>
                </div>
                <div class="header_language">
                    <div class="language">

                        <form id="lang" action="javascript:void(0)" method="post">

                        <select id="sel_lang" name="">
                            <?php
                            $selected = "";

                            ?>
                            <option id="rus" value="rus"  <?php
                            if($lang_sel == "rus"){
                                $selected = "selected";
                                echo $selected;
                            }
                            ?>>RUS</option>
                            <option id="english" value="english" <?php
                            if($lang_sel == "english"){
                                $selected = "selected";
                                echo $selected;
                            }
                            ?>>EN</option>
                            <option id="chi" value="chi"
                                <?php
                                if($lang_sel == "chi"){
                                    $selected = "selected";
                                    echo $selected;
                                }
                                ?>>简体中文</option>
                        </select>
                        </form>
                    </div>
                </div>
                <?php
                    $user_id = user('id');
                    if(isset($user_id)){
                        $name ="<a href=''><span class=\"entypo-user\"></span><p>".user("fullname")." </p><div class=\"content_login\"></div></a>";
                        $sign_logout="<a href='/logout'><p>".$logout."</p><span class=\"entypo-logout\"></span></a>";
                    }else{
                        $name ="<a href='/login'><p>".$voiti."</p><span class=\"entypo-login\"></span><div class=\"content_login\"></div></a>";
                        $sign_logout="<a href='/signup'><p>".$sign."</p><span class=\"entypo-user-add\"></span></a>";
                    }
                ?>
                <div>
                    <div class="sign_in">
                        <?php echo $name?>|
                        <?php echo $sign_logout;?>
                    </div>
                </div>
            </div>
            
            <div class="navbar">
                <div class="nav_panel">
                    <div class="nav_p_logo">
                        <a href="/main">
                            <img src="<?php echo base_url()?>assets/main/image/logo.png">
                        </a>
                    </div>
                    <div class="nav_mob_call">
                        <a href=""><i class="material-icons">call</i></a>
                    </div>
                    <div class="nav_mob_menu">
                        <a class="nav_toggle" href="javascript:void(0);"><span></span></a>
                    </div>
                </div>
                <div class="nav_p_menu">
                    <ul>
                        <li><a href="#reviews"><?php echo $hmpage;?></a></li>
                        <li><a href="#courses"><?php echo $about?></a></li>
                    </ul>
                </div>
            </div>
        