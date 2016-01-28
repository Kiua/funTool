<?php

$json = file_get_contents("http://cn.bing.com/HPImageArchive.aspx?format=js&idx=-1&n=9");
$data = json_decode($json,true);
header('Content-type: image/jpeg');
echo file_get_contents($data['images'][0]['url']);

?> 
