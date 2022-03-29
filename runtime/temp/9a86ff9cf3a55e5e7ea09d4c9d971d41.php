<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"C:\phpStudy\PHPTutorial\WWW/application/index/view2/index\findpwd.html";i:1465803384;}*/ ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="/assets/style1/images/favicon_1.ico">

    <title>忘记密码 - <?php echo config('web_name'); ?></title>
    <meta name="description" content="<?php echo config('web_description'); ?>">
    <meta name="keywords" content="<?php echo config('web_keywords'); ?>">

    <link href="/assets/style1/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/style1/css/core.css" rel="stylesheet" type="text/css">
    <link href="/assets/style1/css/icons.css" rel="stylesheet" type="text/css">
    <link href="/assets/style1/css/components.css" rel="stylesheet" type="text/css">
    <link href="/assets/style1/css/pages.css" rel="stylesheet" type="text/css">
    <link href="/assets/style1/css/menu.css" rel="stylesheet" type="text/css">
    <link href="/assets/style1/css/responsive.css" rel="stylesheet" type="text/css">

    <script src="/assets/style1/js/modernizr.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/assets/sweetalert/sweetalert.css"/>
    <script src="/assets/sweetalert/sweetalert.min.js" type="text/javascript"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->


</head>
<body>


<div class="wrapper-page">
    <div class="panel panel-color panel-primary panel-pages">
        <div class="panel-heading bg-img">
            <div class="bg-overlay"></div>
            <h3 class="text-center m-t-10 text-white"><strong><?php echo config('web_name'); ?>-找回密码</strong> </h3>
        </div>

        <div class="panel-body">
            <form class="form-horizontal m-t-20" method="post">
                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control input-lg" type="number" required="" name="qq" placeholder="输入绑定QQ号码">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <img title="点击刷新" src="/other/code.php" onclick="this.src='/other/code.php?'+Math.random();" class="img-rounded" >
                        <input class="form-control input-lg" type="text" required="" name="code" placeholder="输入验证码">
                    </div>
                </div>

                <div class="form-group text-center m-t-40">
                    <div class="col-xs-12">
                        <button class="btn btn-primary btn-lg w-lg waves-effect waves-light" type="submit">下一步</button>
                    </div>
                </div>

                <div class="form-group m-t-30">
                    <div class="col-sm-7">
                        <a href="<?php echo url('reg'); ?>"><i class="fa fa-lock m-r-5"></i> 免费注册</a>
                    </div>
                    <div class="col-sm-5 text-right">
                        <a href="<?php echo url('login'); ?>">我要登录</a>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>

<!-- Main  -->
<script src="/assets/style1/js/jquery.min.js"></script>
<script src="/assets/style1/js/bootstrap.min.js"></script>
<script src="/assets/style1/js/detect.js"></script>
<script src="/assets/style1/js/fastclick.js"></script>
<script src="/assets/style1/js/jquery.slimscroll.js"></script>
<script src="/assets/style1/js/jquery.blockUI.js"></script>
<script src="/assets/style1/js/waves.js"></script>
<script src="/assets/style1/js/wow.min.js"></script>
<script src="/assets/style1/js/jquery.nicescroll.js"></script>
<script src="/assets/style1/js/jquery.scrollTo.min.js"></script>

<script src="/assets/style1/js/jquery.app.js"></script>
<?php if(isset($alert)): ?>
<script type="text/javascript"><?php echo $alert; ?></script>
<?php endif; ?>
</body>
</html>