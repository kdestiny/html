<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: forum.php 33828 2013-08-20 02:29:32Z nemohou $
 */


// 定义应用 ID
define('APPTYPEID', 2);
define('CURSCRIPT', 'test');

require './source/class/class_core.php';

C::app()->init();

@header('Content-Type: text/html; charset=GBK');

$pass = $pass2 = true;

if(!function_exists('curl_version')) {
	echo '因为您的扩展 "curl" 不存在，请安装相关 PHP 扩展';
	exit;
}

$curlinfo = curl_version();
if(!in_array('https', $curlinfo['protocols'])){
	echo '因为您的扩展 "curl" 不支持请求HTTPS链接，请安装相关 PHP 扩展请确保 CURL+SSL 存在且有效，同时测试服务器命令行下执行 "curl https://addon.discuz.com" 可正常返回内容<br>如果您是PHP5.2及以下版本，请升级PHP版本';
	echo '<br>'.PHP_OS.' / PHP v'.PHP_VERSION.'<br><pre>';
	print_r($curlinfo);
	exit;
}

$contents = '';
$file = DISCUZ_ROOT . './source/function/function_filesock.php';
if (file_exists($file)) {
	if ($fp = @fopen($file, 'r')) {
		$contents = fread($fp, filesize($file));
		fclose($fp);
	}
}
if(stripos($contents, 'CURLOPT_SSL_VERIFYPEER') === false){
	echo '因为您的Discuz版本太低，请下载补丁：<a href="http://www.discuz.net/thread-3844005-1-1.html" target="_blank">http://www.discuz.net/thread-3844005-1-1.html</a>';
	@include_once DISCUZ_ROOT.'./source/discuz_version.php';
	echo '<br>Discuz! '.DISCUZ_VERSION;
	exit;
}

$testContent = dfsockopen('https://addon.discuz.com/image/logo.png');
if(strlen($testContent) == 603) {
	echo "https://addon.discuz.com <font color=green>正常</font><br>";
} else {
	$pass = false;
	echo "https://addon.discuz.com <font color=red>失败</font><br>";
}

$testContent = dfsockopen('https://addon1.discuz.com/logo.png');
if(strlen($testContent) == 603) {
  echo "https://addon1.discuz.com <font color=green>正常</font><br>";
} else {
	$pass = false;
	echo "https://addon1.discuz.com <font color=red>失败</font><br>";
}

$testContent = dfsockopen('https://addon1.discuz.com/test.xml');
require_once libfile('class/xml');
$array = xml2array($testContent);
if($array['Title'] == 'Discuz! Addon MD5' && count($array['Data']) == 5) {
  echo "HTTPS XML Download <font color=green>正常</font><br>";
} else {
	$pass = false;
	echo "HTTPS XML Download <font color=red>失败</font><br>";
}

$testContent = dfsockopen('http://addon1.discuz.com/test.xml');
require_once libfile('class/xml');
$array = xml2array($testContent);
if($array['Title'] == 'Discuz! Addon MD5' && count($array['Data']) == 5) {
  echo "HTTP XML Download <font color=green>正常</font><br>";
} else {
	$contents = '';
	if(function_exists('substr_count')) {
		$file = DISCUZ_ROOT . './source/function/function_cloudaddons.php';
		if (file_exists($file)) {
			if ($fp = @fopen($file, 'r')) {
				$contents = fread($fp, filesize($file));
				fclose($fp);
			}
		}
		if(substr_count($contents, 'https://') < 4){
			$contents = '';
		}
	}
	
	if(empty($contents)){
		$pass2 = false;
		echo "HTTP XML Download <font color=red>失败</font><br><div style=\"background-color: #d5d5d5;margin: 10px 0px;padding: 10px;\">因为您的扩展 “curl” 版本太低，请尝试修改 source/function/function_cloudaddons.php 文件，把所有的“http://”替换为“https://”（注意：不是 “http” 替换为 “https”，代码里有其他http内容）</div>";	
	}
}

if(!$pass) {
	echo '<br>您的论坛无法正常访问应用中心，请测试服务器命令行下执行 "curl https://addon.discuz.com" 是否可正常返回内容';
} elseif($pass2) {
	echo '<br>您的论坛可以正常访问应用中心';
}

if(function_exists('curl_version')) {
	echo '<pre>';
	print_r($curlinfo);
}

?>