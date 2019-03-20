<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); if($_G['uid']) { ?>

<div class="h2o_login_box box cl"> 
     <div class="h2o_login_avatar"> 
      <a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>">
     <?php echo avatar($_G[uid],middle);?>  </a> 
 </div> 
   
    <div class="h2o_login_uname">
     欢迎会员,<a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>"><?php echo $_G['member']['username'];?></a>
</div>

<div class="h2o_login_mymsg cc">  
    <p><strong><?php echo getuserprofile('threads');?></strong><a href="javascript:void(0);">主题</a></p>  
<p><strong><?php echo getuserprofile('posts');?></strong><a href="javascript:void(0);">帖子</a></p>  
<p style="border:none;"><strong><?php echo $_G['member']['credits'];?></strong><a href="javascript:void(0);">积分</a></p>
</div>

<div class="h2o_user_button cl">	   
   <a href="home.php?mod=spacecp" class="greenbutton">修改资料</a>
   <a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>" class="purplebutton">退出登录</a>
</div>

  </div>

<?php } else { if(CURMODULE != 'logging') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>logging.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<div class="box h2o_forum_userbox cl">
<form method="post" autocomplete="off" id="lsform" action="member.php?mod=logging&amp;action=login&amp;loginsubmit=yes&amp;infloat=yes&amp;lssubmit=yes" onsubmit="return lsSubmit();">
<div class="fastlg cl">
<span id="return_ls" style="display:none"></span>
   <div class="pns">
      <table cellspacing="0" cellpadding="0">
         <tbody>
     <tr><td><input type="text" tabindex="901" class="px vm input xg1" value="UID/用户名/Email" onfocus="if(this.value == 'UID/用户名/Email'){this.value = '';this.className = 'px vm input';}" onblur="if(this.value == ''){this.value = 'UID/用户名/Email';this.className = 'px vm input xg1';}" id="ls_username" name="username"></td></tr>

             <tr><td colspan="2"><input type="password" tabindex="902" class="px vm input" autocomplete="off" id="ls_password" name="password" placeholder="密码"></td></tr>

             <tr>
                <td colspan="2" style="padding-bottom: 10px;"><label for="ls_cookietime"><input type="checkbox" tabindex="903" value="2592000" class="pc" id="ls_cookietime" name="cookietime">自动登录</label><a rel="nofollow" href="javascript:;" onclick="showWindow('login', 'member.php?mod=logging&amp;action=login&amp;viewlostpw=1')" class="y">找回密码</a></td>
             </tr>

             <tr><td colspan="2"><button type="submit" tabindex="904" class="pn vm h2o_login_button" style="width: 100%; border:none; height:34px; margin-bottom:10px;"><em>登录</em></button></td></tr>

             <tr>
    <td colspan="2">
                    <div class="h2o_third_login_box cl">
                        <span class="z"> 
      <p>其他方式登录：</p> 
  <?php if(in_array(wechat,$_G['setting']['plugins']['available'])) { ?>
          <a rel="nofollow" href="plugin.php?id=wechat:login" class="h2o_vx_ico"></a> 
  <?php } ?>
  <?php if(!empty($_G['setting']['plugins']['spacecp'])) { ?>
          <a rel="nofollow" href="connect.php?mod=login&amp;op=init&amp;referer=index.php&amp;statfrom=login_simple"></a>
  <?php } ?>
    </span> 
<span class="y"><a rel="nofollow" href="member.php?mod=<?php echo $_G['setting']['regname'];?>">立即注册?</a></span>
                   </div> 
                </td>
 </tr>
         </tbody>
</table>
    <input type="hidden" name="quickforward" value="yes">
    <input type="hidden" name="handlekey" value="ls">
</div>
</div>
</form>

<?php if($_G['setting']['pwdsafety']) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>md5.js?<?php echo VERHASH;?>" type="text/javascript" reload="1"></script>
<?php } ?>
</div>
<?php } } ?>