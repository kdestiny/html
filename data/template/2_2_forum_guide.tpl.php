<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('guide');
0
|| checktplrefresh('./template/h2o_2018_qing/forum/guide.htm', './template/h2o_2018_qing/forum/guide_list_row.htm', 1550926359, '2', './data/template/2_2_forum_guide.tpl.php', './template/h2o_2018_qing', 'forum/guide')
;?><?php include template('common/header'); ?><div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="首页"><?php echo $_G['setting']['bbname'];?></a><em>&raquo;</em><a href="forum.php"><?php echo $_G['setting']['navs']['2']['navname'];?></a><?php echo $navigation;?>
</div>
</div>

<div class="boardnav" style="margin: 0 0 15px">
<div id="ct" class="wp cl<?php if($_G['forum']['allowside']) { ?> ct2<?php } ?>"<?php if($leftside) { ?> style="margin-left:<?php echo $_G['leftsidewidth_mwidth'];?>px"<?php } ?>>
<div class="mn h2o_ab_guide_mn" style="padding-top: 1px;">
<ul id="thread_types" class="h2o_ab_ttp bm cl">	
<li <?php echo $currentview['hot'];?>><a href="forum.php?mod=guide&amp;view=hot">最新热门</a></li>
<li <?php echo $currentview['digest'];?>><a href="forum.php?mod=guide&amp;view=digest">最新精华</a></li>
<li <?php echo $currentview['new'];?>><a href="forum.php?mod=guide&amp;view=new">最新回复</a></li>
<li <?php echo $currentview['newthread'];?>><a href="forum.php?mod=guide&amp;view=newthread">最新发表</a></li>
<li <?php echo $currentview['sofa'];?>><a href="forum.php?mod=guide&amp;view=sofa">抢沙发</a></li>
<li <?php echo $currentview['my'];?>><a id="filter_special" href="forum.php?mod=guide&amp;view=my" onmouseover="showMenu(this.id)">我的帖子</a></li>
<li style="float: right;height: 35px;line-height: 35px;margin: 10px 10px 0 10px;font-size: 16px;font-weight: 700;"><a href="forum.php?mod=misc&amp;action=nav&amp;special=0&amp;" onclick="showWindow('nav', this.href);return false;" title="发新帖" class="sendpost_btn">发表帖子</a></li>
<?php if(!empty($_G['setting']['pluginhooks']['guide_nav_extra'])) echo $_G['setting']['pluginhooks']['guide_nav_extra'];?>
</ul>
<?php if(!empty($_G['setting']['pluginhooks']['guide_top'])) echo $_G['setting']['pluginhooks']['guide_top'];?>
<?php if($view == 'index') { if(is_array($data)) foreach($data as $key => $list) { ?><div class="bm bmw">
<div class="bm_h">
<a href="forum.php?mod=guide&amp;view=<?php echo $key;?>" class="y xi2">更多 &raquo;</a>
<h2>
<?php if($key == 'hot') { ?>最新热门<?php } elseif($key == 'digest') { ?>最新精华<?php } elseif($key == 'newthread') { ?>最新发表<?php } elseif($key == 'new') { ?>最新回复<?php } elseif($key == 'my') { ?>我的帖子<?php } ?>
</h2>
</div>
 <div class="bm_c">
 	<div class="xl xl2 cl">
 		<?php if($list['threadcount']) { ?>
 <?php $i=0;?> <?php if(is_array($list['threadlist'])) foreach($list['threadlist'] as $thread) { ?> <?php $i++;$newtd=$i%2;?> 			<li<?php if(!$newtd) { ?> class="xl2_r"<?php } ?>>
 			<em>
 			<?php if($key == 'hot') { ?><span class="xi1"><?php echo $thread['heats'];?>人参与</span><?php } ?>
 			<?php if($key == 'new') { ?><?php echo $thread['lastpost'];?><?php } ?>
 			</em>
 			
 			<i>&middot; <a href="forum.php?mod=viewthread&amp;tid=<?php echo $thread['tid'];?>&amp;<?php if($_GET['archiveid']) { ?>archiveid=<?php echo $_GET['archiveid'];?>&amp;<?php } ?>extra=<?php echo $extra;?>"<?php echo $thread['highlight'];?> target="_blank"><?php echo $thread['subject'];?></a></i>&nbsp;<span class="xg1"><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $thread['fid'];?>" target="_blank"><?php echo $list['forumnames'][$thread['fid']]['name'];?></a></span>
 			</li>
 			<?php } ?>
 		<?php } else { ?>
 				<p class="emp">暂时还没有帖子</p>
 		<?php } ?>
 	</div>
</div>
</div>
<?php } } else { if(is_array($data)) foreach($data as $key => $list) { ?><div id="threadlist" class="tl"<?php if($_G['uid']) { ?> style="position: relative;"<?php } ?>>
<div class="bm_c h2o_ab_group">
<div id="forumnew" style="display:none"></div>
<table cellspacing="0" cellpadding="0"><?php if($list['threadcount']) { if(is_array($list['threadlist'])) foreach($list['threadlist'] as $key => $thread) { ?><tbody id="<?php echo $thread['id'];?>">
<tr>
<td class="avt">
<a href="home.php?mod=space&amp;uid=<?php echo $thread['authorid'];?>"><?php echo avatar($thread[authorid],middle);?></a>
</td>
<th class="<?php echo $thread['folder'];?>">
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_thread'][$key])) echo $_G['setting']['pluginhooks']['forumdisplay_thread'][$key];?>
<?php if(!$thread['forumstick'] && $thread['closed'] > 1 && ($thread['isgroup'] == 1 || $thread['fid'] != $_G['fid'])) { $thread[tid]=$thread[closed];?><?php } ?>
<span class="xst">
<?php echo $thread['typehtml'];?> <?php echo $thread['sorthtml'];?>
<?php if($thread['moved']) { ?>
移动:<?php $thread[tid]=$thread[closed];?><?php } ?>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $thread['fid'];?>" target="_blank" style=" font-size: 14px;padding: 1px 2px;height: 14px;line-height: 14px; border: 1px solid #E7E8EB;border-color: #1499f8 !important;color: #1499f8 !important;"><?php echo $list['forumnames'][$thread['fid']]['name'];?></a>

<a href="forum.php?mod=viewthread&amp;tid=<?php echo $thread['tid'];?>&amp;<?php if($_GET['archiveid']) { ?>archiveid=<?php echo $_GET['archiveid'];?>&amp;<?php } ?>extra=<?php echo $extra;?>"<?php echo $thread['highlight'];?>><?php echo $thread['subject'];?></a>
</span>
<?php if($thread['icon'] >= 0) { ?>
<img src="<?php echo STATICURL;?>image/stamp/<?php echo $_G['cache']['stamps'][$thread['icon']]['url'];?>" alt="<?php echo $_G['cache']['stamps'][$thread['icon']]['text'];?>" align="absmiddle" />
<?php } if($thread['folder'] == 'lock') { ?>
<img src="<?php echo IMGDIR;?>/folder_lock.gif" title="关闭的主题" alt="关闭的主题" align="absmiddle" />
<?php } elseif($thread['special'] == 1) { ?>
<img src="<?php echo IMGDIR;?>/pollsmall.gif" title="投票" alt="投票" align="absmiddle" />
<?php } elseif($thread['special'] == 2) { ?>
<img src="<?php echo IMGDIR;?>/tradesmall.gif" title="商品" alt="商品" align="absmiddle" />
<?php } elseif($thread['special'] == 3) { ?>
<img src="<?php echo IMGDIR;?>/rewardsmall.gif" title="悬赏" alt="悬赏" align="absmiddle" />
<?php } elseif($thread['special'] == 4) { ?>
<img src="<?php echo IMGDIR;?>/activitysmall.gif" title="活动" alt="活动" align="absmiddle" />
<?php } elseif($thread['special'] == 5) { ?>
<img src="<?php echo IMGDIR;?>/debatesmall.gif" title="辩论" alt="辩论" align="absmiddle" />
<?php } elseif(in_array($thread['displayorder'], array(1, 2, 3, 4))) { ?>
<img src="<?php echo $_G['style']['styleimgdir'];?>/pin_<?php echo $thread['displayorder'];?>.gif" title="<?php echo $_G['setting']['threadsticky'][3-$thread['displayorder']];?>" alt="<?php echo $_G['setting']['threadsticky'][3-$thread['displayorder']];?>" align="absmiddle" />
<?php } if($thread['rushreply']) { ?>
<img src="<?php echo IMGDIR;?>/rushreply_s.png" alt="抢楼" align="absmiddle" />
<?php } if($stemplate && $sortid) { ?><?php echo $stemplate[$sortid][$thread['tid']];?><?php } if($thread['readperm']) { ?> - [阅读权限 <span class="xw1"><?php echo $thread['readperm'];?></span>]<?php } if($thread['price'] > 0) { if($thread['special'] == '3') { ?>
- <a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=specialtype&amp;specialtype=reward<?php echo $forumdisplayadd['specialtype'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>&amp;rewardtype=1" title="只看进行中的"><span class="xi1">[悬赏 <span class="xw1"><?php echo $thread['price'];?></span> <?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['2']]['unit'];?><?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['2']]['title'];?>]</span></a>
<?php } else { ?>
- [售价 <span class="xw1"><?php echo $thread['price'];?></span> <?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['1']]['unit'];?><?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['1']]['title'];?>]
<?php } } elseif($thread['special'] == '3' && $thread['price'] < 0) { ?>
- <a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=specialtype&amp;specialtype=reward<?php echo $forumdisplayadd['specialtype'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>&amp;rewardtype=2" title="只看已解决的">[已解决]</a>
<?php } if($thread['attachment'] == 2) { ?>
<img src="<?php echo $_G['style']['styleimgdir'];?>/image_s.gif" alt="attach_img" title="图片附件" align="absmiddle" />
<?php } elseif($thread['attachment'] == 1) { ?>
<img src="<?php echo $_G['style']['styleimgdir'];?>/common.gif" alt="attachment" title="附件" align="absmiddle" />
<?php } if($thread['mobile']) { ?>
<img src="<?php echo IMGDIR;?>/mobile-attach-<?php echo $thread['mobile'];?>.png" alt="手机发帖" align="absmiddle" />
<?php } if($thread['digest'] > 0 && $filter != 'digest') { ?>
<img src="<?php echo $_G['style']['styleimgdir'];?>/digest_<?php echo $thread['digest'];?>.png" align="absmiddle" alt="digest" title="精华 <?php echo $thread['digest'];?>" />
<?php } if($thread['displayorder'] == 0) { if($thread['recommendicon'] && $filter != 'recommend') { ?>
<img src="<?php echo IMGDIR;?>/recommend_<?php echo $thread['recommendicon'];?>.gif" align="absmiddle" alt="recommend" title="评价指数 <?php echo $thread['recommends'];?>" />
<?php } if($thread['heatlevel']) { ?>
<img src="<?php echo IMGDIR;?>/hot_<?php echo $thread['heatlevel'];?>.gif" align="absmiddle" alt="heatlevel" title="<?php echo $thread['heatlevel'];?> 热度" />
<?php } if($thread['rate'] > 0) { ?>
<img src="<?php echo IMGDIR;?>/agree.gif" align="absmiddle" alt="agree" title="帖子被加分" />
<?php } elseif($thread['rate'] < 0) { ?>
<img src="<?php echo IMGDIR;?>/disagree.gif" align="absmiddle" alt="disagree" title="帖子被减分" />
<?php } } if($thread['replycredit'] > 0) { ?>
- <span class="xi1">[回帖奖励 <strong> <?php echo $thread['replycredit'];?></strong> ]</span>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_thread_subject'][$key])) echo $_G['setting']['pluginhooks']['forumdisplay_thread_subject'][$key];?>
<?php if($thread['multipage']) { ?>
<span class="tps"><?php echo $thread['multipage'];?></span>
<?php } if($thread['weeknew']) { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $thread['tid'];?>&amp;goto=lastpost#lastpost" class="xi1">New</a>
<?php } if(!$thread['forumstick'] && ($thread['isgroup'] == 1 || $thread['fid'] != $_G['fid'])) { if($thread['related_group'] == 0 && $thread['closed'] > 1) { $thread[tid]=$thread[closed];?><?php } if($groupnames[$thread['tid']]) { ?>
<span class="fromg xg1"> [来自: <a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $groupnames[$thread['tid']]['fid'];?>" target="_blank" class="xg1"><?php echo $groupnames[$thread['tid']]['name'];?></a>]</span>
<?php } } if($view == 'my' && $viewtype=='reply' && !empty($tids[$thread['tid']])) { if(is_array($tids[$thread['tid']])) foreach($tids[$thread['tid']] as $pid) { $post = $posts[$pid];?><?php if($post['message']) { ?><p class="h2o_ab_mtn xg1">&nbsp;<img src="<?php echo IMGDIR;?>/icon_quote_m_s.gif" class="vm" /> <a href="forum.php?mod=redirect&amp;goto=findpost&amp;ptid=<?php echo $thread['tid'];?>&amp;pid=<?php echo $pid;?>" target="_blank"><?php echo $post['message'];?></a> <img src="<?php echo IMGDIR;?>/icon_quote_m_e.gif" class="vm" /></p><?php } } } if($view == 'my' && $viewtype == 'postcomment') { ?>
<p class="h2o_ab_mtn xg1"><?php echo $thread['comment'];?></p>
<?php } if($viewtype != 'postcomment') { ?>
<p class="h2o_ab_mtn xg1" style="font-size: 12px">
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_author'][$key])) echo $_G['setting']['pluginhooks']['forumdisplay_author'][$key];?>
<?php if($thread['authorid'] && $thread['author']) { ?>

<a href="home.php?mod=space&amp;uid=<?php echo $thread['authorid'];?>"><?php echo $thread['author'];?></a><?php if(!empty($verify[$thread['authorid']])) { ?> <?php echo $verify[$thread['authorid']];?><?php } } else { ?>
<span>作者:</span><?php echo $_G['setting']['anonymoustext'];?>
<?php } ?>
&nbsp;@&nbsp;<?php echo $thread['dateline'];?></span>

<span style=" margin-left: 10px;padding-left: 10px; border-left: 1px solid #ddd;">
   <?php if($thread['lastposter']) { ?><a href="<?php if($thread['digest'] != -2) { ?>home.php?mod=space&username=<?php echo $thread['lastposterenc'];?><?php } else { ?>forum.php?mod=viewthread&tid=<?php echo $thread['tid'];?>&page=<?php echo max(1, $thread['pages']);; } ?>" c="1"><?php echo $thread['lastposter'];?></a><?php } else { ?><?php echo $_G['setting']['anonymoustext'];?><?php } ?>&nbsp;@&nbsp;<a href="<?php if($thread['digest'] != -2) { ?>forum.php?mod=redirect&tid=<?php echo $thread['tid'];?>&goto=lastpost<?php echo $highlight;?>#lastpost<?php } else { ?>forum.php?mod=viewthread&tid=<?php echo $thread['tid'];?>&page=<?php echo max(1, $thread['pages']);; } ?>"><?php echo $thread['lastpost'];?></a>
</span>

<span class="nums y" style="padding-right: 15px;">
<span class="views"><?php if($thread['isgroup'] != 1) { ?><?php echo $thread['views'];?><?php } else { ?><?php echo $groupnames[$thread['tid']]['views'];?><?php } ?></span>
<span class="reply"><?php echo $thread['replies'];?></span>
</span>
</p>
<?php } ?>
</th>
<td class="flt">
</td>
<td class="flt">
</td>
</tr>
</tbody>
<?php } } else { ?>
<tbody class="bw0_all"><tr><th><p class="emp">暂时还没有帖子</p></th></tr></tbody>
<?php } ?></table>
</div>
</div>
<?php } ?>
<div class="bm bw0 h2o_ab_g_m pgs cl">
<?php echo $multipage;?>
</div>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['guide_bottom'])) echo $_G['setting']['pluginhooks']['guide_bottom'];?>
</div>

</div>
</div>
<?php if(!IS_ROBOT) { ?>
<div id="filter_special_menu" class="p_pop" style="display:none">
<ul>
<li><a href="home.php?mod=space&amp;do=poll&amp;view=me" target="_blank">投票</a></li>
<li><a href="home.php?mod=space&amp;do=trade&amp;view=me" target="_blank">商品</a></li>
<li><a href="home.php?mod=space&amp;do=reward&amp;view=me" target="_blank">悬赏</a></li>
<li><a href="home.php?mod=space&amp;do=activity&amp;view=me" target="_blank">活动</a></li>
</ul>
</div>
<?php } include template('common/footer'); ?>