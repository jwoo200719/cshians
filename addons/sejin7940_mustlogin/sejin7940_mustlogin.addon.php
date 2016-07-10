<?php
if(!defined("__ZBXE__")) exit();
/**
 * @file sejin7940_mustlogin.addon.php
 * @brief 로그인 페이지로 강제화
 * 
 * 제작 : sejin7940    sejin7940@nate.com  ,  http://sejin7940.co.kr
 **/

$logged_info = Context::get('logged_info');


$args_group -> selected_group_srl = $addon_info->deny_group;
$args_group -> member_srls = $logged_info->member_srl;
$args_group -> member_srl = $logged_info->member_srl;
$output_group = executeQuery('member.getMemberListWithinGroup', $args_group);
$is_group_member = count($output_group->data);

if($addon_info->login_mid ) {
	if($logged_info && ( substr_count(",".$logged_info->user_id.",",",".$addon_info->deny_user_id.",") || $is_group_member))  {
		session_destroy();
		header("Content-Type: text/html; charset=UTF-8");
		header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
		header("Cache-Control: no-store, no-cache, must-revalidate");
		header("Cache-Control: post-check=0, pre-check=0", false);
		header("Pragma: no-cache");
		header("Set-Cookie: ");
		echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html xmlns="http://www.w3.org/1999/xhtml" lang="ko" xml:lang="ko">';
		echo "<script>alert('접근 불가능한 계정입니다. ')</script>";
		echo '<script>location.href="'.getUrl("","mid",$addon_info->login_mid).'";</script>';
		echo '</html>';
		exit();
	}
	// XE message 모듈의 로그인화면에서 '회원가입'버튼 눌렀을때, 로그인mid 의 회원가입으로 연결되도록
	elseif(!$logged_info &&  Context::get('module') != 'admin' && Context::get('mid')!=$addon_info->login_mid && Context::get('act')=='dispMemberSignUpForm' ) {
		header("Content-Type: text/html; charset=UTF-8");
		header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
		header("Cache-Control: no-store, no-cache, must-revalidate");
		header("Cache-Control: post-check=0, pre-check=0", false);
		header("Pragma: no-cache");
		header("Set-Cookie: ");
		echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html xmlns="http://www.w3.org/1999/xhtml" lang="ko" xml:lang="ko">';
		echo '<script>location.href="'.getUrl("","mid",$addon_info->login_mid,"act","dispMemberSignUpForm").'";</script>';
		echo '</html>';
		exit();
	}
	// 회원가입시 항목 검사 때 에러 안 뜨게 하기 위해서
	elseif(!$logged_info &&  Context::get('module') != 'admin' && !Context::get('mid') ) {
	}
	// 로그인 안 되어있는데, 로그인 페이지 외의 곳에 있는 경우
	elseif(!$logged_info &&  Context::get('module') != 'admin' && Context::get('mid')!=$addon_info->login_mid) {
		header("Content-Type: text/html; charset=UTF-8");
		header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
		header("Cache-Control: no-store, no-cache, must-revalidate");
		header("Cache-Control: post-check=0, pre-check=0", false);
		header("Pragma: no-cache");
		header("Set-Cookie: ");
		echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html xmlns="http://www.w3.org/1999/xhtml" lang="ko" xml:lang="ko">';
		echo '<script>location.href="'.getUrl("","mid",$addon_info->login_mid).'";</script>';
		echo '</html>';
		exit();
	}
	// 로그인 후 시작페이지로 이동되도록
	elseif($logged_info  && $called_position == 'after_module_proc' && Context::get('module') != 'admin' && Context::get('mid')==$addon_info->start_mid && Context::get('act')=='procMemberLogin') {
		header("Content-Type: text/html; charset=UTF-8");
		header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
		header("Cache-Control: no-store, no-cache, must-revalidate");
		header("Cache-Control: post-check=0, pre-check=0", false);
		header("Pragma: no-cache");
		header("Set-Cookie: ");
		echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html xmlns="http://www.w3.org/1999/xhtml" lang="ko" xml:lang="ko">';
		echo '<script>location.href="'.getUrl("","mid",$addon_info->start_mid).'";</script>';
		echo '</html>';
		exit();
	}
	// 로그인 후, 여전히 로그인페이지에 있으면 시작페이지로 자동 이동되도록
	elseif($logged_info && $called_position == 'after_module_proc' &&  Context::get('module') != 'admin' && Context::get('mid')==$addon_info->login_mid ) {
		header("Content-Type: text/html; charset=UTF-8");
		header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
		header("Cache-Control: no-store, no-cache, must-revalidate");
		header("Cache-Control: post-check=0, pre-check=0", false);
		header("Pragma: no-cache");
		header("Set-Cookie: ");
		echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html xmlns="http://www.w3.org/1999/xhtml" lang="ko" xml:lang="ko">';
		echo '<script>location.href="'.getUrl("","mid",$addon_info->start_mid).'";</script>';
		echo '</html>';
		exit();
	}
}
?>
