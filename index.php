<html>
<head><link href="css/main.css" rel=stylesheet type="text/css"></head>
	<body>
<table width=100% border=1>
	<tr>
	<td><button onclick='location.href="?button1=1"'>主页</button></td><td><button onclick='location.href="?button2=1"'>+ 单</button></td><td><button 
onclick='location.href="?button3=1"'>发货</button></td>
	</tr>
	<tr>
		<td colspan=3 onclick="loadpage()">s</td>
	</tr>
</table>
<?php
	if($_GET['button1']){loadpage1();}
	if($_GET['button2']){loadpage2();}
	if($_GET['button3']){loadpage3();}

	function loadpage1(){
		echo "LOADED1";
	}
	function loadpage2(){
		echo "LOADED2";
	}
	function loadpage3(){
		echo "LOADED3";
	}
?>
		<?php echo "ssso" . "jjj" ;?>
		<?php echo "<br>jjj"; ?>
	</body>
</html>
