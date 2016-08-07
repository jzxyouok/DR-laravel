<!DOCTYPE html>
<html lang="en" class="no-js">

<head>

<meta charset="utf-8">
<title>Admin Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- CSS -->

<link rel="stylesheet" href="/a/css/supersized.css">
<link rel="stylesheet" href="/a/css/login.css">
<link href="/a/css/bootstrap.min.css" rel="stylesheet">
<script src="/a/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="/a/js/jquery.form.js"></script>
</head>
<body>
<div class="page-container">
	<div class="main_box">
		<div class="login_box">
			<div class="login_logo">
				<img src="/a/images/logo.png" >
			</div>
			<div class="login_form">
				<form action="/admin/log" id="login_form" method="post">
				 {{csrf_field()}}
					<div class="form-group">
						<label for="j_username" class="t">邮　箱：</label> 
						<input id="email" value="" name="email" type="text" class="form-control x319 in" 
						autocomplete="off">
					</div>
					<div class="form-group">
						<label for="j_password" class="t">密　码：</label> 
						<input id="password" value="" name="pass" type="password" 
						class="password form-control x319 in">
					</div>
					<div class="form-group space">
						<label class="t"></label>　　　
						<!-- <button type="button"  id="submit_btn" 
						class="btn btn-primary btn-lg">&nbsp;登&nbsp;录&nbsp </button> -->
						<input type="submit" class="btn btn-primary btn-lg" value="登陆">
						<input type="reset" value="&nbsp;重&nbsp;置&nbsp;" class="btn btn-default btn-lg">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script src="/a/js/supersized.3.2.7.min.js"></script>
<script src="/a/js/supersized-init.js"></script>
<div style="text-align:center;">
</div>
</body>
</html>