<!DOCTYPE html>
<html>
<head>
	<link href="../Picture/logo1.ico" rel="shortcut icon">
	<title>Social Network | Connecteur</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ;?>css/CreateAccount.css">
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
	<div class="content_CA">
		<div class="createAccount">
			<div class="title_CA">Tạo tài khoản</div>
			<!--end class title_CA-->
			<div class="logIn_CA">
				<a href="<?php echo base_url() . 'index.php/Login' ?>">đăng nhập</a>
			</div>
			<!--end class logIn_CA-->
			<div class="clear"></div>
			<hr style="color: gray; height: 1px;">
			<div>
				<br>
			</div>
			<form action="<?php echo base_url(); ?>index.php/Control/CreateAccountOne" method="post" enctype="multidata/form-data">
				<div class="form_CA">
					<div class="b_12 tac" style="display: none">
						<div class="clb error_message">
							<span class="icon"></span>
							<span id="b24net_reg_error"></span>
						</div>
					</div>
					<div class="form-group">
						<div class="form-group name">
							<label class="lb">
								Tên :
							</label>
							<input type="text" name="UserName" class="form-control">
							<div class="clear"></div>
						</div>

						<div class="form-group email">
							<label class="lb">
								Email :
							</label>
							<input type="text" name="Email" class="form-control">
							<div class="clear"></div>
						</div>


						<div class="form-group pass">
							<label class="lb">
								Mật khẩu :
							</label>
							<input type="password" name="PassWord" class="form-control">	
							<div class="clear"></div>					
							<span style="font-size: 11px; float: right; margin-right: 50px;">*(Mật khẩu phải chứa ít nhất 8 kí tự.)</span>
							<div class="clear"></div>						
						</div>
						<div class="form-group birth">
							<label class="lb">
								Ngày sinh :
							</label>
							<!-- <input type="text" name="LAST_NAME" class="form-control"> -->
							<select class="form-control year" name="Year">
								<?php
                                    					for ($i = 2017; $i >= 1905; $i--) {
                                        				echo '<option>' . $i . '</option>';
                                    					}
                                    				?>
							</select>
							<select class="form-control month" name="Month">
								<?php
								    for ($i = 1; $i <= 12; $i++) {
									echo '<option>' . $i . '</option>';
								    }
								?>
							</select>
							<select class="form-control day" name="Day">
								<?php
								    for ($i = 1; $i <= 31; $i++) {
									echo '<option>' . $i . '</option>';
								    }
								?>
							</select>
							<div class="clear"></div>
						</div>
						
						<div class="form-group hometown">
							<label class="lb">
								Quê quán :
							</label>
							<select class="form-control select-box" name="HomeTown">
								<?php
								    foreach ($hometown as $row) {
									$hometown = $row->name;
									echo '<optione>'.$hometown.'<option>';
								    }
								?>
							</select>
							<div class="clear"></div>
						</div>
						<div class="form-group highschool">
							<label class="lb">
								Trường THPT:
							</label>
							<input type="text" name="UserName" class="form-control">
							<div class="clear"></div>
						</div>
						<div class="form-group university">
							<label class="lb">
								Đại học :
							</label>
							<input type="text" name="UserName" class="form-control">
							<div class="clear"></div>
						</div>
						<div class="form-group "></div>
						<div class="form_submit">
							<input class="btn" type="submit" value="TẠO TÀI KHOẢN">
						</div>
					</div>
				</div>
			</form>
			<!--end class form_CA-->
		</div>
	</div>
	<!--end class content-->
	<br>
	<br>
	<div class="footer" style="text-align: center; color: blue;">
		© 2017	MT Social Network, Inc. Powered by <a href="https://www.facebook.com/Master-Technology-Corporation-248433228915394/" style="font-weight: bold;">Master Technology</a>. 	
	</div>
	<!--end class footer-->
</body>
</html>
