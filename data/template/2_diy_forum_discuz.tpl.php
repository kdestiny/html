<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('discuz');
0
|| checktplrefresh('data/diy/./template/h2o_2018_qing//forum/discuz.htm', './template/h2o_2018_qing/common/about.htm', 1550929972, 'diy', './data/template/2_diy_forum_discuz.tpl.php', 'data/diy/./template/h2o_2018_qing/', 'forum/discuz')
;
block_get('15,16,17,19,20,18');?><?php include template('common/header'); ?><script src="<?php echo $_G['style']['styleimgdir'];?>/js/jquery.slider.js" type="text/javascript"></script>
<style type="text/css"> 
  .scrollDiv{ height:25px;/* 必要元素 */line-height:25px;overflow:hidden;/* 必要元素 */} 
   .scrollDiv li {
    height: 25px;
    margin-left: 80px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
   .scrollDiv li span { height:25px;padding-left:10px;} 
      .scrollDiv li em {display: none;}
     .scrollDiv ul,.scrollDiv li{ list-style-type:none;}
</style> 

<?php if(empty($gid)) { ?><?php echo adshow("text/wp a_t");?><?php } ?>

<style id="diy_style" type="text/css"></style>

<div id="ct" class="wp h2o_forums ct2 cl">

<div class="mn">
<div class="h2o_first_box box cl">
  <div class="h2o_focus cl">
     <!--[diy=h2o_focus_diy]--><div id="h2o_focus_diy" class="area"><div id="frameM0ETDg" class="cl_frame_bm frame move-span cl frame-1"><div id="frameM0ETDg_left" class="column frame-1-c"><div id="frameM0ETDg_left_temp" class="move-span temp"></div><?php block_display('15');?></div></div></div><!--[/diy]-->
  </div>

<?php if(empty($gid) && $announcements) { ?>
<div class="h2o_announcement cl">
<div id="scrollDiv_keleyi_com" class="scrollDiv"> 
   <div class="z">社区公告:&nbsp;&nbsp;</div>
   <ul><?php echo $announcements;?></ul> 
</div> 
</div>

<?php } ?>
</div> 

<?php if(!empty($_G['setting']['grid']['showgrid'])) { ?>
<!-- index four grid -->
<div class="fl bm" style="margin-bottom: 15px;">
<div class="bm bmw cl">
<div id="category_grid" class="bm_c" >
<table cellspacing="0" cellpadding="0"><tr>
<?php if(!$_G['setting']['grid']['gridtype']) { ?>
<td valign="top" class="category_l1">
<div class="newimgbox">
<h4><span class="tit_newimg"></span>最新图片</h4>
<div class="module cl slidebox_grid" style="width:218px">
<script type="text/javascript">
var slideSpeed = 5000;
var slideImgsize = [218,200];
var slideBorderColor = '<?php echo $_G['style']['specialborder'];?>';
var slideBgColor = '<?php echo $_G['style']['commonbg'];?>';
var slideImgs = new Array();
var slideImgLinks = new Array();
var slideImgTexts = new Array();
var slideSwitchColor = '<?php echo $_G['style']['tabletext'];?>';
var slideSwitchbgColor = '<?php echo $_G['style']['commonbg'];?>';
var slideSwitchHiColor = '<?php echo $_G['style']['specialborder'];?>';<?php $k = 1;?><?php if(is_array($grids['slide'])) foreach($grids['slide'] as $stid => $svalue) { ?>slideImgs[<?php echo $k; ?>] = '<?php echo $svalue['image'];?>';
slideImgLinks[<?php echo $k; ?>] = '<?php echo $svalue['url'];?>';
slideImgTexts[<?php echo $k; ?>] = '<?php echo $svalue['subject'];?>';<?php $k++;?><?php } ?>
</script>
<script src="<?php echo $_G['setting']['jspath'];?>forum_slide.js?<?php echo VERHASH;?>" type="text/javascript"></script>
</div>
</div>
</td>
<?php } ?>
<td valign="top" class="category_l2">
<div class="subjectbox">
<h4><span class="tit_subject"></span>最新主题</h4>
        <ul class="category_newlist">
        <?php if(is_array($grids['newthread'])) foreach($grids['newthread'] as $thread) { ?>        	<?php if(!$thread['forumstick'] && $thread['closed'] > 1 && ($thread['isgroup'] == 1 || $thread['fid'] != $_G['fid'])) { $thread[tid]=$thread[closed];?><?php } ?>
<li><a href="forum.php?mod=viewthread&amp;tid=<?php echo $thread['tid'];?>&amp;extra=<?php echo $extra;?>"<?php if($thread['highlight']) { ?> <?php echo $thread['highlight'];?><?php } if($_G['setting']['grid']['showtips']) { ?> tip="标题: <strong><?php echo $thread['oldsubject'];?></strong><br/>作者: <?php echo $thread['author'];?> (<?php echo $thread['dateline'];?>)<br/>查看/回复: <?php echo $thread['views'];?>/<?php echo $thread['replies'];?>" onmouseover="showTip(this)"<?php } else { ?> title="<?php echo $thread['oldsubject'];?>"<?php } if($_G['setting']['grid']['targetblank']) { ?> target="_blank"<?php } ?>><?php echo $thread['subject'];?></a></li>
<?php } ?>
         </ul>
         </div>
</td>
<td valign="top" class="category_l3">
<div class="replaybox">
<h4><span class="tit_replay"></span>最新回复</h4>
        <ul class="category_newlist">
        <?php if(is_array($grids['newreply'])) foreach($grids['newreply'] as $thread) { ?>        	<?php if(!$thread['forumstick'] && $thread['closed'] > 1 && ($thread['isgroup'] == 1 || $thread['fid'] != $_G['fid'])) { $thread[tid]=$thread[closed];?><?php } ?>
<li><a href="forum.php?mod=redirect&amp;tid=<?php echo $thread['tid'];?>&amp;goto=lastpost#lastpost"<?php if($thread['highlight']) { ?> <?php echo $thread['highlight'];?><?php } if($_G['setting']['grid']['showtips']) { ?>tip="标题: <strong><?php echo $thread['oldsubject'];?></strong><br/>作者: <?php echo $thread['author'];?> (<?php echo $thread['dateline'];?>)<br/>查看/回复: <?php echo $thread['views'];?>/<?php echo $thread['replies'];?>" onmouseover="showTip(this)"<?php } else { ?> title="<?php echo $thread['oldsubject'];?>"<?php } if($_G['setting']['grid']['targetblank']) { ?> target="_blank"<?php } ?>><?php echo $thread['subject'];?></a></li>
<?php } ?>
         </ul>
         </div>
</td>
<td valign="top" class="category_l3">
<div class="hottiebox">
<h4><span class="tit_hottie"></span>热帖</h4>
        <ul class="category_newlist">
        <?php if(is_array($grids['hot'])) foreach($grids['hot'] as $thread) { ?>        	<?php if(!$thread['forumstick'] && $thread['closed'] > 1 && ($thread['isgroup'] == 1 || $thread['fid'] != $_G['fid'])) { $thread[tid]=$thread[closed];?><?php } ?>
<li><a href="forum.php?mod=viewthread&amp;tid=<?php echo $thread['tid'];?>&amp;extra=<?php echo $extra;?>"<?php if($thread['highlight']) { ?> <?php echo $thread['highlight'];?><?php } if($_G['setting']['grid']['showtips']) { ?> tip="标题: <strong><?php echo $thread['oldsubject'];?></strong><br/>作者: <?php echo $thread['author'];?> (<?php echo $thread['dateline'];?>)<br/>查看/回复: <?php echo $thread['views'];?>/<?php echo $thread['replies'];?>" onmouseover="showTip(this)"<?php } else { ?> title="<?php echo $thread['oldsubject'];?>"<?php } if($_G['setting']['grid']['targetblank']) { ?> target="_blank"<?php } ?>><?php echo $thread['subject'];?></a></li>
<?php } ?>
         </ul>
         </div>
</td>
<?php if($_G['setting']['grid']['gridtype']) { ?>
<td valign="top" class="category_l4">
<div class="goodtiebox">
<h4><span class="tit_goodtie"></span>精华帖子</h4>
<ul class="category_newlist"><?php if(is_array($grids['digest'])) foreach($grids['digest'] as $thread) { if(!$thread['forumstick'] && $thread['closed'] > 1 && ($thread['isgroup'] == 1 || $thread['fid'] != $_G['fid'])) { $thread[tid]=$thread[closed];?><?php } ?>
<li><a href="forum.php?mod=viewthread&amp;tid=<?php echo $thread['tid'];?>&amp;extra=<?php echo $extra;?>"<?php if($thread['highlight']) { ?> <?php echo $thread['highlight'];?><?php } if($_G['setting']['grid']['showtips']) { ?> tip="标题: <strong><?php echo $thread['oldsubject'];?></strong><br/>作者: <?php echo $thread['author'];?> (<?php echo $thread['dateline'];?>)<br/>查看/回复: <?php echo $thread['views'];?>/<?php echo $thread['replies'];?>" onmouseover="showTip(this)"<?php } else { ?> title="<?php echo $thread['oldsubject'];?>"<?php } if($_G['setting']['grid']['targetblank']) { ?> target="_blank"<?php } ?>><?php echo $thread['subject'];?></a></li>
<?php } ?>
 </ul>
 	</div>
</td>
<?php } ?>
</table>
</div>
</div>
</div>
<!-- index four grid end -->
<?php } ?>

<div class="h2o_list_box box cl">
    <div class="listtit">热门帖子</div>
    <div class="l_list z">
    <!--[diy=l_list_diy]--><div id="l_list_diy" class="area"><div id="frameiGLf7F" class="cl_frame_bm frame move-span cl frame-1"><div id="frameiGLf7F_left" class="column frame-1-c"><div id="frameiGLf7F_left_temp" class="move-span temp"></div><?php block_display('16');?></div></div></div><!--[/diy]-->
    </div>
<div class="r_list y">
        <!--[diy=r_list_diy]--><div id="r_list_diy" class="area"><div id="frameY2bd52" class="cl_frame_bm frame move-span cl frame-1"><div id="frameY2bd52_left" class="column frame-1-c"><div id="frameY2bd52_left_temp" class="move-span temp"></div><?php block_display('17');?></div></div></div><!--[/diy]-->
</div>
</div> 

<?php if(empty($gid)) { ?>
<div id="chart" class="bm h2o_chart cl">
<p class="chart z">今日: <em><?php echo $todayposts;?></em><span class="pipe">|</span>昨日: <em><?php echo $postdata['0'];?></em><span class="pipe">|</span>帖子: <em><?php echo $posts;?></em><span class="pipe">|</span>会员: <em><?php echo $_G['cache']['userstats']['totalmembers'];?></em><?php if($_G['cache']['userstats']['newsetuser']) { ?><span class="pipe">|</span>欢迎新会员: <em><a href="home.php?mod=space&amp;username=<?php echo rawurlencode($_G['cache']['userstats']['newsetuser']); ?>" target="_blank" class="xi2"><?php echo $_G['cache']['userstats']['newsetuser'];?></a></em><?php } ?></p>
<div class="y">
<?php if(!empty($_G['setting']['pluginhooks']['index_nav_extra'])) echo $_G['setting']['pluginhooks']['index_nav_extra'];?>
<?php if(!empty($_G['setting']['pluginhooks']['index_status_extra'])) echo $_G['setting']['pluginhooks']['index_status_extra'];?>
<?php if($_G['uid']) { ?><a href="forum.php?mod=guide&amp;view=my" title="我的帖子" class="xi2">我的帖子</a><?php } if(!empty($_G['setting']['search']['forum']['status'])) { if($_G['uid']) { ?><span class="pipe">|</span><?php } ?><a href="forum.php?mod=guide&amp;view=new" title="最新回复" class="xi2">最新回复</a><?php } ?>
</div>
</div>
<?php } ?>

<?php if(!empty($_G['setting']['pluginhooks']['index_top'])) echo $_G['setting']['pluginhooks']['index_top'];?>

<!--[diy=diy_chart]--><div id="diy_chart" class="area"></div><!--[/diy]-->

<?php if(!empty($_G['cache']['heats']['message'])) { ?>
<div class="bm">
<div class="bm_h cl">
<h2><?php echo $_G['setting']['navs']['2']['navname'];?>热点</h2>
</div>
<div class="bm_c cl">
<div class="heat z"><?php if(is_array($_G['cache']['heats']['message'])) foreach($_G['cache']['heats']['message'] as $data) { ?><dl class="xld">
<dt><?php if($_G['adminid'] == 1) { ?><a class="d" href="forum.php?mod=misc&amp;action=removeindexheats&amp;tid=<?php echo $data['tid'];?>" onclick="return removeindexheats()">delete</a><?php } ?>
<a href="forum.php?mod=viewthread&amp;tid=<?php echo $data['tid'];?>" target="_blank" class="xi2"><?php echo $data['subject'];?></a></dt>
<dd><?php echo $data['message'];?></dd>
</dl>
<?php } ?>
</div>
<ul class="xl xl1 heatl"><?php if(is_array($_G['cache']['heats']['subject'])) foreach($_G['cache']['heats']['subject'] as $data) { ?><li><?php if($_G['adminid'] == 1) { ?><a class="d" href="forum.php?mod=misc&amp;action=removeindexheats&amp;tid=<?php echo $data['tid'];?>" onclick="return removeindexheats()">delete</a><?php } ?>&middot; <a href="forum.php?mod=viewthread&amp;tid=<?php echo $data['tid'];?>" target="_blank" class="xi2"><?php echo $data['subject'];?></a></li>
<?php } ?>
</ul>
</div>
</div>
<?php } ?>

<?php if(!empty($_G['setting']['pluginhooks']['index_catlist_top'])) echo $_G['setting']['pluginhooks']['index_catlist_top'];?>
<div class="fl bm">
<?php if(!empty($collectiondata['follows'])) { $forumscount = count($collectiondata['follows']);?><?php $forumcolumns = 4;?><?php $forumcolwidth = (floor(100 / $forumcolumns) - 0.1).'%';?><div class="bm bmw <?php if($forumcolumns) { ?> flg<?php } ?> cl">
<div class="bm_h cl">
<span class="o">
<img id="category_-1_img" src="<?php echo IMGDIR;?>/<?php echo $collapse['collapseimg_-1'];?>" title="收起/展开" alt="收起/展开" onclick="toggle_collapse('category_-1');" />
</span>
<h2><a href="forum.php?mod=collection&amp;op=my">我订阅的专辑</a></h2>
</div>
<div id="category_-1" class="h2o_forumlist bm_c" style="<?php echo $collapse['category_-1']; ?>">
<table cellspacing="0" cellpadding="0" class="fl_tb">
<tr><?php $ctorderid = 0;?><?php if(is_array($collectiondata['follows'])) foreach($collectiondata['follows'] as $key => $colletion) { if($ctorderid && ($ctorderid % $forumcolumns == 0)) { ?>
</tr>
<?php if($ctorderid < $forumscount) { ?>
<tr class="fl_row">
<?php } } ?>
<td class="fl_g"<?php if($forumcolwidth) { ?> width="<?php echo $forumcolwidth;?>"<?php } ?>>
<div class="fl_icn_g">
<a href="forum.php?mod=collection&amp;action=view&amp;ctid=<?php echo $colletion['ctid'];?>" target="_blank"><img src="<?php echo IMGDIR;?>/forum<?php if($followcollections[$key]['lastvisit'] < $colletion['lastupdate']) { ?>_new<?php } ?>.gif" alt="<?php echo $colletion['name'];?>" /></a>
</div>
<dl>
<dt><a href="forum.php?mod=collection&amp;action=view&amp;ctid=<?php echo $colletion['ctid'];?>"><?php echo $colletion['name'];?></a></dt>
<dd><em>主题: <?php echo dnumber($colletion['threadnum']); ?></em>, <em>评论: <?php echo dnumber($colletion['commentnum']); ?></em></dd>
<dd>
<?php if($colletion['lastpost']) { if($forumcolumns < 3) { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $colletion['lastpost'];?>&amp;goto=lastpost#lastpost" class="xi2"><?php echo cutstr($colletion['lastsubject'], 30); ?></a> <cite><?php echo dgmdate($colletion[lastposttime]);?> <?php if($colletion['lastposter']) { ?><?php echo $colletion['lastposter'];?><?php } else { ?><?php echo $_G['setting']['anonymoustext'];?><?php } ?></cite>
<?php } else { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $colletion['lastpost'];?>&amp;goto=lastpost#lastpost">最后发表: <?php echo dgmdate($colletion[lastposttime]);?></a>
<?php } } else { ?>
从未
<?php } ?>
</dd>
<?php if(!empty($_G['setting']['pluginhooks']['index_followcollection_extra'][$colletion[ctid]])) echo $_G['setting']['pluginhooks']['index_followcollection_extra'][$colletion[ctid]];?>
</dl>
</td><?php $ctorderid++;?><?php } if(($columnspad = $ctorderid % $forumcolumns) > 0) { echo str_repeat('<td class="fl_g"'.($forumcolwidth ? " width=\"$forumcolwidth\"" : '').'></td>', $forumcolumns - $columnspad);; } ?>
</tr>
</table>

</div>
</div>

<?php } if(empty($gid) && !empty($forum_favlist)) { $forumscount = count($forum_favlist);?><?php $forumcolumns = $forumscount > 3 ? ($forumscount == 4 ? 3 : 3) : 1;?><?php $forumcolwidth = (floor(100 / $forumcolumns) - 0.1).'%';?><div class="bm bmw box <?php if($forumcolumns) { ?> flg<?php } ?> cl">
<div class="bm_h cl">
<span class="o">
<img id="category_0_img" src="<?php echo IMGDIR;?>/<?php echo $collapse['collapseimg_0'];?>" title="收起/展开" alt="收起/展开" onclick="toggle_collapse('category_0');" />
</span>
<h2><a href="home.php?mod=space&amp;do=favorite&amp;type=forum">我收藏的版块</a></h2>
</div>
<div id="category_0" class="h2o_forumlist bm_c" style="<?php echo $collapse['category_0']; ?>">
<table cellspacing="0" cellpadding="0" class="fl_tb">
<tr><?php $favorderid = 0;?><?php if(is_array($forum_favlist)) foreach($forum_favlist as $key => $favorite) { if($favforumlist[$favorite['id']]) { $forum=$favforumlist[$favorite[id]];?><?php $forumurl = !empty($forum['domain']) && !empty($_G['setting']['domain']['root']['forum']) ? 'http://'.$forum['domain'].'.'.$_G['setting']['domain']['root']['forum'] : 'forum.php?mod=forumdisplay&fid='.$forum['fid'];?><?php if($forumcolumns>1) { if($favorderid && ($favorderid % $forumcolumns == 0)) { ?>
</tr>
<?php if($favorderid < $forumscount) { ?>
<tr class="fl_row">
<?php } } ?>
<td class="fl_g"<?php if($forumcolwidth) { ?> width="<?php echo $forumcolwidth;?>"<?php } ?>>
<div class="h2o_forum_sc"<?php if(!empty($forum['extra']['iconwidth']) && !empty($forum['icon'])) { ?> style="width: <?php echo $forum['extra']['iconwidth'];?>px;"<?php } ?>>
<?php if($forum['icon']) { ?>
<?php echo $forum['icon'];?>
<?php } else { ?>
<a href="<?php echo $forumurl;?>"<?php if($forum['redirect']) { ?> target="_blank"<?php } ?>><img src="<?php echo IMGDIR;?>/forum<?php if($forum['folder']) { ?>_new<?php } ?>.gif" alt="<?php echo $forum['name'];?>" /></a>
<?php } ?>
</div>
<dl<?php if(!empty($forum['extra']['iconwidth']) && !empty($forum['icon'])) { ?> style="margin-left: <?php echo $forum['extra']['iconwidth'];?>px;"<?php } ?>>
<dt><a href="<?php echo $forumurl;?>"<?php if($forum['redirect']) { ?> target="_blank"<?php } if($forum['extra']['namecolor']) { ?> style="color: <?php echo $forum['extra']['namecolor'];?>;"<?php } ?>><?php echo $forum['name'];?></a><?php if($forum['todayposts'] && !$forum['redirect']) { ?><em class="xw0 xi1" title="今日"> (<?php echo $forum['todayposts'];?>)</em><?php } ?></dt>
<?php if(empty($forum['redirect'])) { ?><dd><em>主题: <?php echo dnumber($forum['threads']); ?></em>, <em>帖数: <?php echo dnumber($forum['posts']); ?></em></dd><?php } ?>
<dd>
<?php if($forum['permission'] == 1) { ?>
私密版块
<?php } else { if($forum['redirect']) { ?>
<a href="<?php echo $forumurl;?>" class="xi2">链接到外部地址</a>
<?php } elseif(is_array($forum['lastpost'])) { if($forumcolumns < 3) { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $forum['lastpost']['tid'];?>&amp;goto=lastpost#lastpost" class="xi2"><?php echo cutstr($forum['lastpost']['subject'], 30); ?></a> <cite><?php echo $forum['lastpost']['dateline'];?> <?php if($forum['lastpost']['author']) { ?><?php echo $forum['lastpost']['author'];?><?php } else { ?><?php echo $_G['setting']['anonymoustext'];?><?php } ?></cite>
<?php } else { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $forum['lastpost']['tid'];?>&amp;goto=lastpost#lastpost">最后发表: <?php echo $forum['lastpost']['dateline'];?></a>
<?php } } else { ?>
从未
<?php } } ?>
</dd>
<?php if(!empty($_G['setting']['pluginhooks']['index_favforum_extra'][$forum[fid]])) echo $_G['setting']['pluginhooks']['index_favforum_extra'][$forum[fid]];?>
</dl>
</td><?php $favorderid++;?><?php } else { ?>
<td class="fl_icn" <?php if(!empty($forum['extra']['iconwidth']) && !empty($forum['icon'])) { ?> style="width: <?php echo $forum['extra']['iconwidth'];?>px;"<?php } ?>>
<?php if($forum['icon']) { ?>
<?php echo $forum['icon'];?>
<?php } else { ?>
<a href="<?php echo $forumurl;?>"<?php if($forum['redirect']) { ?> target="_blank"<?php } ?>><img src="<?php echo IMGDIR;?>/forum<?php if($forum['folder']) { ?>_new<?php } ?>.gif" alt="<?php echo $forum['name'];?>" /></a>
<?php } ?>
</td>
<td>
<h2><a href="<?php echo $forumurl;?>"<?php if($forum['redirect']) { ?> target="_blank"<?php } if($forum['extra']['namecolor']) { ?> style="color: <?php echo $forum['extra']['namecolor'];?>;"<?php } ?>><?php echo $forum['name'];?></a><?php if($forum['todayposts'] && !$forum['redirect']) { ?><em class="xw0 xi1" title="今日"> (<?php echo $forum['todayposts'];?>)</em><?php } ?></h2>
<?php if($forum['description']) { ?><p class="xg2"><?php echo $forum['description'];?></p><?php } if($forum['subforums']) { ?><p>子版块: <?php echo $forum['subforums'];?></p><?php } if($forum['moderators']) { ?><p>版主: <span class="xi2"><?php echo $forum['moderators'];?></span></p><?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['index_favforum_extra'][$forum[fid]])) echo $_G['setting']['pluginhooks']['index_favforum_extra'][$forum[fid]];?>
</td>
<td class="fl_i">
<?php if(empty($forum['redirect'])) { ?><span class="xi2"><?php echo dnumber($forum['threads']); ?></span><span class="xg1"> / <?php echo dnumber($forum['posts']); ?></span><?php } ?>
</td>
<td class="fl_by">
<div>
<?php if($forum['permission'] == 1) { ?>
私密版块
<?php } else { if($forum['redirect']) { ?>
<a href="<?php echo $forumurl;?>" class="xi2">链接到外部地址</a>
<?php } elseif(is_array($forum['lastpost'])) { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $forum['lastpost']['tid'];?>&amp;goto=lastpost#lastpost" class="xi2"><?php echo cutstr($forum['lastpost']['subject'], 30); ?></a> <cite><?php echo $forum['lastpost']['dateline'];?> <?php if($forum['lastpost']['author']) { ?><?php echo $forum['lastpost']['author'];?><?php } else { ?><?php echo $_G['setting']['anonymoustext'];?><?php } ?></cite>
<?php } else { ?>
从未
<?php } } ?>
</div>
</td>
</tr>
<tr class="fl_row">

<?php } } } if(($columnspad = $favorderid % $forumcolumns) > 0) { echo str_repeat('<td class="fl_g"'.($forumcolwidth ? " width=\"$forumcolwidth\"" : '').'></td>', $forumcolumns - $columnspad);; } ?>
</tr>
</table>

</div>
</div><?php echo adshow("intercat/bm a_c/-1");?><?php } if(is_array($catlist)) foreach($catlist as $key => $cat) { ?><?php if(!empty($_G['setting']['pluginhooks']['index_catlist'][$cat[fid]])) echo $_G['setting']['pluginhooks']['index_catlist'][$cat[fid]];?>
<div class="bm bmw box <?php if($cat['forumcolumns']) { ?> flg<?php } ?> cl">
<div class="bm_h cl">
<span class="o">
<img id="category_<?php echo $cat['fid'];?>_img" src="<?php echo IMGDIR;?>/<?php echo $cat['collapseimg'];?>" title="收起/展开" alt="收起/展开" onclick="toggle_collapse('category_<?php echo $cat['fid'];?>');" />
</span>
<?php if($cat['moderators']) { ?><span class="y">分区版主: <?php echo $cat['moderators'];?></span><?php } $caturl = !empty($cat['domain']) && !empty($_G['setting']['domain']['root']['forum']) ? 'http://'.$cat['domain'].'.'.$_G['setting']['domain']['root']['forum'] : '';?><h2><a href="<?php if(!empty($caturl)) { ?><?php echo $caturl;?><?php } else { ?>forum.php?gid=<?php echo $cat['fid'];?><?php } ?>" style="<?php if($cat['extra']['namecolor']) { ?>color: <?php echo $cat['extra']['namecolor'];?>;<?php } ?>"><?php echo $cat['name'];?></a></h2>
</div>
<div id="category_<?php echo $cat['fid'];?>" class="h2o_forumlist bm_c" style="<?php echo $collapse['category_'.$cat['fid']]; ?>">
<table cellspacing="0" cellpadding="0" class="fl_tb">
<tr><?php if(is_array($cat['forums'])) foreach($cat['forums'] as $forumid) { $forum=$forumlist[$forumid];?><?php $forumurl = !empty($forum['domain']) && !empty($_G['setting']['domain']['root']['forum']) ? 'http://'.$forum['domain'].'.'.$_G['setting']['domain']['root']['forum'] : 'forum.php?mod=forumdisplay&fid='.$forum['fid'];?><?php if($cat['forumcolumns']) { if($forum['orderid'] && ($forum['orderid'] % $cat['forumcolumns'] == 0)) { ?>
</tr>
<?php if($forum['orderid'] < $cat['forumscount']) { ?>
<tr class="fl_row">
<?php } } ?>
<td class="fl_g" width="<?php echo $cat['forumcolwidth'];?>">
<div class="fl_icn_g"<?php if(!empty($forum['extra']['iconwidth']) && !empty($forum['icon'])) { ?> style="width: <?php echo $forum['extra']['iconwidth'];?>px;"<?php } ?>>
<?php if($forum['icon']) { ?>
<?php echo $forum['icon'];?>
<?php } else { ?>
<a href="<?php echo $forumurl;?>"<?php if($forum['redirect']) { ?> target="_blank"<?php } ?>><img src="<?php echo IMGDIR;?>/forum<?php if($forum['folder']) { ?>_new<?php } ?>.gif" alt="<?php echo $forum['name'];?>" /></a>
<?php } ?>
</div>
<dl<?php if(!empty($forum['extra']['iconwidth']) && !empty($forum['icon'])) { ?> style="margin-left: <?php echo $forum['extra']['iconwidth'];?>px;"<?php } ?>>
<dt><a href="<?php echo $forumurl;?>"<?php if($forum['redirect']) { ?> target="_blank"<?php } if($forum['extra']['namecolor']) { ?> style="color: <?php echo $forum['extra']['namecolor'];?>;"<?php } ?>><?php echo $forum['name'];?></a><?php if($forum['todayposts'] && !$forum['redirect']) { ?><em class="xw0 xi1" title="今日"> (<?php echo $forum['todayposts'];?>)</em><?php } ?></dt>
<?php if($forum['description']) { ?><dd><?php echo $forum['description'];?></dd><?php } if(empty($forum['redirect'])) { ?><dd><em>主题: <?php echo dnumber($forum['threads']); ?></em> <em>帖数: <?php echo dnumber($forum['posts']); ?></em></dd><?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['index_forum_extra'][$forum[fid]])) echo $_G['setting']['pluginhooks']['index_forum_extra'][$forum[fid]];?>
</dl>
</td>
<?php } else { ?>
<td class="fl_icn" <?php if(!empty($forum['extra']['iconwidth']) && !empty($forum['icon'])) { ?> style="width: <?php echo $forum['extra']['iconwidth'];?>px;"<?php } ?>>
<?php if($forum['icon']) { ?>
<?php echo $forum['icon'];?>
<?php } else { ?>
<a href="<?php echo $forumurl;?>"<?php if($forum['redirect']) { ?> target="_blank"<?php } ?>><img src="<?php echo IMGDIR;?>/forum<?php if($forum['folder']) { ?>_new<?php } ?>.gif" alt="<?php echo $forum['name'];?>" /></a>
<?php } ?>
</td>
<td>
<h2><a href="<?php echo $forumurl;?>"<?php if($forum['redirect']) { ?> target="_blank"<?php } if($forum['extra']['namecolor']) { ?> style="color: <?php echo $forum['extra']['namecolor'];?>;"<?php } ?>><?php echo $forum['name'];?></a><?php if($forum['todayposts'] && !$forum['redirect']) { ?><em class="xw0 xi1" title="今日"> (<?php echo $forum['todayposts'];?>)</em><?php } ?></h2>
<?php if($forum['description']) { ?><p class="xg2"><?php echo $forum['description'];?></p><?php } if($forum['subforums']) { ?><p>子版块: <?php echo $forum['subforums'];?></p><?php } if($forum['moderators']) { ?><p>版主: <span class="xi2"><?php echo $forum['moderators'];?></span></p><?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['index_forum_extra'][$forum[fid]])) echo $_G['setting']['pluginhooks']['index_forum_extra'][$forum[fid]];?>
</td>
<td class="fl_i">
<?php if(empty($forum['redirect'])) { ?><span class="xi2"><?php echo dnumber($forum['threads']); ?></span><span class="xg1"> / <?php echo dnumber($forum['posts']); ?></span><?php } ?>
</td>
<td class="fl_by">
<div>
<?php if($forum['permission'] == 1) { ?>
私密版块
<?php } else { if($forum['redirect']) { ?>
<a href="<?php echo $forumurl;?>" class="xi2">链接到外部地址</a>
<?php } elseif(is_array($forum['lastpost'])) { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $forum['lastpost']['tid'];?>&amp;goto=lastpost#lastpost" class="xi2"><?php echo cutstr($forum['lastpost']['subject'], 30); ?></a> <cite><?php echo $forum['lastpost']['dateline'];?> <?php if($forum['lastpost']['author']) { ?><?php echo $forum['lastpost']['author'];?><?php } else { ?><?php echo $_G['setting']['anonymoustext'];?><?php } ?></cite>
<?php } else { ?>
从未
<?php } } ?>
</div>
</td>
</tr>
<tr class="fl_row">
<?php } } ?>
<?php echo $cat['endrows'];?>
</tr>
</table>
</div>
</div><?php echo adshow("intercat/bm a_c/$cat[fid]");?><?php } if(!empty($collectiondata['data'])) { $forumscount = count($collectiondata['data']);?><?php $forumcolumns = 4;?><?php $forumcolwidth = (floor(100 / $forumcolumns) - 0.1).'%';?><div class="bm bmw <?php if($forumcolumns) { ?> flg<?php } ?> cl">
<div class="bm_h cl">
<span class="o">
<img id="category_-2_img" src="<?php echo IMGDIR;?>/<?php echo $collapse['collapseimg_-2'];?>" title="收起/展开" alt="收起/展开" onclick="toggle_collapse('category_-2');" />
</span>
<h2><a href="forum.php?mod=collection">淘专辑推荐</a></h2>
</div>
<div id="category_-2" class="h2o_forumlist bm_c" style="<?php echo $collapse['category_-2']; ?>">
<table cellspacing="0" cellpadding="0" class="fl_tb">
<tr><?php $ctorderid = 0;?><?php if(is_array($collectiondata['data'])) foreach($collectiondata['data'] as $key => $colletion) { if($ctorderid && ($ctorderid % $forumcolumns == 0)) { ?>
</tr>
<?php if($ctorderid < $forumscount) { ?>
<tr class="fl_row">
<?php } } ?>
<td class="fl_g"<?php if($forumcolwidth) { ?> width="<?php echo $forumcolwidth;?>"<?php } ?>>
<div class="fl_icn_g">
<a href="forum.php?mod=collection&amp;action=view&amp;ctid=<?php echo $colletion['ctid'];?>" target="_blank"><img src="<?php echo IMGDIR;?>/forum.gif" alt="<?php echo $colletion['name'];?>" /></a>
</div>
<dl>
<dt><a href="forum.php?mod=collection&amp;action=view&amp;ctid=<?php echo $colletion['ctid'];?>"><?php echo $colletion['name'];?></a></dt>
<dd><em>主题: <?php echo dnumber($colletion['threadnum']); ?></em>, <em>评论: <?php echo dnumber($colletion['commentnum']); ?></em></dd>
<dd>
<?php if($colletion['lastpost']) { if($forumcolumns < 3) { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $colletion['lastpost'];?>&amp;goto=lastpost#lastpost" class="xi2"><?php echo cutstr($colletion['lastsubject'], 30); ?></a> <cite><?php echo dgmdate($colletion[lastposttime]);?> <?php if($colletion['lastposter']) { ?><?php echo $colletion['lastposter'];?><?php } else { ?><?php echo $_G['setting']['anonymoustext'];?><?php } ?></cite>
<?php } else { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $colletion['lastpost'];?>&amp;goto=lastpost#lastpost">最后发表: <?php echo dgmdate($colletion[lastposttime]);?></a>
<?php } } else { ?>
从未
<?php } ?>
</dd>
<?php if(!empty($_G['setting']['pluginhooks']['index_datacollection_extra'][$colletion[ctid]])) echo $_G['setting']['pluginhooks']['index_datacollection_extra'][$colletion[ctid]];?>
</dl>
</td><?php $ctorderid++;?><?php } if(($columnspad = $ctorderid % $forumcolumns) > 0) { echo str_repeat('<td class="fl_g"'.($forumcolwidth ? " width=\"$forumcolwidth\"" : '').'></td>', $forumcolumns - $columnspad);; } ?>
</tr>
</table>

</div>
</div>

<?php } ?>

</div>

<?php if(!empty($_G['setting']['pluginhooks']['index_middle'])) echo $_G['setting']['pluginhooks']['index_middle'];?>
<div class="wp mtn">
<!--[diy=diy3]--><div id="diy3" class="area"></div><!--[/diy]-->
</div>

<?php if(empty($gid) && $_G['setting']['whosonlinestatus']) { ?>
<div id="online" class="bm oll box" style=" margin-bottom: 16px;">
<div class="bm_h" style="background: #fff;height: 40px;line-height: 45px;padding: 0 0 5px 0;margin: 0 15px;border: solid #F0F0F0;border-width: 0 0 1px;">
<?php if($detailstatus) { ?>
<span class="o"><a href="forum.php?showoldetails=no#online" title="收起/展开"><img src="<?php echo IMGDIR;?>/collapsed_no.gif" alt="收起/展开" style="margin-top: 15px;" /></a></span>
<h3 style="font-size: 18px;color: #666;font-weight: 400;">
<a href="home.php?mod=space&amp;do=friend&amp;view=online&amp;type=member" style="font-weight: 400;">在线会员</a>
<span style="font-size: 14px;color: #777;font-weight: 400;">- <strong><?php echo $onlinenum;?></strong> 人在线
- <strong><?php echo $membercount;?></strong> 会员(<strong><?php echo $invisiblecount;?></strong> 隐身),
<strong><?php echo $guestcount;?></strong> 位游客
- 最高记录是 <strong><?php echo $onlineinfo['0'];?></strong> 于 <strong><?php echo $onlineinfo['1'];?></strong>.</span>
</h3>
<?php } else { if(empty($_G['setting']['sessionclose'])) { ?>
<span class="o"><a href="forum.php?showoldetails=yes#online" title="收起/展开"><img src="<?php echo IMGDIR;?>/collapsed_yes.gif" alt="收起/展开" /></a></span>
<?php } ?>
<h3>
<strong>
<?php if(!empty($_G['setting']['whosonlinestatus'])) { ?>
在线会员
<?php } else { ?>
<a href="home.php?mod=space&amp;do=friend&amp;view=online&amp;type=member">在线会员</a>
<?php } ?>
</strong>
<span class="xs1">- 总计 <strong><?php echo $onlinenum;?></strong> 人在线
<?php if($membercount) { ?>- <strong><?php echo $membercount;?></strong> 会员,<strong><?php echo $guestcount;?></strong> 位游客<?php } ?>
- 最高记录是 <strong><?php echo $onlineinfo['0'];?></strong> 于 <strong><?php echo $onlineinfo['1'];?></strong>.</span>
</h3>
<?php } ?>
</div>
<?php if($_G['setting']['whosonlinestatus'] && $detailstatus) { ?>
<dl id="onlinelist" class="bm_c" style="padding: 10px 15px;">
<dt class="ptm pbm bbda"><?php echo $_G['cache']['onlinelist']['legend'];?></dt>
<?php if($detailstatus) { ?>
<dd class="ptm pbm">
<ul class="cl">
<?php if($whosonline) { if(is_array($whosonline)) foreach($whosonline as $key => $online) { ?><li title="时间: <?php echo $online['lastactivity'];?>">
<img src="<?php echo STATICURL;?>image/common/<?php echo $online['icon'];?>" alt="icon" />
<?php if($online['uid']) { ?>
<a href="home.php?mod=space&amp;uid=<?php echo $online['uid'];?>"><?php echo $online['username'];?></a>
<?php } else { ?>
<?php echo $online['username'];?>
<?php } ?>
</li>
<?php } } else { ?>
<li style="width: auto">当前只有游客或隐身会员在线</li>
<?php } ?>
</ul>
</dd>
<?php } ?>
</dl>
<?php } ?>
</div>
<?php } if(empty($gid) && ($_G['cache']['forumlinks']['0'] || $_G['cache']['forumlinks']['1'] || $_G['cache']['forumlinks']['2'])) { ?>
<div class="bm lk">
<div id="category_lk" class="bm_c ptm">
<?php if($_G['cache']['forumlinks']['0']) { ?>
<ul class="m mbn cl"><?php echo $_G['cache']['forumlinks']['0'];?></ul>
<?php } if($_G['cache']['forumlinks']['1']) { ?>
<div class="mbn cl">
<?php echo $_G['cache']['forumlinks']['1'];?>
</div>
<?php } if($_G['cache']['forumlinks']['2']) { ?>
<ul class="x mbm cl">
<?php echo $_G['cache']['forumlinks']['2'];?>
</ul>
<?php } ?>
</div>
</div>
<?php } ?>

<?php if(!empty($_G['setting']['pluginhooks']['index_bottom'])) echo $_G['setting']['pluginhooks']['index_bottom'];?>
</div>

<div id="sd" class="sd"><?php include template('common/login_simple'); ?><div class="h2o_diy_box cl">
   <ul class="signIn box cl" style="width: 308px;height: 68px;margin: 0 0 16px;">
        <li>
        	<a href="forum.php?mod=misc&amp;action=nav" onclick="showWindow('nav', this.href, 'get', 0)" class="ftTit">
    			<div class="ftTit_icon z"></div>
    			<div class="ftTit_title z">发帖</div>
        	</a>
        </li>
        <li>
            <a href="#" class="qdTit">
                <div class="qdTit_icon z"></div>
    			<div class="qdTit_title z">关注</div>
        </a>
        </li>
    </ul>
 </div>

   <?php if(!empty($_G['setting']['pluginhooks']['index_side_top'])) echo $_G['setting']['pluginhooks']['index_side_top'];?>

<div class="h2o_diy_box cl">
<!--[diy=diyforumlisthot]--><div id="diyforumlisthot" class="area"><div id="frameDecZIv" class="cl_frame_bm frame move-span cl frame-1"><div id="frameDecZIv_left" class="column frame-1-c"><div id="frameDecZIv_left_temp" class="move-span temp"></div><?php block_display('19');?></div></div></div><!--[/diy]-->
    </div>

<div class="h2o_diy_box cl">
<!--[diy=diyforumlisthy]--><div id="diyforumlisthy" class="area"><div id="frameLRcNfv" class="cl_frame_bm frame move-span cl frame-1"><div id="frameLRcNfv_left" class="column frame-1-c"><div id="frameLRcNfv_left_temp" class="move-span temp"></div><?php block_display('20');?></div></div></div><!--[/diy]-->
    </div>

<div class="h2o_diy_box cl">
<!--[diy=diyforumlisthd]--><div id="diyforumlisthd" class="area"><div id="frameIRJ7iE" class="cl_frame_bm frame move-span cl frame-1"><div id="frameIRJ7iE_left" class="column frame-1-c"><div id="frameIRJ7iE_left_temp" class="move-span temp"></div><?php block_display('18');?></div></div></div><!--[/diy]-->
    </div><div class="box _helplide cl" style=" margin-bottom: 15px;">
<div class="s_tab_title">
<ul class="_helplidetit">
<li class="current">售后服务</li>
<li>关注我们</li>
<li style="border-right: 0;">社区新手</li>
</ul>
</div>
<div class="_helplidelist">
<div style="display: block;">
<div class="grid_list">
<ul>
<li>
   <a href="#" target="_blank">
       <span class="grid_list_img">
       <img src="<?php echo $_G['style']['styleimgdir'];?>/s_customer.png" width="30" height="30">
   </span>在线咨询
</a>
</li>
<li><a href="#" target="_blank"><span class="grid_list_img"><img src="<?php echo $_G['style']['styleimgdir'];?>/s_map.png" width="30" height="30"></span>售后网点</a></li>
<li><a href="#" target="_blank" style="border-right: 0;"><span class="grid_list_img"><img src="<?php echo $_G['style']['styleimgdir'];?>/s_service.png" width="30" height="30"></span>服务中心</a></li>
</ul>
</div>
<div class="customer_service">
<h4>400-8888-0000</h4>
<p>电话服务热线时间：9:00 - 21:00</p>
</div>
</div>
<div class="snswidget" style="display: none;">
<div class="sns_widget">
   <a href="#" title="官方微博" target="_blank">
      <img src="<?php echo $_G['style']['styleimgdir'];?>/wb_sidebar.jpg" height="120" width="120">
   </a>
   <p><a href="javascript:void(0)" target="_blank" title="ZUK官方微博">官方微博</a></p>
</div>
<div class="sns_widget">
   <img src="<?php echo $_G['style']['styleimgdir'];?>/wx_sidebar.jpg" height="120" width="120" title="扫一扫关注微信">
   <p>官方微信</p>
</div>
</div>
<div class="forum_newbie" style="display: none;">
<a href="#" target="_blank"><span class="a_arrow"></span>发帖与回复</a>
<a href="#" target="_blank"><span class="a_arrow"></span>社区总版规</a>
<a href="#" target="_blank"><span class="a_arrow"></span>赚金币</a>
<a href="#" target="_blank"><span class="a_arrow"></span>任务体系</a>
<a href="#" target="_blank"><span class="a_arrow"></span>荣誉勋章</a>
<a href="#" target="_blank"><span class="a_arrow"></span>产品认证</a>
</div>
</div></div><div class="h2o_diy_box cl">
<!--[diy=diy2]--><div id="diy2" class="area"></div><!--[/diy]-->
</div>

    <?php if(!empty($_G['setting']['pluginhooks']['index_side_bottom'])) echo $_G['setting']['pluginhooks']['index_side_bottom'];?>

</div>

</div>
<?php if($_G['group']['radminid'] == 1) { helper_manyou::checkupdate();?><?php } if(empty($_G['setting']['disfixednv_forumindex']) ) { ?><script>fixed_top_nv();</script><?php } ?>

<script type="text/javascript"> 
function AutoScroll(obj){ 
jQuery(obj).find("ul:first").animate({ 
marginTop:"-25px" 
},500,function(){ 
jQuery(this).css({marginTop:"0px"}).find("li:first").appendTo(this); 
}); 
} 
jQuery(document).ready(function(){ 
setInterval('AutoScroll("#scrollDiv_keleyi_com")',3500); 
}); 
</script> 

<script type="text/javascript">
jQuery(".h2o_focus_box").slide({titCell:".slidebar li",mainCell:".slideshow",effect:"left",autoPlay:true});
jQuery(".slideshow li").hover(function(){jQuery(".slideshow h3").slideDown();}, function(){jQuery(".slideshow li").find("h3").slideUp();});
jQuery(".h2o_focus .h2o_prenext").css("opacity",0.5).hover(function() {
jQuery(this).stop(true,false).animate({"opacity":"1"},300);
},function() {
jQuery(this).stop(true,false).animate({"opacity":"0.5"},300);
});

</script><?php include template('common/footer'); ?>