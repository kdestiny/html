<?php echo '请购买新视界discuz商业模板，客服QQ:2413248487';exit;?>
<!--{eval
$needhiddenreply = ($hiddenreplies && $_G['uid'] != $post['authorid'] && $_G['uid'] != $_G['forum_thread']['authorid'] && !$post['first'] && !$_G['forum']['ismoderator']);
$postshowavatars = !($_G['setting']['bannedmessages'] & 2 && ($post['memberstatus'] == '-1' || ($post['authorid'] && !$post['username']) || ($post['groupid'] == 4 || $post['groupid'] == 5) || ($post['status'] & 1)));
}-->
<!--{block authorverifys}-->
<!--{loop $post['verifyicon'] $vid}-->
	<a href="home.php?mod=spacecp&ac=profile&op=verify&vid=$vid" target="_blank"><!--{if $_G['setting']['verify'][$vid]['icon']}--><img src="$_G['setting']['verify'][$vid]['icon']" class="vm" alt="$_G['setting']['verify'][$vid][title]" title="$_G['setting']['verify'][$vid][title]" /><!--{else}-->$_G['setting']['verify'][$vid]['title']<!--{/if}--></a>
<!--{/loop}-->
<!--{loop $post['unverifyicon'] $vid}-->
	<a href="home.php?mod=spacecp&ac=profile&op=verify&vid=$vid" target="_blank"><img src="$_G['setting']['verify'][$vid]['unverifyicon']" class="vm" alt="$_G['setting']['verify'][$vid][title]" title="$_G['setting']['verify'][$vid][title]" /></a>
<!--{/loop}-->
<!--{/block}-->
<!--{if $post['first'] &&  $_G['forum_threadstamp']}-->
	<div id="threadstamp"><img src="$_G['style']['styleimgdir']/stamp/$_G[forum_threadstamp][url]" title="$_G[forum_threadstamp][text]" /></div>
<!--{/if}-->

<!--{if empty($post['deleted'])}-->

<table id="pid$post[pid]" class="plhin boxtable viewbox {if $post['first']}firstfloor{else}otherfloor{/if}" summary="pid$post[pid]" cellspacing="0" cellpadding="0">
<tr>


<!--{if !$post['first']}-->
	<td class="pls" rowspan="2">

		<div id="favatar$post[pid]" class="pls favatar">
			$post[newpostanchor] $post[lastpostanchor]
			<!--{if $post['authorid'] && $post['username'] && !$post['anonymous']}-->
				<div class="p_pop blk bui vuimg card_gender_$post['gender']" id="userinfo$post[pid]" style="display: none; {if $_G['setting']['authoronleft']}margin-top: -11px;{/if}">
					<div class="m z">
						<div id="userinfo$post[pid]_ma"></div>
						<!--{hook/viewthread_profileside $postcount}-->
					</div>
					<div class="i y">
						<div>
							<strong><a href="home.php?mod=space&uid=$post[authorid]" target="_blank" class="xi2"{if $post[groupcolor]} style="color: $post[groupcolor]"{/if}>$post[author]</a></strong>
							<!--{if $_G['setting']['vtonlinestatus'] && $post['authorid']}-->
								<!--{if ($_G['setting']['vtonlinestatus'] == 2 && $_G[forum_onlineauthors][$post[authorid]]) || ($_G['setting']['vtonlinestatus'] == 1 && (TIMESTAMP - $post['lastactivity'] <= 10800) && !$post['authorinvisible'])}-->
									<em>{lang online}</em>
								<!--{else}-->
									<em>{lang offline}</em>
								<!--{/if}-->
							<!--{/if}-->
						</div>
						{eval viewthread_profile_node('top', $post);}
						<div class="imicn">
							<!--{if $post['qq'] && !$post['privacy']['profile']['qq']}--><a href="http://wpa.qq.com/msgrd?V=3&uin=$post[qq]&Site=$_G['setting']['bbname']&Menu=yes&from=discuz" target="_blank" title="QQ"><img src="{IMGDIR}/qq.gif" alt="QQ" /></a><!--{/if}-->
							<!--{if $post['icq'] && !$post['privacy']['profile']['icq']}--><a href="http://wwp.icq.com/scripts/search.dll?to=$post[icq]" target="_blank" title="ICQ"><img src="{IMGDIR}/icq.gif" alt="ICQ" /></a><!--{/if}-->
							<!--{if $post['yahoo'] && !$post['privacy']['profile']['yahoo']}--><a href="http://edit.yahoo.com/config/send_webmesg?.target=$post[yahoo]&.src=pg" target="_blank" title="Yahoo"><img src="{IMGDIR}/yahoo.gif" alt="Yahoo!"  /></a><!--{/if}-->
							<!--{if $post['taobao'] && !$post['privacy']['profile']['taobao']}--><a href="javascript:;" onclick="window.open('http://amos.im.alisoft.com/msg.aw?v=2&uid='+encodeURIComponent('$post[taobaoas]')+'&site=cntaobao&s=2&charset=utf-8')" title="{lang taobao}"><img src="{IMGDIR}/taobao.gif" alt="{lang taobao}" /></a><!--{/if}-->
							<!--{if $post['site'] && !$post['privacy']['profile']['site']}--><a href="$post[site]" target="_blank" title="{lang member_homepage}"><img src="{IMGDIR}/forumlink.gif" alt="{lang member_homepage}" /></a><!--{/if}-->
							<a href="home.php?mod=space&uid=$post[authorid]&do=profile" target="_blank" title="{lang member_viewpro}"><img src="{IMGDIR}/userinfo.gif" alt="{lang member_viewpro}" /></a>
							<!--{hook/viewthread_imicons $postcount}-->
							<!--{if $_G['setting']['magicstatus']}-->
								<!--{if !empty($_G['setting']['magics']['showip'])}-->
									<a href="home.php?mod=magic&mid=showip&idtype=user&id={echo rawurlencode($post[author])}" id="a_showip_li_{$post[pid]}" class="xi2" onclick="showWindow(this.id, this.href)"><img src="{STATICURL}/image/magic/showip.small.gif" alt="" /> $_G['setting']['magics']['showip']</a>
								<!--{/if}-->
								<!--{if !empty($_G['setting']['magics']['checkonline']) && $post['authorid'] != $_G['uid']}-->
									<a href="home.php?mod=magic&mid=checkonline&idtype=user&id={echo rawurlencode($post[author])}" id="a_repent_$post[pid]" class="xi2" onclick="showWindow(this.id, this.href)"><img src="{STATICURL}/image/magic/checkonline.small.gif" alt="" /> $_G['setting']['magics']['checkonline']</a>
								<!--{/if}-->
								<!--{hook/viewthread_magic_user $postcount}-->
							<!--{/if}-->
						</div>
						<div id="avatarfeed"><span id="threadsortswait"></span></div>
					</div>
				</div>
			<!--{/if}-->
			<!--{if $post['authorid'] && $post['username'] && !$post['anonymous']}-->
				<div class="viem_avatar">
				<!--{if !$postshowavatars}-->
					<div class="avatar">{lang member_avatar_banned}</div>
				<!--{elseif $post['avatar'] && $showavatars}-->
					<!--{if $post[mobiletype]}-->
					<div class="mobile-type mobile-type-$post[mobiletype]">
						<a></a>
					</div>
					<!--{/if}-->
					<div class="avatar"{if !($_G['setting']['threadguestlite'] && !$_G['uid'])} onmouseover="showauthor(this, 'userinfo$post[pid]')"{/If}><a href="home.php?mod=space&uid=$post[authorid]" class="avtm" target="_blank">$post[avatar]</a></div>
				<!--{/if}-->
				<div class="h2o_hook_avatar"><!--{hook/viewthread_avatar $postcount}--></div>
				</div>
                <!--{if $_G['setting']['authoronleft']}-->
					<div class="pi">
						<div class="authi"><a href="home.php?mod=space&uid=$post['authorid']" target="_blank" {if $post[groupcolor]} style="color: $post[groupcolor]"{/if}>$post[author]</a>$authorverifys</div>
					</div>
				<!--{/if}-->
				<!--{hook/viewthread_sidetop $postcount}-->
				<!--{if !($_G['setting']['threadguestlite'] && !$_G['uid'])}-->
					{eval viewthread_profile_node('left', $post);}
					<!--{if $post[authorid] != $_G[uid]}-->
						<ul class="xl xl2 o cl">
							<!--{if helper_access::check_module('follow')}-->
							<li class="addflw">
								<a href="home.php?mod=spacecp&ac=follow&op=add&hash={FORMHASH}&fuid=$post[authorid]" id="followmod_$post[authorid]" title="{lang follow}" class="xi2" onclick="showWindow('followmod', this.href, 'get', 0);">{lang follow}</a>
							</li>
							<!--{/if}-->
							<li class="pm2"><a href="home.php?mod=spacecp&ac=pm&op=showmsg&handlekey=showmsg_$post[authorid]&touid=$post[authorid]&pmid=0&daterange=2&pid=$post[pid]&tid=$post[tid]" onclick="showWindow('sendpm', this.href);" title="{lang viewthread_left_sendpm}" class="xi2">{lang viewthread_left_sendpm}</a></li>
                           <li class="buddy"><a href="home.php?mod=spacecp&ac=friend&op=add&uid=$post[authorid]&handlekey=addfriendhk_{$post[authorid]}" id="a_friend_li_{$post[pid]}" onclick="showWindow(this.id, this.href, 'get', 1, {'ctrlid':this.id,'pos':'00'});" title="{lang viewthread_left_addfriend}" class="xi2">{lang viewthread_left_addfriend}</a></li>
                          <li class="callon"><a href="home.php?mod=space&uid=$post[authorid]" target="_blank" title="{lang viewthread_left_tospace}" class="xi2">{lang viewthread_left_tospace}</a></li>
                          <li class="poke2"><a href="home.php?mod=spacecp&ac=poke&op=send&uid=$post[authorid]" id="a_poke_li_{$post[pid]}" onclick="showWindow(this.id, this.href, 'get', 0);" title="{lang viewthread_left_poke}" class="xi2">{lang viewthread_left_poke}</a></li>
						</ul>
					<!--{/if}-->
				<!--{/if}-->
				<!--{hook/viewthread_sidebottom $postcount}-->
			<!--{elseif getstatus($post['status'], 5)}-->
				<!--{if $_G['setting']['authoronleft']}-->
				<div class="pi">
					<div class="authi"><a href="javascript:;" class="xw1">$post[author]</a></div>
				</div>
				<!--{/if}-->
				<!--{if $showavatars}-->
				<div>
					<div class="avatar avtm"><a href="javascript:;">$post[avatar]</a></div>
				</div>
				<!--{/if}-->
			<!--{else}-->
            	<div class="avatar"><img src="$_G['style'][styleimgdir]/hidden.gif" /></div>
				<div class="pi">
                <div class="authi">
				<!--{if !$post['authorid']}-->
					<a href="javascript:;">$_G[setting][anonymoustext] <em>$post[useip]{if $post[port]}:$post[port]{/if}</em></a>
				<!--{elseif $post['authorid'] && $post['username'] && $post['anonymous']}-->
					<!--{if $_G['forum']['ismoderator']}--><a href="home.php?mod=space&uid=$post[authorid]" target="_blank">$_G[setting][anonymoustext]</a><!--{else}-->$_G[setting][anonymoustext]<!--{/if}-->
				<!--{else}-->
					$post[author] <em>{lang member_deleted}</em>
				<!--{/if}-->
                </div>
				</div>
			<!--{/if}-->
			<!--{if ($_G['group']['allowedituser'] || $_G['group']['allowbanuser'] || ($_G['forum']['ismoderator'] && $_G['group']['allowviewip'])) && !getstatus($post['status'], 5)}-->
				<p class="cp_pls cl">
					<!--{if $_G['forum']['ismoderator'] && $_G['group']['allowviewip']}-->
						<a href="forum.php?mod=topicadmin&action=getip&fid=$_G[fid]&tid=$_G[tid]&pid=$post[pid]{if $_G['forum_auditstatuson']}&modthreadkey=$_GET[modthreadkey]{/if}" onclick="ajaxmenu(this, 0, 0, 2);doane(event)">IP</a>
					<!--{/if}-->
					<!--{if $_G['group']['allowedituser']}-->
						<a href="{if $_G['adminid'] == 1}admin.php?frames=yes&action=members&operation=search&uid=$post[authorid]&submit=yes{else}forum.php?mod=modcp&action=member&op=edit&uid=$post[authorid]{/if}" target="_blank">{lang edit}</a>
					<!--{/if}-->
					<!--{if $_G['group']['allowbanuser']}-->
						<!--{if $_G['adminid'] == 1}-->
							<a href="admin.php?action=members&operation=ban&username=$post[usernameenc]&frames=yes" target="_blank">{lang ban_member}</a>
						<!--{else}-->
							<a href="forum.php?mod=modcp&action=member&op=ban&uid=$post[authorid]" target="_blank">{lang ban_member}</a>
						<!--{/if}-->
					<!--{/if}-->
					<a href="forum.php?mod=modcp&action=thread&op=post&do=search&searchsubmit=1&users=$post[usernameenc]" target="_blank">{lang posts}</a>
					<!--{if $_G['adminid'] == 1}-->
						<a href="forum.php?mod=ajax&action=quickclear&uid=$post[authorid]" onclick="showWindow('qclear_$post[authorid]', this.href, 'get', 0)">{lang clear}</a>
					<!--{/if}-->
				</p>
			<!--{/if}-->
		</div>
	</td>
<!--{/if}-->

<td class="plc viem_position">
  <!--{if !$post['first']}-->
     <small class="h2o_fsanjian"></small>

          <div class="viem_position_sec">

				<div class="authi" style="float: left;">
				<!--{eval $_self = $thread['author'] && $post['author'] == $thread['author'] && $post['position'] !== '1';}-->
				<!--{if $_self }-->
					<img class="authicn vm" id="authicon$post[pid]" src="{IMGDIR}/ico_lz.png" />
				<!--{else}-->
					<!--{if !$post['anonymous'] && $_G['cache']['groupicon'][$post['groupid']]}-->
						<img class="authicn vm" id="authicon$post[pid]" src="$_G['cache']['groupicon'][$post['groupid']]" />
					<!--{else}-->
						<img class="authicn vm" id="authicon$post[pid]" src="$_G['cache']['groupicon'][0]" />
					<!--{/if}-->
				<!--{/if}-->

				<!--{if $post['authorid'] && !$post['anonymous']}-->
					<!--{if $_self}-->
					&nbsp;{lang thread_author}<span class="pipe">|</span>
					<!--{/if}-->
					<!--{if !$_G['setting']['authoronleft']}--><a href="home.php?mod=space&uid=$post[authorid]" target="_blank" class="xi2">$post[author]</a>$authorverifys<!--{/if}-->
					<!--{if $close_leftinfo}--><!--{/if}-->
					<em id="authorposton$post[pid]">{lang poston} $post[dateline]</em>
					<!--{if $post['status'] & 8}-->
						<span class="xg1"><!--{if $_G['setting']['mobile']['mobilecomefrom']}-->{$_G['setting']['mobile']['mobilecomefrom']}<!--{else}-->{lang from_mobile}<!--{/if}--></span>
					<!--{/if}-->
					<!--{if $post['invisible'] == 0}-->
						<span class="pipe">|</span>
						<!--{if !IS_ROBOT && !$_GET['authorid'] && !$_G['forum_thread']['archiveid']}-->
							<a href="forum.php?mod=viewthread&tid=$post[tid]&page=$page&authorid=$post[authorid]" rel="nofollow">{lang thread_show_author}</a>
						<!--{elseif !$_G['forum_thread']['archiveid']}-->
							<a href="forum.php?mod=viewthread&tid=$post[tid]&page=$page" rel="nofollow">{lang thread_show_all}</a>
						<!--{/if}-->
					<!--{/if}-->
				<!--{elseif getstatus($post['status'], 5)}-->
					<!--{if !$_G['setting']['authoronleft']}--><a href="javascript:;" class="xi2">$post[author]</a><!--{/if}-->
					&nbsp;<em id="authorposton$post[pid]">{lang poston} $post[dateline]</em>
				<!--{elseif $post['authorid'] && $post['username'] && $post['anonymous'] || !$post['authorid'] && !$post['username']}-->
					$_G[setting][anonymoustext]&nbsp;
					<em id="authorposton$post[pid]">{lang poston} $post[dateline]</em>
				<!--{/if}-->
				<!--{if !IS_ROBOT && !$_G['forum_thread']['archiveid'] && $post['first'] }-->
					<!--{if $_G['forum_thread']['attachment'] == 2 && $_G['group']['allowgetimage'] && (!$_G['setting']['guestviewthumb']['flag'] || $_G['setting']['guestviewthumb']['flag'] && $_G['uid'])}-->
						<span class="pipe">|</span><a href="forum.php?mod=viewthread&tid=$_G[tid]&from=album">{lang view_bigpic}</a>
					<!--{/if}-->
						<span class="none"><img src="{IMGDIR}/arw_r.gif" class="vm" alt="{lang replycredit}" /></span>
					<!--{if !$rushreply}-->
						<!--{if $ordertype != 1}-->
							<span class="pipe show">|</span><a href="forum.php?mod=viewthread&tid=$_G[tid]&extra=$_GET[extra]&ordertype=1"  class="show">{lang post_descview}</a>
						<!--{else}-->
							<span class="pipe show">|</span><a href="forum.php?mod=viewthread&tid=$_G[tid]&extra=$_GET[extra]&ordertype=2"  class="show">{lang post_ascview}</a>
						<!--{/if}-->
					<!--{/if}-->
				<!--{/if}-->
				<!--{if $post['first']}-->
				<span class="pipe show">|</span><a href="javascript:;" onclick="readmode($('thread_subject').innerHTML, $post[pid]);" class="show">{lang read_mode}</a>
				<!--{/if}-->
				<!--{hook/viewthread_postheader $postcount}-->
				</div>			

				<strong class="y" style=" margin-top: -2px;">
					<a href="{if $post[first]}forum.php?mod=viewthread&tid=$_G[tid]$fromuid{else}forum.php?mod=redirect&goto=findpost&ptid=$_G[tid]&pid=$post[pid]$fromuid{/if}"  {if $fromuid}title="{lang share_url_copy_comment}"{/if} id="postnum$post[pid]" onclick="setCopy(this.href, '{lang post_copied}');return false;" {if $post['first'] || $post['number'] == 2 || $post['number'] == 3 || $post['number'] == 4}class="postnum_$postcount"{/if}>
						<!--{if isset($post[isstick])}-->
							<img src ="{IMGDIR}/settop.png" title="{lang replystick}" class="vm" /> {lang from} {$post[number]}{$postnostick}
						<!--{elseif $post[number] == -1}-->
							{lang recommend}
						<!--{else}-->
							<!--{if !empty($postno[$post[number]])}-->
								$postno[$post[number]]
							<!--{else}-->
								<em>{$post[number]}</em>{$postno[0]}
							<!--{/if}-->
						<!--{/if}-->
					</a>
				</strong>

				<div class="pdbt" style=" margin-top: -4px;">
					<!--{if !$post['first'] && $post['rewardfloor']}-->
						<label class="pdbts pdbts_1">
							<a href="forum.php?mod=viewthread&tid=$post[tid]&checkrush=1" rel="nofollow" title="{lang rushreply_hit_title}" class="v">{lang prosit}</a>
							<a href="forum.php?mod=viewthread&tid=$post[tid]&checkrush=1" rel="nofollow" title="{lang rushreply_hit_title}" class="b">{lang rushreply_hit}</a>
						</label>
					<!--{/if}-->
					<!--{if !$post[first] && $_G['forum_thread']['special'] == 5}-->
						<label class="pdbts pdbts_{echo intval($post[stand])}">
							<!--{if $post[stand] == 1}--><a class="v" href="forum.php?mod=viewthread&tid=$_G[tid]&extra=$_GET[extra]&filter=debate&stand=1" title="{lang debate_view_square}">{lang debate_square}</a>
								<!--{elseif $post[stand] == 2}--><a class="v" href="forum.php?mod=viewthread&tid=$_G[tid]&extra=$_GET[extra]&filter=debate&stand=2" title="{lang debate_view_opponent}">{lang debate_opponent}</a>
								<!--{else}--><a href="forum.php?mod=viewthread&tid=$_G[tid]&extra=$_GET[extra]&filter=debate&stand=0" title="{lang debate_view_neutral}">{lang debate_neutral}</a><!--{/if}-->
							<!--{if $post[stand]}-->
								<a class="b" href="forum.php?mod=misc&action=debatevote&tid=$_G[tid]&pid=$post[pid]" id="voterdebate_$post[pid]" onclick="ajaxmenu(this);doane(event);">{lang debate_support} $post[voters]</a>
							<!--{/if}-->
						</label>
					<!--{/if}-->
				</div>

            </div>
  <!--{/if}-->

  	<!--{if !IS_ROBOT}-->
		<!--{if $post['warned']}-->
			<a href="forum.php?mod=misc&action=viewwarning&tid=$_G[tid]&uid=$post[authorid]" title="{lang warn_get}" class="y" onclick="showWindow('viewwarning', this.href)"><img src="{IMGDIR}/warning.gif" alt="{lang warn_get}" /></a>
				<!--{/if}-->
	<!--{/if}-->

<!--{if !IS_ROBOT}-->
<!--{if !$postcount && !$_G['forum_thread']['archiveid'] && $post['first'] }-->
<h3 class="h2o_ad_vtitle">
		<!--{if $_G['forum_thread']['typeid'] && $_G['forum']['threadtypes']['types'][$_G['forum_thread']['typeid']]}--><!--{if !IS_ROBOT && ($_G['forum']['threadtypes']['listable'] || $_G['forum']['status'] == 3)}--><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=typeid&typeid=$_G[forum_thread][typeid]" class="colorlink">[{$_G['forum']['threadtypes']['types'][$_G['forum_thread']['typeid']]}]</a><!--{else}-->[{$_G['forum']['threadtypes']['types'][$_G['forum_thread']['typeid']]}]<!--{/if}--><!--{/if}--><!--{if $threadsorts && $_G['forum_thread']['sortid']}--><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=sortid&sortid=$_G[forum_thread][sortid]">[{$_G['forum']['threadsorts']['types'][$_G['forum_thread']['sortid']]}]</a><!--{/if}--><a href="forum.php?mod=viewthread&tid=$_G[tid]$fromuid" {if $_G['page'] <= 1}onclick="return copyThreadUrl(this, '$_G[setting][bbname]')"{/if} {if $fromuid}title="{lang share_url_copy_comment}"{/if}><span id="thread_subject">$_G[forum_thread][subject]</span></a>

		<!--{if $_G['forum_thread']['recommendlevel']}-->
			<img src="$_G['style'][styleimgdir]/agree.gif" align="absmiddle" alt="heatlevel" title="{lang heats}: {$thread[heats]}" />
		<!--{/if}-->
					
		<!--{if $thread['digest'] > 0 && $filter != 'digest'}-->
			<img src="$_G['style'][styleimgdir]/digest_1.png" align="absmiddle" alt="heatlevel" title="{lang heats}: {$thread[heats]}" />
        <!--{/if}-->

		<!--{if $_G['forum_thread']['closed'] == 1}-->
			<img src="$_G['style'][styleimgdir]/folder_lock.gif" align="absmiddle" alt="heatlevel" title="{lang heats}: {$thread[heats]}" />
		<!--{/if}-->

		<!--{if $thread[heatlevel]}-->
			<img src="$_G['style'][styleimgdir]/hot.jpg" align="absmiddle" alt="heatlevel" title="{lang heats}: {$thread[heats]}" />
		<!--{/if}-->
</h3>
<div class="vwthdtit cl">
	<div class="z">	  
        <!--{if $post['first']}-->

        	<div class="pti">
				<div class="pdbt">
					<!--{if !$post['first'] && $post['rewardfloor']}-->
						<label class="pdbts pdbts_1">
							<a href="forum.php?mod=viewthread&tid=$post[tid]&checkrush=1" rel="nofollow" title="{lang rushreply_hit_title}" class="v">{lang prosit}</a>
							<a href="forum.php?mod=viewthread&tid=$post[tid]&checkrush=1" rel="nofollow" title="{lang rushreply_hit_title}" class="b">{lang rushreply_hit}</a>
						</label>
					<!--{/if}-->
					<!--{if !$post[first] && $_G['forum_thread']['special'] == 5}-->
						<label class="pdbts pdbts_{echo intval($post[stand])}">
							<!--{if $post[stand] == 1}--><a class="v" href="forum.php?mod=viewthread&tid=$_G[tid]&extra=$_GET[extra]&filter=debate&stand=1" title="{lang debate_view_square}">{lang debate_square}</a>
								<!--{elseif $post[stand] == 2}--><a class="v" href="forum.php?mod=viewthread&tid=$_G[tid]&extra=$_GET[extra]&filter=debate&stand=2" title="{lang debate_view_opponent}">{lang debate_opponent}</a>
								<!--{else}--><a href="forum.php?mod=viewthread&tid=$_G[tid]&extra=$_GET[extra]&filter=debate&stand=0" title="{lang debate_view_neutral}">{lang debate_neutral}</a><!--{/if}-->
							<!--{if $post[stand]}-->
								<a class="b" href="forum.php?mod=misc&action=debatevote&tid=$_G[tid]&pid=$post[pid]" id="voterdebate_$post[pid]" onclick="ajaxmenu(this);doane(event);">{lang debate_support} $post[voters]</a>
							<!--{/if}-->
						</label>
					<!--{/if}-->
				</div>
				<div class="authi {if $post['first'] }firstauthi{/if}">
                
				<!--{eval $_self = $thread['author'] && $post['author'] == $thread['author'] && $post['position'] !== '1';}-->

                <!--{if !$post['first']}-->
				<!--{if $_self }-->
					<img class="authicn vm" id="authicon$post[pid]" src="{IMGDIR}/ico_lz.png" />
				<!--{else}-->
					<!--{if !$post['anonymous'] && $_G['cache']['groupicon'][$post['groupid']]}-->
						<img class="authicn vm" id="authicon$post[pid]" src="$_G['cache']['groupicon'][$post['groupid']]" />
					<!--{else}-->
						<img class="authicn vm" id="authicon$post[pid]" src="$_G['cache']['groupicon'][0]" />
					<!--{/if}-->
				<!--{/if}-->
				<!--{/if}-->


				<!--{if $post['authorid'] && !$post['anonymous']}-->
					<!--{if $_self}-->
					&nbsp;{lang thread_author}<span class="pipe">|</span>
					<!--{/if}-->
					<a href="home.php?mod=space&uid=$post[authorid]" target="_blank" class="xi2">$post[author]</a>$authorverifys
					
					<em id="authorposton$post[pid]">&nbsp;于&nbsp;$post[dateline]</em>
					<!--{if $post['status'] & 8}-->
						<span class="xg1"><!--{if $_G['setting']['mobile']['mobilecomefrom']}-->{$_G['setting']['mobile']['mobilecomefrom']}<!--{else}-->{lang from_mobile}<!--{/if}--></span>
					<!--{/if}-->

				<!--{elseif getstatus($post['status'], 5)}-->
					<a href="javascript:;" class="xi2">$post[author]</a>
					&nbsp;<em id="authorposton$post[pid]">{lang poston} $post[dateline]</em>
				<!--{elseif $post['authorid'] && $post['username'] && $post['anonymous'] || !$post['authorid'] && !$post['username']}-->
					$_G[setting][anonymoustext]&nbsp;
					<em id="authorposton$post[pid]">{lang poston} $post[dateline]</em>
				<!--{/if}-->
				<!--{if !IS_ROBOT && !$_G['forum_thread']['archiveid'] && $post['first'] }-->
					<!--{if $_G['forum_thread']['attachment'] == 2 && $_G['group']['allowgetimage'] && (!$_G['setting']['guestviewthumb']['flag'] || $_G['setting']['guestviewthumb']['flag'] && $_G['uid'])}-->
						<span class="pipe">|</span><a href="forum.php?mod=viewthread&tid=$_G[tid]&from=album">{lang view_bigpic}</a>
					<!--{/if}-->

				 <span class="none"><img src="{IMGDIR}/arw_r.gif" class="vm" alt="{lang replycredit}" style=" margin-top: -2px; opacity: 0.75;" /></span>
  
				<!--{/if}-->
				<!--{if $post['first']}-->
				<span class="pipe show">|</span><a href="javascript:;" onclick="readmode($('thread_subject').innerHTML, $post[pid]);" class="show">{lang read_mode}</a>
				<!--{/if}-->
				<!--{hook/viewthread_postheader $postcount}-->

         </div>

	  </div>
    <!--{/if}-->

  </div>

  <span class="vwthdreplies y"><i class="msg"></i>$_G[forum_thread][allreplies]</span>
  <span class="vwthdviews y"><i class="see"></i>$_G[forum_thread][views]</span> 
         
</div>  
    <!--{/if}-->
<!--{/if}-->

<!--{ad ad_a_pr/thread/a_pr/3/$postcount}-->

		<div class="pct">
			<!--{ad/thread/a_pt/2/$postcount}-->
			<!--{if empty($ad_a_pr_css)}-->
				<style type="text/css">.pcb{margin-right:0}</style>
				<!--{eval $ad_a_pr_css=1;}-->
			<!--{/if}-->

			<!--{if !$post['first'] && $post['replycredit'] > 0}-->
				<div class="cm">
					<h3 class="psth xs1"><span class="icon_ring vm"></span>
						{lang replycredit} <span class="xw1 xs2 xi1">+{$post['replycredit']}</span> {$_G['setting']['extcredits'][$_G['forum_thread']['replycredit_rule']['extcreditstype']][unit]}{$_G['setting']['extcredits'][$_G['forum_thread']['replycredit_rule']['extcreditstype']][title]}
					</h3>
				</div>
			<!--{/if}-->

			<!--{subtemplate forum/viewthread_node_body}-->
		</div>

		<!--{if helper_access::check_module('collection') && !$_G['forum']['disablecollect']}-->
			<!--{if $post['relatecollection']}-->
				<div class="cm">
					<h3 class="psth xs1"><span class="icon_ring vm"></span>{lang collection_related}</h3>
					<ul class="mbw xl xl2 cl">
					<!--{loop $post['relatecollection'] $var}-->
						<li>&middot; <a href="forum.php?mod=collection&action=view&ctid=$var[ctid]" title="$var[name]" target="_blank" class="xi2 xw1">$var[name]</a><span class="pipe">|</span><span class="xg1">{lang collection_threadnum}: $var[threadnum], {lang collection_follow}: $var[follownum]</span></li>
					<!--{/loop}-->
					<!--{if $post['releatcollectionmore']}-->
						<li>&middot; <a href="forum.php?mod=collection&tid=$_G[tid]" target="_blank" class="xi2 xw1">{lang more}</a></li>
					<!--{/if}-->
					</ul>
				</div>
				<!--{if $post['sourcecollection']['ctid']}-->
				<div>
					{lang collection_fromctid}
					<form action="forum.php?mod=collection&action=comment&ctid={$ctid}&tid={$_G[tid]}" method="POST" class="ptm pbm cl">
						<input type="hidden" name="ratescore" id="ratescore" />
						<span class="clct_ratestar">
							<span class="btn">
								<a href="javascript:;" onmouseover="rateStarHover('clct_ratestar_star',1)" onmouseout="rateStarHover('clct_ratestar_star',0)" onclick="rateStarSet('clct_ratestar_star',1,'ratescore')">1</a>
								<a href="javascript:;" onmouseover="rateStarHover('clct_ratestar_star',2)" onmouseout="rateStarHover('clct_ratestar_star',0)" onclick="rateStarSet('clct_ratestar_star',2,'ratescore')">2</a>
								<a href="javascript:;" onmouseover="rateStarHover('clct_ratestar_star',3)" onmouseout="rateStarHover('clct_ratestar_star',0)" onclick="rateStarSet('clct_ratestar_star',3,'ratescore')">3</a>
								<a href="javascript:;" onmouseover="rateStarHover('clct_ratestar_star',4)" onmouseout="rateStarHover('clct_ratestar_star',0)" onclick="rateStarSet('clct_ratestar_star',4,'ratescore')">4</a>
								<a href="javascript:;" onmouseover="rateStarHover('clct_ratestar_star',5)" onmouseout="rateStarHover('clct_ratestar_star',0)" onclick="rateStarSet('clct_ratestar_star',5,'ratescore')">5</a>
							</span>
							<span id="clct_ratestar_star" class="star star$memberrate"></span>
						</span>
						&nbsp;<button type="submit" value="submit" class="pn"><span>{lang collection_rate}</span></button>
					</form>
				</div>
				<!--{/if}-->
			<!--{/if}-->
		<!--{/if}-->
	</td></tr>
	<tr><td class="plc plm">
		<!--{if $locations[$post[pid]]}-->
			<div class="mobile-location">$locations[$post[pid]][location]</div>
		<!--{/if}-->

		<!--{if !IS_ROBOT && $post['first'] && !$_G['forum_thread']['archiveid']}-->

<!--{if $post['invisible'] == 0}-->

	<div class="viem_share">
		 <div class="bdsharebuttonbox z">
			  <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>				   		   
			  <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
			  <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>	
			  <a href="#" class="bds_more" data-cmd="more"></a>
		 </div>
        
      <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":["mshare","qzone","kaixin001","tieba","sqq"],"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
             
		<span class="pipe z" style=" margin: 5px 5px 0 0;">|</span>

         <a href="home.php?mod=spacecp&ac=favorite&type=thread&id=$_G[tid]&formhash={FORMHASH}" id="k_favorite" class="k_favorite z" onclick="showWindow(this.id, this.href, 'get', 0);" onmouseover="this.title = $('favoritenumber').innerHTML + ' {lang activity_member_unit}{lang thread_favorite}'" title="{lang fav_thread}"><span id="favoritenumber">{$_G['forum_thread']['favtimes']}</span> 人收藏</a>       

   </div>

				<div id="p_btn" class="mtw mbm hm cl y">
				<!--{if !empty($_G['setting']['pluginhooks']['viewthread_share_method'])}-->
						<div class="tshare h2o_ab_dn cl">
							<b>{lang viewthread_share_to}:&nbsp;</b>
							<!--{hook/viewthread_share_method}-->
						</div>
					<!--{/if}-->

					<!--{if $_G['group']['raterange'] && $post['authorid']}-->
						<a href="javascript:;" id="ak_rate" onclick="showWindow('rate', 'forum.php?mod=misc&action=rate&tid=$_G[tid]&pid=$post[pid]', 'get', -1);return false;" title="{lang rate_position}"><i><img src="{IMGDIR}/agree.gif" alt="{lang rate}" />{lang rate}</i></a>
					<!--{/if}-->
					<!--{if $post['first'] && helper_access::check_module('share')}-->
						<a class="sharep" href="home.php?mod=spacecp&ac=share&type=thread&id=$_G[tid]" onclick="showWindow('sharethread', this.href, 'get', 0);" title="{lang share_digest}"><i><img src="{IMGDIR}/oshr.png" alt="{lang thread_share}" />{lang thread_share}<!--{if $_G['forum_thread']['sharetimes']}--><span id="sharenumber">{$_G['forum_thread']['sharetimes']}</span><!--{/if}--></i></a>
					<!--{/if}-->

					<!--{if !$_G['forum']['disablecollect'] && helper_access::check_module('collection')}-->
						<a href="forum.php?mod=collection&action=edit&op=addthread&tid=$_G[tid]" id="k_collect" onclick="showWindow(this.id, this.href);return false;" onmouseover="this.title = $('collectionnumber').innerHTML + ' {lang activity_member_unit}{lang collection}'" title="{lang thread_collect}"><i><img src="{IMGDIR}/collection.png" alt="{lang thread_share}" />{lang collection}<span id="collectionnumber"{if !$post['releatcollectionnum']} style="display:none"{/if}>{$post['releatcollectionnum']}</span></i></a>
					<!--{/if}-->
					<!--{if ($_G['group']['allowrecommend'] || !$_G['uid']) && $_G['setting']['recommendthread']['status']}-->
						<!--{if !empty($_G['setting']['recommendthread']['addtext'])}-->
						<a id="recommend_add" href="forum.php?mod=misc&action=recommend&do=add&tid=$_G[tid]&hash={FORMHASH}" {if $_G['uid']}onclick="ajaxmenu(this, 3000, 1, 0, '43', 'recommendupdate({$_G['group']['allowrecommend']})');return false;"{else} onclick="showWindow('login', this.href)"{/if} onmouseover="this.title = $('recommendv_add').innerHTML + ' {lang activity_member_unit}$_G[setting][recommendthread][addtext]'" title="{lang maketoponce}"><i><img src="{IMGDIR}/rec_add.gif" alt="$_G['setting']['recommendthread'][addtext]" />$_G['setting']['recommendthread'][addtext]<span id="recommendv_add"{if !$_G['forum_thread']['recommend_add']} style="display:none"{/if}>$_G[forum_thread][recommend_add]</span></i></a>
						<!--{/if}-->
						<!--{if !empty($_G['setting']['recommendthread']['subtracttext'])}-->
						<a id="recommend_subtract" href="forum.php?mod=misc&action=recommend&do=subtract&tid=$_G[tid]&hash={FORMHASH}" {if $_G['uid']}onclick="ajaxmenu(this, 3000, 1, 0, '43', 'recommendupdate(-{$_G['group']['allowrecommend']})');return false;"{else} onclick="showWindow('login', this.href)"{/if} onmouseover="this.title = $('recommendv_subtract').innerHTML + ' {lang activity_member_unit}$_G[setting][recommendthread][subtracttext]'" title="{lang makebottomonce}"><i><img src="{IMGDIR}/rec_subtract.gif" alt="$_G['setting']['recommendthread'][subtracttext]" />$_G['setting']['recommendthread'][subtracttext]<span id="recommendv_subtract"{if !$_G['forum_thread']['recommend_sub']} style="display:none"{/if}>$_G[forum_thread][recommend_sub]</span></i></a>
						<!--{/if}-->
					<!--{/if}-->
					<!--{hook/viewthread_useraction}-->
				</div>
			<!--{/if}-->

		<!--{/if}-->
		<div style="clear:both;"></div>

		<!--{if $post['relateitem']}-->
			<div class="mtw mbw">
				<h3 class="pbm mbm bbda xgtz"><span>{lang related_thread}</span></h3>
				<ul class="xl xl2 cl">
					<!--{loop $post['relateitem'] $var}-->
					<li>． <a href="forum.php?mod=viewthread&tid=$var[tid]" title="$var[subject]" target="_blank">$var[subject]</a></li>
					<!--{/loop}-->
				</ul>
			</div>
		<!--{/if}-->
		<!--{if $post['signature'] && ($_G['setting']['bannedmessages'] & 4 && ($post['memberstatus'] == '-1' || ($post['authorid'] && !$post['username']) || ($post['groupid'] == 4 || $post['groupid'] == 5) || ($post['status'] & 1)))}-->
			<div class="sign">{lang member_signature_banned}</div>
		<!--{elseif $post['signature'] && !$post['anonymous'] && $showsignatures}-->
			<div class="sign" style="max-height:{$_G['setting']['maxsigrows']}px;maxHeightIE:{$_G['setting']['maxsigrows']}px;">$post[signature]</div>
		<!--{elseif !$post['anonymous'] && $showsignatures && $_G['setting']['globalsightml']}-->
			<div class="sign">$_G['setting']['globalsightml']</div>
		<!--{/if}-->
		<!--{hook/viewthread_postsightmlafter $postcount}-->
		<!--{ad/thread/a_pb/1/$postcount}-->
	</td>
</tr>
<tr id="_postposition$post['pid']"></tr>
<!--{if !$_G['forum_thread']['archiveid']}-->
<tr>
	<!--{if !$post['first']}-->
	<td class="pls"></td>
	<!--{/if}-->
	<td class="plc" style="overflow:visible;">
		<div class="po hin">
			<!--{if !$post['first'] && $modmenu['post']}-->
				<span class="y">
				<label for="manage$post[pid]">
				<input type="checkbox" id="manage$post[pid]" class="pc" {if !empty($modclick)}checked="checked" {/if}onclick="pidchecked(this);modclick(this, $post[pid])" value="$post[pid]" autocomplete="off" />
				{lang manage}
				</label>
				</span>
			<!--{/if}-->
			<div class="pob cl">
				<em>
					<!--{if $post['invisible'] == 0}-->
						<!--{if $allowpostreply && $post['allowcomment'] && (!$thread['closed'] || $_G['forum']['ismoderator'])}--><a class="cmmnt" href="forum.php?mod=misc&action=comment&tid=$post[tid]&pid=$post[pid]&extra=$_GET[extra]&page=$page{if $_G['forum_thread']['special'] == 127}&special=$specialextra{/if}" onclick="showWindow('comment', this.href, 'get', 0)">{lang comments}</a><!--{/if}-->
					<!--{if (!$_G['uid'] || $allowpostreply) && !$needhiddenreply}-->
						<!--{if $post['first']}-->
							<a class="fastre" href="forum.php?mod=post&action=reply&fid=$_G[fid]&tid=$_G[tid]&reppost=$post[pid]&extra=$_GET[extra]&page=$page" onclick="showWindow('reply', this.href)">{lang reply}</a>
						<!--{else}-->
							<a class="fastre" href="forum.php?mod=post&action=reply&fid=$_G[fid]&tid=$_G[tid]&repquote=$post[pid]&extra=$_GET[extra]&page=$page" onclick="showWindow('reply', this.href)">{lang reply}</a>
						<!--{/if}-->
					<!--{/if}-->
					<!--{/if}-->
					<!--{if (($_G['forum']['ismoderator'] && $_G['group']['alloweditpost'] && (!in_array($post['adminid'], array(1, 2, 3)) || $_G['adminid'] <= $post['adminid'])) || ($_G['forum']['alloweditpost'] && $_G['uid'] && ($post['authorid'] == $_G['uid'] && $_G['forum_thread']['closed'] == 0) && !(!$alloweditpost_status && $edittimelimit && TIMESTAMP - $post['dbdateline'] > $edittimelimit)))}-->
						<a class="editp" href="forum.php?mod=post&action=edit&fid=$_G[fid]&tid=$_G[tid]&pid=$post[pid]{if !empty($_GET[modthreadkey])}&modthreadkey=$_GET[modthreadkey]{/if}&page=$page"><!--{if $_G['forum_thread']['special'] == 2 && !$post['message']}-->{lang post_add_aboutcounter}<!--{else}-->{lang edit}</a><!--{/if}-->
					<!--{elseif $_G['uid'] && $post['authorid'] == $_G['uid'] && $_G['setting']['postappend']}-->
						<a class="appendp" href="forum.php?mod=misc&action=postappend&tid=$post[tid]&pid=$post[pid]&extra=$_GET[extra]&page=$page" onClick="showWindow('postappend', this.href, 'get', 0)">{lang postappend}</a>
					<!--{/if}-->
					<!--{if $post['first'] && $post['invisible'] == -3}-->
						<!--<a class="psave" href="forum.php?mod=misc&action=pubsave&tid=$_G[tid]">{lang published}</a>-->
					<!--{/if}-->
					<!--{if $post['invisible'] == -2 && !$post['first']}-->
						<span class="xg1">({lang moderate_need})</span>
					<!--{/if}-->
					<!--{if $post['first'] && $allowblockrecommend}--><a class="push" href="javascript:;" onclick="modaction('recommend', '$_G[forum_firstpid]', 'op=recommend&idtype={if $_G[forum_thread][isgroup]}gtid{else}tid{/if}&id=$_G[tid]&pid=$post[pid]', 'portal.php?mod=portalcp&ac=portalblock')">{lang modmenu_blockrecommend}</a><!--{/if}-->
					<!--{if !$_G['forum_thread']['special'] && !$rushreply && !$hiddenreplies && $_G['setting']['repliesrank'] && !$post['first'] && !($post['isWater'] && $_G['setting']['filterednovote'])}-->
					<a class="replyadd" href="forum.php?mod=misc&action=postreview&do=support&tid=$_G[tid]&pid=$post[pid]&hash={FORMHASH}" {if $_G['uid']}onclick="ajaxmenu(this, 3000, 1, 0, '43', '');return false;"{else} onclick="showWindow('login', this.href)"{/if} onmouseover="this.title = ($('review_support_$post[pid]').innerHTML ? $('review_support_$post[pid]').innerHTML : 0) + ' {lang activity_member_unit} {lang support_reply}'">{lang support_reply} <span id="review_support_$post[pid]">$post[postreview][support]</span></a>
					<a class="replysubtract" href="forum.php?mod=misc&action=postreview&do=against&tid=$_G[tid]&pid=$post[pid]&hash={FORMHASH}" {if $_G['uid']}onclick="ajaxmenu(this, 3000, 1, 0, '43', '');return false;"{else} onclick="showWindow('login', this.href)"{/if} onmouseover="this.title = ($('review_against_$post[pid]').innerHTML ? $('review_against_$post[pid]').innerHTML : 0) + ' {lang activity_member_unit} {lang against_reply}'">{lang against_reply} <span id="review_against_$post[pid]">$post[postreview][against]</span></a>
					<!--{/if}-->
					<!--{hook/viewthread_postfooter $postcount}-->
				</em>

				<p>
					<!--{if $post['invisible'] == 0}-->
						<!--{if $_G['setting']['magicstatus']}-->
							<a href="javascript:;" id="mgc_post_$post[pid]" onmouseover="showMenu(this.id)" class="showmenu">{lang thread_magic}</a>
						<!--{/if}-->

						<!--{if $_G['forum_thread']['special'] == 3 && ($_G['forum']['ismoderator'] && (!$_G['setting']['rewardexpiration'] || $_G['setting']['rewardexpiration'] > 0 && ($_G[timestamp] - $_G['forum_thread']['dateline']) / 86400 > $_G['setting']['rewardexpiration']) || $_G['forum_thread']['authorid'] == $_G['uid']) && $post['authorid'] != $_G['forum_thread']['authorid'] && $post['first'] == 0 && $_G['uid'] != $post['authorid'] && $_G['forum_thread']['price'] > 0}-->
							<a href="javascript:;" onclick="setanswer($post['pid'], '$_GET[from]')">{lang reward_set_bestanswer}</a>
						<!--{/if}-->

						<!--{if $_G['group']['raterange'] && $post['authorid']}-->
							<a href="javascript:;" onclick="showWindow('rate', 'forum.php?mod=misc&action=rate&tid=$_G[tid]&pid=$post[pid]', 'get', -1);return false;">{lang rate}</a>
						<!--{/if}-->

						<!--{if !empty($postlist[$post[pid]]['totalrate']) && $_G['forum']['ismoderator']}-->
							<a href="forum.php?mod=misc&action=removerate&tid=$_G[tid]&pid=$post[pid]&page=$page" onclick="showWindow('rate', this.href, 'get', -1)">{lang removerate}</a>
						<!--{/if}-->
						<!--{if $post['authorid'] != $_G['uid']}-->
							<a href="javascript:;" onclick="showWindow('miscreport$post[pid]', 'misc.php?mod=report&rtype=post&rid=$post[pid]&tid=$_G[tid]&fid=$_G[fid]', 'get', -1);return false;">{lang report}</a>
						<!--{/if}-->
					<!--{/if}-->
					<!--{hook/viewthread_postaction $postcount}-->
				</p>

				<!--{if $_G['setting']['magicstatus']}-->
					<ul id="mgc_post_$post[pid]_menu" class="p_pop mgcmn" style="display: none;">
					<!--{if $post['first']}-->
						<!--{if !empty($_G['setting']['magics']['bump'])}-->
							<li><a href="home.php?mod=magic&mid=bump&idtype=tid&id=$_G[tid]" id="a_bump" onclick="showWindow(this.id, this.href)"><img src="{STATICURL}image/magic/bump.small.gif" />$_G['setting']['magics']['bump']</a></li>
						<!--{/if}-->
						<!--{if !empty($_G['setting']['magics']['stick'])}-->
							<li><a href="home.php?mod=magic&mid=stick&idtype=tid&id=$_G[tid]" id="a_stick" onclick="showWindow(this.id, this.href)"><img src="{STATICURL}image/magic/stick.small.gif" />$_G['setting']['magics']['stick']</a></li>
						<!--{/if}-->
						<!--{if !empty($_G['setting']['magics']['close'])}-->
							<li><a href="home.php?mod=magic&mid=close&idtype=tid&id=$_G[tid]" id="a_stick" onclick="showWindow(this.id, this.href)"><img src="{STATICURL}image/magic/close.small.gif" />$_G['setting']['magics']['close']</a></li>
						<!--{/if}-->
						<!--{if !empty($_G['setting']['magics']['open'])}-->
							<li><a href="home.php?mod=magic&mid=open&idtype=tid&id=$_G[tid]" id="a_stick" onclick="showWindow(this.id, this.href)"><img src="{STATICURL}image/magic/open.small.gif" />$_G['setting']['magics']['open']</a></li>
						<!--{/if}-->
						<!--{if !empty($_G['setting']['magics']['highlight'])}-->
							<li><a href="home.php?mod=magic&mid=highlight&idtype=tid&id=$_G[tid]" id="a_stick" onclick="showWindow(this.id, this.href)"><img src="{STATICURL}image/magic/highlight.small.gif" />$_G['setting']['magics']['highlight']</a></li>
						<!--{/if}-->
						<!--{if !empty($_G['setting']['magics']['sofa'])}-->
							<li><a href="home.php?mod=magic&mid=sofa&idtype=tid&id=$_G[tid]" id="a_stick" onclick="showWindow(this.id, this.href)"><img src="{STATICURL}image/magic/sofa.small.gif" />$_G['setting']['magics']['sofa']</a></li>
						<!--{/if}-->
						<!--{if !empty($_G['setting']['magics']['jack'])}-->
							<li><a href="home.php?mod=magic&mid=jack&idtype=tid&id=$_G[tid]" id="a_jack" onclick="showWindow(this.id, this.href)"><img src="{STATICURL}image/magic/jack.small.gif" />$_G['setting']['magics']['jack']</a></li>
						<!--{/if}-->
						<!--{hook/viewthread_magic_thread}-->
					<!--{/if}-->
					<!--{if !empty($_G['setting']['magics']['repent']) && $post['authorid'] == $_G['uid'] && !$rushreply}-->
						<li><a href="home.php?mod=magic&mid=repent&idtype=pid&id=$post[pid]:$_G[tid]" id="a_repent_$post[pid]" onclick="showWindow(this.id, this.href)"><img src="{STATICURL}image/magic/repent.small.gif" />$_G['setting']['magics']['repent']</a></li>
					<!--{/if}-->
					<!--{if !empty($_G['setting']['magics']['anonymouspost']) && $post['authorid'] == $_G['uid']}-->
						<li><a href="home.php?mod=magic&mid=anonymouspost&idtype=pid&id=$post[pid]:$_G[tid]" id="a_anonymouspost_$post[pid]" onclick="showWindow(this.id, this.href)"><img src="{STATICURL}image/magic/anonymouspost.small.gif" />$_G['setting']['magics']['anonymouspost']</a><li>
					<!--{/if}-->
					<!--{if !empty($_G['setting']['magics']['namepost'])}-->
						<li><a href="home.php?mod=magic&mid=namepost&idtype=pid&id=$post[pid]:$_G[tid]" id="a_namepost_$post[pid]" onclick="showWindow(this.id, this.href)"><img src="{STATICURL}image/magic/namepost.small.gif" />$_G['setting']['magics']['namepost']</a><li>
					<!--{/if}-->
					<!--{hook/viewthread_magic_post $postcount}-->
					</ul>
					<script type="text/javascript" reload="1">checkmgcmn('post_$post[pid]')</script>			
				<!--{/if}-->
			</div>
		</div>
	</td>
</tr>
<!--{/if}-->
<tr class="ad">
	<td class="pls">
	<!--{if !$post['first'] }-->
	</td>
	<td class="plc">
	<!--{/if}-->
		<!--{if $post['first'] && $_G[forum_thread][special] == 5 && $_G[forum_thread][displayorder] >= 0}-->
			<ul class="ttp cl">
				<li style="display:inline;margin-left:12px"><strong class="bw0 bg0_all">{lang debate_filter}: </strong></li>
				<li{if !isset($_GET['stand'])} class="xw1 a"{/if}><a href="forum.php?mod=viewthread&tid=$_G[tid]&extra=$_GET[extra]" hidefocus="true">{lang all}</a></li>
				<li{if $_GET['stand'] == 1} class="xw1 a"{/if}><a href="forum.php?mod=viewthread&tid=$_G[tid]&extra=$_GET[extra]&stand=1" hidefocus="true">{lang debate_square}</a></li>
				<li{if $_GET['stand'] == 2} class="xw1 a"{/if}><a href="forum.php?mod=viewthread&tid=$_G[tid]&extra=$_GET[extra]&stand=2" hidefocus="true">{lang debate_opponent}</a></li>
				<li{if isset($_GET['stand']) && $_GET['stand'] == 0} class="xw1 a"{/if}><a href="forum.php?mod=viewthread&tid=$_G[tid]&extra=$_GET[extra]&stand=0" hidefocus="true">{lang debate_neutral}</a></li>
			</ul>
		<!--{/if}-->
		<!--{if $_G['forum_thread']['replies']}--><!--{ad/interthread/a_p/$postcount}--><!--{/if}-->
	</td>
</tr>
</table>

<!--{if !empty($aimgs[$post[pid]])}-->
<script type="text/javascript" reload="1">
	aimgcount[{$post[pid]}] = [<!--{echo dimplode($aimgs[$post[pid]]);}-->];
	attachimggroup($post['pid']);
	<!--{if empty($_G['setting']['lazyload'])}-->
		<!--{if !$post['imagelistthumb']}-->
			attachimgshow($post[pid]);
		<!--{else}-->
			attachimgshow($post[pid], 1);
		<!--{/if}-->
	<!--{/if}-->
	var aimgfid = 0;
	<!--{if $_G['forum']['picstyle'] && ($_G['forum']['ismoderator'] || $_G['uid'] == $_G['thread']['authorid'])}-->
		aimgfid = $_G[fid];
	<!--{/if}-->
	<!--{if $post['imagelistthumb']}-->
		attachimglstshow($post['pid'], <!--{echo intval($_G['setting']['lazyload'])}-->, aimgfid, '{$_G[setting][showexif]}');
	<!--{/if}-->
</script>
<!--{/if}-->
<!--{else}-->
	<table id="pid$post[pid]" summary="pid$post[pid]" cellspacing="0" cellpadding="0" class="boxtable">
	<tbody>
		<tr>
			
			<td class="pls"></td>
			
			<td class="plc" style="width:100%">
				<div class="pi">
					<strong><a><!--{if !empty($postno[$post[number]])}-->$postno[$post[number]]<!--{else}--><em>{$post[number]}</em>{$postno[0]}<!--{/if}--></a></strong>
				</div>
				<div class="pct">{lang post_deleted}</div>
			</td>
		</tr>
		<tr class="ad">
			
			<td class="pls"></td>
			
			<td class="plc"></td>
		</tr>
	</tbody>
</table>
<!--{/if}-->

<!--{hook/viewthread_endline $postcount}-->


