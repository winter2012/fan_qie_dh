<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html><html><head><meta charset="utf-8" /><title>友情提示</title></head><body><table border="0" align="center" cellpadding="5" cellspacing="1" style="font-size:14px;color:#333333;margin-top:100px;background:#6a7d82;width:360px;"><tr style="color:#FFFFFF"><th><?php echo ($msgTitle); ?></th></tr><tr><td height="100" style="font-size:12px; background:#FFFFFF"><div style="font-size:16px;font-weight:bold;margin:10px;color:#025196;"><div name="message"><?php echo ($message); ?></div><div name="error" ><?php echo ($error); ?></div></div><div style="margin:10px;">        	系统将在
            <span id="wait" style="color:blue;font-weight:bold"><?php echo ($waitSecond); ?></span>            秒后自动跳转，如果不想等待，直接
            <a id="href" href="<?php echo ($jumpUrl); ?>"  style="color:#069;">点击这里</a></div></td></tr></table><script type="text/javascript">(function(){
var wait = document.getElementById('wait'),href = document.getElementById('href').href;
var interval = setInterval(function(){
	var time = --wait.innerHTML;
	if(time <= 0) {
		location.href = href;
		clearInterval(interval);
	};
}, 1000);
})();
</script></body></html>