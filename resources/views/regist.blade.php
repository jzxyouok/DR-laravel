<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
			<title>戴瑞珠宝官网会员注册登录_Darry Ring求婚钻戒价格 戴瑞珠宝官网</title>
    <meta content="Darry Ring钻戒价格,Darry Ring钻戒图片" name="Keywords" />
    <meta content="Darry Ring官网会员注册登录唯一入口，Darry Ring是求婚钻戒第一品牌，想了解Darry Ring实体店、Darry Ring哪里有卖等相关Darry Ring资讯就先进入戴瑞珠宝官网注册吧！" name="Description" />
			<link rel="stylesheet" type="text/css" href="{{asset('go/regist/css/style.css') }}">
			<script type="text/javascript" src="{{asset('go/regist/js/jquery-1.10.1.min.js')}}"></script>
			<script type="text/javascript" src="{{asset('go/regist/js/common.js')}}"></script>
			<script type="text/javascript" src="{{asset('go/regist/js/banner.js')}}"></script>
			<script type="text/javascript" src="{{asset('go/regist/js/layer.js')}}"></script>
</head>

<body>

		<!-- start of 头部导航-->
        <header class="cart_head">
            <div class="w1000">
                <div class="dr_logo fl">
						{{--商城logo--}}
                    <a href="{{url('/index')}}">
						<img src="{{asset('go/regist/images/logo.png')}}" alt="" /></a>
                </div>

                <div class="dr_member fr">
                    <div class="drmember_sec">
                        <div class="dr_member-left fl">
                            <a href="{{url('/login')}}">登录</a>
                            <a href="#" class="drtojoin">加入DR族</a>
                        </div>
                        <div class="dr_member-left fl">
                            <i>
                                <img src="{{asset('go/regist/images/telleft.png')}}">
                                400 8888 8888
                            </i>
                        </div>
                        <div class="dr_member-left fl">
                            <a href="http://sighttp.qq.com/authd?IDKEY=b2d793b3b3a3d63742523d467fe250d7f0d3894230c7e877" target="_blank" class="help-right">QQ客服<span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    <!--end of 头部导航-->
    <!-- starto of container -->

    <div class="dr_banner">
        <!--通行证操作区-->
        <div class="dr_actionMain w1000">
            <div class="dr_passprt dr_passprt-h">
                <ul class="dr_formTabTitle fix">
					<li class="dr_formTableft activite">手机注册</li>
                    <li class="dr_formTabright  em">邮箱注册</li>
				</ul>

                <div class="dr_form">
                    <div class="dr_formTabMain" id="formTabs">
                        <!--手机end-->
                        <form class="form_first" action="/mobileform" method="post">
							{{csrf_field()}}
                        <div class="dr_formTabCon" style="display:block;">
                            <div class="higheVssel higheVssel_phone "  >
                                <!--错误提示-->
                                <div class="errorMsg" id="prError"></div>
                                <!--错误提示-->
									<input type="text" name="mobile" id="mobile" value="" class="ipTxt ico-phone" placeholder="请输入您注册的手机号码" />
									<input type="password" name="mobile_pwd" class="ipTxt ico-pwd" placeholder="请输入长度为6-20位数的密码" />
									<input type="password" name="mobile_pwd_confirm" class="ipTxt ico-pwd" placeholder="请再次确认密码" />

                                <div class="fix"></div>

								<div class="fix">
                                        <input type="hidden" name="imgcode" value="1">
                                        <input type="text" name="mobile_img_code" value="" class="ipTxt ico-send inputCode" placeholder="请输入验证码" />
                                        <a class="yxCode fr" title="点击刷新验证码">
											<img src="{{url('/code')}}" onclick="this.src = '{{url('/code')}}?' + Math.random();"/>
										</a>
                                </div>
								<div class="checkTerms">

                                </div>
                            </div>
                            <div class="dr_Btns">
                                <!-- <a class="colorBtn" id="mobile_reg">立即加入DR族</a> -->
                                <input class="colorBtn" type="submit" id="mobile_reg" value="提交"/>
                            </div>
                            <div class="loginLink">
                                <!--简体版第三方登录-->
                                <!-- <div class="regOtherLogin">
                                    <a class="qqdl" href="javascript:;"></a>
                                    <a class="wxdl" href="javascript:;"></a>
                                    <a class="wbdl" href="javascript:;"></a>
                                    <a class="zfbdl" href="javascript:;"></a>
                                </div> -->
								<div class="regOtherLogin">
                                    {{--<a class="qqdl" href="/syncLogin/qq"></a>--}}
                                    {{--<a class="wxdl" href="/syncLogin/weixin"></a>--}}
                                    {{--<a class="wbdl" href="/syncLogin/weibo"></a>--}}
                                    {{--<a class="zfbdl" href="/syncLogin/alipay"></a>--}}
                                </div>

                                <!--简体版第三方登录end-->
                                <a href="{{url('/login')}}">> 已有帐户 登录</a>
                            </div>
                        </div>
                        </form>
                        <!--手机end-->
                        <!--邮箱注册-->
                        <form class="form_second" action="emailform" method="post">
							{{csrf_field()}}
                        {{--<input type="hidden" name="type" value="2">--}}
                        {{--<input type="hidden" name="forward" value="/">--}}
                        {{--<input type="hidden" name="retype" value="1">--}}
                        <div class="dr_formTabCon">
                            <div class="higheVssel">
                                <!--错误提示-->
                                <div class="errorMsg" id="erError"></div>
                                <!--错误提示-->
                                <input type="text" name="email" value="" class="ipTxt ico-email" placeholder="请输入您的邮箱地址" />
                                <input type="password" name="email_pwd" value="" class="ipTxt ico-pwd" placeholder="请输入长度为6-20位数的密码" />
                                <input type="password" name="email_pwd_confirm" value="" class="ipTxt ico-pwd" placeholder="请再次确认密码" />
                                <div class="fix">
                                    <input type="text" name="email_code" value="" class="ipTxt ico-send inputCode" placeholder="请输入验证码" />
                                    <a class="yxCode fr"  title="点击刷新验证码"><img src="{{url('/code')}}" onclick="this.src = '{{url('/code')}}?' + Math.random();" /></a>
                                </div>
                                <div class="checkTerms">

                                </div>
                            </div>
                            <div class="dr_Btns">
                                <input class="colorBtn" type="submit" id="email_reg" value="立即加入DR族"/>
                                <!-- <a class="colorBtn" id="email_reg">立即加入DR族</a> -->
                            </div>
                            <div class="loginLink">
                                <!--简体版第三方登录-->
								<div class="regOtherLogin">
                                    {{--<a class="qqdl" href="/syncLogin/qq"></a>--}}
                                    {{--<a class="wxdl" href="/syncLogin/weixin"></a>--}}
                                    {{--<a class="wbdl" href="/syncLogin/weibo"></a>--}}
                                    {{--<a class="zfbdl" href="/syncLogin/alipay"></a>--}}
                                </div>

                                <!-- <div class="regOtherLogin">
                                    <a class="qqdl" href="javascript:;"></a>
                                    <a class="wxdl" href="javascript:;"></a>
                                    <a class="wbdl" href="javascript:;"></a>
                                    <a class="zfbdl" href="javascript:;"></a>
                                </div> -->
                                <!--简体版第三方登录end-->
                                <a href="/login">> 已有帐户 登录</a>
                            </div>
                        </div>
                        </form>
                        <!--邮箱注册end-->

                    </div>
                </div>
            </div>
        </div>
        <!--通行证操作区 end-->
        <!--banner轮播图-->
                <ul class="dr_bannerul fix" id="drHomeBan">
               <li>
               <a href="{{url('/index')}}" target="_blank">
                    <img src="{{url('go/regist/images/login.jpg')}}" />
                </a>
            </li>
             <li>
                <a href="{{url('/index')}}" target="_blank">
                    <img src="{{url('go/regist/images/login2.jpg')}}" />
                </a>
            </li>
        </ul>
        <!--banner轮播图 end-->

        <div class="drbanner_xdcort">
            <ul class="drbanner_xd" id="banBtns">
                                <li><span></span></li>
                <li class="nobg"><span></span></li>
            </ul>
        </div>        <!--banner轮播图 end-->
    </div>

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
                            <img src="{{url('go/regist/images/ew.jpg')}}" />
                        </div>
                        <!--分享按钮end-->
                    </div>
                    <a class="dr_help-left" href=" ">XXXXXX</a>
                    <a class="dr_help-left" href="  ">XXXXXXX</a>
                    <a class="dr_help-left" href="  ">XXXXXX</a>
                </div>
            </div>
            <div class="dr_help-all fl">
                <p>24小时全国免费服务热线</p>
                <img src="{{url('go/regist/images/tel.png')}}" />
            </div>
        </div>
        <!--帮助end-->
    </div>
    <!--灰色区域end-->
    <!--黑色区域-->
    <div class="dr_black">
            <!--声明-->
            <div class="dr_statement">
                <p>Copyright  © 2006-2015 www.darryring.com 戴瑞珠宝 All Rights Reserved. 粤ICP备11012085号-2</p>
                <p>ICP经营许可证粤B2-20140279 | 中国互联网违法信息举报中心 | 中国公安网络110报警服务 | 本网站提供所售商品的正式发票</p>
            </div>
            <!--声明end-->
            <!--友情链接-->
		    <!--友情链接end-->
        </div>
    </div>
<script type="text/javascript" src="{{url('go/regist/js/jquery-1.10.1.min.js')}}"></script>
<script type="text/javascript">
        $(function(){
            //切换tab
            $(".tits .dr_formTableft").click(function(event) {
                $(this).addClass('activite').siblings().removeClass('activite')
                $(".dr_formTabCon").eq(0).show()
                $(".dr_formTabCon").eq(1).hide()
            });

            $(".tits .dr_formTabright").click(function(event) {
                $(this).addClass('activite').siblings().removeClass('activite')
                $(".dr_formTabCon").eq(1).show()
                $(".dr_formTabCon").eq(0).hide()
            });

            //邮箱验证
            $('input[name="email"]').blur(function(){
                removeClass();
                var email = $('input[name="email"]').val();
                if(isNull(email)){
                    hideError();
                    //showError
                    showError('#erError','请输入您的邮箱地址！');
                    //假设用户输入错误，给该输入框加红色框：error样式
                    $('input[name="email"]').addClass('error');
                    return false;
                }
                if(!isEmail(email)){
                    hideError();
                    //showError
                    showError('#erError','邮箱格式错误 请重新输入！');
                    //假设用户输入错误，给该输入框加红色框：error样式
                    $('input[name="email"]').addClass('error');
                    return false;
                }
                ////////////////////////////////////////////////////ajax 验证邮箱账号////////注意token
                	$.post('{{url('/ajx')}}',{'_token':'{{csrf_token()}}','email':email},function(date){
						if(date){
                		layer.msg(date['msg'], {icon: 2});
						}else{

						}
					});
				//////////////////////////////////////////////////////////////////////////////
            });
            //邮箱密码验证
            $('input[name="email_pwd"]').blur(function(){
                removeClass();
                var pwd = $('input[name="email_pwd"]').val();
                if(isNull(pwd)){
                    hideError();
                    //showError
                    showError('#erError','请填写密码！');
                    //假设用户输入错误，给该输入框加红色框：error样式
                    $('input[name="email_pwd"]').addClass('error');
                    return false;
                }

                if(pwd.length < 6){
                    hideError();
                    //showError
                    showError('#erError','请输入长度为6-20位数的密码！');
                    //假设用户输入错误，给该输入框加红色框：error样式
                    $('input[name="email_pwd"]').addClass('error');
                    return false;
                }
            });
            $('input[name="email_pwd_confirm"]').blur(function(){
                removeClass();
                var pwd_confirm = $('input[name="email_pwd_confirm"]').val();
                var pwd = $('input[name="email_pwd"]').val();
                if(isNull(pwd_confirm)){
                    hideError();
                    //showError
                    showError('#erError','请输入确认密码！');
                    //假设用户输入错误，给该输入框加红色框：error样式
                    $('input[name="email_pwd_confirm"]').addClass('error');
                    return false;
                }

                if(pwd != pwd_confirm){
                    hideError();
                    //showError
                    showError('#erError','密码与确认密码不一致 请重新输入！');
                    //假设用户输入错误，给该输入框加红色框：error样式
                    $('input[name="email_pwd_confirm"]').addClass('error');
                    return false;
                }
            });
            $('input[name="email_code"]').blur(function(){
                removeClass();
                var code = $('input[name="email_code"]').val();
                if(isNull(code)){
                    hideError();
                    //showError
                    showError('#erError','请输入验证码！');
                    //假设用户输入错误，给该输入框加红色框：error样式
                    $('input[name="email_code"]').addClass('error');
                    return false;
                }
                /////////////////////////////////////////////////////////////////////////ajax验证验证码
				$.post('{{url('/getcode')}}',{'_token':'{{csrf_token()}}','code':code},function(date){
						if(date){
                		layer.msg(date['msg'], {icon: 2});
						}else{

						}
				});
            });
			/////////////////////////////////////////////////////////////////////////////////////////
            //手机注册验证
            $('input[name="mobile"]').blur(function(){
                removeClass();
                var mobile = $('input[name="mobile"]').val();
                if(isNull(mobile)){
                    hideError();
                    //showError
                    showError('#prError','请输入手机号码！');
                    //假设用户输入错误，给该输入框加红色框：error样式
                    $('input[name="mobile"]').addClass('error');
                    return false;
                }
                if(!checkMobile(mobile)){
                    hideError();
                    //showError
                    showError('#prError','手机号码格式错误 请重新输入！');
                    //假设用户输入错误，给该输入框加红色框：error样式
                    $('input[name="mobile"]').addClass('error');
                    return false;
                }
                //////////////////////////////////////////////ajax 验证手机号
				$.post('{{url('/mobile')}}',{'_token':'{{csrf_token()}}','mobile':mobile},function(date){
						if(date){
                		layer.msg(date['msg'], {icon: 2});
						}else{

						}
				});
			})
            //手机注册验证密码
            $('input[name="mobile_pwd"]').blur(function(){
                removeClass();
                var pwd = $('input[name="mobile_pwd"]').val();
                if(isNull(pwd)){
                    hideError();
                    //showError
                    showError('#prError','请填写密码！');
                    //假设用户输入错误，给该输入框加红色框：error样式
                    $('input[name="mobile_pwd"]').addClass('error');
                    return false;
                }
                if(pwd.length < 6){
                    hideError();
                    //showError
                    showError('#prError','请输入长度为6-20位数的密码！');
                    //假设用户输入错误，给该输入框加红色框：error样式
                    $('input[name="mobile_pwd"]').addClass('error');
                    return false;
                }
            });

            $('input[name="mobile_pwd_confirm"]').blur(function(){
                removeClass();
                var pwd = $('input[name="mobile_pwd"]').val();
                var pwd_confirm = $('input[name="mobile_pwd_confirm"]').val();
                if(isNull(pwd_confirm)){
                    hideError();
                    //showError
                    showError('#prError','请输入确认密码！');
                    //假设用户输入错误，给该输入框加红色框：error样式
                    $('input[name="mobile_pwd_confirm"]').addClass('error');
                    return false;
                }

                if(pwd != pwd_confirm){
                    hideError();
                    //showError
                    showError('#prError','密码与确认密码不一致 请重新输入！');
                    //假设用户输入错误，给该输入框加红色框：error样式
                    $('input[name="mobile_pwd_confirm"]').addClass('error');
                    return false;
                }

            });

			 $('input[name="mobile_img_code"]').blur(function(){
                removeClass();
                var code = $('input[name="mobile_img_code"]').val();
                if(isNull(code)){
                    hideError();
                    //showError
                    showError('#erError','请输入验证码！');
                    //假设用户输入错误，给该输入框加红色框：error样式
                    $('input[name="mobile_img_code"]').addClass('error');
                    return false;
                }

                /////////////////////////////////////////////////////////////////////////ajax验证验证码
				$.post('{{url('/gecode')}}',{'_token':'{{csrf_token()}}','code':code},function(date){
						if(date){
                		layer.msg(date['msg'], {icon: 2});
						}else{

						}
				});
            });

            //验证参数
            $('.colorBtn').click(function(){
                removeClass();
                //判断是邮箱还是手机
                if($('.dr_formTabright').hasClass('activite')){
                    //邮箱验证
                    removeClass();
                    var email = $('input[name="email"]').val();
                    if(isNull(email)){
                        hideError();
                        //showError
                        showError('#erError','请输入您的邮箱地址！');
                        //假设用户输入错误，给该输入框加红色框：error样式
                        $('input[name="email"]').addClass('error');
                        return false;
                    }
                    if(!isEmail(email)){
                        hideError();
                        //showError
                        showError('#erError','邮箱格式错误 请重新输入！');
                        //假设用户输入错误，给该输入框加红色框：error样式
                        $('input[name="email"]').addClass('error');
                        return false;
                    }

                    //邮箱密码验证
                    removeClass();
                    var pwd = $('input[name="email_pwd"]').val();
                    if(isNull(pwd)){
                        hideError();
                        //showError
                        showError('#erError','请填写密码！');
                        //假设用户输入错误，给该输入框加红色框：error样式
                        $('input[name="email_pwd"]').addClass('error');
                        return false;
                    }

                    if(pwd.length < 6){
                        hideError();
                        //showError
                        showError('#erError','请输入长度为6-20位数的密码！');
                        //假设用户输入错误，给该输入框加红色框：error样式
                        $('input[name="email_pwd"]').addClass('error');
                        return false;
                    }

                    removeClass();
                    var pwd_confirm = $('input[name="email_pwd_confirm"]').val();
                    var pwd = $('input[name="email_pwd"]').val();
                    if(isNull(pwd_confirm)){
                        hideError();
                        //showError
                        showError('#erError','请输入确认密码！');
                        //假设用户输入错误，给该输入框加红色框：error样式
                        $('input[name="email_pwd_confirm"]').addClass('error');
                        return false;
                    }

                    if(pwd != pwd_confirm){
                        hideError();
                        //showError
                        showError('#erError','密码与确认密码不一致 请重新输入！');
                        //假设用户输入错误，给该输入框加红色框：error样式
                        $('input[name="email_pwd_confirm"]').addClass('error');
                        return false;
                    }
                    removeClass();
                    var code = $('input[name="email_code"]').val();
                    if(isNull(code)){
                        hideError();
                        //showError
                        showError('#erError','请输入验证码！');
                        //假设用户输入错误，给该输入框加红色框：error样式
                        $('input[name="email_code"]').addClass('error');
                        return false;
                    }
                }


                if($('.dr_formTableft').hasClass('activite')){
                    //手机注册验证
                        removeClass();
                        var mobile = $('input[name="mobile"]').val();
                        if(isNull(mobile)){
                            hideError();
                            //showError
                            showError('#prError','请输入手机号码！');
                            //假设用户输入错误，给该输入框加红色框：error样式
                            $('input[name="mobile"]').addClass('error');
                            return false;
                        }
                        if(!checkMobile(mobile)){
                            hideError();
                            //showError
                            showError('#prError','手机号码格式错误 请重新输入！');
                            //假设用户输入错误，给该输入框加红色框：error样式
                            $('input[name="mobile"]').addClass('error');
                            return false;
                        }
                    //手机注册验证密码
                        removeClass();
                        var pwd = $('input[name="mobile_pwd"]').val();
                        if(isNull(pwd)){
                            hideError();
                            //showError
                            showError('#prError','请填写密码！');
                            //假设用户输入错误，给该输入框加红色框：error样式
                            $('input[name="mobile_pwd"]').addClass('error');
                            return false;
                        }
                        if(pwd.length < 6){
                            hideError();
                            //showError
                            showError('#prError','请输入长度为6-20位数的密码！');
                            //假设用户输入错误，给该输入框加红色框：error样式
                            $('input[name="mobile_pwd"]').addClass('error');
                            return false;
                        }
                    //手机注册验证验证码
                        removeClass();
                       var code = $('input[name="mobile_code"]').val();
                        if(isNull(code)){
                            hideError();
                            //showError
                            showError('#prError','请输入验证码！');
                            //假设用户输入错误，给该输入框加红色框：error样式
                            $('input[name="mobile_code"]').addClass('error');
                            return false;
                        }

                        removeClass();
                        var pwd = $('input[name="mobile_pwd"]').val();
                        var pwd_confirm = $('input[name="mobile_pwd_confirm"]').val();
                        if(isNull(pwd_confirm)){
                            hideError();
                            //showError
                            showError('#prError','请输入确认密码！');
                            //假设用户输入错误，给该输入框加红色框：error样式
                            $('input[name="mobile_pwd_confirm"]').addClass('error');
                            return false;
                        }

                        if(pwd != pwd_confirm){
                            hideError();
                            //showError
                            showError('#prError','密码与确认密码不一致 请重新输入！');
                            //假设用户输入错误，给该输入框加红色框：error样式
                            $('input[name="mobile_pwd_confirm"]').addClass('error');
                            return false;
                        }
                }
            });
    });
    function removeClass() {
        $('.ts_wrong').remove();
        $('.al_Input').removeClass('error');
    }

    function hideError(){
        $('.errorMsg').text('').fadeOut();
        $('.ipTxt').removeClass('error');
        if($('.errorMsg').hasClass('warnMsg')){
            $('.errorMsg').removeClass('warnMsg');
        }
    }

</script>
    </body>
</html>