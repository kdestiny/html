<?php echo '请购买新视界discuz商业模板，客服QQ:2413248487';exit;?>
<!--{if $leftside['favorites']}-->
	<h2 class="mbn"><a href="home.php?mod=space&do=favorite&type=forum" style=" font-size: 16px; color: #1499f8; font-weight: 700;">{lang favorite_forums}</a></h2>
	<dl id="lf_fav" class="bdl_fav mbm">
		<!--{loop $leftside['favorites'] $favfid $fdata}-->
			<dd>
				<!--{if !empty($_G['cache']['forums'][$favfid]['domain']) && !empty($_G['setting']['domain']['root']['forum'])}-->
					<a href="http://{$_G['cache']['forums'][$favfid]['domain']}.{$_G['setting']['domain']['root']['forum']}" title="$fdata[0]">$fdata[0]</a>
				<!--{else}-->
					<a href="forum.php?mod=forumdisplay&fid=$favfid">$fdata[0]</a>
				<!--{/if}-->
				
			</dd>
		<!--{/loop}-->
	</dl>
<!--{else}-->
	<h2 class="bdl_h">{lang forum_nav}</h2>
<!--{/if}-->
<!--{loop $leftside['forums'] $upfid $gdata}-->
	<dl class="{if $fgroupid == $upfid || $_G['setting']['leftsideopen']}a{/if}" id="lf_$upfid">
		<dt><a href="javascript:;" hidefocus="true" onclick="leftside('lf_$upfid')" title="$gdata['name']">$gdata['name']</a></dt>
	<!--{loop $gdata['sub'] $subfid $name}-->
		<dd{if $_G['fid'] == $subfid || $_G['forum']['fup'] == $subfid} class="bdl_a"{/if}>
			<!--{if !empty($_G['cache']['forums'][$subfid]['domain']) && !empty($_G['setting']['domain']['root']['forum'])}-->
				<a href="http://{$_G['cache']['forums'][$subfid]['domain']}.{$_G['setting']['domain']['root']['forum']}" title="$name">$name</a>
			<!--{else}-->
				<a href="forum.php?mod=forumdisplay&fid=$subfid" title="$name">$name</a>
			<!--{/if}-->
		</dd>
	<!--{/loop}-->
	</dl>
<!--{/loop}-->