<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); if($_G['uid']) { ?>
<div class="h2o_ad_user z cl">

<div id="userpanel" class="rnitem z">
   <span class="rnimage" title="<?php echo $_G['member']['username'];?>" style=" padding: 0 10px;"><?php echo avatar($_G[uid],small);?><a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>"><?php echo $_G['member']['username'];?></a></span>
   
   <div class="rncontent rnct">
      <ul>
 <?php if(check_diy_perm($topic)) { ?>
<li><a href="javascript:saveUserdata('diy_advance_mode', '1');openDiy();">DIY编辑</a></li>
 <?php } ?>
 <li><a href="home.php?mod=spacecp">账号设置</a></li>
 <?php if(($_G['group']['allowmanagearticle'] || $_G['group']['allowpostarticle'] || $_G['group']['allowdiy'] || getstatus($_G['member']['allowadmincp'], 4) || getstatus($_G['member']['allowadmincp'], 6) || getstatus($_G['member']['allowadmincp'], 2) || getstatus($_G['member']['allowadmincp'], 3))) { ?>
 <li><a href="portal.php?mod=portalcp"><?php if($_G['setting']['portalstatus'] ) { ?>门户管理<?php } else { ?>模块管理<?php } ?></a></li>
<?php } ?>
         <?php if($_G['uid'] && $_G['group']['radminid'] > 1) { ?>
         <li><a rel="nofollow" href="forum.php?mod=modcp&amp;fid=<?php echo $_G['fid'];?>" target="_blank"><?php echo $_G['setting']['navs']['2']['navname'];?>管理</a></li>
         <?php } ?>
         <?php if($_G['uid'] && getstatus($_G['member']['allowadmincp'], 1)) { ?>
         <li><a rel="nofollow" href="admin.php" target="_blank">管理中心</a></li>
         <?php } ?>

 <li><a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">退出</a></li>
  </ul>
    </div>
</div>

<div id="rnnoti" class="rnitem y">
   <span class="rnimage">
      <?php settype($_G[member][newprompt], 'integer');?>      <?php settype($_G[member][newpm], 'integer');?>      <?php $noticenum = $_G[member][newprompt] + $_G[member][newpm];?>      <i class="h2o_xx_txt" <?php if($_G['member']['newprompt'] || $_G['member']['newpm']) { ?>style="color: #EBEB14;"<?php } ?>>消息</i>
   </span>
    <div class="xxcontent rnct h2o_tx">
      <ul>
          <li><a href="home.php?mod=space&amp;do=pm" rel="nofollow">消息<?php if($_G['member']['newpm']) { ?><i><?php echo $_G['member']['newpm'];?></i><?php } ?></a></li>	
  <li><a href="home.php?mod=space&amp;do=notice" rel="nofollow">提醒<?php if($_G['member']['newprompt']) { ?><i><?php echo $_G['member']['newprompt'];?></i><?php } ?></a></li>
  <li><a href="home.php?mod=space&amp;do=notice&amp;view=interactive&amp;type=comment" rel="nofollow">给我的评论</a></li>
  <li><a href="home.php?mod=space&amp;do=notice&amp;view=interactive&amp;type=wall" rel="nofollow">给我的留言</a></li>
  <li><a href="home.php?mod=space&amp;do=notice&amp;view=system" rel="nofollow">系统提醒</a></li>
  </ul>
    </div>
</div>

</div>

<?php } elseif(!empty($_G['cookie']['loginuser'])) { ?>
<p>
<strong><a id="loginuser" class="noborder"><?php echo dhtmlspecialchars($_G['cookie']['loginuser']); ?></a></strong>
<span class="pipe">|</span><a href="member.php?mod=logging&amp;action=login" onclick="showWindow('login', this.href)">激活</a>
<span class="pipe">|</span><a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">退出</a>
</p>
<?php } elseif(!$_G['connectguest']) { ?>

<div class="h2o_ad_user z cl">
<div id="mulogin">
   <a href="member.php?mod=logging&amp;action=login&amp;referer=<?php echo rawurlencode($dreferer); ?>" onclick="showWindow('login', this.href);return false;">登录</a>
   <span class="or">|</span>
   <a id="muregbtn" href="member.php?mod=<?php echo $_G['setting']['regname'];?>">注册</a>
</div>
</div>
<?php } else { ?>
<div class="h2o_ad_user y cl">
     <div class="h2o_user_wrap z">
 <p class="message_btn"><a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>" class="nav-arrow"><?php echo $_G['member']['username'];?></a></p>
            <ul class="meaage_menu">
 	<li><a href="member.php?mod=connect" target="_blank" rel="nofollow">完善帐号信息</a></li>	
<li><a href="member.php?mod=connect&amp;ac=bind" target="_blank" rel="nofollow">绑定已有帐号</a></li>
<li><a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">退出登录</a></li>
</ul>
 </div>
</div>

<?php } ?>