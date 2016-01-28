<?php 
//关闭错误提示
error_reporting(0);
echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
echo '<title>M站免猫耳下载sound</title>';
echo '比如你要下载"辛苦了,MASTER"'.'<br/>';
echo '网页的url就是http://www.missevan.com/sound/23713'.'<br/>';
echo '你只需要填写sound后面的数字就ok了~';
echo '<form action="Msound-down.php" method="post" >';
echo 'number:<input type="text" name="u" id="u">';
echo '<input type="submit" value="给我出来">';
echo '</form>';
echo "By:killua ";
//判断表单提交内容是否为空
if($_POST['u'] !=""){
$url = "http://www.missevan.com/sound/".$_POST['u'];
ini_set('user_agent','Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 2.0.50727;http://www.baidu.com)'); 
$contents = @file_get_contents($url); //关闭报错
//很烂的正则匹配
preg_match('/[0-9]{0,}\/[0-9]{0,2}\/[0-9a-z]{32,38}\.mp3/', $contents, $match); 
$urls="http://static.missevan.com/sound/".$match[0];
if($match[0] !=''){
	echo '<script>prompt("嘿嘿,请复制下载地址","'.$urls.'")</script>';
	}
}
?> 
