<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); include template('common/header_ajax'); ?><script type="text/javascript">
if(!isUndefined(checkForumnew_handle)) {
clearTimeout(checkForumnew_handle);
}
<?php if($threadlist) { ?>
if($('separatorline')) {
var table = $('separatorline').parentNode;
} else {
var table = $('forum_' + <?php echo $fid;?>);
}
var newthread = [];<?php $i = 0;?><?php if(is_array($threadlist)) foreach($threadlist as $thread) { ?><?php
$__IMGDIR = IMGDIR;$icon = <<<EOF
<a href="forum.php?mod=viewthread&amp;tid={$thread['icontid']}&amp;
EOF;
 if($_GET['archiveid']) { 
$icon .= <<<EOF
archiveid={$_GET['archiveid']}&amp;
EOF;
 } 
$icon .= <<<EOF
extra={$extra}" title="
EOF;
 if($thread['displayorder'] == 1) { 
$icon .= <<<EOF
本版置顶主题 - 
EOF;
 } if($thread['displayorder'] == 2) { 
$icon .= <<<EOF
分类置顶主题 - 
EOF;
 } if($thread['displayorder'] == 3) { 
$icon .= <<<EOF
全局置顶主题 - 
EOF;
 } if($thread['displayorder'] == 4) { 
$icon .= <<<EOF
多版置顶主题 - 
EOF;
 } if($thread['folder'] == 'lock') { 
$icon .= <<<EOF
关闭的主题 - 
EOF;
 } if($thread['special'] == 1) { 
$icon .= <<<EOF
投票 - 
EOF;
 } if($thread['special'] == 2) { 
$icon .= <<<EOF
商品 - 
EOF;
 } if($thread['special'] == 3) { 
$icon .= <<<EOF
悬赏 - 
EOF;
 } if($thread['special'] == 4) { 
$icon .= <<<EOF
活动 - 
EOF;
 } if($thread['special'] == 5) { 
$icon .= <<<EOF
辩论 - 
EOF;
 } if($thread['folder'] == "new") { 
$icon .= <<<EOF
有新回复 - 
EOF;
 } 
$icon .= <<<EOF
新窗口打开" target="_blank">
EOF;
 if($thread['folder'] == 'lock') { 
$icon .= <<<EOF
<img src="{$__IMGDIR}/folder_lock.gif" />
EOF;
 } elseif($thread['special'] == 1) { 
$icon .= <<<EOF
<img src="{$__IMGDIR}/pollsmall.gif" alt="投票" />
EOF;
 } elseif($thread['special'] == 2) { 
$icon .= <<<EOF
<img src="{$__IMGDIR}/tradesmall.gif" alt="商品" />
EOF;
 } elseif($thread['special'] == 3) { 
$icon .= <<<EOF
<img src="{$__IMGDIR}/rewardsmall.gif" alt="悬赏" />
EOF;
 } elseif($thread['special'] == 4) { 
$icon .= <<<EOF
<img src="{$__IMGDIR}/activitysmall.gif" alt="活动" />
EOF;
 } elseif($thread['special'] == 5) { 
$icon .= <<<EOF
<img src="{$__IMGDIR}/debatesmall.gif" alt="辩论" />
EOF;
 } elseif(in_array($thread['displayorder'], array(1, 2, 3, 4))) { 
$icon .= <<<EOF
<img src="{$__IMGDIR}/pin_{$thread['displayorder']}.gif" alt="{$_G['setting']['threadsticky'][3-$thread['displayorder']]}" />
EOF;
 } else { 
$icon .= <<<EOF
<img src="{$__IMGDIR}/folder_common.gif" />
EOF;
 } 
$icon .= <<<EOF
</a>
EOF;
?>

newthread[<?php echo $i;?>] = {'tid':<?php echo $thread['tid'];?>, 'thread': {'common':{'className':'common','colspan':'1','val':'<?php if($_G['forum']['ismoderator']) { ?><div class="o" style="margin-top: 15px;"><input type="checkbox" value="<?php echo $thread['tid'];?>" name="moderate[]" onclick="tmodclick(this)"></div><?php } ?><div class="h2o_post_avatar"><?php echo avatar($thread[authorid],small);?></div><div class="<?php if($_G['forum']['allowside']) { ?> h2o_post_list<?php } ?>"><div class="h2o_post_list_tit"><?php echo $thread['threadurl'];?></div><div class="h2o_post_list_other"><div class="y nums"><span class="views"><?php echo $thread['views'];?></span><span class="reply"><?php echo $thread['replies'];?></span></div><span class="author mr10"><?php echo $thread['authorurl'];?></span>于<span class="dateline  mr10 ml10"><?php echo $thread['dateline'];?></span>发布<span class="pipe">|</span><span class="time">最后回复:&nbsp;&nbsp;<?php echo $thread['lastpost'];?></span></div></div>'}}};<?php $i++;?><?php } ?>
removetbodyrow(table, 'forumnewshow');
for(var i = 0; i < newthread.length; i++) {
if(newthread[i].tid) {
addtbodyrow(table, ['tbody', 'newthread'], ['normalthread_', 'normalthread_'], 'separatorline', newthread[i]);
}
}
function readthread(tid) {
if($("checknewthread_"+tid)) {
$("checknewthread_"+tid).className = "";
}
}
<?php } elseif(!$threadlist && $_GET['uncheck'] == 2) { ?>
showDialog('暂无新回复主题', 'notice', null, null, 0, null, null, null, null, 3);
<?php } ?>
checkForumnew_handle = setTimeout(function () {checkForumnew('<?php echo $fid;?>', '<?php echo $_G['timestamp'];?>');}, checkForumtimeout);
</script><?php include template('common/footer_ajax'); ?>