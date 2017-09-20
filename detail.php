<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>壹号果元2017年县乡市场网点建设大会战拉开帷幕！</title>
<meta name="keywords" content="壹号果元 苹果醋 河南壹号果元食品有限公司">
<meta name="description" content="">
<link href="css/nav.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/common.css">
<link href="css/news.css" rel="stylesheet" type="text/css" />

<script src="js/jquery.js"></script>
</head>

<body>
<div class="top">
  <div class="top_con">
    <script src="top.php" type="text/javascript"></script>
  </div>
</div>
<!--top end -->
<div class="logo_wrap">
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
  <div class="clear"></div>
</div>
<!--log_wrap end-->


<div class="ad">
  <img src="images/news_banner.jpg" alt="">
</div>
<!--ad end-->
<div class="news_wrap">
  <div class="list_main">
    <div class="news_type">
      <!--<h3>走进壹号果元</h3>-->
      <!--<div class="news_type_content">-->
        <script src="sideNav.php?id=154" type="text/javascript"></script>
      </div>
    <!--</div>&lt;!&ndash;news_type结束&ndash;&gt;-->
    <div class="list_box">

      <?php 
      	//连接数据库
      $conn = @mysql_connect("localhost","root","123456");
      //选择数据库
      mysql_select_db(yh);
      //设置客户端和字符编码集
      mysql_query("set names utf8");
      $sql = "select * from news where id={$_GET['id']}";
      $result = mysql_query($sql);
      while ($row = mysql_fetch_assoc($result)) {
		echo "<h2><span>{$row['date']} $nbsp</span>{$row['news']}</h2>"; 
  
	}
       ?>
      </div>
    </div><!--list_box结束-->
  </div><!--list_main结束-->
  <div class="clear"></div>
</div>
<!--news_wrap end-->
<div class="clear"></div>
<div class="copyright">
  <div class="copyCon">
    <script src="foot.php" type="text/javascript"></script>
  </div>
</div>
<!--copyright end-->
<script src="js/responsiveslides.js"></script>

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
<script src="js/baidu_js_push.js"></script>
</body>
</html>





