<?php if(!defined("__XE__")) exit(); $menu = new stdClass();$lang_type = Context::getLangType(); $is_logged = Context::get('is_logged'); $logged_info = Context::get('logged_info'); $site_srl = 0;$site_admin = false;if($site_srl) { $oModuleModel = getModel('module');$site_module_info = $oModuleModel->getSiteInfo($site_srl); if($site_module_info) Context::set('site_module_info',$site_module_info);else $site_module_info = Context::get('site_module_info');$grant = $oModuleModel->getGrant($site_module_info, $logged_info); if($grant->manager ==1) $site_admin = true;}if($is_logged) {if($logged_info->is_admin=="Y") $is_admin = true; else $is_admin = false; $group_srls = array_keys($logged_info->group_list); } else { $is_admin = false; $group_srls = array(); }; $_menu_names[262] = array("en"=>"로그인 지원 페이지 - CSHians","ko"=>"로그인 지원 페이지 - CSHians","jp"=>"로그인 지원 페이지 - CSHians","zh-CN"=>"로그인 지원 페이지 - CSHians","zh-TW"=>"로그인 지원 페이지 - CSHians","fr"=>"로그인 지원 페이지 - CSHians","de"=>"로그인 지원 페이지 - CSHians","ru"=>"로그인 지원 페이지 - CSHians","es"=>"로그인 지원 페이지 - CSHians","tr"=>"로그인 지원 페이지 - CSHians","vi"=>"로그인 지원 페이지 - CSHians","mn"=>"로그인 지원 페이지 - CSHians",); $_menu_names[162] = array("en"=>"회원가입","ko"=>"회원가입","jp"=>"회원가입","zh-CN"=>"회원가입","zh-TW"=>"회원가입","fr"=>"회원가입","de"=>"회원가입","ru"=>"회원가입","es"=>"회원가입","tr"=>"회원가입","vi"=>"회원가입","mn"=>"회원가입",); $_menu_names[164] = array("en"=>"아이디/비밀번호 찾기","ko"=>"아이디/비밀번호 찾기","jp"=>"아이디/비밀번호 찾기","zh-CN"=>"아이디/비밀번호 찾기","zh-TW"=>"아이디/비밀번호 찾기","fr"=>"아이디/비밀번호 찾기","de"=>"아이디/비밀번호 찾기","ru"=>"아이디/비밀번호 찾기","es"=>"아이디/비밀번호 찾기","tr"=>"아이디/비밀번호 찾기","vi"=>"아이디/비밀번호 찾기","mn"=>"아이디/비밀번호 찾기",); ; $menu->list = array(262=>array("node_srl"=>"262","parent_srl"=>"0","menu_name_key"=>'로그인 지원 페이지 - CSHians',"isShow"=>(true?true:false),"text"=>(true?$_menu_names[262][$lang_type]:""),"href"=>(true?getSiteUrl('', '','mid','login_help'):""),"url"=>(true?"login_help":""),"is_shortcut"=>"N","desc"=>'',"open_window"=>"N","normal_btn"=>"","hover_btn"=>"","active_btn"=>"","selected"=>(array("login_help")&&in_array(Context::get("mid"),array("login_help"))?1:0),"expand"=>"N", "list"=>array(),  "link"=>(true? ( array("login_help")&&in_array(Context::get("mid"),array("login_help")) ?$_menu_names[262][$lang_type]:$_menu_names[262][$lang_type]):""),),162=>array("node_srl"=>"162","parent_srl"=>"0","menu_name_key"=>'회원가입',"isShow"=>(true?true:false),"text"=>(true?$_menu_names[162][$lang_type]:""),"href"=>(true?getSiteUrl('', '','mid','register'):""),"url"=>(true?"register":""),"is_shortcut"=>"N","desc"=>'',"open_window"=>"N","normal_btn"=>"","hover_btn"=>"","active_btn"=>"","selected"=>(array("register")&&in_array(Context::get("mid"),array("register"))?1:0),"expand"=>"N", "list"=>array(),  "link"=>(true? ( array("register")&&in_array(Context::get("mid"),array("register")) ?$_menu_names[162][$lang_type]:$_menu_names[162][$lang_type]):""),),164=>array("node_srl"=>"164","parent_srl"=>"0","menu_name_key"=>'아이디/비밀번호 찾기',"isShow"=>(true?true:false),"text"=>(true?$_menu_names[164][$lang_type]:""),"href"=>(true?getSiteUrl('', '','mid','findidpw'):""),"url"=>(true?"findidpw":""),"is_shortcut"=>"N","desc"=>'',"open_window"=>"N","normal_btn"=>"","hover_btn"=>"","active_btn"=>"","selected"=>(array("findidpw")&&in_array(Context::get("mid"),array("findidpw"))?1:0),"expand"=>"N", "list"=>array(),  "link"=>(true? ( array("findidpw")&&in_array(Context::get("mid"),array("findidpw")) ?$_menu_names[164][$lang_type]:$_menu_names[164][$lang_type]):""),),); if(!$is_admin) { recurciveExposureCheck($menu->list); }Context::set("included_menu", $menu); ?>