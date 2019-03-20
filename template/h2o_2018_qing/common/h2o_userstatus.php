<?php echo '请购买新视界discuz商业模板，客服QQ:2413248487';exit;?>
<!--{if $_G['uid']}-->
<div class="h2o_ad_user z cl">

<div id="userpanel" class="rnitem z">
   <span class="rnimage" title="$_G[member][username]" style=" padding: 0 10px;"><!--{avatar($_G[uid],small)}--><a href="home.php?mod=space&uid=$_G[uid]">$_G[member][username]</a></span>
   
   <div class="rncontent rnct">
      <ul>
		 <!--{if check_diy_perm($topic)}-->
			<li><a href="javascript:saveUserdata('diy_advance_mode', '1');openDiy();">DIY编辑</a></li>
		 <!--{/if}-->
		 <li><a href="home.php?mod=spacecp">账号设置</a></li>
		 <!--{if ($_G['group']['allowmanagearticle'] || $_G['group']['allowpostarticle'] || $_G['group']['allowdiy'] || getstatus($_G['member']['allowadmincp'], 4) || getstatus($_G['member']['allowadmincp'], 6) || getstatus($_G['member']['allowadmincp'], 2) || getstatus($_G['member']['allowadmincp'], 3))}-->
		 <li><a href="portal.php?mod=portalcp"><!--{if $_G['setting']['portalstatus'] }-->{lang portal_manage}<!--{else}-->{lang portal_block_manage}<!--{/if}--></a></li>
		<!--{/if}-->
         <!--{if $_G['uid'] && $_G['group']['radminid'] > 1}-->
         <li><a rel="nofollow" href="forum.php?mod=modcp&fid=$_G[fid]" target="_blank">{lang forum_manager}</a></li>
         <!--{/if}-->
         <!--{if $_G['uid'] && getstatus($_G['member']['allowadmincp'], 1)}-->
         <li><a rel="nofollow" href="admin.php" target="_blank">{lang admincp}</a></li>
         <!--{/if}-->

		 <li><a href="member.php?mod=logging&action=logout&formhash={FORMHASH}">退出</a></li>
	  </ul>
    </div>
</div>

<div id="rnnoti" class="rnitem y">
   <span class="rnimage">
      <!--{eval settype($_G[member][newprompt], 'integer');}-->
      <!--{eval settype($_G[member][newpm], 'integer');}-->
      <!--{eval $noticenum = $_G[member][newprompt] + $_G[member][newpm];}-->
      <i class="h2o_xx_txt" {if $_G[member][newprompt] || $_G[member][newpm]}style="color: #EBEB14;"{/if}>消息</i>
   </span>
    <div class="xxcontent rnct h2o_tx">
      <ul>
          <li><a href="home.php?mod=space&do=pm" rel="nofollow">消息<!--{if $_G[member][newpm]}--><i>$_G[member][newpm]</i><!--{/if}--></a></li>	
		  <li><a href="home.php?mod=space&do=notice" rel="nofollow">提醒<!--{if $_G[member][newprompt]}--><i>$_G[member][newprompt]</i><!--{/if}--></a></li>
		  <li><a href="home.php?mod=space&do=notice&view=interactive&type=comment" rel="nofollow">给我的评论</a></li>
		  <li><a href="home.php?mod=space&do=notice&view=interactive&type=wall" rel="nofollow">给我的留言</a></li>
		  <li><a href="home.php?mod=space&do=notice&view=system" rel="nofollow">系统提醒</a></li>
	  </ul>
    </div>
</div>

</div>

<!--{elseif !empty($_G['cookie']['loginuser'])}-->
<p>
	<strong><a id="loginuser" class="noborder"><!--{echo dhtmlspecialchars($_G['cookie']['loginuser'])}--></a></strong>
	<span class="pipe">|</span><a href="member.php?mod=logging&action=login" onclick="showWindow('login', this.href)">{lang activation}</a>
	<span class="pipe">|</span><a href="member.php?mod=logging&action=logout&formhash={FORMHASH}">{lang logout}</a>
</p>
<!--{elseif !$_G[connectguest]}-->

<div class="h2o_ad_user z cl">
	<div id="mulogin">
	   <a href="member.php?mod=logging&action=login&referer={echo rawurlencode($dreferer)}" onclick="showWindow('login', this.href);return false;">登录</a>
	   <span class="or">|</span>
	   <a id="muregbtn" href="member.php?mod={$_G[setting][regname]}">注册</a>
	</div>
</div>
<!--{else}-->
<div class="h2o_ad_user y cl">
     <div class="h2o_user_wrap z">
		 <p class="message_btn"><a href="home.php?mod=space&uid=$_G[uid]" class="nav-arrow">$_G[member][username]</a></p>
            <ul class="meaage_menu">
			 	<li><a href="member.php?mod=connect" target="_blank" rel="nofollow">完善帐号信息</a></li>	
				<li><a href="member.php?mod=connect&amp;ac=bind" target="_blank" rel="nofollow">绑定已有帐号</a></li>
				<li><a href="member.php?mod=logging&action=logout&formhash={FORMHASH}">退出登录</a></li>
			</ul>
	 </div>
</div>

<!--{/if}-->