<?php echo '请购买新视界discuz商业模板，客服QQ:2413248487';exit;?>

<!--{template common/header}-->

<link href="template/h2o_2018_qing/common/f_v.css" rel="stylesheet" type="text/css" />
<!--{eval $authorlist = C::t('forum_thread')->fetch_all_by_authorid_displayorder($_G[forum_thread][authorid], 0,'>=',  0,  '', 0, 5);}-->

<script type="text/javascript">var fid = parseInt('$_G[fid]'), tid = parseInt('$_G[tid]');</script>
<!--{if $modmenu['thread'] || $modmenu['post']}-->
	<script type="text/javascript" src="{$_G['setting']['jspath']}forum_moderate.js?{VERHASH}"></script>
<!--{/if}-->

<script type="text/javascript" src="{$_G['setting']['jspath']}forum_viewthread.js?{VERHASH}"></script>
<script type="text/javascript">zoomstatus = parseInt($_G['setting']['zoomstatus']);var imagemaxwidth = '{$_G['setting']['imagemaxwidth']}';var aimgcount = new Array();</script>

<style id="diy_style" type="text/css"></style>

<div id="pt" class="bm cl">
	<div class="z">
		<a href="./" class="nvhm" title="{lang homepage}">$_G[setting][bbname]</a><em>&raquo;</em><a href="forum.php">{$_G[setting][navs][2][navname]}</a>$navigation <em>&rsaquo;</em> <a href="forum.php?mod=viewthread&tid=$_G[tid]">$_G[forum_thread][short_subject]</a>
	</div>
</div>

<!--{hook/viewthread_top}-->
<!--{ad/text/wp a_t}-->

<div id="ct" class="wp cl ct2">

<!--[diy=diyviewthreadhd]--><div id="diyviewthreadhd" class="area"></div><!--[/diy]-->

<!--{if $modmenu['thread']}-->
	<div id="modmenu" class="xi2 pbm">
		<!--{eval $modopt=0;}-->
		<!--{if $_G['forum']['ismoderator']}-->
			<!--{if $_G['group']['allowdelpost']}--><!--{eval $modopt++}--><a href="javascript:;" onclick="modthreads(3, 'delete')">{lang modmenu_deletethread}</a><span class="pipe">|</span><!--{/if}-->
			<!--{if $_G['group']['allowbumpthread'] && !$_G['forum_thread']['is_archived']}--><!--{eval $modopt++}--><a href="javascript:;" onclick="modthreads(3, 'bump')">{lang modmenu_updown}</a><span class="pipe">|</span><!--{/if}-->
			<!--{if $_G['group']['allowstickthread'] && ($_G['forum_thread']['displayorder'] <= 3 || $_G['adminid'] == 1) && !$_G['forum_thread']['is_archived']}--><!--{eval $modopt++}--><a href="javascript:;" onclick="modthreads(1, 'stick')">{lang modmenu_stickthread}</a><span class="pipe">|</span><!--{/if}-->
			<!--{if $_G['group']['allowlivethread'] && !$_G['forum_thread']['is_archived']}--><!--{eval $modopt++}--><a href="javascript:;" onclick="modaction('live')">{lang modmenu_live}</a><span class="pipe">|</span><!--{/if}-->
			<!--{if $_G['group']['allowhighlightthread'] && !$_G['forum_thread']['is_archived']}--><!--{eval $modopt++}--><a href="javascript:;" onclick="modthreads(1, 'highlight')">{lang modmenu_highlight}</a><span class="pipe">|</span><!--{/if}-->
			<!--{if $_G['group']['allowdigestthread'] && !$_G['forum_thread']['is_archived']}--><!--{eval $modopt++}--><a href="javascript:;" onclick="modthreads(1, 'digest')">{lang modmenu_digestpost}</a><span class="pipe">|</span><!--{/if}-->
			<!--{if $_G['group']['allowrecommendthread'] && !empty($_G['forum']['modrecommend']['open']) && $_G['forum']['modrecommend']['sort'] != 1 && !$_G['forum_thread']['is_archived']}--><!--{eval $modopt++}--><a href="javascript:;" onclick="modthreads(1, 'recommend')">{lang modmenu_recommend}</a><span class="pipe">|</span><!--{/if}-->
			<!--{if $_G['group']['allowstampthread'] && !$_G['forum_thread']['is_archived']}--><!--{eval $modopt++}--><a href="javascript:;" onclick="modaction('stamp')">{lang modmenu_stamp}</a><span class="pipe">|</span><!--{/if}-->
			<!--{if $_G['group']['allowstamplist'] && !$_G['forum_thread']['is_archived']}--><!--{eval $modopt++}--><a href="javascript:;" onclick="modaction('stamplist')">{lang modmenu_icon}</a><span class="pipe">|</span><!--{/if}-->
			<!--{if $_G['group']['allowclosethread'] && !$_G['forum_thread']['is_archived'] && $_G['forum']['status'] != 3}--><!--{eval $modopt++}--><a href="javascript:;" onclick="modthreads(4)"><!--{if !$_G['forum_thread']['closed']}-->{lang modmenu_switch_off}<!--{else}-->{lang modmenu_switch_on}<!--{/if}--></a><span class="pipe">|</span><!--{/if}-->
			<!--{if $_G['group']['allowmovethread'] && !$_G['forum_thread']['is_archived'] && $_G['forum']['status'] != 3}--><!--{eval $modopt++}--><a href="javascript:;" onclick="modthreads(2, 'move')">{lang modmenu_move}</a><span class="pipe">|</span><!--{/if}-->
			<!--{if $_G['group']['allowedittypethread'] && !$_G['forum_thread']['is_archived']}--><!--{eval $modopt++}--><a href="javascript:;" onclick="modthreads(2, 'type')">{lang modmenu_type}</a><span class="pipe">|</span><!--{/if}-->
			<!--{if !$_G['forum_thread']['special'] && !$_G['forum_thread']['is_archived']}-->
				<!--{if $_G['group']['allowcopythread'] && $_G['forum']['status'] != 3}--><!--{eval $modopt++}--><a href="javascript:;" onclick="modaction('copy')">{lang modmenu_copy}</a><span class="pipe">|</span><!--{/if}-->
				<!--{if $_G['group']['allowmergethread'] && $_G['forum']['status'] != 3}--><!--{eval $modopt++}--><a href="javascript:;" onclick="modaction('merge')">{lang modmenu_merge}</a><span class="pipe">|</span><!--{/if}-->
				<!--{if $_G['group']['allowrefund'] && $_G['forum_thread']['price'] > 0}--><!--{eval $modopt++}--><a href="javascript:;" onclick="modaction('refund')">{lang modmenu_restore}</a><span class="pipe">|</span><!--{/if}-->
			<!--{/if}-->
			<!--{if $_G['group']['allowsplitthread'] && !$_G['forum_thread']['is_archived'] && $_G['forum']['status'] != 3}--><!--{eval $modopt++}--><a href="javascript:;" onclick="modaction('split')">{lang modmenu_split}</a><span class="pipe">|</span><!--{/if}-->
			<!--{if $_G['group']['allowrepairthread'] && !$_G['forum_thread']['is_archived']}--><!--{eval $modopt++}--><a href="javascript:;" onclick="modaction('repair')">{lang modmenu_repair}</a><span class="pipe">|</span><!--{/if}-->
			<!--{if $_G['forum_thread']['is_archived'] && $_G['adminid'] == 1}--><!--{eval $modopt++}--><a href="javascript:;" onclick="modaction('restore', '', 'archiveid={$_G[forum_thread][archiveid]}')">{lang modmenu_archive}</a><span class="pipe">|</span><!--{/if}-->
			<!--{if $_G['forum_firstpid']}-->
				<!--{if $_G['group']['allowwarnpost']}--><!--{eval $modopt++}--><a href="javascript:;" onclick="modaction('warn', '$_G[forum_firstpid]')">{lang modmenu_warn}</a><span class="pipe">|</span><!--{/if}-->
				<!--{if $_G['group']['allowbanpost']}--><!--{eval $modopt++}--><a href="javascript:;" onclick="modaction('banpost', '$_G[forum_firstpid]')">{lang modmenu_banthread}</a><span class="pipe">|</span><!--{/if}-->
			<!--{/if}-->
			<!--{if $_G['group']['allowremovereward'] && $_G['forum_thread']['special'] == 3 && !$_G['forum_thread']['is_archived']}--><!--{eval $modopt++}--><a href="javascript:;" onclick="modaction('removereward')">{lang modmenu_removereward}</a><span class="pipe">|</span><!--{/if}-->
			<!--{if $_G['forum']['status'] == 3 && in_array($_G['adminid'], array('1','2')) && $_G['forum_thread']['closed'] < 1}--><a href="javascript:;" onclick="modthreads(5, 'recommend_group');return false;">{lang modmenu_grouprecommend}</a><span class="pipe">|</span><!--{/if}-->
			<!--{if $_G['group']['allowmanagetag']}--><a href="javascript:;" onclick="showWindow('mods', 'forum.php?mod=tag&op=manage&tid=$_G[tid]', 'get', 0)">{lang post_tag}</a><span class="pipe">|</span><!--{/if}-->
			<!--{if $_G['group']['alloweditusertag']}--><a href="javascript:;" onclick="showWindow('usertag', 'forum.php?mod=misc&action=usertag&tid=$_G[tid]', 'get', 0)">{lang usertag}</a><span class="pipe">|</span><!--{/if}-->
		<!--{/if}-->
		<!--{if $allowpusharticle && $allowpostarticle}--><!--{eval $modopt++}--><a href="portal.php?mod=portalcp&ac=article&from_idtype=tid&from_id=$_G['tid']">{lang modmenu_pusharticle}</a><span class="pipe">|</span><!--{/if}-->
		<!--{hook/viewthread_modoption}-->
	</div>
<!--{/if}-->

    <div class="mn">

        <div id="pgt" class="pgs mbm cl {if $modmenu['thread']}pbm bbs{/if}" style=" display:none;">
            <div class="pgt">$multipage</div>
            <span class="y pgb"{if $_G['setting']['visitedforums']} id="visitedforums" onmouseover="$('visitedforums').id = 'visitedforumstmp';this.id = 'visitedforums';showMenu({'ctrlid':this.id,'pos':'34'})"{/if}><a href="$upnavlink">{lang return_forumdisplay}</a></span>
            <!--{if $_G['forum']['threadsorts'] && $_G['forum']['threadsorts']['templatelist']}-->
                <!--{loop $_G['forum']['threadsorts']['types'] $id $name}-->
                    <button id="newspecial" class="pn pnc" onclick="location.href='forum.php?mod=post&action=newthread&fid=$_G[fid]&extra=$extra&sortid=$id'"><strong>{lang i_want}$name</strong></button>
                <!--{/loop}-->
            <!--{else}-->
                <!--{if !$_G['forum_thread']['is_archived']}--><a id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu({'ctrlid':this.id})"{if !$_G['forum']['allowspecialonly'] && empty($_G['forum']['picstyle']) && !$_G['forum']['threadsorts']['required']} onclick="showWindow('newthread', 'forum.php?mod=post&action=newthread&fid=$_G[fid]')"{else} onclick="location.href='forum.php?mod=post&action=newthread&fid=$_G[fid]';return false;"{/if} href="javascript:;" title="{lang send_posts}"><img src="{IMGDIR}/pn_post.png" alt="{lang send_posts}" /></a><!--{/if}-->
            <!--{/if}-->
            <!--{if $allowpostreply && !$_G['forum_thread']['archiveid']}-->
                <a id="post_reply" onclick="showWindow('reply', 'forum.php?mod=post&action=reply&fid=$_G[fid]&tid=$_G[tid]')" href="javascript:;" title="{lang reply}"><img src="{IMGDIR}/pn_reply.png" alt="{lang reply}" /></a>
            <!--{/if}-->
            <!--{hook/viewthread_postbutton_top}-->
        </div>
    
    <!--{if $_G['group']['allowpost'] && ($_G['group']['allowposttrade'] || $_G['group']['allowpostpoll'] || $_G['group']['allowpostreward'] || $_G['group']['allowpostactivity'] || $_G['group']['allowpostdebate'] || $_G['setting']['threadplugins'] || $_G['forum']['threadsorts'])}-->
        <ul class="p_pop" id="newspecial_menu" style="display: none">
            <!--{if !$_G['forum']['allowspecialonly']}--><li><a href="forum.php?mod=post&action=newthread&fid=$_G[fid]">{lang post_newthread}</a></li><!--{/if}-->
            <!--{if $_G['forum']['threadsorts'] && !$_G['forum']['allowspecialonly']}-->
                <!--{loop $_G['forum']['threadsorts']['types'] $id $threadsorts}-->
                    <!--{if $_G['forum']['threadsorts']['show'][$id]}-->
                        <li class="popupmenu_option"><a href="forum.php?mod=post&action=newthread&fid=$_G[fid]&sortid=$id">$threadsorts</a></li>
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
                        <li class="popupmenu_option"{if $_G['setting']['threadplugins'][$tpid][icon]} style="background-image:url(source/plugin/$tpid/$_G['setting']['threadplugins'][$tpid][icon])"{/if}><a href="forum.php?mod=post&action=newthread&fid=$_G[fid]&specialextra=$tpid">{$_G['setting']['threadplugins'][$tpid][name]}</a></li>
                    <!--{/if}-->
                <!--{/loop}-->
            <!--{/if}-->
        </ul>
    <!--{/if}-->
    
    <!--{if $modmenu['post']}-->
        <div id="mdly" class="fwinmask" style="display:none;z-index:350;">
            <table cellspacing="0" cellpadding="0" class="fwin">
                <tr>
                    <td class="t_l"></td>
                    <td class="t_c"></td>
                    <td class="t_r"></td>
                </tr>
                <tr>
                    <td class="m_l">&nbsp;&nbsp;</td>
                    <td class="m_c">
                        <div class="f_c">
                            <div class="c">
                                <h3>{lang admin_select}&nbsp;<strong id="mdct" class="xi1"></strong>&nbsp;{lang piece}: </h3>
                                <!--{if $_G['forum']['ismoderator']}-->
                                    <!--{if $_G['group']['allowwarnpost']}--><a href="javascript:;" onclick="modaction('warn')">{lang modmenu_warn}</a><span class="pipe">|</span><!--{/if}-->
                                    <!--{if $_G['group']['allowbanpost']}--><a href="javascript:;" onclick="modaction('banpost')">{lang modmenu_banpost}</a><span class="pipe">|</span><!--{/if}-->
                                    <!--{if $_G['group']['allowdelpost'] && !$rushreply}--><a href="javascript:;" onclick="modaction('delpost')">{lang modmenu_deletepost}</a><span class="pipe">|</span><!--{/if}-->
                                <!--{/if}-->
                                <!--{if $_G['forum']['ismoderator'] && $_G['group']['allowstickreply'] || $_G['forum_thread']['authorid'] == $_G['uid']}--><a href="javascript:;" onclick="modaction('stickreply')">{lang modmenu_stickpost}</a><span class="pipe">|</span><!--{/if}-->
                                <!--{if $_G['forum_thread']['pushedaid'] && $allowpostarticle}--><a href="javascript:;" onclick="modaction('pushplus', '', 'aid=$_G[forum_thread][pushedaid]', 'portal.php?mod=portalcp&ac=article&op=pushplus')">{lang modmenu_pushplus}</a><span class="pipe">|</span><!--{/if}-->
                            </div>
                        </div>
                    </td>
                    <td class="m_r"></td>
                </tr>
                <tr>
                    <td class="b_l"></td>
                    <td class="b_c"></td>
                    <td class="b_r"></td>
                </tr>
            </table>
        </div>
    <!--{/if}-->
    
    <!--{hook/viewthread_beginline}-->
  
    <div id="postlist" class="pl bm">
  		
  		<!--{if $_G['forum_thread']['replycredit'] > 0 || $rushreply}-->
            <div id="pl_top" class="box mb20">
                <table cellspacing="0" cellpadding="0">
                    <tr class="ad">
                        <td class="pls"></td>
                        <td class="plc"></td>
                    </tr>
                    <!--{if $_G['forum_thread']['replycredit'] > 0 }-->
                        <tr>

                            <td class="pls ptm pbm xi1" colspan="2">

                                <img src="{IMGDIR}/thread_prize_s.png" class="hm" alt="{lang replycredit}" />
                                    <strong>{$_G['forum_thread']['replycredit']} {$_G['setting']['extcredits'][$_G[forum_thread][replycredit_rule][extcreditstype]][unit]}{$_G['setting']['extcredits'][$_G[forum_thread][replycredit_rule][extcreditstype]][title]}</strong>

                            &nbsp;&nbsp;&nbsp;&nbsp;

                                {lang thread_replycredit_tips1} {lang thread_replycredit_tips2}<!--{if $_G['forum_thread']['replycredit_rule'][random] > 0}--><span class="xg1">{lang thread_replycredit_tips3}</span><!--{/if}-->
                            </td>
                        </tr>
                        <!--{if $rushreply}-->
                        <tr class="ad">
                            <td class="pls"></td>
                            <td class="plc"></td>
                        </tr>
                        <!--{/if}-->
                <!--{/if}-->
        
                <!--{if $rushreply}-->
                    <tr>
                        <td class="plc ptm pbm xi1" colspan="2" style=" background: #fff;border-bottom: 0;">
                            <img src="{IMGDIR}/rushreply_s.png" class="vm" alt="{lang rushreply}" />

                            <!--{if $rushresult[rewardfloor]}-->
                                <span class="y">
                                <!--{if $_G['uid'] == $_G['thread']['authorid'] || $_G['forum']['ismoderator']}--><a href="javascript:;" onclick="showWindow('membernum', 'forum.php?mod=ajax&action=get_rushreply_membernum&tid=$_G[tid]')" class="y pn xi2"><span>{lang thread_rushreply_statnum}</span></a><!--{/if}-->
                                <!--{if !$_GET['checkrush']}-->
                                        <a href="forum.php?mod=viewthread&tid=$post[tid]&checkrush=1" rel="nofollow" class="y pn xi2"><span>{lang rushreply_view}</span></a>
                                <!--{/if}-->
                                </span>
                            <!--{/if}-->
                            <!--{if $rushresult[creditlimit] == ''}-->
                                {lang thread_rushreply}&nbsp;
                            <!--{else}-->
                                {lang thread_rushreply_limit} &nbsp;
                            <!--{/if}-->
                            <!--{if $rushresult['timer']}-->
                            <span id="rushtimer_$thread[tid]"> {lang havemore_special} <span id="rushtimer_body_$thread[tid]"></span> <script language="javascript">settimer($rushresult['timer'], 'rushtimer_body_$thread[tid]');</script>{if $rushresult['timertype'] == 'start'} {lang header_start} {else} {lang over} {/if} {lang right_special}</span>
                            <!--{/if}-->
                            <!--{if $rushresult[stopfloor]}-->
                                {lang thread_rushreply_end}$rushresult[stopfloor]&nbsp;
                            <!--{/if}-->
                            <!--{if $rushresult[rewardfloor]}-->
                                {lang thread_rushreply_floor}: $rushresult[rewardfloor]&nbsp;
                            <!--{/if}-->
                            <!--{if $rushresult[rewardfloor] && $_GET['checkrush']}-->
                                <p class="ptn">
                                    <!--{if $countrushpost}-->[<strong>$countrushpost</strong>]{lang thread_rushreply_rewardnum}<!--{else}--> {lang thread_rushreply_noreward} <!--{/if}-->&nbsp;&nbsp;
                                    <a href="forum.php?mod=viewthread&tid=$_G[tid]" class="xi2">{lang thread_rushreply_check_back}</a>
                                </p>
                            <!--{/if}-->
                        </td>
                    </tr>
                <!--{/if}-->
                </table>
            </div>
            <!--{/if}-->

        <!--{hook/viewthread_title_row}-->
    
        <table cellspacing="0" cellpadding="0" class="ad" style=" display:none;">
            <tr>
                <td class="pls">
                </td>
            </tr>
        </table>
        <!--{eval $postcount = 0;}-->
        <!--{loop $postlist $post}-->
            <!--{if $rushreply && $_GET['checkrush'] && $post['rewardfloor'] != 1}-->
                <!--{eval continue;}-->
            <!--{/if}--> 

			<!--{if $post['first']}-->
			<div id="post_$post[pid]" class="" {if $_G['blockedpids'] && $post['inblacklist']}style="display:none;"{/if}>
			    <div class="viewthead">			   
                    <!--{subtemplate forum/viewthread_node}-->
				</div>
            </div>

			<!--{if $post['first']}-->
<div class="reply_title cl">
	<span class="reply_nav">
		<a href="/t-13566900-1-o1" class="current">全部评论</a> | 

					<!--{if !$rushreply}-->
						<!--{if $ordertype != 1}-->
							<a href="forum.php?mod=viewthread&tid=$_G[tid]&extra=$_GET[extra]&ordertype=1"  class="show">正序排列</a>
						<!--{else}-->
							<a href="forum.php?mod=viewthread&tid=$_G[tid]&extra=$_GET[extra]&ordertype=2"  class="show">倒序排列</a>
						<!--{/if}-->
					<!--{/if}-->
	</span>
	<div class="nonstop">
			<!--{if $post['invisible'] == 0}-->
			<!--{if !IS_ROBOT && !$_GET['authorid'] && !$_G['forum_thread']['archiveid']}-->
				<a href="forum.php?mod=viewthread&tid=$post[tid]&page=$page&authorid=$post[authorid]" rel="nofollow">{lang thread_show_author}</a>
			<!--{elseif !$_G['forum_thread']['archiveid']}-->
				<a href="forum.php?mod=viewthread&tid=$post[tid]&page=$page" rel="nofollow">{lang thread_show_all}</a>
			<!--{/if}-->
		<!--{/if}-->
		<span class="pipe">|</span>
		<!--{if !$postcount && !$_G['forum_thread']['archiveid'] && $post['first'] }-->
		<div id="fj" class="y">
			<label class="z">楼层直达</label>
			<input type="text" class="px p_fre z" size="2" onkeyup="$('fj_btn').href='forum.php?mod=redirect&ptid=$_G[tid]&authorid=$_GET[authorid]&postno='+this.value" onkeydown="if(event.keyCode==13) {window.location=$('fj_btn').href;return false;}" title="{lang thread_redirect_postno_tips}" />
			<a href="javascript:;" id="fj_btn" class="z" title="{lang thread_redirect_postno_tips}"><img src="{IMGDIR}/fj_btn.png" alt="{lang thread_redirect_postno_tips}" class="vm" /></a>
		</div>
		<!--{/if}-->
	</div>
</div>
<!--{/if}-->

           <!--{else}-->
		    <!--{if $postcount == 0}-->
				<div class="reply_title cl"><a href="forum.php?mod=viewthread&tid=$_G[tid]" class="go_black">返回查看帖子内容</a></div>
			<!--{/if}-->
            <div id="post_$post[pid]" class="" {if $_G['blockedpids'] && $post['inblacklist']}style="display:none;"{/if}>
			    <div class="viewthead">			   
                    <!--{subtemplate forum/viewthread_node}-->
				</div>
            </div>
			<!--{/if}-->
            <!--{eval $postcount++;}-->
        <!--{/loop}-->
        <div id="postlistreply" class="pl"><div id="post_new" class="viewthread_table" style="display: none"></div></div>
        <!--{if $_G['blockedpids']}-->
            <div id='hiddenpoststip'><a href='javascript:display_blocked_post();'>{lang other_reply_hide}</a></div>
            <div id="hiddenposts"></div>
        <!--{/if}-->
    </div>
    
    <form method="post" autocomplete="off" name="modactions" id="modactions">
        <input type="hidden" name="formhash" value="{FORMHASH}" />
        <input type="hidden" name="optgroup" />
        <input type="hidden" name="operation" />
        <input type="hidden" name="listextra" value="$_GET[extra]" />
        <input type="hidden" name="page" value="$page" />
    </form>
    
    $_G['forum_tagscript']

    <div class="pgs mtm mbm cl">
        $multipage
    </div>
    
    <!--{hook/viewthread_middle}-->
    <!--[diy=diyfastposttop]--><div id="diyfastposttop" class="area"></div><!--[/diy]-->  
    <!--{hook/viewthread_bottom}-->

					<!--{if $fastpost}-->
                    <!--{subtemplate forum/viewthread_fastpost}-->
                <!--{/if}-->
    
    <!--{if ($_G['setting']['visitedforums']) && $_G['forum']['status'] != 3}-->
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
    <!--{if $_G['medal_list']}-->
    <!--{loop $_G['medal_list'] $medalid $medal}-->
        <div id="md_{$medalid}_menu" class="tip tip_4" style="display: none;">
            <div class="tip_horn"></div>
            <div class="tip_c">
                <h4>$medal[name]</h4>
                <p>$medal[description]</p>
            </div>
        </div>
    <!--{/loop}-->
    <!--{/if}-->
    
    <!--{if !IS_ROBOT && !empty($_G[setting][lazyload])}-->
        <script type="text/javascript">
        new lazyload();
        </script>
    <!--{/if}-->
    
    <!--{if !IS_ROBOT && $_G['setting']['threadmaxpages'] > 1}-->
        <script type="text/javascript">document.onkeyup = function(e){keyPageScroll(e, <!--{if $page > 1}-->1<!--{else}-->0<!--{/if}-->, <!--{if $page < $_G['setting']['threadmaxpages'] && $page < $_G['page_next']}-->1<!--{else}-->0<!--{/if}-->, 'forum.php?mod=viewthread&tid=$_G[tid]<!--{if $_GET[authorid]}-->&authorid=$_GET[authorid]<!--{/if}-->', $page);}</script>
    <!--{/if}-->
    </div>

<div class="sd sd_allbox" style="overflow: visible;">

	<div class="h2o-forum-grid"> 
    <div class="h2o-circle-info">		
        <div class="circle-avatar">
		    <a href="home.php?mod=space&uid=$_G[forum_thread][authorid]" title="$_G[forum_thread][author]" target="_blank"><!--{avatar($_G[forum_thread][authorid],big)}--></a>
        </div>

		<div class="h2o-viem-author">			
			<div class="authi"><a href="home.php?mod=space&uid=$_G[forum_thread]['authorid']" target="_blank" class="xw1"{if $_G[forum_thread][groupcolor]} style="color: $_G[forum_thread][groupcolor]"{/if}>$_G[forum_thread][author]</a></div>
    <!--{eval $thread_space=$space = getuserbyuid($_G[forum_thread][authorid], 1);}-->
    <!--{eval space_merge($thread_space, 'count');}-->

	<div class="authortitle"><!--{eval echo $_G['cache']['usergroups'][$thread_space[groupid]][grouptitle];}--></div>

    <div class="tns xg2">
		<table cellspacing="0" cellpadding="0">
			 <tbody>
				<tr>
					<th><p><a href="home.php?mod=space&amp;uid=1&amp;do=thread&amp;type=thread&amp;view=me&amp;from=space" class="xi2"><!--{eval echo $thread_space[threads];}--></a></p>主题</th>
					<th><p><a href="home.php?mod=space&amp;uid=1&amp;do=thread&amp;type=reply&amp;view=me&amp;from=space" class="xi2"><!--{eval echo $thread_space[posts];}--></a></p>帖子</th>
					<td><p><a href="javascript:void(0);" class="xi2"><!--{eval echo $thread_space[credits];}--></a></p>积分</td>
				</tr>
			 </tbody>
		</table>
	</div>

<!--{eval $h2o_authorid = $_G['forum_thread']['authorid']; $h2o_medals = DB::fetch_all("SELECT * FROM ".DB::table('common_member_medal')." WHERE `uid`= $h2o_authorid ORDER BY `medalid` ASC");}-->
<!--{if $h2o_medals}-->
<p class="md_ctrl">
   <a href="home.php?mod=medal">
<!--{loop $h2o_medals $h2o_medal}-->
<!--{eval $h2o_medaltubiao = DB::result(DB::query("SELECT image FROM ".DB::table('forum_medal')." WHERE medalid = '$h2o_medal[medalid]'"));}-->
      <img src="$_G['style']['styleimgdir']/common/$h2o_medaltubiao">
<!--{/loop}-->
   </a>
</p>
<!--{/if}-->

		</div>

	   <div class="h2o-bankuai-cz cl">
			<!--{if helper_access::check_module('follow')}-->
			<a href="home.php?mod=spacecp&ac=follow&op=add&hash={FORMHASH}&fuid=$_G[forum_thread][authorid]" id="followmod_$_G[forum_thread][authorid]" title="{lang follow}" class="xi2" onclick="showWindow('followmod', this.href, 'get', 0);" style=" background: #4fc277;width: 120px;color: #fff;">关注Ta</a>
			<!--{/if}-->
			<a href="home.php?mod=spacecp&ac=pm&op=showmsg&handlekey=showmsg_$_G[forum_thread][authorid]&touid=$_G[forum_thread][authorid]&pmid=0&daterange=2&pid=$_G[forum_thread][pid]&tid=$_G[forum_thread][tid]" onclick="showWindow('sendpm', this.href);" title="{lang viewthread_left_sendpm}" class="h2o-sendpm" style=" background: #1499f8;width: 120px;color: #fff;">{lang viewthread_left_sendpm}</a>
	  </div>
</div>


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

<div class="h2o-adminlist box cl">
   <h3>作者的其他帖子</h3>
<ul class="cl" style="padding: 19px 19px 0;">
    <!--{loop $authorlist $value}-->
    <!--{eval $h2o_ad_pic = substr($value[tid], -1); $threadpic = DB::fetch_all("SELECT * FROM ".DB::table('forum_attachment_'.$h2o_ad_pic.'')." WHERE `tid`= $value[tid] AND isimage = '1' ORDER BY `dateline` DESC limit 0 , 1");}-->
	<!--{eval require_once(DISCUZ_ROOT."./source/function/function_post.php");}-->

    <li>
	   <a href="forum.php?mod=viewthread&tid=$value[tid]" target="_blank">
	 <!--{loop $threadpic $h2o_ad_pic}-->
	    <!--{eval $piclist = getforumimg($h2o_ad_pic[aid], 0, 270, 180); }-->
	        <div class="h2o-pic-content"><img src="$piclist" alt="$value[subject]"></div>
	<!--{/loop}-->	       	   
		<p>$value[subject]</p>
        <p class="des"><!--{echo messagecutstr(DB::result_first('SELECT `message` FROM '.DB::table('forum_post').' WHERE `tid` ='.$value[tid].' AND `first` =1'),80);}--></p>

	   </a>
   </li>		
   <!--{/loop}-->
</ul>
</div>

<!--{hook/viewthread_title_extra}-->

</div>

	<div class="h2o_diy_box cl">
		<!--[diy=diyforumlisthot]--><div id="diyforumlisthot" class="area"></div><!--[/diy]-->
    </div>

	<div class="h2o_diy_box cl">
		<!--[diy=diyforumlisthy]--><div id="diyforumlisthy" class="area"></div><!--[/diy]-->
    </div>

	<div class="h2o_diy_box cl">
		<!--[diy=diy2]--><div id="diy2" class="area"></div><!--[/diy]-->
	</div>
    
</div>

</div>

</div>

<div class="wp mtn">
	<!--[diy=diy3]--><div id="diy3" class="area"></div><!--[/diy]-->
</div>
<!--{if $_G['relatedlinks'] || $_GET['highlight']}-->
	<script type="text/javascript">
		var relatedlink = [];
		<!--{loop $_G['relatedlinks'] $key $link}-->
		relatedlink[$key] = {'sname':'$link[name]', 'surl':'$link[url]'};
		<!--{/loop}-->
		{eval $highlights = explode(' ', str_replace(array('\'', chr(125)), array('&#039;', '&#125;'), dhtmlspecialchars($_GET['highlight'])));}
		<!--{loop $highlights $word}-->
		{eval $key++;}
		relatedlink[$key] = {'sname':'$word', 'surl':''};
		<!--{/loop}-->
		relatedlinks('postmessage_$_G[forum_firstpid]');
	</script>
<!--{/if}-->

<!--{if !empty($_G['cookie']['clearUserdata']) && $_G['cookie']['clearUserdata'] == 'forum'}-->
	<script type="text/javascript">saveUserdata('forum_'+discuz_uid, '')</script>
<!--{/if}-->

<script type="text/javascript">
<!--{if $_G['forum']['picstyle'] && ($_G['forum']['ismoderator'] || $_G['uid'] == $_G['thread']['authorid'])}-->
function showsetcover(obj) {
	if(obj.parentNode.id == 'postmessage_$_G[forum_firstpid]') {
		var defheight = $_G['setting']['forumpicstyle']['thumbheight'];
		var defwidth = $_G['setting']['forumpicstyle']['thumbwidth'];
		var newimgid = 'showcoverimg';
		var imgsrc = obj.src ? obj.src : obj.file;
		if(!imgsrc) return;

		var tempimg=new Image();
		tempimg.src=imgsrc;
		if(tempimg.complete) {
			if(tempimg.width < defwidth || tempimg.height < defheight) return;
		} else {
			return;
		}
		if($(newimgid) && obj.id != newimgid) {
			$(newimgid).id = 'img'+Math.random();
		}
		if($(newimgid+'_menu')) {
			var menudiv = $(newimgid+'_menu');
		} else {
			var menudiv = document.createElement('div');
			menudiv.className = 'tip tip_4 aimg_tip';
			menudiv.id = newimgid+'_menu';
			menudiv.style.position = 'absolute';
			menudiv.style.display = 'none';
			obj.parentNode.appendChild(menudiv);
		}
		menudiv.innerHTML = '<div class="tip_c xs0"><a onclick="showWindow(\'setcover_'+newimgid+'\', this.href)" href="forum.php?mod=ajax&amp;action=setthreadcover&amp;tid=$_G[tid]&amp;pid=$_G[forum_firstpid]&amp;fid=$_G[fid]&imgurl='+imgsrc+'">{lang set_cover}</a></div>';
		obj.id = newimgid;
		showMenu({'ctrlid':newimgid,'pos':'12'});
	}
	return;
}
<!--{/if}-->
function succeedhandle_followmod(url, msg, values) {
	var fObj = $('followmod_'+values['fuid']);
	if(values['type'] == 'add') {
		fObj.innerHTML = '{lang nofollow}';
		fObj.href = 'home.php?mod=spacecp&ac=follow&op=del&fuid='+values['fuid'];
	} else if(values['type'] == 'del') {
		fObj.innerHTML = '{lang follow}';
		fObj.href = 'home.php?mod=spacecp&ac=follow&op=add&hash={FORMHASH}&fuid='+values['fuid'];
	}
}
<!--{if $_G['blockedpids']}-->
var blockedPIDs = [<!--{echo implode(',', $_G['blockedpids'])}-->];
<!--{/if}-->
<!--{if $postlist && empty($_G['setting']['disfixedavatar'])}-->
fixed_avatar([<!--{echo implode(',', array_keys($postlist))}-->], {if empty($_G['setting']['disfixednv_viewthread']) }1{else}0{/if});
<!--{elseif empty($_G['setting']['disfixednv_viewthread'])}-->
fixed_top_nv();
<!--{/if}-->
</script>
<!--{template common/footer}-->
