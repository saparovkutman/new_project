<html>
<head>
	<title>Sign Up</title>
    <style>
        /* CSS Document */

        @import url(http://weloveiconfonts.com/api/?family=fontawesome);
        @import url(http://weloveiconfonts.com/api/?family=iconicfill);

        @import url(http://meyerweb.com/eric/tools/css/reset/reset.css);

        /* ---------- FONTAWESOME ---------- */

        [class*="fontawesome-"]:before {
            font-family: 'FontAwesome', sans-serif;
        }

        /* ---------- GENERAL ---------- */

        body {
            background-color: #2c3338;
            color: #606468;
            font-family: 'Open Sans', Arial, sans-serif;
            font-size: 14px;
            line-height: 1.5em;
        }

        a {
            color: #eee;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        input {
            border: none;
            font-family: 'Open Sans', Arial, sans-serif;
            font-size: 14px;
            line-height: 1.5em;
            padding: 0;
            -webkit-appearance: none;
        }

        p {
            line-height: 1.5em;
        }

        .clearfix { *zoom: 1; } /* For IE 6/7 */
        .clearfix:before, .clearfix:after {
            display: table;
            content: "";
        }
        .clearfix:after { clear: both; }

        /* ---------- LOGIN ---------- */

        #login {
            margin: 50px auto;
            width: 280px;
        }

        #login form span {
            background-color: #363b41;
            border-radius: 3px 0px 0px 3px;
            -moz-border-radius: 3px 0px 0px 3px;
            -webkit-border-radius: 3px 0px 0px 3px;
            color: #606468;
            display: block;
            float: left;
            height: 50px;
            line-height: 50px;
            text-align: center;
            width: 50px;
        }

        #login form input {
            height: 50px;
            outline:none;
        }

        #login form input[type="text"], input[type="password"] {
            background-color: #3b4148;
            border-radius: 0px 3px 3px 0px;
            -moz-border-radius: 0px 3px 3px 0px;
            -webkit-border-radius: 0px 3px 3px 0px;
            color: #606468;

            padding: 0 16px;
            width: 227px;
        }

        #login form input:focus {
            color:#fff;
        }

        #login form input[type="submit"] {
            border-radius: 3px;
            -moz-border-radius: 3px;
            -webkit-border-radius: 3px;
            background-color: #ea4c88;
            color: #eee;
            font-weight: bold;
            margin-bottom: 2em;
            text-transform: uppercase;
            cursor:pointer;
            width: 280px;
        }

        #login form input[type="submit"]:hover {
            background-color: #d44179;
        }

        #login > p {
            text-align: center;
        }

        #login > p span {
            padding-left: 5px;
        }
        #login h6{
            color: #ff4d4d;
            margin-bottom: 1em;
            margin-top: 3px;
            font-size: 12px;
            letter-spacing: 1px;
        }
    </style>
</head>
<body>

    <div id="login">

        <?php
        if($error) echo '<p class="error">'. $error .'</p>';
        echo form_open().'<fieldset class="clearfix">';

        echo '<p><span class="fontawesome-user"></span>'.form_input(array('placeholder'=> "$param_fullname",'name' => 'fullname', 'value' => set_value('fio'))) .'</p>';
        echo '<h6>'.form_error('fullname').'</h6>';

        echo '<p><span class="iconicfill-at"></span>'.form_input(array('placeholder'=> 'email@gmail.com','name' => 'email', 'value' => set_value('email'))) .'</p>';
        echo '<h6>'.form_error('email').'</h6>';
        
        
        echo '<p><span class="fontawesome-tablet"></span>'.form_input(array('placeholder'=> "$param_phnumber",'name' => 'tel_number', 'value' => set_value('tel_number'))) .'</p>';
        echo '<h6>'.form_error('tel_number').'</h6>';

        echo '<p><span class="fontawesome-lock"></span>'.form_password(array('placeholder'=> "$pass",'name' => 'password', 'value' => set_value('password'))) .'</p>';
        echo '<h6>'.form_error('password').'</h6>';

        echo '<p><span class="fontawesome-lock"></span>'.form_password(array('placeholder'=> "$conf_passwds",'name' => 'password_conf', 'value' => set_value('password_conf'))) .'</p>';
        echo '<h6>'.form_error('password_conf').'</h6>';

        echo form_submit(array('type' => 'submit', 'value' => 'Sign Up'));
        echo '</fieldset>'.form_close();
        ?>
        <p><?= $acn?>? &nbsp;&nbsp;<a href="<?php echo site_url('/login'); ?>"><?=$sumbit?></a><span class="fontawesome-arrow-right"></span></p>
    </div>

</body>
</html>
