<!DOCTYPE html>
<<<<<<< HEAD
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
=======

<html lang="en">
<!-- BEGIN HEAD -->

<head>

	<meta charset="utf-8" />

	<title>后台登录</title>

	<meta content="" name="description" />

	<meta content="" name="author" />

	<!-- BEGIN GLOBAL MANDATORY STYLES -->

	<link href="/admin/media/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

	<link href="/admin/media/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>

	<link href="/admin/media/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

	<link href="/admin/media/css/style-metro.css" rel="stylesheet" type="text/css"/>

	<link href="/admin/media/css/style.css" rel="stylesheet" type="text/css"/>

	<link href="/admin/media/css/style-responsive.css" rel="stylesheet" type="text/css"/>

	<link href="/admin/media/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>

	<link href="/admin/media/css/uniform.default.css" rel="stylesheet" type="text/css"/>

	<!-- END GLOBAL MANDATORY STYLES -->

	<!-- BEGIN PAGE LEVEL STYLES -->

	<link href="/admin/media/css/login-soft.css" rel="stylesheet" type="text/css"/>

	<!-- END PAGE LEVEL STYLES -->

	<link rel="shortcut icon" href="/admin/media/image/favicon.ico" />

</head>

<!-- END HEAD -->

<!-- BEGIN BODY -->

<body class="login">

	<!-- BEGIN LOGO -->

	<div class="logo">

		<img src="/admin/media/image/logo-big.png" alt="" />

	</div>

	<!-- END LOGO -->

	<!-- BEGIN LOGIN -->

	<div class="content">

		<!-- BEGIN LOGIN FORM -->


		<form action="" method="post">
		{{csrf_field()}}
			<h3 class="form-title">Login to your account</h3>
			@if(session('msg'))
			<p style="color: #942a25">{{ session('msg') }}</p>
			@endif
			<div class="control-group">

				<div class="controls">

					<div class="input-icon left">

						<i class="icon-user"></i>

						<input class="m-wrap placeholder-no-fix" type="text" placeholder="用户名" name="user_name"/>

					</div>

				</div>

			</div>

			<div class="control-group">

				<div class="controls">

					<div class="input-icon left">

						<i class="icon-lock"></i>

						<input class="m-wrap placeholder-no-fix" type="password" placeholder="密码" name="user_pass"/>

					</div>

				</div>

			</div>

			<div class="form-actions">

				<label class="checkbox">

				{{--<input type="checkbox" name="remember" value="1"/> 记住我--}}

				</label>

				<button type="submit" class="btn blue pull-right">

				登录 <i class="m-icon-swapright m-icon-white"></i>

				</button>

			</div>

		</form>

		<!-- END LOGIN FORM -->



	<!-- BEGIN COPYRIGHT -->

	<div class="copyright">

		2016 &copy;DR - Admin

	</div>

	<!-- END COPYRIGHT -->

	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->

	<!-- BEGIN CORE PLUGINS -->

	<script src="/admin/media/js/jquery-1.10.1.min.js" type="text/javascript"></script>

	<script src="/admin/media/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>

	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->

	<script src="/admin/media/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>

	<script src="/admin/media/js/bootstrap.min.js" type="text/javascript"></script>

	<!--[if lt IE 9]>

	<script src="/admin/media/js/excanvas.min.js"></script>

	<script src="/admin/media/js/respond.min.js"></script>

	<![endif]-->

	<script src="/admin/media/js/jquery.slimscroll.min.js" type="text/javascript"></script>

	<script src="/admin/media/js/jquery.blockui.min.js" type="text/javascript"></script>

	<script src="/admin/media/js/jquery.cookie.min.js" type="text/javascript"></script>

	<script src="/admin/media/js/jquery.uniform.min.js" type="text/javascript" ></script>

	<!-- END CORE PLUGINS -->

	<!-- BEGIN PAGE LEVEL PLUGINS -->

	<script src="/admin/media/js/jquery.validate.min.js" type="text/javascript"></script>

	<script src="/admin/media/js/jquery.backstretch.min.js" type="text/javascript"></script>

	<!-- END PAGE LEVEL PLUGINS -->

	<!-- BEGIN PAGE LEVEL SCRIPTS -->

	<script src="/admin/media/js/app.js" type="text/javascript"></script>

	<script src="/admin/media/js/login-soft.js" type="text/javascript"></script>

	<!-- END PAGE LEVEL SCRIPTS -->

	<script>

		jQuery(document).ready(function() {

		  App.init();

		  Login.init();

		});

	</script>

	<!-- END JAVASCRIPTS -->


</body>

<!-- END BODY -->

>>>>>>> 14cd58593430b456dcb7f9875e90c0e663299a7d
</html>