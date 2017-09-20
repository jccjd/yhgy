
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>河南壹号果元食品有限公司</title>
<meta name="keywords" content="壹号果元 苹果醋 河南壹号果元食品有限公司 零添加 饮料">
<meta name="description" content="壹号果元食品有限公司是一家专注于健康饮料产品的价值引领者和专业的健康饮料品牌运营商。公司位于中原腹地郑州市，现有品牌运营和市场营销人员100多人。公司旗下“壹号果元”苹果醋饮料凭借独特口感与健康功效，日益成为消费者喜爱的新一代健康礼品饮料和健康餐饮饮料，公司始终坚持“健康饮料的价值引领者和健康饮料的品牌运营商”的企业定位。">
<link href="css/nav.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/slide.css">
<link rel="stylesheet" href="css/common.css">
<link rel="stylesheet" href="css/index.css">
<script src="js/jquery.js"></script>
</head>
<body>
<div class="top">
  <div class="top_con">
    <script src="top.php" type="text/javascript"></script>
  </div>
</div>
<!--top end -->
<div class="logoMenu">
  <div class="logo"><img src="images/logo.png" alt="" height="49" width="200"></div>
  <div class="myNav">
    <div class="navBar">
      <ul class="nav clearfix">
        <script src="nav.php" type="text/javascript"></script>
        <li class="block" style="left: 251px;"></li>
      </ul>
    </div>
  </div>
  <!--nav end -->
  <div class="clear"></div>
</div>
<!--logoMenu end-->

<div class="ad">
  <div class="slide_container">
    <ul class="rslides" id="slider">
      <li><img src="images/ad1.png" alt="" ></li>
      <li><img src="images/ad2.png" alt="" ></li>
    </ul>
  </div>
  <div class="clear"></div>
</div>
<!--ad end-->
<div class="clear"></div>
<div class="newsBox">
  <div class="news">
    <div class="newsTitle">
      <h3>新闻动态</h3>
      <span><a href="#" title="更多">…</a></span>
      <div class="clear"></div>
    </div>
    <div class="newsCon" id="comNews">
		<?php
		//通过php连接MySQL数据库:
	$conn = @mysql_connect("localhost", "root", "123456");
	if (!$conn) {
		# code...
		echo "<h2>mysql错误编码:".mysql_errno()."</h2>";
		echo "<h2>mysql 错误信息:".mysql_error()."</h2>";
		
	} else {
		# code...
		//选择数据库
	mysql_select_db("yh");
	//设置客户端和连接字符集
	mysql_query("set names utf-8");

	$sql ="select *from news order by id";

	$result = mysql_query($sql);
	
	
	
	while ($row = mysql_fetch_assoc($result)) {
		echo "<li><a href='detail.php?id={$row['id']}'><span>{$row['date']}</span>{$row['news']}</a></li>"; 
  
	}
	//释放连接资源
	mysql_close($conn);

	}

		?>
    </div>
    <!--newsCon end--> 
  </div>
  <!--news end-->
  
  <div class="news">
    <div class="newsTitle">
      <h3>品牌产品</h3>
      <span><a href="">…</a></span>
      <div class="clear"></div>
    </div>
    <div class="newsCon">
      <div class="picScroll">
        <div class="tempWrap">
          <ul><li><div class="pic"><a href='detail/news20160823101138854.html'><img src="images/1471918258172084.jpg"></a></div><div class="title"><a href='detail/news20160823101138854.html'>310ml易拉罐装健康礼品版苹果醋饮料</a></div></li><li><div class="pic"><a href='detail/news20160823091718457.html'><img src="images/1471914957825349.jpg"></a></div><div class="title"><a href='detail/news20160823091718457.html'>650ml瓶装健康餐饮版苹果醋饮料</a></div></li></ul>
        </div>
        <a class="prev prevStop"></a> <a class="next"></a> </div>
    </div>
    <!--newsCon end--> 
  </div>
  <!--news end-->
  
  <div class="news">
    <div class="newsTitle">
      <h3>公司简介</h3>
      <span><!--<a href="">…</a>--></span>
      <div class="clear"></div>
    </div>
    <div class="newsCon"> <img src='images/1472022941830298.jpg'  width="150" height="107" align="left" style="margin: 8px"><p style="line-height: 25px"><a href='detail/news20160818192210392.html'>　　壹号果元食品有限公司是一家专注于健康饮料产品的价值引领者和专业的健康饮料品牌运营商。公司位于中原腹地郑州市，现有品牌运营和市场营销人员100多人。公司自成立之始就制定了品牌发展战略，致力于建立立足中原……</a></p></div>
    <!--newsCon end--> 
  </div>
  <!--news end-->
  <div class="clear"></div>
</div>
<!--newsBox end-->

<div class="clear"></div>
<div class="copyright">
  <div class="copyCon">
    <script src="foot.php" type="text/javascript"></script>
  </div>
</div>
<!--copyright end--> 
<script src="js/responsiveslides.min.js"></script> 
<script src="js/slide.js"></script> 
<script>
    $(function(){
        $("#showWeChat").click(function(){
            event.stopPropagation();
            $(".qrcode").fadeIn(500);
        })

        $(document).click(function (event) {$(".qrcode").fadeOut(500) });
    })
</script> 
<script type="text/javascript" src="js/SuperSlide.2.1.js"></script> 
<script src="js/daimabiji.js" type="text/javascript"></script> 
<script id="jsID" type="text/javascript">
    jQuery(".picScroll").slide({ mainCell:"ul",autoPlay:true,effect:"left", vis:1, scroll:1, autoPage:true, pnLoop:false });
</script>
<script src="/js/baidu_js_push.js"></script>

</body>
</html>
