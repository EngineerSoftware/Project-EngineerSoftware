<!DOCTYPE html>
<html>
    <head>
        <link href="<?php echo base_url(); ?>Picture/logo1.ico" rel="shortcut icon">
        <title>Social Network | Connecteur</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/SignIn.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    </head>
    <body class="body">
        <div class="header">
            <div class="b_6">
                <a href="">
                    <h1 class="socialnetwork">Connecteur</h1>
                </a>
            </div>
        </div>
        <!--end class header-->
        <div class="content">
            <div class="logo">
                <a href="">
                    <img src="<?php echo base_url(); ?>Picture/logo.jpg">
                </a>
                <div class="introduce">
                    <div class="home_title">
                        <br>
                        Enjoy the way you communicate and connecting!
                    </div>
                    <p>
                        MT Social Network is a free service that lets you communicate and connect with your friends, family and colleagues instantly.
                    </p>
                </div>
            </div>
            <!--end class logo-->
            <div class="logIn">
                <div class="title_logIn">Đăng Nhập</div>
                <div class="createAccount_logIn">
                    <a href="<?php echo base_url(); ?>index.php/Control/CreateAccount">tạo tài khoản</a>
                </div>
                <div class="clear"></div>
                <div>
                    <br>
                </div>
                <form class="form_auth_logIn" action="index.php/check" method="post" enctype="multidata/form-data">
                      <div class="form-group">
                      <input type="text" name="Email" class="form-control" placeholder="E-mail">
                    </div>
                    <div class="form-group">
                        <input type="password" name="Password" class="form-control" placeholder="Mật khẩu">
                    </div>
                    <div class="form_submit">
                        <input class="btn" type="submit" value="ĐĂNG NHẬP">
                    </div>
                    <div>
                        <br>
                    </div>
                    <div class="form_getpass">
                        <a href="">Quên mật khẩu?</a>
                    </div>
                    <?php
                    echo '<div style="text-align:center; color:red;">';
                    echo validation_errors();
                    echo "</div>";
                    if ($login_error) {
                        echo '<p style="text-align:center; color:red;">' . $login_error . '</p>';
                    }
                    ?>
                </form>
            </div>
            <!--end class logIn-->
            <div class="info">

            </div>
        </div>
        <!--end class content-->
        <div class="footer" style="text-align: center; color: blue;">
            © 2017	MT Social Network, Inc. Powered by <a href="https://www.facebook.com/Master-Technology-Corporation-248433228915394/" style="font-weight: bold;">Master Technology</a>. 	
        </div>
        <!--end class footer-->
    </body>
</html>
