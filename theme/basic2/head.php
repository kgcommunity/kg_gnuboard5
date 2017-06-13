<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<!-- 상단 시작 { -->
<div id="hd">
    <h1 id="hd_h1"><?php echo $g5['title'] ?></h1>

    <div id="skip_to_container"><a href="#container">본문 바로가기</a></div>

    <?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    }
    ?>

	<!--헤드-->

	<table width=100% cellpadding=0 cellspacing=0 border=0>
		<tr>
			<td height=130 align=center>

				<!--상단로고/배너-->
				<table width=1098 height=130 cellpadding=0 cellspacing=0 border=0>
					<tr>
						<td width=366><?php echo display_banner('1', 'b'); ?></td>
						<td width=366 align=center><?php echo display_banner('2', 'b'); ?></td>
						<td width=366 align=right><?php echo display_banner('3', 'b'); ?></td>
					</tr>
				</table>
				<!--상단로고/배너-->


			</td>
		</tr>
	</table>

	<!--헤드-->


    <nav id="gnb" style="background-color:#<?php echo ($config['cf_1']?$config['cf_1']:'#2157c5') ?>;">
        <h2>메인메뉴</h2>
        <ul id="gnb_1dul">
            <?php
            $sql = " select *
                        from {$g5['menu_table']}
                        where me_use = '1'
                          and length(me_code) = '2'
                        order by me_order, me_id ";
            $result = sql_query($sql, false);
            $gnb_zindex = 999; // gnb_1dli z-index 값 설정용

            for ($i=0; $row=sql_fetch_array($result); $i++) {
            ?>
            <li class="gnb_1dli" style="z-index:<?php echo $gnb_zindex--; ?>">
                <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="gnb_1da"><?php echo $row['me_name'] ?></a>
                <?php
                $sql2 = " select *
                            from {$g5['menu_table']}
                            where me_use = '1'
                              and length(me_code) = '4'
                              and substring(me_code, 1, 2) = '{$row['me_code']}'
                            order by me_order, me_id ";
                $result2 = sql_query($sql2);

                for ($k=0; $row2=sql_fetch_array($result2); $k++) {
                    if($k == 0)
                        echo '<ul class="gnb_2dul">'.PHP_EOL;
                ?>
                    <li class="gnb_2dli"><a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>" class="gnb_2da"><?php echo $row2['me_name'] ?></a></li>
                <?php
                }

                if($k > 0)
                    echo '</ul>'.PHP_EOL;
                ?>
            </li>
            <?php
            }

            if ($i == 0) {  ?>
                <li id="gnb_empty">메뉴 준비 중입니다.</li>
            <?php } ?>
        </ul>
    </nav>
</div>
<!-- } 상단 끝 -->

<?if(defined("_INDEX_")) {?>


<?}else{?>

<div style="width:100%;height:170px;">
<?php
if($bo_table) {
   $menu_no = substr($bo_table,-4);
} else if($co_id) {
   $menu_no = substr($co_id,-4);
}
$menu_no = substr($menu_no, 0, 2);
echo display_sub($menu_no, 'sub');
?>
</div>

<!-- 콘텐츠 시작 { -->
<div id="wrapper" style="padding-top:15px;">
    <div id="aside">

		<table width=200 cellpadding=0 cellspacing=0 border=0>
			<tr>
				<td bgcolor="<?php echo ($config['cf_1']?$config['cf_1']:'#2157c5'); ?>" align=center style="padding:30px 0px;color:#fff;font-size:15px;font-weight:bold;">
				<?php echo $group['gr_subject']; ?>
				</td>
			</tr>
            <?php
            $sql = " select *
                        from {$g5['menu_table']}
                        where me_use = '1'
                          and length(me_code) = '4'
                          and substring(me_code, 1, 2) = '{$menu_no}'
                        order by me_order, me_id ";
            $result = sql_query($sql);

            for ($i=0; $row=sql_fetch_array($result); $i++) {

            ?>
            <tr>
                <td style="padding:10px;font-size:13px;font-weight:bold;"><a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>">- <?php echo $row['me_name'] ?></a></td>
            </tr>
            <?php
            }
            ?>
			<tr>
				<td  height=5></td>
			</tr>
			<tr>
				<td>
                <?php echo display_banner('11', 'b'); ?>
                </td>
			</tr>
            <tr>
				<td  height=5></td>
			</tr>
            <tr>
				<td>
                <?php echo display_banner('12', 'b'); ?>
                </td>
			</tr>
            <tr>
				<td  height=5></td>
			</tr>
            <tr>
				<td>
                <?php echo display_banner('13', 'b'); ?>
                </td>
			</tr>
		</table>

	</div>
    <div id="container">

		<table width=100% cellpadding=0 cellspacing=0 border=0>
			<tr>
				<td height=15></td>
			</tr>
			<tr>
				<td style="font-size:15px;font-weight:bold;">
				<?php
				if($bo_table) {
				   $g5['title'] = $board['bo_subject'];
				} else if($co_id) {
				   $g5['title'] =  $co['co_subject'];
				}
				?>
                <?php if ((!$co_id || !$bo_table || $w == 's' ) && !defined("_INDEX_")) { ?><?php echo $g5['title'] ?><?php } ?>
				</td>
			</tr>
			<tr>
				<td height=15></td>
			</tr>
			<tr>
				<td height=1 bgcolor="efefef"></td>
			</tr>
			<tr>
				<td height=15></td>
			</tr>
		</table>

<?}?>
