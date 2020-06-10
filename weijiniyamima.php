<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">
<title>维吉尼亚密码在线加密解密 - 千千秀字</title>
<meta name="keywords" content="维吉尼亚密码">
<meta name="description" content="维吉尼亚密码是在凯撒密码基础上产生的一种加密方式，使用自定义密钥，不容易破解。本页提供维吉尼亚密码在线加密和解密的小程序，可以对字母文本进行维吉尼亚密码规则加密和解密。">
<link href="/css/style.css" rel="stylesheet" type="text/css">
<style>
textarea {
	width: 100%;
	height: 150px;
	box-sizing: border-box;
	border: 1px #ccc solid;
	padding: 1%;
	line-height: 140%;
}
textarea:hover {
	border-color:#999;
}
textarea:focus {
	border-color:#59f;
}
@media screen and (max-height:640px) {
textarea {
	height: 100px;
}
}
input[type=text]{border:1px #ccc solid;width:5em;height:1em;padding:0.25em;}
input[type=text]:hover{border-color:#999;}
input[type=text]:focus{border-color:#59f;}
#show{border:1px #ccc solid;box-sizing:border-box;min-height:150px;padding:1%;}
</style>
<script>
function ShowData(str1,str2,str3)
{
	var len = str1.replace(/[\r\n]/g,"").length;
	if (len==0)
	{
		if (str2==0)
		document.getElementById("show").innerHTML="请在上面输入原文！";
		else
		document.getElementById("show").innerHTML="请在上面输入密文！";
		return;
	}
	else if (len>2000)
	{
		document.getElementById("show").innerHTML="字数控制在2000以内！当前"+len+"字。";
		return;
	}
	if (str3=='')
	{
		document.getElementById("show").innerHTML="必须有密钥！";
		return;
	}
	document.getElementsByClassName('load-container').item(0).style.display='block';
	document.querySelectorAll('input[type="button"]').forEach(function(b){b.disabled=true});
	var xmlhttp;
	if (window.XMLHttpRequest)
	{
		xmlhttp=new XMLHttpRequest();
	}
	else
	{
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			setTimeout(function(){
				document.getElementById("show").innerHTML=xmlhttp.responseText;
				document.getElementsByClassName('load-container').item(0).style.display='none';
				document.querySelectorAll('input[type="button"]').forEach(function(b){b.disabled=false});
			},500);
		}
	}
	xmlhttp.open("POST","weijiniyamima-show.php",true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send('text='+encodeURIComponent(str1)+'&ende='+str2+'&key='+str3+'&token=ea1234ffb5ba4fb5888842c57f51876b');
}
</script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script src="/js/head.js"></script>
</head>
<body> 
<div class="load-container">
  <div class="loader"></div>
</div>
<div class="top"><div class="home"><a href="https://www.qqxiuzi.cn"><b><font color="#F8673D">千</font><font color="#E79C01">千</font><font color="#0EBB00">秀</font><font color="#669FFF">字</font></b></a></div><div class="nav"><a href="https://www.qqxiuzi.cn/daohang.htm">网站导航</a></div><div style="clear:both;"></div></div>
<div class="main">
  <div class="title"><h1>维吉尼亚密码加密解密</h1></div>
  <div class="ad">
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-2440711871479504"
     data-ad-slot="8604148262"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div> 
  <textarea class="textarea" id="text" name="src"></textarea>
  <div style="margin:10px 0;">
    密钥<input type="text" id="key">
    <input onclick="ShowData(document.getElementById('text').value,0,document.getElementById('key').value);" type="button" value="加密" name="encode">
    <input onclick="ShowData(document.getElementById('text').value,1,document.getElementById('key').value);" type="button" value="解密" name="decode">
  </div>
  <div id="show"></div>
  <p>维吉尼亚密码是在<a href="kaisamima.php" style="color:blue">凯撒密码</a>基础上产生的一种加密方法，它将凯撒密码的全部25种位移排序为一张表，与原字母序列共同组成26行及26列的字母表。另外，维吉尼亚密码必须有一个密钥，这个密钥由字母组成，最少一个，最多可与明文字母数量相等。维吉尼亚密码加密方法示例如下：</p>
  <p>明文：I've got it.<br>
    密钥：ok</p>
  <p>密文：W'fs qcd wd.</p>
  <p>首先，密钥长度需要与明文长度相同，如果少于明文长度，则重复拼接直到相同。本例中，明文长度为8个字母（非字母均被忽略），密钥会被程序补全为“okokokok”。现在根据如下维吉尼亚密码表格进行加密：</p>
  <div style="max-width:600px"><a href="weijiniyamima.png" target="_blank"><img src="weijiniyamima.png" alt="维吉尼亚密码表格" style="cursor:zoom-in;width:100%"></a></div>
  <p>明文第一个字母是“I”，密钥第一个字母是“o”，在表格中找到“I”列与“o”行相交点，字母“W”就是密文第一个字母；同理，“v”列与“k”行交点字母是“F”；“e”列与“o”行交点字母是“S”……</p>
  <ul>
    <li>维吉尼亚密码只对字母进行加密，不区分大小写，若文本中出现非字母字符会原样保留。</li>
    <li>如果输入多行文本，每行是单独加密的。</li>
  </ul>
  <div class="ad2">
    <ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-2440711871479504"
     data-ad-slot="8604148262"
     data-ad-format="auto"></ins>
  <script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div> 
</div>
<div class="foot">QQXIUZI.CN　<a href="https://www.qqxiuzi.cn">千千秀字</a></div>
</body>
</html>
