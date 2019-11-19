<?php
$password = prime‎0315;
$form_pass = $_REQUEST["password"];
?><!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns# fb: http://www.facebook.com/2008/fbml">
<head>
<meta charset="utf-8">
<title>【特典ダウンロード】SQUIDS magazine presents "AMAZON" 3/15@新宿LOFT</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, minimum-scale=1, maximum-scale=1" />
<meta name="apple-mobile-web-app-capable" content="yes">

<link rel="stylesheet" href="http://yui.yahooapis.com/3.5.0/build/cssreset/cssreset-min.css">
<link rel="stylesheet" href="amazon.css">

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-2071797-5', 'squids.me');
  ga('send', 'pageview');

</script>
</head>
<body>
<div class="main">
<?php
// form.htmlからの値が$form_passと等しいか評価する
if($form_pass == $pass){

print "ログイン成功!!<br>\nここは、シークレットページです。";

}else{

echo "ログイン失敗<br>",
"<a href=\"./form.html\">戻る</a>";}
?>
</div>

<script type="text/javascript" src="http://www.google.com/jsapi/"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript">
$(function(){
});
</script>
</body>
</html>