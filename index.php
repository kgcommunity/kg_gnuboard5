<?php
include_once('./_common.php');

// 사이트 차단/정상인지 확인
$host = $_SERVER['HTTP_HOST'];
preg_match('/[^\.]+\.([^\.]{4}|[^\.]{3}|(co|or|pe|ac|ne)\.[^\.]{2}|[^\.]{2})$/i', $host, $matches);
$domain        = $matches[0];
$sub_domain    = ($host!=$domain)?str_replace(".{$domain}", "", $host):"";

$url = 'http://kgco.kr/manager/auth/access.php?domain=' . urlencode($domain);

$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$output = curl_exec($ch);
curl_close($ch);

$output = trim($output);

if (preg_match("`^\{.+\}$`", $output)) {

    $data = (array)json_decode($output);
    if($data['access'] != 2) {
        echo $data['name'] . " (" . $data['domain']. ") 사이트는 리뉴얼중입니다.";
        exit;
    }
}

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/index.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_PATH.'/head.php');
?>

<link rel="stylesheet" type="text/css" href="/css/jqbanner.css"/>
<script src="/js/jqbanner.js" type="text/javascript"></script>

<div id="jqb_object" class="main_visual">
    <div class="jqb_slides">
        <?php echo display_main('main'); ?>
    </div>

   <div class="jqb_content">

   </div>
<!--
    <div class="jqb_bar">
        <div class="jqb_info"></div>
        <div id="btn_next" class="jqb_btn jqb_btn_next"></div>
        <div id="btn_pauseplay" class="jqb_btn jqb_btn_pause"></div>
        <div id="btn_prev" class="jqb_btn jqb_btn_prev"></div>
    </div>
-->
</div>

<table width=1098 cellpadding=0 cellspacing=0 border=0 align=center>
	<tr>
		<td height=20></td>
	</tr>
	<tr>
		<td width=360 valign=top>

            		<?php echo display_banner('4', 'c'); ?>

		</td>
		<td width=9></td>
		<td width=360 valign=top>

            		<?php echo display_banner('5', 'c'); ?>

		</td>
		<td width=9></td>
		<td width=360 valign=top>

            		<?php echo display_banner('6', 'c'); ?>

        	</td>
	</tr>
</table>


<table width=1098 cellpadding=0 cellspacing=0 border=0 align=center>
	<tr>
		<td height=10></td>
	</tr>
	<tr>
		<td width=360 valign=top>

            		<?php echo display_banner('7', 'c'); ?>

		</td>
		<td width=9></td>
		<td width=360 valign=top>

            		<?php echo display_banner('8', 'c'); ?>

		</td>
		<td width=9></td>
		<td width=360 valign=top>

            		<?php echo display_banner('9', 'c'); ?>

        	</td>
	</tr>
</table>

<?php
include_once(G5_PATH.'/tail.php');
?>
