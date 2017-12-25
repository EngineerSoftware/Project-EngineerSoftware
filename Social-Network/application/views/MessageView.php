<!DOCTYPE html>
<html>
<head>
	<link href="../Picture/logo1.jpg" rel="shortcut icon">
	<title>Message</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ;?>css/Message.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body class="body">
	<div class="main">
		<div class="header">
			<div class="search-inner">
				<div class="image-form">
					<img src="../Picture/logo1.jpg" style="height: 40px; border-radius: 4px;" style="float: left;">
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
								<img  src="../Picture/background-1.jpg">
								<span>Puns</span>
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
							<a href="">
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
		<div class="main">
			<div class="listChat">
				<div>
					<div class="banner">
						<div class="title">Message</div>
						<span class="glyphicon glyphicon-envelope" style="cursor: pointer; font-size: 25px; line-height: 33px;"></span>
					</div>
					<div class="detailList">
						<div>
							<ul style="position: fixed; overflow: scroll; height: 540px; width: 420px; border-right: 1px solid rgba(0, 0, 0, 0.1);">
								<?php 
									//echo 'afaoijfpajhfasflasjdfajsldfafalfba';
									foreach ($id as $row) {
										echo 'jadhfas';
										echo '<li class="_1ht1 container-fluid">
										<div style="width: 100%;">
											<a href="">
											<img class="ava" src="../Picture/logo.jpg">
											<div class="about">
												<span>echo'.$row->id_author.'</span>	
											</div>
											<div class="clear"></div>
											</a>
											</div>
										</li>';

									}
								 ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- end class listChat -->
			<div class="contentChat">
				<div class="nameChat">
					<div>
						Hà Puns
					</div>
					<span>Unactive</span>
				</div>
				<div class="message">
					<div class="chat-message">
						<div class="msg">
							<div class="contentMsg msg-me">
								Good morning!
							</div>
							<div class="clear"></div>
						</div>
						<div class="msg">
							<div class="contentMsg msg-other">
								Long time no see yeh!
							</div>
							<div class="clear"></div>
						</div>
						
					</div>
					<div class="input-message">
						<input type="text" placeholder="Type a message...">
					</div>
				</div>
			</div>
			<!-- end class contentChat -->
		</div>
		<!-- end class main -->
	</div>
</body>
</html>