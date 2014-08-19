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
    $( document ).on( "swipeleft", ".ui-page", function( event ) {
		// Get the filename of the next page. We stored that in the data-next
		// attribute in the original markup.
		/*
        var next = $( this ).jqmData( "next" );

		// Check if there is a next page and
		// swipes may also happen when the user highlights text, so ignore those.
		// We're only interested in swipes on the page.
		if ( next && ( event.target === $( this )[ 0 ] ) ) {
			navnext( next );
		}
        */
        //alert('left');
        
        $( ":mobile-pagecontainer" ).pagecontainer( "change","index2.php", {
			transition: "slide"
		});
        
	});
    
    
    $( document ).on( "swiperight", ".ui-page", function( event ) {
		/*
        var prev = $( this ).jqmData( "prev" );

		if ( prev && ( event.target === $( this )[ 0 ] ) ) {
			navprev( prev );
		}
        */
        //alert('right');
        
        $( ":mobile-pagecontainer" ).pagecontainer( "change","index.php", {
			transition: "slide"
		});
	});
});
</script>

<div data-role="header" data-position="inline">
	<a href="index.html">登录</a>
	<h1>望京网</h1>
	
    <div data-role="navbar">
    	<ul>
    		<li><a href="index.php" class="ui-btn-active">热点话题</a></li>
    		<li><a href="index2.php">本地话题</a></li>
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
    <li><a href="index.html">
    <h2>jQuery Team</h2>

    <p>In preparation for the upcoming conference in Boston, we need to start gathering a list of sponsors and speakers.</p>
        <p class="ui-li-aside"><strong>9:18</strong>AM</p>
    </a></li>
  
    <li><a href="index.html">
    <h2>Avery Walker</h2>
   
    <p>Sure, let's plan on meeting at Highland Kitchen at 8:00 tonight. Can't wait!</p>
        <p class="ui-li-aside"><strong>4:48</strong>PM</p>
    </a></li>
</ul>

<div data-role="footer" data-position="fixed">
    <div data-role="navbar">
        <ul>
            <li><a href="#" data-icon="home" class="ui-btn-active">首页</a></li>
            <li><a href="#" data-icon="comment" >社区</a></li>
            <li><a href="#" data-icon="plus">写帖子</a></li>
            <li><a href="#" data-icon="mail">消息</a></li>
            <li><a href="#" data-icon="eye">发现</a></li>
        </ul>
    </div><!-- /navbar -->
</div><!-- /footer -->

</body>
</html>