<?php echo '请购买新视界discuz商业模板，客服QQ:2413248487';exit;?>
<!--{template common/header}-->
	<div id="pt" class="bm cl">
		<div class="z">
			<a href="./" class="nvhm" title="{lang homepage}">$_G[setting][bbname]</a><em>&raquo;</em><a href="group.php">{$_G[setting][navs][3][navname]}</a>$navigation
		</div>
	</div>
	<!--{ad/text/wp a_t}-->
	<style id="diy_style" type="text/css"></style>
	<div class="wp">
		<!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]-->
	</div>
	<div id="ct" class="ct2 wp cl" style="background: none;">
		<div class="mn">
			<!--[diy=diycontenttop]--><div id="diycontenttop" class="area"></div><!--[/diy]-->
			<div class="bm bmw">
				<div class="bm_h cl" style="background: #fff;border-right: 0;border-left: 0;">
					<span class="y xw1"><a href="group.php?mod=my">{lang my_group} &rsaquo;</a></span>
					<h2>{lang group_focus}</h2>
				</div>
				<!--[diy=diy5]--><div id="diy5" class="area"></div><!--[/diy]-->
			</div>
			<!--[diy=diycommendtop]--><div id="diycommendtop" class="area"></div><!--[/diy]-->
			<!--{hook/index_header}-->
			<div id="g_commend" class="bm">
				<div class="bm_h cl">
					<h2>{lang recommend_group}</h2>
				</div>
				<div class="bm_c cl">
					<!--{loop dunserialize($_G['setting']['group_recommend']) $val}-->
					<dl class="xld">
						<dd class="m"><a href="forum.php?mod=group&fid=$val[fid]"><img src="$val[icon]" alt="$val[name]" width="48" height="48" /></a></dd>
						<dt><a href="forum.php?mod=group&fid=$val[fid]">$val[name]</a></dt>
						<dd class="xg1">$val[description]</dd>
					</dl>
					<!--{/loop}-->
				</div>
			</div>

			<!--[diy=diycategorytop]--><div id="diycategorytop" class="area"></div><!--[/diy]-->
			<!--{hook/index_top}-->
			<div class="bm">
				<div class="bm_h cl">
					<h2>{lang group_categories}</h2>
				</div>
				<div class="bm_c">
					<!--{loop $first $groupid $group}-->
							<dl class="mbm pbm bbda">
								<dt class="pbn">
									<span class="y xi2"><!--{loop $group['secondlist'] $fid}--><a href="group.php?sgid=$fid">$second[$fid][name]</a> <!--{/loop}--><a href="group.php?gid=$groupid">{lang more} &rsaquo;</a></span>
									<strong class="xs2"><a href="group.php?gid=$groupid">$group[name]</a></strong><!--{if $group[groupnum]}--><span class="xg1">($group[groupnum])</span><!--{/if}-->
								</dt>
								<dd>
									<!--{loop $lastupdategroup[$groupid] $val}-->
										<a href="forum.php?mod=group&fid=$val[fid]">$val[name]</a> &nbsp;&nbsp;
									<!--{/loop}-->
								</dd>
							</dl>
					<!--{/loop}-->
				</div>
			</div>
			<!--[diy=diycontentbottom]--><div id="diycontentbottom" class="area"></div><!--[/diy]-->
			<!--{hook/index_bottom}-->
		</div>

		<div class="sd">
			<div class="drag">
				<!--[diy=diysidetop]--><div id="diysidetop" class="area"></div><!--[/diy]-->
			</div>
			<!--{hook/index_side_top}-->
			<!--{if helper_access::check_module('group')}-->
				<!--{if empty($gid) && empty($sgid)}-->
					<div class="bm">
						<div class="bm_h cl">
							<h2>{lang create_group_step}</h2>
						</div>
						<div class="bm_c">
							<ul id="g_guide" class="mbm">
								<li><label><strong class="xi1">{lang group_create}</strong><span class="xg1">{lang create_group_message1}</span></label></li>
								<li><label><strong class="xi1">{lang personality_setting}</strong><span class="xg1">{lang create_group_message2}</span></label></li>
								<li><label><strong class="xi1">{lang invite_friend}</strong><span class="xg1">{lang create_group_message3}</span></label></li>
								<li><label><strong class="xi1">{lang group_upgrade}</strong><span class="xg1">{lang create_group_message4}</span></label></li>
							</ul>
							<!--{if helper_access::check_module('group')}-->
							<a href="forum.php?mod=group&action=create" id="create_group_btn"><img src="{IMGDIR}/create_group.png" alt="{lang group_create}" style=" margin-left: 10px;" /></a>
							<!--{/if}-->
						</div>
					</div>
				<!--{else}-->
					<div class="bm bw0">
						<div class="bm_c">
							<a href="forum.php?mod=group&action=create&fupid=$fup&groupid=$sgid" id="create_group_btn"><img src="{IMGDIR}/create_group.png" alt="{lang group_create}" /></a>
						</div>
					</div>
				<!--{/if}-->
			<!--{/if}-->
			<div class="drag">
				<!--[diy=diysidemiddle]--><div id="diysidemiddle" class="area"></div><!--[/diy]-->
			</div>
			<!--{if $topgrouplist}-->
				<div id="g_top" class="bm">
					<div class="bm_h cl">
						<h2>{lang group_hot}</h2>
					</div>
					<div class="bm_c">
						<ol class="xl">
							<!--{loop $topgrouplist $fid $group}-->
							<li class="top1"><span class="y xi2 xg1"> $group[commoncredits]</span><a href="forum.php?mod=group&fid=$group[fid]" title="$group[name]">$group[name]</a></li>
							<!--{/loop}-->
						</ol>
					</div>
				</div>
			<!--{/if}-->
			<div class="drag">
				<!--[diy=diysidebottom]--><div id="diysidebottom" class="area"></div><!--[/diy]-->
			</div>
			<!--{hook/index_side_bottom}-->
		</div>
	</div>

<div class="wp mtn">
	<!--[diy=diy4]--><div id="diy4" class="area"></div><!--[/diy]-->
</div>

<!--{template common/footer}-->