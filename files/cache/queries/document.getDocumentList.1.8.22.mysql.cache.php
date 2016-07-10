<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getDocumentList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl5_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl5_argument'}->checkFilter('number');
${'module_srl5_argument'}->createConditionValue();
if(!${'module_srl5_argument'}->isValid()) return ${'module_srl5_argument'}->getErrorMessage();
} else
${'module_srl5_argument'} = NULL;if(${'module_srl5_argument'} !== null) ${'module_srl5_argument'}->setColumnType('number');
if(isset($args->exclude_module_srl)) {
${'exclude_module_srl6_argument'} = new ConditionArgument('exclude_module_srl', $args->exclude_module_srl, 'notin');
${'exclude_module_srl6_argument'}->checkFilter('number');
${'exclude_module_srl6_argument'}->createConditionValue();
if(!${'exclude_module_srl6_argument'}->isValid()) return ${'exclude_module_srl6_argument'}->getErrorMessage();
} else
${'exclude_module_srl6_argument'} = NULL;if(${'exclude_module_srl6_argument'} !== null) ${'exclude_module_srl6_argument'}->setColumnType('number');
if(isset($args->category_srl)) {
${'category_srl7_argument'} = new ConditionArgument('category_srl', $args->category_srl, 'in');
${'category_srl7_argument'}->createConditionValue();
if(!${'category_srl7_argument'}->isValid()) return ${'category_srl7_argument'}->getErrorMessage();
} else
${'category_srl7_argument'} = NULL;if(${'category_srl7_argument'} !== null) ${'category_srl7_argument'}->setColumnType('number');
if(isset($args->s_is_notice)) {
${'s_is_notice8_argument'} = new ConditionArgument('s_is_notice', $args->s_is_notice, 'equal');
${'s_is_notice8_argument'}->createConditionValue();
if(!${'s_is_notice8_argument'}->isValid()) return ${'s_is_notice8_argument'}->getErrorMessage();
} else
${'s_is_notice8_argument'} = NULL;if(${'s_is_notice8_argument'} !== null) ${'s_is_notice8_argument'}->setColumnType('char');
if(isset($args->member_srl)) {
${'member_srl9_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl9_argument'}->checkFilter('number');
${'member_srl9_argument'}->createConditionValue();
if(!${'member_srl9_argument'}->isValid()) return ${'member_srl9_argument'}->getErrorMessage();
} else
${'member_srl9_argument'} = NULL;if(${'member_srl9_argument'} !== null) ${'member_srl9_argument'}->setColumnType('number');
if(isset($args->statusList)) {
${'statusList10_argument'} = new ConditionArgument('statusList', $args->statusList, 'in');
${'statusList10_argument'}->createConditionValue();
if(!${'statusList10_argument'}->isValid()) return ${'statusList10_argument'}->getErrorMessage();
} else
${'statusList10_argument'} = NULL;if(${'statusList10_argument'} !== null) ${'statusList10_argument'}->setColumnType('varchar');
if(isset($args->division)) {
${'division11_argument'} = new ConditionArgument('division', $args->division, 'more');
${'division11_argument'}->createConditionValue();
if(!${'division11_argument'}->isValid()) return ${'division11_argument'}->getErrorMessage();
} else
${'division11_argument'} = NULL;if(${'division11_argument'} !== null) ${'division11_argument'}->setColumnType('number');
if(isset($args->last_division)) {
${'last_division12_argument'} = new ConditionArgument('last_division', $args->last_division, 'below');
${'last_division12_argument'}->createConditionValue();
if(!${'last_division12_argument'}->isValid()) return ${'last_division12_argument'}->getErrorMessage();
} else
${'last_division12_argument'} = NULL;if(${'last_division12_argument'} !== null) ${'last_division12_argument'}->setColumnType('number');
if(isset($args->s_title)) {
${'s_title13_argument'} = new ConditionArgument('s_title', $args->s_title, 'like');
${'s_title13_argument'}->createConditionValue();
if(!${'s_title13_argument'}->isValid()) return ${'s_title13_argument'}->getErrorMessage();
} else
${'s_title13_argument'} = NULL;if(${'s_title13_argument'} !== null) ${'s_title13_argument'}->setColumnType('varchar');
if(isset($args->s_content)) {
${'s_content14_argument'} = new ConditionArgument('s_content', $args->s_content, 'like');
${'s_content14_argument'}->createConditionValue();
if(!${'s_content14_argument'}->isValid()) return ${'s_content14_argument'}->getErrorMessage();
} else
${'s_content14_argument'} = NULL;if(${'s_content14_argument'} !== null) ${'s_content14_argument'}->setColumnType('bigtext');
if(isset($args->s_user_name)) {
${'s_user_name15_argument'} = new ConditionArgument('s_user_name', $args->s_user_name, 'like');
${'s_user_name15_argument'}->createConditionValue();
if(!${'s_user_name15_argument'}->isValid()) return ${'s_user_name15_argument'}->getErrorMessage();
} else
${'s_user_name15_argument'} = NULL;if(${'s_user_name15_argument'} !== null) ${'s_user_name15_argument'}->setColumnType('varchar');
if(isset($args->s_user_id)) {
${'s_user_id16_argument'} = new ConditionArgument('s_user_id', $args->s_user_id, 'like');
${'s_user_id16_argument'}->createConditionValue();
if(!${'s_user_id16_argument'}->isValid()) return ${'s_user_id16_argument'}->getErrorMessage();
} else
${'s_user_id16_argument'} = NULL;if(${'s_user_id16_argument'} !== null) ${'s_user_id16_argument'}->setColumnType('varchar');
if(isset($args->s_nick_name)) {
${'s_nick_name17_argument'} = new ConditionArgument('s_nick_name', $args->s_nick_name, 'like');
${'s_nick_name17_argument'}->createConditionValue();
if(!${'s_nick_name17_argument'}->isValid()) return ${'s_nick_name17_argument'}->getErrorMessage();
} else
${'s_nick_name17_argument'} = NULL;if(${'s_nick_name17_argument'} !== null) ${'s_nick_name17_argument'}->setColumnType('varchar');
if(isset($args->s_email_address)) {
${'s_email_address18_argument'} = new ConditionArgument('s_email_address', $args->s_email_address, 'like');
${'s_email_address18_argument'}->createConditionValue();
if(!${'s_email_address18_argument'}->isValid()) return ${'s_email_address18_argument'}->getErrorMessage();
} else
${'s_email_address18_argument'} = NULL;if(${'s_email_address18_argument'} !== null) ${'s_email_address18_argument'}->setColumnType('varchar');
if(isset($args->s_homepage)) {
${'s_homepage19_argument'} = new ConditionArgument('s_homepage', $args->s_homepage, 'like');
${'s_homepage19_argument'}->createConditionValue();
if(!${'s_homepage19_argument'}->isValid()) return ${'s_homepage19_argument'}->getErrorMessage();
} else
${'s_homepage19_argument'} = NULL;if(${'s_homepage19_argument'} !== null) ${'s_homepage19_argument'}->setColumnType('varchar');
if(isset($args->s_tags)) {
${'s_tags20_argument'} = new ConditionArgument('s_tags', $args->s_tags, 'like');
${'s_tags20_argument'}->createConditionValue();
if(!${'s_tags20_argument'}->isValid()) return ${'s_tags20_argument'}->getErrorMessage();
} else
${'s_tags20_argument'} = NULL;if(${'s_tags20_argument'} !== null) ${'s_tags20_argument'}->setColumnType('text');
if(isset($args->s_member_srl)) {
${'s_member_srl21_argument'} = new ConditionArgument('s_member_srl', $args->s_member_srl, 'equal');
${'s_member_srl21_argument'}->createConditionValue();
if(!${'s_member_srl21_argument'}->isValid()) return ${'s_member_srl21_argument'}->getErrorMessage();
} else
${'s_member_srl21_argument'} = NULL;if(${'s_member_srl21_argument'} !== null) ${'s_member_srl21_argument'}->setColumnType('number');
if(isset($args->s_readed_count)) {
${'s_readed_count22_argument'} = new ConditionArgument('s_readed_count', $args->s_readed_count, 'more');
${'s_readed_count22_argument'}->createConditionValue();
if(!${'s_readed_count22_argument'}->isValid()) return ${'s_readed_count22_argument'}->getErrorMessage();
} else
${'s_readed_count22_argument'} = NULL;if(${'s_readed_count22_argument'} !== null) ${'s_readed_count22_argument'}->setColumnType('number');
if(isset($args->s_voted_count)) {
${'s_voted_count23_argument'} = new ConditionArgument('s_voted_count', $args->s_voted_count, 'more');
${'s_voted_count23_argument'}->createConditionValue();
if(!${'s_voted_count23_argument'}->isValid()) return ${'s_voted_count23_argument'}->getErrorMessage();
} else
${'s_voted_count23_argument'} = NULL;if(${'s_voted_count23_argument'} !== null) ${'s_voted_count23_argument'}->setColumnType('number');
if(isset($args->s_blamed_count)) {
${'s_blamed_count24_argument'} = new ConditionArgument('s_blamed_count', $args->s_blamed_count, 'less');
${'s_blamed_count24_argument'}->createConditionValue();
if(!${'s_blamed_count24_argument'}->isValid()) return ${'s_blamed_count24_argument'}->getErrorMessage();
} else
${'s_blamed_count24_argument'} = NULL;if(${'s_blamed_count24_argument'} !== null) ${'s_blamed_count24_argument'}->setColumnType('number');
if(isset($args->s_comment_count)) {
${'s_comment_count25_argument'} = new ConditionArgument('s_comment_count', $args->s_comment_count, 'more');
${'s_comment_count25_argument'}->createConditionValue();
if(!${'s_comment_count25_argument'}->isValid()) return ${'s_comment_count25_argument'}->getErrorMessage();
} else
${'s_comment_count25_argument'} = NULL;if(${'s_comment_count25_argument'} !== null) ${'s_comment_count25_argument'}->setColumnType('number');
if(isset($args->s_trackback_count)) {
${'s_trackback_count26_argument'} = new ConditionArgument('s_trackback_count', $args->s_trackback_count, 'more');
${'s_trackback_count26_argument'}->createConditionValue();
if(!${'s_trackback_count26_argument'}->isValid()) return ${'s_trackback_count26_argument'}->getErrorMessage();
} else
${'s_trackback_count26_argument'} = NULL;if(${'s_trackback_count26_argument'} !== null) ${'s_trackback_count26_argument'}->setColumnType('number');
if(isset($args->s_uploaded_count)) {
${'s_uploaded_count27_argument'} = new ConditionArgument('s_uploaded_count', $args->s_uploaded_count, 'more');
${'s_uploaded_count27_argument'}->createConditionValue();
if(!${'s_uploaded_count27_argument'}->isValid()) return ${'s_uploaded_count27_argument'}->getErrorMessage();
} else
${'s_uploaded_count27_argument'} = NULL;if(${'s_uploaded_count27_argument'} !== null) ${'s_uploaded_count27_argument'}->setColumnType('number');
if(isset($args->s_regdate)) {
${'s_regdate28_argument'} = new ConditionArgument('s_regdate', $args->s_regdate, 'like_prefix');
${'s_regdate28_argument'}->createConditionValue();
if(!${'s_regdate28_argument'}->isValid()) return ${'s_regdate28_argument'}->getErrorMessage();
} else
${'s_regdate28_argument'} = NULL;if(${'s_regdate28_argument'} !== null) ${'s_regdate28_argument'}->setColumnType('date');
if(isset($args->s_last_update)) {
${'s_last_update29_argument'} = new ConditionArgument('s_last_update', $args->s_last_update, 'like_prefix');
${'s_last_update29_argument'}->createConditionValue();
if(!${'s_last_update29_argument'}->isValid()) return ${'s_last_update29_argument'}->getErrorMessage();
} else
${'s_last_update29_argument'} = NULL;if(${'s_last_update29_argument'} !== null) ${'s_last_update29_argument'}->setColumnType('date');
if(isset($args->s_ipaddress)) {
${'s_ipaddress30_argument'} = new ConditionArgument('s_ipaddress', $args->s_ipaddress, 'like_prefix');
${'s_ipaddress30_argument'}->createConditionValue();
if(!${'s_ipaddress30_argument'}->isValid()) return ${'s_ipaddress30_argument'}->getErrorMessage();
} else
${'s_ipaddress30_argument'} = NULL;if(${'s_ipaddress30_argument'} !== null) ${'s_ipaddress30_argument'}->setColumnType('varchar');
if(isset($args->start_date)) {
${'start_date31_argument'} = new ConditionArgument('start_date', $args->start_date, 'more');
${'start_date31_argument'}->createConditionValue();
if(!${'start_date31_argument'}->isValid()) return ${'start_date31_argument'}->getErrorMessage();
} else
${'start_date31_argument'} = NULL;if(${'start_date31_argument'} !== null) ${'start_date31_argument'}->setColumnType('date');
if(isset($args->end_date)) {
${'end_date32_argument'} = new ConditionArgument('end_date', $args->end_date, 'less');
${'end_date32_argument'}->createConditionValue();
if(!${'end_date32_argument'}->isValid()) return ${'end_date32_argument'}->getErrorMessage();
} else
${'end_date32_argument'} = NULL;if(${'end_date32_argument'} !== null) ${'end_date32_argument'}->setColumnType('date');

${'page35_argument'} = new Argument('page', $args->{'page'});
${'page35_argument'}->ensureDefaultValue('1');
if(!${'page35_argument'}->isValid()) return ${'page35_argument'}->getErrorMessage();

${'page_count36_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count36_argument'}->ensureDefaultValue('10');
if(!${'page_count36_argument'}->isValid()) return ${'page_count36_argument'}->getErrorMessage();

${'list_count37_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count37_argument'}->ensureDefaultValue('20');
if(!${'list_count37_argument'}->isValid()) return ${'list_count37_argument'}->getErrorMessage();

${'sort_index33_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index33_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index33_argument'}->isValid()) return ${'sort_index33_argument'}->getErrorMessage();

${'order_type34_argument'} = new SortArgument('order_type34', $args->order_type);
${'order_type34_argument'}->ensureDefaultValue('asc');
if(!${'order_type34_argument'}->isValid()) return ${'order_type34_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl5_argument,"in")
,new ConditionWithArgument('`module_srl`',$exclude_module_srl6_argument,"notin", 'and')
,new ConditionWithArgument('`category_srl`',$category_srl7_argument,"in", 'and')
,new ConditionWithArgument('`is_notice`',$s_is_notice8_argument,"equal", 'and')
,new ConditionWithArgument('`member_srl`',$member_srl9_argument,"equal", 'and')
,new ConditionWithArgument('`status`',$statusList10_argument,"in", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`list_order`',$division11_argument,"more", 'and')
,new ConditionWithArgument('`list_order`',$last_division12_argument,"below", 'and')),'and')
,new ConditionGroup(array(
new ConditionWithArgument('`title`',$s_title13_argument,"like")
,new ConditionWithArgument('`content`',$s_content14_argument,"like", 'or')
,new ConditionWithArgument('`user_name`',$s_user_name15_argument,"like", 'or')
,new ConditionWithArgument('`user_id`',$s_user_id16_argument,"like", 'or')
,new ConditionWithArgument('`nick_name`',$s_nick_name17_argument,"like", 'or')
,new ConditionWithArgument('`email_address`',$s_email_address18_argument,"like", 'or')
,new ConditionWithArgument('`homepage`',$s_homepage19_argument,"like", 'or')
,new ConditionWithArgument('`tags`',$s_tags20_argument,"like", 'or')
,new ConditionWithArgument('`member_srl`',$s_member_srl21_argument,"equal", 'or')
,new ConditionWithArgument('`readed_count`',$s_readed_count22_argument,"more", 'or')
,new ConditionWithArgument('`voted_count`',$s_voted_count23_argument,"more", 'or')
,new ConditionWithArgument('`blamed_count`',$s_blamed_count24_argument,"less", 'or')
,new ConditionWithArgument('`comment_count`',$s_comment_count25_argument,"more", 'or')
,new ConditionWithArgument('`trackback_count`',$s_trackback_count26_argument,"more", 'or')
,new ConditionWithArgument('`uploaded_count`',$s_uploaded_count27_argument,"more", 'or')
,new ConditionWithArgument('`regdate`',$s_regdate28_argument,"like_prefix", 'or')
,new ConditionWithArgument('`last_update`',$s_last_update29_argument,"like_prefix", 'or')
,new ConditionWithArgument('`ipaddress`',$s_ipaddress30_argument,"like_prefix", 'or')),'and')
,new ConditionGroup(array(
new ConditionWithArgument('`last_update`',$start_date31_argument,"more", 'and')
,new ConditionWithArgument('`last_update`',$end_date32_argument,"less", 'and')),'and')
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index33_argument'}, $order_type34_argument)
));
$query->setLimit(new Limit(${'list_count37_argument'}, ${'page35_argument'}, ${'page_count36_argument'}));
return $query; ?>