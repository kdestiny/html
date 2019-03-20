<?php echo '请购买新视界discuz商业模板，客服QQ:2413248487';exit;?>
<!--{if CURMODULE != 'logging'}-->
	<script type="text/javascript" src="{$_G[setting][jspath]}logging.js?{VERHASH}"></script>
	<form method="post" autocomplete="off" id="lsform" action="member.php?mod=logging&action=login&loginsubmit=yes&infloat=yes&lssubmit=yes" onsubmit="{if $_G['setting']['pwdsafety']}pwmd5('ls_password');{/if}return lsSubmit();">
	
    <ul class="h2o_register cl">
		<li><a href="connect.php?mod=login&op=init&referer=index.php&statfrom=login_simple" title="qq登录" class="qq_a z" ></a></li>
	    <li style="margin: 0 15px 0 10px;"><a href="plugin.php?id=wechat:login" title="用微信帐号登录" class="weixin_a z"></a></li>
		<li style="background: #505050;"><a href="member.php?mod=logging&action=login&referer={echo rawurlencode($dreferer)}" onclick="showWindow('login', this.href);return false;" rel="nofollow">登陆</a></li>
		<li style="background: #1499f8;"><a href="member.php?mod={$_G[setting][regname]}" rel="nofollow">注册</a></li>	
	</ul>

	</form>
    <div style="display: none;"><!--{hook/global_login_extra}--></div>
	<!--{if $_G['setting']['pwdsafety']}-->
		<script type="text/javascript" src="{$_G['setting']['jspath']}md5.js?{VERHASH}" reload="1"></script>
	<!--{/if}-->

<!--{/if}-->