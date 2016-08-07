<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>戴瑞珠宝官网会员注册登录_Darry Ring求婚钻戒价格 戴瑞珠宝官网</title>
	<meta content="Darry Ring钻戒价格,Darry Ring钻戒图片" name="Keywords" />
    <meta content="Darry Ring官网会员注册登录唯一入口，Darry Ring是求婚钻戒第一品牌，想了解Darry Ring实体店、Darry Ring哪里有卖等相关Darry Ring资讯就先进入戴瑞珠宝官网注册吧！" name="Description" />
    	    <link rel="stylesheet" type="text/css" href="{{asset('go/login/css/style.css')}}">
			<script type="text/javascript" src="{{asset('go/login/js/jquery-1.10.1.min.js')}}"></script>
            <script type="text/javascript" src="{{asset('go/login/js/common.js')}}"></script>
            <script type="text/javascript" src="{{asset('go/login/js/banner.js')}}"></script>
			<script type="text/javascript" src="{{asset('go/regist/js/layer.js')}}"></script>
        </head>
<body>
	        		<!-- start of 头部导航-->

	    <!--end of 头部导航-->
    <header class="cart_head">
    <div class="w1000">
        <div class="dr_logo fl">
            <a href="{{url('/login')}}"><img src="{{asset('go/login/images/logo.png')}}" alt="" /></a>
        </div>
        <div class="dr_member fr">
            <div class="drmember_sec">
                <div class="dr_member-left fl">
                    <a href="{{url('/login')}}">登录</a>
                    <a href="#" class="drtojoin">加入DR族</a>
                </div>
                <div class="dr_member-left fl">
                    <i>
                        <img src="{{asset('go/login/images/telleft.png')}}">
                        400 8888  8888
                    </i>
                </div>
                <div class="dr_member-left fl">
                    <a href="http://sighttp.qq.com/authd?IDKEY=b2d793b3b3a3d63742523d467fe250d7f0d3894230c7e877" target="_blank" class="help-right">QQ客服<span></span></a>
                </div>
            </div>
        </div>
    </div>
</header>
    <div class="dr_banner">
	<!--通行证操作区-->
		<div class="dr_actionMain w1000">
			<div class="dr_passprt">
				<form id="loginform" action="{{url('/form')}}" method="post">
					{{csrf_field()}}
					<div class="dr_form">
						<h3>DR族-登录</h3>
						<div class="dr_minAction">
							@if(session('msg'))
							<p style="color: #953b39">{!! session('msg') !!}</p>
							@endif
							<input type="text" class="ipTxt ico-user" value="" id="txtName" name="name" placeholder="请输入您的邮箱/手机号码" />
							<input type="password" class="ipTxt ico-pwd" value="" id="txtPwd" name="pass" placeholder="请输入密码" />
							<p class="dr_actionPwd"><a class="fr" href="#">忘记密码?</a><input id="isRemember" type="checkbox" /><label for="isRemember">记住密码</label></p>
						</div>
						<div id="login" class="dr_Btns">
							{{--<a class="defaultBtn focus" >登录</a>--}}
							<input type="submit" value="登录" class="colorBtn left" >
							{{--<a class="colorBtn left">加入DR族</a>--}}
						</div>
					</div>
				</form>
			</div>
		</div>
		<!--通行证操作区 end-->
		<!--banner轮播图-->
		        <ul class="dr_bannerul fix" id="drHomeBan">
               <li>
               <a href="#" target="#">
                    <img src="{{asset('go/login/images/login.jpg')}}" />
                </a>
            </li>
             <li>
                <a href="#" target="#">
                    <img src="{{asset('go/login/images/login2.jpg')}}" />
                </a>
            </li>
        </ul>
        <!--banner轮播图 end-->

        <div class="drbanner_xdcort">
            <ul class="drbanner_xd" id="banBtns">
                                <li><span></span></li>
                <li class="nobg"><span></span></li>
            </ul>
        </div>	</div>
<div class="dr_footer">
    <div class="dr_footer-top"></div>
    <!--灰色区域-->
    <div class="dr_gray">
        <!--帮助-->
        <div class="dr_help w1000 fix">
            <div class="dr_help-all fl">
                <div class="dr_help-top">
                    <div class="dr_help-left dr_help-gz fl" id="dr_help-gz">
                        关注我们
                        <!--分享按钮-->
                        <div class="comShare">
                            <img src="{{asset('go/regist/images/ew.jpg')}}" />
                        </div>
                        <!--分享按钮end-->
                    </div>
                    <a class="dr_help-left" href="  ">XXXXXX</a>
                    <a class="dr_help-left" href="  ">XXXXXX</a>
                    <a class="dr_help-left" href="  ">XXXXXX</a>
                </div>
            </div>
            <div class="dr_help-all fl">
                <p>24小时全国免费服务热线</p>
                <img src="{{asset('go/login/images/tel.png')}}" />
            </div>
        </div>
        <!--帮助end-->
    </div>
            <div class="dr_statement">
                <p>Copyright  © 2006-2015 www.darryring.com 戴瑞珠宝 All Rights Reserved. 粤ICP备11012085号-2</p>
                <p>ICP经营许可证粤B2-20140279 | 中国互联网违法信息举报中心 | 中国公安网络110报警服务 | 本网站提供所售商品的正式发票</p>
            </div>
            <!--声明end-->
            <!--友情链接-->
			<!--友情链接end-->
        </div>
    </div>
    <!--黑色区域end-->
</div>


<script type="text/javascript">
	$(document).ready(function() {
		$('#txtName').blur(function(){
			var name = $('#txtName').val();//获取用户输入的用户名
			if ($('#txtName').val() == '') {
                hideError();
				//showError('请输入长度为6-20位数的密码');
				showError('#loginError','邮箱格式/手机号码不正确，请重新输入');
				//假设用户账号输入错误，给该输入框加红色框：error样式
				$('#txtName').addClass('error');
                return false;
			}
			////////////////////////////////////////////////用户名验证
			$.post('{{url('/loginname')}}',{'_token':'{{csrf_token()}}','name':name},function(date){
						if(date){
                		layer.msg(date['msg'], {icon: 2});
						}else{
						}
					});
			/////////////////////////////////////////////////
		});
		$('#txtPwd').blur(function(){
			var pwd = $('#txtPwd').val();
			if (pwd == '') {
                hideError();
				//showError('请输入长度为6-20位数的密码');
				showError('#loginError','请输入密码');
				//假设用户账号输入错误，给该输入框加红色框：error样式
				$('#txtPwd').addClass('error');
                return false;
			}
			if(pwd.length < 6){
				hideError();
				//showError('请输入长度为6-20位数的密码');
				showError('#loginError','请输入长度为6-20位数的密码');
				//假设用户账号输入错误，给该输入框加红色框：error样式
				$('#txtPwd').addClass('error');
                return false;
            }
		});
	});
</script>
    </body>
</html>