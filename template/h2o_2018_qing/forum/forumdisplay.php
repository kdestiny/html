<?php echo '请购买新视界discuz商业模板，客服QQ:2413248487';exit;?>
<!--{template common/header}-->

<!--{if $_G['forum']['ismoderator']}-->
	<script type="text/javascript" src="{$_G[setting][jspath]}forum_moderate.js?{VERHASH}"></script>
<!--{/if}-->
<link href="template/h2o_2018_qing/common/f_v.css" rel="stylesheet" type="text/css" />

<div id="pt" class="bm cl">
	<div class="z">
		<a href="./" class="nvhm" title="{lang homepage}">$_G[setting][bbname]</a><em>&raquo;</em><a href="forum.php">{$_G[setting][navs][2][navname]}</a>$navigation
	</div>

	<div class="y">
		<a href="home.php?mod=spacecp&ac=favorite&type=forum&id=$_G[fid]&handlekey=favoriteforum&formhash={FORMHASH}" id="a_favorite" class="fa_fav" onclick="showWindow(this.id, this.href, 'get', 0);">{lang forum_favorite} <strong class="xi1" id="number_favorite" {if !$_G[forum][favtimes]} style="display:none;"{/if}>(<span id="number_favorite_num">$_G[forum][favtimes]</span>)</strong></a>
	</div>
</div>

<style id="diy_style" type="text/css"></style>

<!--{ad/text/wp a_t}-->
<div class="wp">
	<!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]-->
</div>

		<!--{if $leftside}-->
			<div id="sd_bdl" class="bdl cl" onmouseover="showMenu({'ctrlid':this.id, 'pos':'dz'});" style="width:{$_G['setting']['leftsidewidth']}px;">
				<!--{hook/forumdisplay_leftside_top}-->
				<!--[diy=diyleftsidetop]--><div id="diyleftsidetop" class="area"></div><!--[/diy]-->

				<div class="tbn" id="forumleftside">
					<!--{subtemplate forum/forumdisplay_leftside}-->
				</div>

				<!--{hook/forumdisplay_leftside_bottom}-->
			</div>
		<!--{/if}-->
<div class="boardnav">

<div id="ct" class="wp cl ct2">

<div class="mn" style=" overflow: visible;">
		<!--{hook/forumdisplay_top}-->

			<div class="drag">
				<!--[diy=diy4]--><div id="diy4" class="area"></div><!--[/diy]-->
			</div>

			<!--{if $subexists && $_G['page'] == 1}--><!--{template forum/forumdisplay_subforum}--><!--{/if}-->

			<!--{if !empty($_G['forum']['recommendlist'])}-->
				<div class="bm bmw">
					<div class="bm_h cl" style="height: 40px;line-height: 40px;border-color: #fff;background: #fff;border-bottom-color: #f2f2f2;">
						<h2 style="font-size: 16px;font-weight: 400;">{lang forum_recommend}</h2>
					</div>
					<div class="bm_c cl">
						<!--{subtemplate forum/recommend}-->
					</div>
				</div>
			<!--{/if}-->

			<!--{hook/forumdisplay_middle}-->

			<!--{if !$subforumonly}-->

				<!--{if $recommendgroups}-->
				<div class="bm bmw fl{if $_G['forum']['forumcolumns']} flg{/if}">
					<div class="bm_h cl">
						<span class="o"><img id="recommendgroups_{$_G[forum][fid]}_img" src="{IMGDIR}/$collapseimg[recommendgroups]" title="{lang spread}" alt="{lang spread}" onclick="toggle_collapse('recommendgroups_{$_G[forum][fid]}');" /></span>
						<h2>{lang recommended_groups}</h2>
					</div>
					<div class="bm_c" id="recommendgroups_{$_G[forum][fid]}" style="$collapse[recommendgroups]">
						<table cellspacing="0" cellpadding="0" class="fl_tb">
							<!--{loop $recommendgroups $key $group}-->
							<!--{if $_G['forum']['forumcolumns']}-->
								<!--{if $key && ($key % $_G['forum']['forumcolumns'] == 0)}-->
									</tr>
									<!--{if $key < $_G['forum']['forumcolumns']}-->
										<tr class="fl_row">
									<!--{/if}-->
								<!--{/if}-->
								<td class="fl_g">
									<div class="fl_icn_g">
										<a href="forum.php?mod=group&fid=$group[fid]" title="$group[name]" target="_blank"><img src="$group[icon]" alt="$group[name]" width="32" /></a>
									</div>
									<dl>
										<dt><a href="forum.php?mod=group&fid=$group[fid]" target="_blank">$group[name]</a><span class="xg1 xw0"> ($group[membernum] {lang activity_member_unit})</span>
										<dd><em>{lang forum_threads}: $group[threads]</em></dd>
										<dd>
											<!--{if is_array($group['lastpost'])}-->
												<!--{if $_G['forum']['forumcolumns'] < 3}-->
												<a href="forum.php?mod=redirect&tid=$group[lastpost][tid]&goto=lastpost#lastpost" class="xi2"><!--{echo cutstr($group[lastpost][subject], 30)}--></a> <cite>$group[lastpost][dateline] <!--{if $group['lastpost']['author']}--><a href="home.php?mod=space&username={$group[lastpost][encode_author]}">{$group[lastpost][author]}</a><!--{else}-->$_G[setting][anonymoustext]<!--{/if}--></cite>
												<!--{else}-->
													<a href="forum.php?mod=redirect&tid=$group[lastpost][tid]&goto=lastpost#lastpost" class="xi2">$group[lastpost][dateline]</a>
												<!--{/if}-->				<!--{else}-->
											{lang never}
											<!--{/if}-->
										</dd>
									</dl>
								</td>
							<!--{else}-->
								<tr {if $key != 0}class="fl_row"{/if}>
									<td class="fl_icn">
										<a href="forum.php?mod=group&fid=$group[fid]" title="$group[name]" target="_blank"><img src="$group[icon]" alt="$group[name]" width="32" /></a>
									</td>
									<td>
										<h2><a href="forum.php?mod=group&fid=$group[fid]" target="_blank">$group[name]</a><span class="xg1 xw0"> ($group[membernum] {lang activity_member_unit})</span></h2>
										<p><!--{echo cutstr($group[description], 100)}--></p>
									</td>
									<td class="fl_i">
										<span class="xi2">$group[threads] {lang index_threads}</span>
									</td>
									<td class="fl_by">
										<div>
											<!--{if is_array($group['lastpost'])}-->
											<a href="forum.php?mod=redirect&tid=$group[lastpost][tid]&goto=lastpost#lastpost" class="xi2"><!--{echo cutstr($group[lastpost][subject], 30)}--></a> <cite>$group[lastpost][dateline] <!--{if $group['lastpost']['author']}--><a href="home.php?mod=space&username={$group[lastpost][encode_author]}">{$group[lastpost][author]}</a><!--{else}-->$_G[setting][anonymoustext]<!--{/if}--></cite>
											<!--{else}-->
											{lang never}
											<!--{/if}-->
										</div>
									</td>
								</tr>
							<!--{/if}-->
							<!--{/loop}-->
						</table>
					</div>
				</div>
				<!--{/if}-->

				<!--{if $threadmodcount}--><div class="bm"><div class="ntc_l hm xi2"><strong>{lang forum_moderate_unhandled}</strong></div></div><!--{/if}-->

				<!--{if $livethread}-->
					<div id="livethread" class="tl bm bmw box cl" style="background: #fff;margin-bottom: 16px;padding:10px 15px;border-top: 1px solid #E7E8EB;">
						<div class="livethreadtitle vm">
							<span class="replynumber xg1">{lang reply} <span id="livereplies" class="xi1">$livethread[replies]</span></span>
							<a href="forum.php?mod=viewthread&tid=$livethread[tid]" target="_blank">$livethread[subject]</a> <img src="{IMGDIR}/livethreadtitle.png" />
						</div>
						<div class="livethreadcon">$livemessage</div>
						<div id="livereplycontentout">
							<div id="livereplycontent">
							</div>
						</div>
						<div id="liverefresh">{lang forum_live_newreply_refresh}</div>
						<div id="livefastreply">
							<form id="livereplypostform" method="post" action="forum.php?mod=post&action=reply&fid=$_G[fid]&tid=$livethread[tid]&replysubmit=yes&infloat=yes&handlekey=livereplypost&inajax=1" onsubmit="return livereplypostvalidate(this)">
								<div id="livefastcomment">
									<textarea id="livereplymessage" name="message" style="color:gray;<!--{if !$liveallowpostreply}-->display:none;<!--{/if}-->">{lang forum_live_fastreply_notice}</textarea>
									<!--{if !$liveallowpostreply}-->
										<div>
											<!--{if !$_G[uid]}-->
												{lang login_to_reply} <a href="member.php?mod=logging&action=login" onclick="showWindow('login', this.href)" class="xi2">{lang login}</a> | <a href="member.php?mod={$_G[setting][regname]}" class="xi2">$_G['setting']['reglinkname']</a>
											<!--{else}-->
												{lang no_permission_to_post}<a href="javascript:;" onclick="ajaxpost('livereplypostform', 'livereplypostreturn', 'livereplypostreturn', 'onerror', $('livereplysubmit'));" class="xi2">{lang click_to_show_reason}</a>
											<!--{/if}-->
										</div>
									<!--{/if}-->
								</div>
								<div id="livepostsubmit" style="display:none;">
								<!--{if $secqaacheck || $seccodecheck}-->
									<!--{block sectpl}--><sec> <span id="sec<hash>" onclick="showMenu(this.id)"><sec></span><div id="sec<hash>_menu" class="p_pop p_opt" style="display:none"><sec></div><!--{/block}-->
									<div class="mtm sec" style="text-align:right;"><!--{subtemplate common/seccheck}--></div>
								<!--{/if}-->
								<p class="ptm pnpost" style="margin-bottom:10px;">
								<button type="submit" name="replysubmit" class="pn pnc vm" style="float:right;" value="replysubmit" id="livereplysubmit">
									<strong>{lang forum_live_post}</strong>
								</button>
								</p>
								</div>
								<input type="hidden" name="formhash" value="{FORMHASH}">
								<input type="hidden" name="subject" value="  ">
							</form>
						</div>
						<span id="livereplypostreturn"></span>
					</div>
					<script type="text/javascript">
						var postminchars = parseInt('$_G['setting']['minpostsize']');
						var postmaxchars = parseInt('$_G['setting']['maxpostsize']');
						var disablepostctrl = parseInt('{$_G['group']['disablepostctrl']}');
						var replycontentlist = new Array();
						var addreplylist = new Array();
						var timeoutid = timeid = movescrollid = waitescrollid = null;
						var replycontentnum = 0;
						getnewlivepostlist(1);
						timeid = setInterval(getnewlivepostlist, 5000);
						$('livereplycontent').style.position = 'absolute';
						$('livereplycontent').style.width = ($('livereplycontentout').clientWidth - 50) + 'px';
						$('livereplymessage').onfocus = function() {
							if(this.style.color == 'gray') {
								this.value = '';
								this.style.color = 'black';
								$('livepostsubmit').style.display = 'block';
								this.style.height = '56px';
								$('livefastcomment').style.height = '57px';
							}
						};
						$('livereplymessage').onblur = function() {
							if(this.value == '') {
								this.style.color = 'gray';
								this.value = '{lang forum_live_fastreply_notice}';
							}
						};

						$('liverefresh').onclick = function() {
							$('livereplycontent').style.position = 'absolute';
							getnewlivepostlist();
							this.style.display = 'none';
						};

						$('livereplycontentout').onmouseover = function(e) {

							if($('livereplycontent').style.position == 'absolute' && $('livereplycontent').clientHeight > 215) {
								$('livereplycontent').style.position = 'static';
								this.scrollTop = this.scrollHeight;
							}

							if(this.scrollTop + this.clientHeight != this.scrollHeight) {
								clearInterval(timeid);
								clearTimeout(timeoutid);
								clearInterval(movescrollid);
								timeid = timeoutid = movescrollid = null;

								if(waitescrollid == null) {
									waitescrollid = setTimeout(function() {
										$('liverefresh').style.display = 'block';
									}, 60000 * 10);
								}
							} else {
								clearTimeout(waitescrollid);
								waitescrollid = null;
							}
						};

						$('livereplycontentout').onmouseout = function(e) {
							if(this.scrollTop + this.clientHeight == this.scrollHeight) {
								$('livereplycontent').style.position = 'absolute';
								clearInterval(timeid);
								timeid = setInterval(getnewlivepostlist, 10000);
							}
						};

						function getnewlivepostlist(first) {
							var x = new Ajax('JSON');
							x.getJSON('forum.php?mod=misc&action=livelastpost&fid=$livethread[fid]', function(s, x) {
								var count = s.data.count;
								$('livereplies').innerHTML = count;
								var newpostlist = s.data.list;
								for(i in newpostlist) {
									var postid = i;
									var postcontent = '';
									postcontent += newpostlist[i].authorid ? '<dt><a href="home.php?mod=space&uid=' + newpostlist[i].authorid + '" target="_blank">' + newpostlist[i].avatar + '</a></dt>' : '<dt></dt>';
									postcontent += newpostlist[i].authorid ? '<dd><a href="home.php?mod=space&uid=' + newpostlist[i].authorid + '" target="_blank">' + newpostlist[i].author + '</a></dd>' : '<dd>' + newpostlist[i].author + '</dd>';
									postcontent += '<dd>' + htmlspecialchars(newpostlist[i].message) + '</dd>';
									postcontent += '<dd class="dateline">' + newpostlist[i].dateline + '</dd>';
									if(replycontentlist[postid]) {
										$('livereply_' + postid).innerHTML = postcontent;
										continue;
									}
									addreplylist[postid] = '<dl id="livereply_' + postid + '">' + postcontent + '</dl>';
								}
								if(first) {
									for(i in addreplylist) {
										replycontentlist[i] = addreplylist[i];
										replycontentnum++;
										var div = document.createElement('div');
										div.innerHTML = addreplylist[i];
										$('livereplycontent').appendChild(div);
										delete addreplylist[i];
									}
								} else {
									livecontentfacemove();
								}
							});
						}

						function livecontentfacemove() {
							//note 从队列中取出数据
							var reply = '';
							for(i in addreplylist) {
								reply = replycontentlist[i] = addreplylist[i];
								replycontentnum++;
								delete addreplylist[i];
								break;
							}
							if(reply) {
								var div = document.createElement('div');
								div.innerHTML = reply;
								var oldclientHeight = $('livereplycontent').clientHeight;
								$('livereplycontent').appendChild(div);
								$('livereplycontentout').style.overflowY = 'hidden';
								$('livereplycontent').style.bottom = oldclientHeight - $('livereplycontent').clientHeight + 'px';

								if(replycontentnum > 20) {
									$('livereplycontent').removeChild($('livereplycontent').firstChild);
									for(i in replycontentlist) {
										delete replycontentlist[i];
										break;
									}
									replycontentnum--;
								}

								if(!movescrollid) {
									movescrollid = setInterval(function() {
										if(parseInt($('livereplycontent').style.bottom) < 0) {
											$('livereplycontent').style.bottom =
												((parseInt($('livereplycontent').style.bottom) + 5) > 0 ? 0 : (parseInt($('livereplycontent').style.bottom) + 5)) + 'px';
										} else {
											$('livereplycontentout').style.overflowY = 'auto';
											clearInterval(movescrollid);
											movescrollid = null;
											timeoutid = setTimeout(livecontentfacemove, 1000);
										}
									}, 100);
								}
							}
						}

						function livereplypostvalidate(theform) {
							var s;
							if(theform.message.value == '' || $('livereplymessage').style.color == 'gray') {
								s = '{lang forum_live_nocontent_error}';
							}
							if(!disablepostctrl && ((postminchars != 0 && mb_strlen(theform.message.value) < postminchars) || (postmaxchars != 0 && mb_strlen(theform.message.value) > postmaxchars))) {
								s = {lang forum_live_nolength_error};
							}
							if(s) {
								showError(s);
								doane();
								$('livereplysubmit').disabled = false;
								return false;
							}
							$('livereplysubmit').disabled = true;
							theform.message.value = theform.message.value.replace(/([^>=\]"'\/]|^)((((https?|ftp):\/\/)|www\.)([\w\-]+\.)*[\w\-\u4e00-\u9fa5]+\.([\.a-zA-Z0-9]+|\u4E2D\u56FD|\u7F51\u7EDC|\u516C\u53F8)((\?|\/|:)+[\w\.\/=\?%\-&~`@':+!]*)+\.(jpg|gif|png|bmp))/ig, '$1[img]$2[/img]');
							theform.message.value = parseurl(theform.message.value);
							ajaxpost('livereplypostform', 'livereplypostreturn', 'livereplypostreturn', 'onerror', $('livereplysubmit'));
							return false;
						}

						function succeedhandle_livereplypost(url, msg, param) {
							$('livereplymessage').value = '';
							$('livereplycontent').style.position = 'absolute';
							if(param['sechash']) {
								updatesecqaa(param['sechash']);
								updateseccode(param['sechash']);
							}
							getnewlivepostlist();
						}
					</script>
				<!--{/if}-->
 
 
			<div class="box" style=" border: 1px solid #E7E8EB; border-bottom: 0;">
                 <div class="h2o_shaixuan">
					  <!--{if $_GET['specialtype'] == 'reward'}-->
							<a id="filter_reward" href="javascript:;" class="showmenu xi2{if $_GET['rewardtype']} xw1{/if}" onclick="showMenu(this.id)"><!--{if $_GET['rewardtype'] == ''}-->{lang all_reward}<!--{elseif $_GET['rewardtype'] == '1'}-->{lang rewarding}<!--{elseif $_GET['rewardtype'] == '2'}-->{lang reward_solved}<!--{/if}--></a>&nbsp;
						<!--{/if}-->
						<a id="filter_special" href="javascript:;" class="showmenu xi2{if $_GET['specialtype']} xw1{/if}" onclick="showMenu(this.id)"><!--{if $_GET['specialtype'] == 'poll'}-->{lang thread_poll}<!--{elseif $_GET['specialtype'] == 'trade'}-->{lang thread_trade}<!--{elseif $_GET['specialtype'] == 'reward'}-->{lang thread_reward}<!--{elseif $_GET['specialtype'] == 'activity'}-->{lang thread_activity}<!--{elseif $_GET['specialtype'] == 'debate'}-->{lang thread_debate}<!--{else}-->{lang threads_all}<!--{/if}--></a>&nbsp;
						<a id="filter_time" href="javascript:;" class="showmenu xi2" onclick="showMenu(this.id)">{lang all}{lang search_any_date}</a>&nbsp;
						<a id="filter_orderby" href="javascript:;" class="showmenu xi2" onclick="showMenu(this.id)">{lang list_default_sort}</a>&nbsp;
						<!--{if empty($_G['forum']['picstyle']) && $_GET['orderby'] == 'lastpost' && (!$_G['setting']['forumseparator'] || !$separatepos) && !$_GET['filter']}-->
							<a href="javascript:;" onclick="checkForumnew_btn('{$_G['fid']}')" title="{lang showupgrade}" class="forumrefresh" style="display:none;"></a>
						<!--{/if}-->
						<!--{if $_GET['filter'] == 'hot'}-->
							<script type="text/javascript" src="{$_G[setting][jspath]}calendar.js?{VERHASH}"></script>
							<span>$ctime</span>
							<img src="{IMGDIR}/date_magnify.png" class="cur1" alt="" id="hottime" value="$ctime" fid="$_G[fid]" onclick="showcalendar(event, this, false, false, false, false, function(){viewhot(this);});" align="absmiddle" />
						<!--{/if}-->
						<span id="clearstickthread" style="display: none;">
							<span class="pipe">|</span>
							<a href="javascript:;" onclick="clearStickThread()" class="xi2" title="{lang showdisplayorder}">{lang showdisplayorder}</a>
						</span>

					<!--{hook/forumdisplay_filter_extra}-->



					<div class="y">	

					<!--{if CURMODULE != 'guide'}-->                        				
			                <a id="atarget" {if $_G['cookie']['atarget'] > 0}onclick="setatarget(-1)" class="atarget_1"{else}onclick="setatarget(1)"{/if} title="{lang new_window_thread}" style="margin-right: 0;">{lang new_window}</a>
                        <!--{if empty($_G['forum']['picstyle'])}-->			
			            <!--{else}-->
                           <span class="pipe">|</span>&nbsp;<a{if empty($_G['cookie']['forumdefstyle'])} href="forum.php?mod=forumdisplay&fid=$_G[fid]&forumdefstyle=yes" class="chked"{else} href="forum.php?mod=forumdisplay&fid=$_G[fid]&forumdefstyle=no" class="unchk"{/if} title="瀑布流{lang view_thread}">瀑布流</a>
					    <!--{/if}-->		            
				    <!--{else}-->
					     {lang title}
				    <!--{/if}-->

					</div>
                    <!--{hook/forumdisplay_postbutton_top}-->
           
				<!--{if ($_G['forum']['threadtypes'] && $_G['forum']['threadtypes']['listable']) || count($_G['forum']['threadsorts']['types']) > 0}-->
					<ul id="thread_types" class="ttp bm cl">
						<!--{hook/forumdisplay_threadtype_inner}-->
						<li id="ttp_all" {if !$_GET['typeid'] && !$_GET['sortid']}class="xw1 a"{/if}><a href="forum.php?mod=forumdisplay&fid=$_G[fid]{if $_G['forum']['threadsorts']['defaultshow']}&filter=sortall&sortall=1{/if}{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">{lang forum_viewall}</a></li>
						<!--{if $_G['forum']['threadtypes']}-->
							<!--{loop $_G['forum']['threadtypes']['types'] $id $name}-->
								<!--{if $_GET['typeid'] == $id}-->
								<li class="xw1 a"><a href="forum.php?mod=forumdisplay&fid=$_G[fid]{if $_GET['sortid']}&filter=sortid&sortid=$_GET['sortid']{/if}{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}"><!--{if $_G[forum][threadtypes][icons][$id] && $_G['forum']['threadtypes']['prefix'] == 2}--><img class="vm" src="$_G[forum][threadtypes][icons][$id]" alt="" /> <!--{/if}-->$name<!--{if $showthreadclasscount[typeid][$id]}--><span class="xg1 num">$showthreadclasscount[typeid][$id]</span><!--{/if}--></a></li>
								<!--{else}-->
								<li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=typeid&typeid=$id$forumdisplayadd[typeid]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}"><!--{if $_G[forum][threadtypes][icons][$id] && $_G['forum']['threadtypes']['prefix'] == 2}--><img class="vm" src="$_G[forum][threadtypes][icons][$id]" alt="" /> <!--{/if}-->$name<!--{if $showthreadclasscount[typeid][$id]}--><span class="xg1 num">$showthreadclasscount[typeid][$id]</span><!--{/if}--></a></li>
								<!--{/if}-->
							<!--{/loop}-->
						<!--{/if}-->

						<!--{if $_G['forum']['threadsorts']}-->
							<!--{if $_G['forum']['threadtypes']}--><li><span class="pipe">|</span></li><!--{/if}-->
							<!--{loop $_G['forum']['threadsorts']['types'] $id $name}-->
								<!--{if $_GET['sortid'] == $id}-->
								<li class="xw1 a"><a href="forum.php?mod=forumdisplay&fid=$_G[fid]{if $_GET['typeid']}&filter=typeid&typeid=$_GET['typeid']{/if}{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">$name<!--{if $showthreadclasscount[sortid][$id]}--><span class="xg1 num">$showthreadclasscount[sortid][$id]</span><!--{/if}--></a></li>
								<!--{else}-->
								<li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=sortid&sortid=$id$forumdisplayadd[sortid]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">$name<!--{if $showthreadclasscount[sortid][$id]}--><span class="xg1 num">$showthreadclasscount[sortid][$id]</span><!--{/if}--></a></li>
								<!--{/if}-->
							<!--{/loop}-->
						<!--{/if}-->
						<!--{hook/forumdisplay_filter_extra}-->
					</ul>
	
					<script type="text/javascript">showTypes('thread_types');</script>
				<!--{/if}-->
			</div>
		</div>

<div class="h2o_f_nav">
    <div class="circle-nav">
        <ul class="tab-list cl">
		    <li class="tab-item{if $_GET['filter'] == ''} tab-item-current{/if}"><a href="forum.php?mod=forumdisplay&fid=$_G[fid]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">{lang all}{lang forum_threads}</a></li>

		    <li class="tab-item{if $_GET['filter'] == 'lastpost'} tab-item-current{/if}"><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=lastpost&orderby=lastpost$forumdisplayadd[lastpost]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">最新</a></li>

            <li class="tab-item{if $_GET['filter'] == 'heat'} tab-item-current{/if}""><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=heat&orderby=heats$forumdisplayadd[heat]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">热门</a></li>

            <li class="tab-item{if $_GET['filter'] == 'hot'} tab-item-current{/if}""><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=hot">热帖</a></li>

            <li class="tab-item{if $_GET['filter'] == 'digest'} tab-item-current{/if}""><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=digest&digest=1$forumdisplayadd[digest]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">精华</a></li>

        </ul>
    </div> 
</div>

				<!--{hook/forumdisplay_threadtype_extra}-->
				<!--{if empty($_G['forum']['sortmode'])}-->
					<!--{subtemplate forum/forumdisplay_list}-->
				<!--{else}-->
					<!--{subtemplate forum/forumdisplay_sort}-->
				<!--{/if}-->
			<!--{/if}-->

			<!--{if $fastpost}-->
				<!--{template forum/forumdisplay_fastpost}-->
			<!--{/if}-->

			<!--{hook/forumdisplay_bottom}-->
			<!--[diy=diyforumdisplaybottom]--><div id="diyforumdisplaybottom" class="area"></div><!--[/diy]-->
		</div>

<div class="sd" style="overflow: visible;">
  					
    <div class="h2o-circle-info">		
    <div class="circle-avatar">
	<div class="circle-avatar-left">
		<!--{if $_G['forum'][icon]}-->
			<img src="data/attachment/common/$_G['forum'][icon]" alt="{$_G['forum'][name]}" title="你所在位置: $_G['forum'][name]" />
		<!--{else}-->
			<img src="{IMGDIR}/forum{if $forum[folder]}_new{/if}.gif" alt="$forum[name]" title="你所在位置: $_G['forum'][name]" />
		<!--{/if}-->
        </div>	 
	<div class="circle-avatar-right">
        <a class="circle-name" href="forum.php?mod=forumdisplay&fid=$_G[fid]" title="你所在位置: $_G['forum'][name]"><h1>$_G['forum'][name]</h1></a>

        <p class="circle-data cl">
            <span>
               <em>{lang index_threads}: </em><a href="javascript:void(0)">$_G[forum][threads]</a>
                
            </span>
            <span class="split"></span>
            <span>
                <em>{lang index_today}: </em><a href="javascript:void(0)">$_G[forum][todayposts]</a>                
            </span>
        </p>
	</div>
	</div>
	
       <!--{if $_G['forum']['rules']}-->
		 <div class="circle-bbs">
            <h3>本版公告</h3>                     			  
            <p class="forum_rules" id="forum_rules_{$_G[fid]}" style="$collapse['forum_rules'];">
                $_G['forum'][rules]
            </p>               	   
         </div>
       <!--{else}-->
		 <div class="circle-bbs">
            <h3>本版公告</h3>                     			  
            <p class="forum_rules" id="forum_rules_{$_G[fid]}" style="$collapse['forum_rules'];">
                版主很懒还没留下版块公告
            </p>               	   
         </div>
       <!--{/if}-->

	   <div class="h2o-bankuai-cz cl">
		
            <!--{if rssforumperm($_G['forum']) && $_G[setting][rssstatus] && !$_GET['archiveid'] && !$subforumonly}--><a href="forum.php?mod=rss&fid=$_G[fid]&auth=$rssauth" target="_blank" title="RSS">{lang rss_subscribe_this}</a><!--{/if}-->

				        <!--{if !empty($forumarchive)}-->
						<a id="forumarchive" href="javascript:;" onmouseover="showMenu(this.id)"><!--{if $_GET['archiveid']}-->$forumarchive[$_GET['archiveid']]['displayname']<!--{else}-->{lang forum_archive}<!--{/if}--></a>
						<!--{/if}-->

						<!--{hook/forumdisplay_forumaction}-->

						<!--{if $_G['forum']['ismoderator']}-->

						<!--{if $_G['forum']['ismoderator'] && !$_GET['archiveid']}-->
						<!--{if $_G['forum']['status'] != 3}-->
							<a href="forum.php?mod=modcp&fid=$_G[fid]">{lang modcp}</a>
						<!--{else}-->
							<a href="forum.php?mod=group&action=manage&fid=$_G[fid]">{lang modcp}</a>
						<!--{/if}-->
				        <!--{/if}-->

						<!--{if $_G['forum']['recyclebin']}-->
							<a href="{if $_G['adminid'] == 1}admin.php?mod=forum&action=recyclebin&frames=yes{elseif $_G['forum']['ismoderator']}forum.php?mod=modcp&action=recyclebin&fid=$_G[fid]{/if}" target="_blank">{lang forum_recyclebin}</a>
						<!--{/if}-->

				<!--{hook/forumdisplay_modlink}-->
			<!--{/if}-->
	  </div>
</div>

<!--{if $moderatedby}-->

<!--{eval $moderators = DB::fetch_all("SELECT a.uid,b.username FROM ".DB::table('forum_moderator')." a LEFT JOIN ".DB::table("common_member")." b on a.uid=b.uid WHERE `fid`= $_G[fid]");}-->

<div class="h2o-adminlist cl">
   <h3>版主</h3>
<ul>  
<!--{loop $moderators $manage}-->
  
    <li class="member-item">
        <a href="home.php?mod=space&uid=$manage[uid]" c="1" class="member-avatar">
            <img src="uc_server/avatar.php?uid=$manage[uid]&size=middle">
            <span>$manage[username]</span>
        </a>

		<!--{eval $h2o_ad_count = DB::fetch_first("SELECT * FROM ".DB::table('common_member_count')." WHERE uid=$manage[uid]");}-->
        <div class="info">
            <span>关注：$h2o_ad_count['following']</span>
			<span>粉丝：$h2o_ad_count['follower']</span>
        </div>  

    </li>   
<!--{/loop}-->
</ul>
</div>
<!--{/if}-->

   <div class="h2o_diy_box cl">

      <ul class="signIn cl" style="width: 308px;height: 68px;margin: 5px 0 16px;border: 1px solid #E7E8EB;">
        <li>
        	<a href="javascript:;" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu({'ctrlid':this.id})"{if !$_G['forum']['allowspecialonly'] && empty($_G['forum']['picstyle']) && !$_G['forum']['threadsorts']['required']} onclick="showWindow('newthread', 'forum.php?mod=post&action=newthread&fid=$_G[fid]')"{else} onclick="location.href='forum.php?mod=post&action=newthread&fid=$_G[fid]';return false;"{/if} title="{lang send_posts}" class="ftTit">
    			<div class="ftTit_icon z"></div>
    			<div class="ftTit_title z">发帖</div>
        	</a>
        </li>
        <li>
            <a href="home.php?mod=spacecp&ac=favorite&type=forum&id=$_G[fid]&handlekey=favoriteforum&formhash={FORMHASH}" id="a_favorite" onclick="showWindow(this.id, this.href, 'get', 0);" class="qdTit">
                <div class="qdTit_icon z"></div>
    			<div class="qdTit_title z">关注</div>
	        </a>
        </li>
    </ul>

</div>
	 
    <!--{hook/forumdisplay_side_top}-->

	<div class="h2o_diy_box cl">
		<!--[diy=diyforumlisthy]--><div id="diyforumlisthy" class="area"></div><!--[/diy]-->
    </div>

	<div class="h2o_diy_box cl">
		<!--[diy=diyforumlisthot]--><div id="diyforumlisthot" class="area"></div><!--[/diy]-->
    </div>

	<div class="h2o_diy_box cl">
		<!--[diy=diyforumlisthd]--><div id="diyforumlisthd" class="area"></div><!--[/diy]-->
    </div>

	<div class="h2o_diy_box cl">
		<!--[diy=diy2]--><div id="diy2" class="area"></div><!--[/diy]-->
	</div>

	<!--{hook/forumdisplay_side_bottom}-->

</div>

<!--{if $_G['group']['allowpost'] && ($_G['group']['allowposttrade'] || $_G['group']['allowpostpoll'] || $_G['group']['allowpostreward'] || $_G['group']['allowpostactivity'] || $_G['group']['allowpostdebate'] || $_G['setting']['threadplugins'] || $_G['forum']['threadsorts'])}-->
	<ul class="p_pop" id="newspecial_menu" style="display: none">
		<!--{if !$_G['forum']['allowspecialonly']}--><li><a href="forum.php?mod=post&action=newthread&fid=$_G[fid]">{lang post_newthread}</a></li><!--{/if}-->
		<!--{if $_G['forum']['threadsorts'] && !$_G['forum']['allowspecialonly']}-->
			<!--{loop $_G['forum']['threadsorts']['types'] $id $threadsorts}-->
				<!--{if $_G['forum']['threadsorts']['show'][$id]}-->
					<li class="popupmenu_option"><a href="forum.php?mod=post&action=newthread&fid=$_G[fid]&extra=$extra&sortid=$id">$threadsorts</a></li>
				<!--{/if}-->
			<!--{/loop}-->
		<!--{/if}-->
		<!--{if $_G['group']['allowpostpoll']}--><li class="poll"><a href="forum.php?mod=post&action=newthread&fid=$_G[fid]&special=1">{lang post_newthreadpoll}</a></li><!--{/if}-->
		<!--{if $_G['group']['allowpostreward']}--><li class="reward"><a href="forum.php?mod=post&action=newthread&fid=$_G[fid]&special=3">{lang post_newthreadreward}</a></li><!--{/if}-->
		<!--{if $_G['group']['allowpostdebate']}--><li class="debate"><a href="forum.php?mod=post&action=newthread&fid=$_G[fid]&special=5">{lang post_newthreaddebate}</a></li><!--{/if}-->
		<!--{if $_G['group']['allowpostactivity']}--><li class="activity"><a href="forum.php?mod=post&action=newthread&fid=$_G[fid]&special=4">{lang post_newthreadactivity}</a></li><!--{/if}-->
		<!--{if $_G['group']['allowposttrade']}--><li class="trade"><a href="forum.php?mod=post&action=newthread&fid=$_G[fid]&special=2">{lang post_newthreadtrade}</a></li><!--{/if}-->
		<!--{if $_G['setting']['threadplugins']}-->
			<!--{loop $_G['forum']['threadplugin'] $tpid}-->
				<!--{if array_key_exists($tpid, $_G['setting']['threadplugins']) && @in_array($tpid, $_G['group']['allowthreadplugin'])}-->
					<li class="popupmenu_option"{if $_G['setting']['threadplugins'][$tpid][icon]} style="background-image:url(source/plugin/$tpid/$_G[setting][threadplugins][$tpid][icon])"{/if}><a href="forum.php?mod=post&action=newthread&fid=$_G[fid]&specialextra=$tpid">{$_G[setting][threadplugins][$tpid][name]}</a></li>
				<!--{/if}-->
			<!--{/loop}-->
		<!--{/if}-->
	</ul>
<!--{/if}-->

<!--{if $_G['setting']['visitedforums'] && $_G['forum']['status'] != 3}-->
	<div id="visitedforums_menu" class="p_pop blk cl" style="display: none;">
		<table cellspacing="0" cellpadding="0">
			<tr>
				<td id="v_forums">
					<h3 class="mbn pbn bbda xg1">{lang viewed_forums}</h3>
					<ul class="xl xl1">
						$_G['setting']['visitedforums']
					</ul>
				</td>
			</tr>
		</table>
	</div>
<!--{/if}-->
<!--{if $_G['setting']['threadmaxpages'] > 1 && $page && !$subforumonly}-->
	<script type="text/javascript">document.onkeyup = function(e){keyPageScroll(e, <!--{if $page > 1}-->1<!--{else}-->0<!--{/if}-->, <!--{if $page < $_G['setting']['threadmaxpages'] && $page < $_G['page_next']}-->1<!--{else}-->0<!--{/if}-->, 'forum.php?mod=forumdisplay&fid={$_G[fid]}&filter={$filter}&orderby={$_GET[orderby]}{$forumdisplayadd[page]}&{$multipage_archive}', $page);}</script>
<!--{/if}-->

<!--{if empty($_G['forum']['picstyle']) && $_GET['orderby'] == 'lastpost' && empty($_GET['filter']) }-->
	<script type="text/javascript">checkForumnew_handle = setTimeout(function () {checkForumnew($_G[fid], lasttime);}, checkForumtimeout);</script>
<!--{/if}-->

</div>
</div>

<!--{if empty($_G['setting']['disfixednv_forumdisplay']) }--><script>fixed_top_nv();</script><!--{/if}-->
<!--{template common/footer}-->
