<?php echo '请购买新视界discuz商业模板，客服QQ:2413248487';exit;?>
<!--{template common/header_ajax}-->
	<script type="text/javascript">
		if(!isUndefined(checkForumnew_handle)) {
			clearTimeout(checkForumnew_handle);
		}
		<!--{if $threadlist}-->
			if($('separatorline')) {
				var table = $('separatorline').parentNode;
			} else {
				var table = $('forum_' + $fid);
			}
			var newthread = [];
			<!--{eval $i = 0;}-->
			<!--{loop $threadlist $thread}-->
				{block icon}<a href="forum.php?mod=viewthread&tid=$thread[icontid]&{if $_GET['archiveid']}archiveid={$_GET['archiveid']}&{/if}extra=$extra" title="{if $thread['displayorder'] == 1}{lang thread_type1} - {/if}{if $thread['displayorder'] == 2}{lang thread_type2} - {/if}{if $thread['displayorder'] == 3}{lang thread_type3} - {/if}{if $thread['displayorder'] == 4}{lang thread_type4} - {/if}{if $thread[folder] == 'lock'}{lang closed_thread} - {/if}{if $thread['special'] == 1}{lang thread_poll} - {/if}{if $thread['special'] == 2}{lang thread_trade} - {/if}{if $thread['special'] == 3}{lang thread_reward} - {/if}{if $thread['special'] == 4}{lang thread_activity} - {/if}{if $thread['special'] == 5}{lang thread_debate} - {/if}{if $thread[folder] == "new"}{lang have_newreplies} - {/if}{lang target_blank}" target="_blank"><!--{if $thread[folder] == 'lock'}--><img src="{IMGDIR}/folder_lock.gif" /><!--{elseif $thread['special'] == 1}--><img src="{IMGDIR}/pollsmall.gif" alt="{lang thread_poll}" /><!--{elseif $thread['special'] == 2}--><img src="{IMGDIR}/tradesmall.gif" alt="{lang thread_trade}" /><!--{elseif $thread['special'] == 3}--><img src="{IMGDIR}/rewardsmall.gif" alt="{lang thread_reward}" /><!--{elseif $thread['special'] == 4}--><img src="{IMGDIR}/activitysmall.gif" alt="{lang thread_activity}" /><!--{elseif $thread['special'] == 5}--><img src="{IMGDIR}/debatesmall.gif" alt="{lang thread_debate}" /><!--{elseif in_array($thread['displayorder'], array(1, 2, 3, 4))}--><img src="{IMGDIR}/pin_$thread[displayorder].gif" alt="$_G[setting][threadsticky][3-$thread[displayorder]]" /><!--{else}--><img src="{IMGDIR}/folder_common.gif" /><!--{/if}--></a>{/block}
		
				newthread[{$i}] = {'tid':$thread[tid], 'thread': {'common':{'className':'common','colspan':'1','val':'<!--{if $_G['forum']['ismoderator']}--><div class="o" style="margin-top: 15px;"><input type="checkbox" value="{$thread[tid]}" name="moderate[]" onclick="tmodclick(this)"></div><!--{/if}--><div class="h2o_post_avatar"><!--{avatar($thread[authorid],small)}--></div><div class="{if $_G['forum']['allowside']} h2o_post_list{/if}"><div class="h2o_post_list_tit">$thread[threadurl]</div><div class="h2o_post_list_other"><div class="y nums"><span class="views">{$thread[views]}</span><span class="reply">{$thread[replies]}</span></div><span class="author mr10">$thread[authorurl]</span>于<span class="dateline  mr10 ml10">$thread[dateline]</span>发布<span class="pipe">|</span><span class="time">最后回复:&nbsp;&nbsp;$thread[lastpost]</span></div></div>'}}};
				<!--{eval $i++;}-->
			<!--{/loop}-->
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
		<!--{elseif !$threadlist && $_GET['uncheck'] == 2}-->
			showDialog('{lang none_newthread}', 'notice', null, null, 0, null, null, null, null, 3);
		<!--{/if}-->
		checkForumnew_handle = setTimeout(function () {checkForumnew('{$fid}', '{$_G[timestamp]}');}, checkForumtimeout);
	</script>

<!--{template common/footer_ajax}-->