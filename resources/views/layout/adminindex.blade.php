<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">
<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<!-- Plugin Stylesheets first to ease overrides -->
<link rel="stylesheet" type="text/css" href="/b/plugins/colorpicker/colorpicker.css" media="screen">
<link rel="stylesheet" type="text/css" href="/b/custom-plugins/wizard/wizard.css" media="screen">
<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/b/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/b/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/b/css/fonts/icomoon/style.css" media="screen">
<link rel="stylesheet" type="text/css" href="/b/css/mws-style.css" media="screen">
<link rel="stylesheet" type="text/css" href="/b/css/icons/icol16.css" media="screen">
<link rel="stylesheet" type="text/css" href="/b/css/icons/icol32.css" media="screen">
<!-- Demo Stylesheet -->
<link rel="stylesheet" type="text/css" href="/b/css/demo.css" media="screen">
<!-- jQuery-UI Stylesheet -->
<link rel="stylesheet" type="text/css" href="/b/jui/css/jquery.ui.all.css" media="screen">
<link rel="stylesheet" type="text/css" href="/b/jui/jquery-ui.custom.css" media="screen">
<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="/b/css/mws-theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="/b/css/themer.css" media="screen">
<link  href="/b/css/mycss.css">
<title>RD Admin - Calendar</title>
<style>
    #a li 
    { float:left;
    height: 20px;
    padding: 0 10px;
    display: block;
    font-size: 12px;
    line-height: 20px;
    text-align: center;
    cursor: pointer;
    outline: medium none;
    padding:0 10px;
    text-decoration:none;
    cursor:pointer;
    float:left;
    display:inline-block;
    }
    #mws-navigation > ul > li > ul > li > a, #mws-navigation > ul > li > ul > li > span {
    display: block;
    font-size: 21px;
    margin-left: 10px;
    text-decoration: none;
    padding: 4px 0 4px 40px;
    color: #ffffff !important;
    text-shadow: none;
    #mws-navigation > ul > li > a, #mws-navigation > ul > li > span {
    color: #fff;
    outline: none;
    display: block;
    text-decoration: none;
    margin-left: 14px;
    position: relative;
    padding: 11px 48px 11px 0;
    line-height: 20px;


}

</style>
</head>

<body>
    <div id="mws-header" class="clearfix">
    
        <!-- Logo Container -->
        <div id="mws-logo-container">
        
            <!-- Logo Wrapper, images put within this wrapper will always be vertically centered -->
            <div id="mws-logo-wrap">
                <img src="/b/images/1.png" alt="mws admin" style="width:200px;height:30px">
            </div>
        </div>
        
        <!-- User Tools (notifications, logout, profile, change password) -->
        <div id="mws-user-tools" class="clearfix">
            <!-- User Information and functions section -->
            <div id="mws-user-info" class="mws-inset">
                <div id="mws-user-photo">
                    <!-- 管理员照片 -->
                    <img src="/b/example/profile.jpg" alt="User Photo">
                </div>
                <div id="mws-user-functions">
                    <div id="mws-username">
                        <br>
                        Hello Admin
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Start Main Wrapper -->
    <div id="mws-wrapper" >
    
        <!-- Necessary markup, do not remove -->
        <div id="mws-sidebar-stitch" ></div>
        <div id="mws-sidebar-bg" ></div>
        
        <!-- Sidebar Wrapper -->
        <div id="mws-sidebar" >
        
            <!-- Hidden Nav Collapse Button -->
            <div id="mws-nav-collapse">
                <span></span>
                <span></span>
                <span></span>
            </div>
            
            <!-- Searchbox -->
            <div id="mws-searchbox" class="mws-inset" style="height:23px">
                <form action="typography.html">
                    <input type="text" class="mws-search-input" placeholder="Search...">
                    <button type="submit" class="mws-search-submit"><i class="icon-search"></i></button>
                </form>
            </div>
            
            <!-- Main Navigation -->
            <div id="mws-navigation">
            <!-- 用户模块 -->
                <ul >
                     <li>
                        <a href="#"><i class="icon-users"></i>用户模块</a>
                        <ul style="display:none">
                            <li><a href="/user/look" class="icon-cyclop">&nbsp;&nbsp;&nbsp;浏览用户</a></li>
                            <li><a href="/user/add" class="icon-add-contact">&nbsp;&nbsp;&nbsp;添加用户</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- //分类模块 -->
                <ul >
                     <li>
                        <a href="#"><i class="icon-th" style="font-size:24px"></i>分类模块</a>
                        <ul style="display:none">
                            <li><a href="/goods/class" class="icon-plus">&nbsp;&nbsp;&nbsp;浏览类别</a></li>
                            <li><a href="/goods/name" class="icon-key-2">&nbsp;&nbsp;&nbsp;添加类别</a></li>
                        </ul>
                    </li>
                </ul>

                <ul >
                     <li>
                        <a href="#"><i class="icon-stats" style="font-size:24px"></i>商品模块</a>
                        <ul style="display:none">
                            <li><a href="/thing/string" class="icon-gift">&nbsp;&nbsp;&nbsp;浏览商品</a></li>
                            <li><a href="/thing/arr" class="icon-github-4">&nbsp;&nbsp;&nbsp;添加商品</a></li>
                        </ul>
                    </li>
                </ul>

                <ul >
                     <li>
                        <a href="#"><i class="icon-yinyang" style="font-size:24px"></i>轮播管理</a>
                        <ul style="display:none">
                            <li><a href="/pic/lan" class="icon-dribbble-3">&nbsp;&nbsp;&nbsp;浏览</a></li>
                            <li><a href="/pic/gai" class="icon-movie">&nbsp;&nbsp;&nbsp;设置</a></li>
                        </ul>   
                    </li>
                </ul>

                <ul >
                     <li>
                        <a href="#"><i class="icon-wrench" style="font-size:24px"></i>网站管理</a>
                        <ul style="display:none">
                            <li><a href="/config/xxx" class="icon-tools">&nbsp;&nbsp;&nbsp;基本信息</a></li>
                            <li><a href="/config/www" class="icon-food">&nbsp;&nbsp;&nbsp;网站配置</a></li>
                        </ul>
                    </li>
                </ul>
            </div>         
        </div>
        
        <!-- Main Container Start -->
      <div id="mws-container" class="clearfix" style="width:1390px;margin-top:30px" >
        
            <!-- Inner Container Start -->
            <div class="container"> 
            @if(count($errors)>0)
                <div class="mws-form-message error">
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </div>
                </div>  
            @endif

            @if(session('error'))
                <div class="mws-form-message error">
                    {{session('error')}}
                </div>
            @endif

            @if(session('success'))
                <div class="mws-form-message success">
                    {{session('success')}}
                </div>
            @endif

            @section('con')
            
            @show
            @section('good')
            
            @show
            </div>
            <!-- Inner Container End -->
                       
            <!-- Footer -->
            <div id="mws-footer"  style="color:#00008b;font-size:15px">
                版 权 所 有&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;违 者 必 究
            </div>
       
        </div> 
        
        <!-- Main Container End -->

    

    <!-- JavaScript Plugins -->
    <script src="/b/js/libs/jquery-1.8.3.min.js"></script>
    <script src="/b/js/libs/jquery.mousewheel.min.js"></script>
    <script src="/b/js/libs/jquery.placeholder.min.js"></script>
    <script src="/b/custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="/b/jui/js/jquery-ui-1.9.2.min.js"></script>
    <script src="/b/jui/jquery-ui.custom.min.js"></script>
    <script src="/b/jui/js/jquery.ui.touch-punch.js"></script>

    <!-- Plugin Scripts -->
    <script src="/b/plugins/datatables/jquery.dataTables.min.js"></script>
    <!--[if lt IE 9]>
    <script src="js/libs/excanvas.min.js"></script>
    <![endif]-->
    <script src="/b/plugins/flot/jquery.flot.min.js"></script>
    <script src="/b/plugins/flot/plugins/jquery.flot.tooltip.min.js"></script>
    <script src="/b/plugins/flot/plugins/jquery.flot.pie.min.js"></script>
    <script src="/b/plugins/flot/plugins/jquery.flot.stack.min.js"></script>
    <script src="/b/plugins/flot/plugins/jquery.flot.resize.min.js"></script>
    <script src="/b/plugins/colorpicker/colorpicker-min.js"></script>
    <script src="/b/plugins/validate/jquery.validate-min.js"></script>
    <script src="/b/custom-plugins/wizard/wizard.min.js"></script>

    <!-- Core Script -->
    <script src="/b/bootstrap/js/bootstrap.min.js"></script>
    <script src="/b/js/core/mws.js"></script>

    <!-- Themer Script (Remove if not needed) -->
    <script src="/b/js/core/themer.js"></script>

    <!-- Demo Scripts (remove if not needed) -->
    <script src="/b/js/demo/demo.dashboard.js"></script>

</body>
</html>