<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo ($seo["title"]); ?></title>
<style>
body{font:12px/1.5 arial,SimSun,helvetica,sans-serif;background:#FFF;color:#666}
#myfeedback{padding:10px}
textarea{width:90%;height:60px;resize:none;margin-top:15px;overflow:hidden}
.mail-cont{padding:15px 0}
.ui-text{color:#666;padding:2px 4px;font-size:14px;background:#FFF;border:1px solid #ccc;height:30px;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;-ms-box-sizing:border-box;box-sizing:border-box;background-image:-webkit-gradient(linear,0 0,0 2,from(#ccc),to(#fff));background-image:-moz-linear-gradient(top,#ccc,#fff 2px,#fff);box-shadow:1px 1px 3px #ddd inset;margin-right:3px}
.btn{display:inline-block;border:0;text-align:center;margin-right:10px;height:30px;line-height:30px;width:79px;color:#fff;font-size:14px;font-family:SimSun,sans-seriftext-align;background:url(__PUBLIC__/Assets/img/btn.png) 0 0 no-repeat;cursor:pointer;vertical-align:middle}
</style>
</head>
<body>

<form id="myfeedback" accept-charset="UTF-8" action="#" method="post">
<input type="hidden" name="_charset_" value="utf-8">
<div>请在下面填写您遇到的问题或意见建议，并留下您的联系方式，感谢您对本站的支持!</div>
<textarea name="content" id="content" maxlength="499"></textarea>
<div class="mail-cont">
	<input class="contact ui-text" name="email" id="email" value="">
	<span class="tip">(请填写联系方式，如：电话/邮箱/QQ)</span>
</div>

<button type="button" class="btn" id="submit">提交留言</button>
</form>
</body>
<script type="text/javascript" src="__PUBLIC__/Skins/jquery.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/Skins/layer/layer.js"></script>
<script type="text/javascript">
var index = parent.layer.getFrameIndex(window.name);
$('#submit').click(function(){
	var content = $.trim($('#content').val());
	var email = $.trim($('#email').val());
	if(!content){
		parent.layer.msg('请填写留言内容');return false;
	}
	if(!email){
		parent.layer.msg('请填写联系方式');return false;
	}
	$.ajax({
		url:"http://<?php echo ($_SERVER['HTTP_HOST']); echo C('ROOT_FILE');?>?a=message",
		data:{content:content,email:email},
		type:'POST',
		dataType:'json',
		success:function(data){
			parent.layer.msg(data.info);
			parent.layer.close(index);
		}
	})
    
});

</script>
</html>