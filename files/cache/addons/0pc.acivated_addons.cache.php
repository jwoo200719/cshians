<?php if(!defined("__XE__")) exit();
$_m = Context::get('mid');
$before_time = microtime(true);
$rm = '';
$ml = array(
);
$addon_file = './addons/autolink/autolink.addon.php';
if(file_exists($addon_file)){
if($rm === 'no_run_selected'){
if(!isset($ml[$_m])){
unset($addon_info); $addon_info = unserialize(base64_decode('')); @include($addon_file);
}}else{
if(isset($ml[$_m]) || count($ml) === 0){
unset($addon_info); $addon_info = unserialize(base64_decode('')); @include($addon_file);
}}}
$after_time = microtime(true);
$addon_time_log = new stdClass();
$addon_time_log->caller = $called_position;
$addon_time_log->called = "autolink";
$addon_time_log->called_extension = "autolink";
writeSlowlog("addon",$after_time-$before_time,$addon_time_log);
$before_time = microtime(true);
$rm = '';
$ml = array(
);
$addon_file = './addons/del-www/del-www.addon.php';
if(file_exists($addon_file)){
if($rm === 'no_run_selected'){
if(!isset($ml[$_m])){
unset($addon_info); $addon_info = unserialize(base64_decode('')); @include($addon_file);
}}else{
if(isset($ml[$_m]) || count($ml) === 0){
unset($addon_info); $addon_info = unserialize(base64_decode('')); @include($addon_file);
}}}
$after_time = microtime(true);
$addon_time_log = new stdClass();
$addon_time_log->caller = $called_position;
$addon_time_log->called = "del-www";
$addon_time_log->called_extension = "del-www";
writeSlowlog("addon",$after_time-$before_time,$addon_time_log);
$before_time = microtime(true);
$rm = '';
$ml = array(
);
$addon_file = './addons/member_communication/member_communication.addon.php';
if(file_exists($addon_file)){
if($rm === 'no_run_selected'){
if(!isset($ml[$_m])){
unset($addon_info); $addon_info = unserialize(base64_decode('')); @include($addon_file);
}}else{
if(isset($ml[$_m]) || count($ml) === 0){
unset($addon_info); $addon_info = unserialize(base64_decode('')); @include($addon_file);
}}}
$after_time = microtime(true);
$addon_time_log = new stdClass();
$addon_time_log->caller = $called_position;
$addon_time_log->called = "member_communication";
$addon_time_log->called_extension = "member_communication";
writeSlowlog("addon",$after_time-$before_time,$addon_time_log);
$before_time = microtime(true);
$rm = '';
$ml = array(
);
$addon_file = './addons/member_extra_info/member_extra_info.addon.php';
if(file_exists($addon_file)){
if($rm === 'no_run_selected'){
if(!isset($ml[$_m])){
unset($addon_info); $addon_info = unserialize(base64_decode('')); @include($addon_file);
}}else{
if(isset($ml[$_m]) || count($ml) === 0){
unset($addon_info); $addon_info = unserialize(base64_decode('')); @include($addon_file);
}}}
$after_time = microtime(true);
$addon_time_log = new stdClass();
$addon_time_log->caller = $called_position;
$addon_time_log->called = "member_extra_info";
$addon_time_log->called_extension = "member_extra_info";
writeSlowlog("addon",$after_time-$before_time,$addon_time_log);
$before_time = microtime(true);
$rm = '';
$ml = array(
);
$addon_file = './addons/mobile/mobile.addon.php';
if(file_exists($addon_file)){
if($rm === 'no_run_selected'){
if(!isset($ml[$_m])){
unset($addon_info); $addon_info = unserialize(base64_decode('')); @include($addon_file);
}}else{
if(isset($ml[$_m]) || count($ml) === 0){
unset($addon_info); $addon_info = unserialize(base64_decode('')); @include($addon_file);
}}}
$after_time = microtime(true);
$addon_time_log = new stdClass();
$addon_time_log->caller = $called_position;
$addon_time_log->called = "mobile";
$addon_time_log->called_extension = "mobile";
writeSlowlog("addon",$after_time-$before_time,$addon_time_log);
$before_time = microtime(true);
$rm = '';
$ml = array(
);
$addon_file = './addons/resize_image/resize_image.addon.php';
if(file_exists($addon_file)){
if($rm === 'no_run_selected'){
if(!isset($ml[$_m])){
unset($addon_info); $addon_info = unserialize(base64_decode('')); @include($addon_file);
}}else{
if(isset($ml[$_m]) || count($ml) === 0){
unset($addon_info); $addon_info = unserialize(base64_decode('')); @include($addon_file);
}}}
$after_time = microtime(true);
$addon_time_log = new stdClass();
$addon_time_log->caller = $called_position;
$addon_time_log->called = "resize_image";
$addon_time_log->called_extension = "resize_image";
writeSlowlog("addon",$after_time-$before_time,$addon_time_log);
$before_time = microtime(true);
$rm = 'no_run_selected';
$ml = array(
'xeicon' => 1,
'findidpw' => 1,
'bbs_open' => 1,
'register' => 1,
);
$addon_file = './addons/sejin7940_mustlogin/sejin7940_mustlogin.addon.php';
if(file_exists($addon_file)){
if($rm === 'no_run_selected'){
if(!isset($ml[$_m])){
unset($addon_info); $addon_info = unserialize(base64_decode('Tzo4OiJzdGRDbGFzcyI6NDp7czoxNToieGVfdmFsaWRhdG9yX2lkIjtzOjMxOiJtb2R1bGVzL2FkZG9uL3RwbC9zZXR1cF9hZGRvbi8xIjtzOjk6ImxvZ2luX21pZCI7czoxMDoibG9naW5faGVscCI7czoxMzoieGVfcnVuX21ldGhvZCI7czoxNToibm9fcnVuX3NlbGVjdGVkIjtzOjg6Im1pZF9saXN0IjthOjQ6e2k6MDtzOjY6InhlaWNvbiI7aToxO3M6ODoiZmluZGlkcHciO2k6MjtzOjg6ImJic19vcGVuIjtpOjM7czo4OiJyZWdpc3RlciI7fX0=')); @include($addon_file);
}}else{
if(isset($ml[$_m]) || count($ml) === 0){
unset($addon_info); $addon_info = unserialize(base64_decode('Tzo4OiJzdGRDbGFzcyI6NDp7czoxNToieGVfdmFsaWRhdG9yX2lkIjtzOjMxOiJtb2R1bGVzL2FkZG9uL3RwbC9zZXR1cF9hZGRvbi8xIjtzOjk6ImxvZ2luX21pZCI7czoxMDoibG9naW5faGVscCI7czoxMzoieGVfcnVuX21ldGhvZCI7czoxNToibm9fcnVuX3NlbGVjdGVkIjtzOjg6Im1pZF9saXN0IjthOjQ6e2k6MDtzOjY6InhlaWNvbiI7aToxO3M6ODoiZmluZGlkcHciO2k6MjtzOjg6ImJic19vcGVuIjtpOjM7czo4OiJyZWdpc3RlciI7fX0=')); @include($addon_file);
}}}
$after_time = microtime(true);
$addon_time_log = new stdClass();
$addon_time_log->caller = $called_position;
$addon_time_log->called = "sejin7940_mustlogin";
$addon_time_log->called_extension = "sejin7940_mustlogin";
writeSlowlog("addon",$after_time-$before_time,$addon_time_log);