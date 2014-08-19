<!DOCTYPE HTML>
<head>
	<meta http-equiv="content-type" content="text/html" />
    <meta charset="utf-8" />
    <script src="js/jquery.js"></script>
    <script src="js/jquery.mobile/jquery.mobile-1.4.3.js"></script>
    <link rel="stylesheet" href="js/jquery.mobile/jquery.mobile-1.4.3.min.css" />
	<title>Jquery Mobile Test</title>
</head>

<body>

<script>
$(function(){

	
    
});
</script>

<div data-role="header" data-position="inline">
	<a href="index.html">登录</a>
	<h1>望京网</h1>
	
    <div data-role="navbar">
    	<ul>
    		<li><a href="index.php" >热点话题</a></li>
    		<li><a href="index2.php" class="ui-btn-active">本地话题</a></li>
    	</ul>
    </div><!-- /navbar -->

</div>


<ul data-role="listview" data-inset="true">
   
    <li><a href="index.html">
    <img src="http://handle.wangjing.cn/pic/1407288910c89e6.jpg" style="margin-top: 10px;margin-left: 10px;" />
    <h2>Stephen Weber</h2>
    
    
    <p>Hey Stephen, if you're available at 10am tomorrow, we've got a meeting with the jQuery team.</p>
        <p class="ui-li-aside"><strong>6:24</strong>PM</p>
    
    </a></li>

</ul>

<div data-role="footer" data-position="fixed">
    <div data-role="navbar">
        <ul>
            <li><a href="#" data-icon="home" class="ui-btn-active">首页</a></li>
            <li><a href="#" data-icon="comment" >社区</a></li>
            <li><a href="#" data-icon="plus">&nbsp;</a></li>
            <li><a href="#" data-icon="mail">消息</a></li>
            <li><a href="#" data-icon="eye">发现</a></li>
        </ul>
    </div><!-- /navbar -->
</div><!-- /footer -->

</body>
</html>