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
	mysql_select_db("test");
	//设置客户端和连接字符集
	mysql_query("set names utf-8");

	$sj = id - 1;
	$sql ="select *from xx order by id";

	$result = mysql_query($sql);
	
	$row = mysql_fetch_assoc($result);
	
	while ($row = mysql_fetch_assoc($result)) {
		echo "<li><a href='detail/news20170221180020755.html'><span>{$row['time']}</span>{$row['news']}</a></li>"; 
  
	}
	
	//释放连接资源
	mysql_close($conn);

	}
?>