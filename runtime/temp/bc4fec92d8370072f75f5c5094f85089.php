<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"D:\wamp64\www\project\infocollection/application/index\view\index\index.html";i:1491402651;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="__JS__/commom.js"></script>
    <script src="__JS__/jquery-3.0.0.min.js"></script>
    <script src="__JS__/bootstrap.js"></script>
    <link rel="stylesheet" href="__CSS__/bootstrap.css">
    <link rel="stylesheet" href="__CSS__/main.css">

    <link rel="stylesheet" href="__CSS__/home.css">

    <title>学院用户</title>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">管理员</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">学院用户</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="glyphicon glyphicon-user"></span>
                        <?php echo $schoolname; ?><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo url('Logout/index'); ?>"><span class="glyphicon glyphicon-off"></span>退出登录</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div id="main">
    <header class="jumbotron">
        <div class="container">
            <h1>欢迎使用校团委信息采集平台</h1>
        </div>
    </header>
    <div id="display">

        <?php if(is_array($tasks) || $tasks instanceof \think\Collection || $tasks instanceof \think\Paginator): $i = 0; $__LIST__ = $tasks;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$task): $mod = ($i % 2 );++$i;?>
        <div class="well">
            <h2><?php echo $task['taskname']; ?> <small><?php echo $task['date']; ?></small></h2>
            <p>
                <span class="finish">完成时间：</span><br><br>
                <span class="time"><?php echo $task['start_date']; ?></span>
                到
                <span class="time"><?php echo $task['end_date']; ?></span>
            </p>
            <hr>
            <h4>任务简介：</h4>
            <p><?php echo $task['tasktext']; ?></p>
            <hr>
            <?php if(($task['attachment_dir']!=null) AND ($task['attachment_name']!=null)): ?>
            <h3>
                附件:<span class="download"><?php echo $task['attachment_name']; ?></span>&nbsp;
                <button class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-save"></span>&nbsp;下载附件</button>
            </h3>
            <hr>
            <?php endif; ?>
            <button class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span>&nbsp;填写 / 修改</button>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        <?php echo $tasks->render(); ?>

    </div>
</div>
<script src="http://cdn.bootcss.com/jquery/3.2.0/jquery.min.js"></script>
<script src="__JS__/bootstrap.js"></script>
</body>
</html>