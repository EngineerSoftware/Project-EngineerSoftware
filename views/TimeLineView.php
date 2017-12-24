<!DOCTYPE html>
<html>
    <head>
        <link href="<?php echo base_url(); ?>Picture/logo1.jpg" rel="shortcut icon">
        <title>Connecteur</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/NewFeed.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    </head>
    <body class="body">
        <div class="main">
            <div class="header">
                <div class="search-inner">
                    <div class="image-form">
                        <img src="<?php echo base_url(); ?>Picture/logo1.jpg" style="height: 40px; border-radius: 4px;" style="float: left;">
                        <span style="float: right;">
                            <h2 style="margin-top: 0px; margin-left: 5px; color: white;">onnecteur</h2>
                        </span>
                    </div>
                    <form class="search-form">
                        <input class="search-input" type="" name="" placeholder="Search...">
                        <span class="search-icon glyphicon glyphicon-search" ></span>
                    </form>
                </div>
                <!--end class search-box-->

                <div class="menu-form">
                    <div class="_cy6">
                        <div class="_4kny">
                            <div class="_1k67">
                                <a href="" class="profile">
                                    <img  src="<?php echo base_url(); ?>Picture/user.png">
                                    <span>
                                        <?php
                                        echo $name;
                                        ?>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="_4kny">
                            <div class="_1k67">
                                <a href="">
                                    Home
                                </a>
                            </div>
                        </div>
                        <div class="_4kny">
                            <div class="_1k67">
                                <a href="">
                                    Find Friend
                                </a>
                            </div>
                        </div>
                        <div class="_4kny">
                            <div class="_1k67">
                                <a href="./SignIn.html">
                                    Log Out
                                </a>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="_cy6">

                    </div>
                    <div class="_cy6">

                    </div>
                </div>
                <!--end class menu-form-->
            </div>
            <!--end class header-->
            <div class="globalContainer">
                <div class="leftContainer">
                    <div class="user">
                        <a href="">
                            <img src="<?php echo base_url(); ?>Picture/user.png">
                            <div>
                                <?php
                                echo $name;
                                ?>
                            </div>
                            <div class="clear"></div>
                        </a>
                    </div>
                    <!--end class user-->
                    <div id="universal-nav" class="homesideNav">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a href="#">
                                    <img src="<?php echo base_url(); ?>Picture/newfeed2.jpg">
                                    <div class="linkWrap newfeed">News Feed</div>
                                    <div class="clear"></div>
                                </a>
                            </li>	
                            <li class="list-group-item">
                                <a href="">
                                    <img src="<?php echo base_url(); ?>Picture/notification.jpg">
                                    <div class="linkWrap notification">Notifications</div>
                                    <div class="clear"></div>
                                </a>
                            </li>			
                            <li class="list-group-item">
                                <a href="./Message.html">
                                    <img src="<?php echo base_url(); ?>Picture/inbox.jpg">
                                    <div class="linkWrap inbox">Message</div>
                                    <div class="clear"></div>
                                </a>							
                            </li>
                        </ul>
                    </div>
                    <!--end class homesideNav-->
                    <div id="apps-nav" class="homesideNav">
                        <h4 class="navHeader" style="font-size: 13px; font-weight: bold;">Explore</h4>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a href="">
                                    <img src="<?php echo base_url(); ?>Picture/findfriend.jpg">
                                    <div class="linkWrap findfriend">Find Friend</div>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="">
                                    <img src="<?php echo base_url(); ?>Picture/listfriends.jpg">
                                    <div class="linkWrap listfriends">List Friends</div>
                                </a>
                            </li>
                            <li class="list-group-item"></li>
                        </ul>
                    </div>
                    <!--end class homesideNav-->
                </div>

                <div class="centerContainer">
                    <div class="pagelet_composer">
                        <div style="margin-left: 3px;">
                            <div class="titleComposer">
                                <span class="glyphicon glyphicon-pencil"></span>
                                <span style="font-weight: bold; font-size: 15px;">Make Post</span>
                            </div>
                            <div class="editComposer">
                                <textarea class="editPost" rows="4" placeholder="What are you thinking?"></textarea>
                                <br>
                                <button class="btn acceptPost" type="button">Post</button>
                            </div>
                        </div>				
                    </div>
                    <!--end class pagelet_composer-->
                    <div class="topnews">
                        <div class="detailPost">
                            <div class="contentPost">
                                <div class="head-post">
                                    <img src="<?php echo base_url(); ?>Picture/background-1.jpg">
                                    <div>
                                        <a href="">
                                            Hà Puns
                                        </a>
                                        <br>
                                        <span class="glyphicon glyphicon-time"><?php echo $time; ?></span>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="body-post">
                                    <p>
                                        <?php
                                        echo $content;
                                        ?>
                                    </p>
                                </div>
                            </div>
                            <div class="otherFuncPost">
                                <form>
                                    <div class="like-cmt">
                                        <span>
                                            <span class="glyphicon glyphicon-thumbs-up"></span>
                                            <a href="">Like</a>
                                        </span>
                                        <span>
                                            <span class="glyphicon glyphicon-thumbs-down"></span>
                                            <a href="">Dislike</a>
                                        </span>
                                        <span>
                                            <span class="glyphicon glyphicon-comment"></span>
                                            <a href="">Comment</a>
                                        </span>
                                    </div>
                                </form>
                            </div>
                            <div class="comment">
                                <div class="content-cmt">
                                    <img src="<?php echo base_url(); ?>Picture/background-2.jpg">
                                    <div>
                                        <a href="">Phạm Thanh</a>
                                        <span>Chọn 1 cái balo khác có kết cấu tốt hơn ?</span>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="content-cmt">
                                    <img src="<?php echo base_url(); ?>Picture/background-1.jpg">
                                    <div>
                                        <a href="">Nguyễn Quang Vũ</a>
                                        <span>kiếm cái balo nào bé hơn, và quan trọng là nó cứng cáp, khi để k bị đổ nghiêng đổ ngửa ấy :v cái balo canon đâu =))</span>									
                                    </div>
                                </div>
                                <div class="clear"></div>					
                                <div class="content-cmt">
                                    <img src="<?php echo base_url(); ?>Picture/logo.jpg">
                                    <input type="text" name="" placeholder="Write a comment..." class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="detailPost">
                            <div class="contentPost">
                                <div class="head-post">
                                    <img src="<?php echo base_url(); ?>Picture/logo.jpg">
                                    <div>
                                        <a href="">Hà Puns</a>
                                        <br>
                                        <span class="glyphicon glyphicon-time">18h</span>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="body-post">
                                    <p>What a beautyful flower!</p>
                                    <img src="<?php echo base_url(); ?>Picture/background-2.jpg">
                                </div>
                            </div>
                            <div class="otherFuncPost">
                                <form>
                                    <div class="like-cmt">
                                        <span>
                                            <span class="glyphicon glyphicon-thumbs-up"></span>
                                            <a href="">Like</a>
                                        </span>
                                        <span>
                                            <span class="glyphicon glyphicon-thumbs-down"></span>
                                            <a href="">Dislike</a>
                                        </span>
                                        <span>
                                            <span class="glyphicon glyphicon-comment"></span>
                                            <a href="">Comment</a>
                                        </span>
                                    </div>
                                </form>
                            </div>
                            <div class="comment">
                                <div class="content-cmt">
                                    <img src="<?php echo base_url(); ?>Picture/background-2.jpg">
                                    <div>
                                        <a href="">Châu Nhi Trần</a>
                                        <span> Hay lắm chui trong nhà tắm cũng tự sướng như ai</span>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="content-cmt">
                                    <img src="<?php echo base_url(); ?>Picture/logo.jpg">
                                    <input type="text" name="" placeholder="Write a comment..." class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="detailPost">

                        </div>
                    </div>
                    <!--end class topnews-->
                </div>
                <!--end class centerContainer-->
                <div class="rightContainer">
                    <div class="fbChatSideBar">
                        <div class="fbChatSideBarBody">
                            <ul>
                                <li class="_42fz">
                                    <a href="">
                                        <div class="_551p">
                                            <div class="avaChat">
                                                <img src="<?php echo base_url(); ?>Picture/logo1.jpg">
                                            </div>
                                            <div class="activeChat">
                                                <span></span>
                                            </div>
                                            <div class="nameChat">Nguoi Vo Hinh</div>
                                        </div>
                                    </a>
                                </li>
                                <div class="clear"></div>
                                
                            </ul>
                        </div>
                        <div class="fbChatSideBarSearch"></div>
                    </div>
                </div>
                <!--end class rightContainer-->
                <div class="clear"></div>
            </div>
            <!--end class globalContainer-->
        </div>
    </body>
</html>
