<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMemberList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->is_admin)) {
${'is_admin1_argument'} = new ConditionArgument('is_admin', $args->is_admin, 'equal');
${'is_admin1_argument'}->createConditionValue();
if(!${'is_admin1_argument'}->isValid()) return ${'is_admin1_argument'}->getErrorMessage();
} else
${'is_admin1_argument'} = NULL;if(${'is_admin1_argument'} !== null) ${'is_admin1_argument'}->setColumnType('char');
if(isset($args->is_denied)) {
${'is_denied2_argument'} = new ConditionArgument('is_denied', $args->is_denied, 'equal');
${'is_denied2_argument'}->createConditionValue();
if(!${'is_denied2_argument'}->isValid()) return ${'is_denied2_argument'}->getErrorMessage();
} else
${'is_denied2_argument'} = NULL;if(${'is_denied2_argument'} !== null) ${'is_denied2_argument'}->setColumnType('char');
if(isset($args->member_srls)) {
${'member_srls3_argument'} = new ConditionArgument('member_srls', $args->member_srls, 'in');
${'member_srls3_argument'}->createConditionValue();
if(!${'member_srls3_argument'}->isValid()) return ${'member_srls3_argument'}->getErrorMessage();
} else
${'member_srls3_argument'} = NULL;if(${'member_srls3_argument'} !== null) ${'member_srls3_argument'}->setColumnType('number');
if(isset($args->s_user_id)) {
${'s_user_id4_argument'} = new ConditionArgument('s_user_id', $args->s_user_id, 'like');
${'s_user_id4_argument'}->createConditionValue();
if(!${'s_user_id4_argument'}->isValid()) return ${'s_user_id4_argument'}->getErrorMessage();
} else
${'s_user_id4_argument'} = NULL;if(${'s_user_id4_argument'} !== null) ${'s_user_id4_argument'}->setColumnType('varchar');
if(isset($args->s_user_name)) {
${'s_user_name5_argument'} = new ConditionArgument('s_user_name', $args->s_user_name, 'like');
${'s_user_name5_argument'}->createConditionValue();
if(!${'s_user_name5_argument'}->isValid()) return ${'s_user_name5_argument'}->getErrorMessage();
} else
${'s_user_name5_argument'} = NULL;if(${'s_user_name5_argument'} !== null) ${'s_user_name5_argument'}->setColumnType('varchar');
if(isset($args->s_nick_name)) {
${'s_nick_name6_argument'} = new ConditionArgument('s_nick_name', $args->s_nick_name, 'like');
${'s_nick_name6_argument'}->createConditionValue();
if(!${'s_nick_name6_argument'}->isValid()) return ${'s_nick_name6_argument'}->getErrorMessage();
} else
${'s_nick_name6_argument'} = NULL;if(${'s_nick_name6_argument'} !== null) ${'s_nick_name6_argument'}->setColumnType('varchar');
if(isset($args->html_nick_name)) {
${'html_nick_name7_argument'} = new ConditionArgument('html_nick_name', $args->html_nick_name, 'like');
${'html_nick_name7_argument'}->createConditionValue();
if(!${'html_nick_name7_argument'}->isValid()) return ${'html_nick_name7_argument'}->getErrorMessage();
} else
${'html_nick_name7_argument'} = NULL;if(${'html_nick_name7_argument'} !== null) ${'html_nick_name7_argument'}->setColumnType('varchar');
if(isset($args->s_email_address)) {
${'s_email_address8_argument'} = new ConditionArgument('s_email_address', $args->s_email_address, 'like');
${'s_email_address8_argument'}->createConditionValue();
if(!${'s_email_address8_argument'}->isValid()) return ${'s_email_address8_argument'}->getErrorMessage();
} else
${'s_email_address8_argument'} = NULL;if(${'s_email_address8_argument'} !== null) ${'s_email_address8_argument'}->setColumnType('varchar');
if(isset($args->s_birthday)) {
${'s_birthday9_argument'} = new ConditionArgument('s_birthday', $args->s_birthday, 'like');
${'s_birthday9_argument'}->createConditionValue();
if(!${'s_birthday9_argument'}->isValid()) return ${'s_birthday9_argument'}->getErrorMessage();
} else
${'s_birthday9_argument'} = NULL;if(${'s_birthday9_argument'} !== null) ${'s_birthday9_argument'}->setColumnType('char');
if(isset($args->s_extra_vars)) {
${'s_extra_vars10_argument'} = new ConditionArgument('s_extra_vars', $args->s_extra_vars, 'like');
${'s_extra_vars10_argument'}->createConditionValue();
if(!${'s_extra_vars10_argument'}->isValid()) return ${'s_extra_vars10_argument'}->getErrorMessage();
} else
${'s_extra_vars10_argument'} = NULL;if(${'s_extra_vars10_argument'} !== null) ${'s_extra_vars10_argument'}->setColumnType('text');
if(isset($args->s_regdate)) {
${'s_regdate11_argument'} = new ConditionArgument('s_regdate', $args->s_regdate, 'like_prefix');
${'s_regdate11_argument'}->createConditionValue();
if(!${'s_regdate11_argument'}->isValid()) return ${'s_regdate11_argument'}->getErrorMessage();
} else
${'s_regdate11_argument'} = NULL;if(${'s_regdate11_argument'} !== null) ${'s_regdate11_argument'}->setColumnType('date');
if(isset($args->s_last_login)) {
${'s_last_login12_argument'} = new ConditionArgument('s_last_login', $args->s_last_login, 'like_prefix');
${'s_last_login12_argument'}->createConditionValue();
if(!${'s_last_login12_argument'}->isValid()) return ${'s_last_login12_argument'}->getErrorMessage();
} else
${'s_last_login12_argument'} = NULL;if(${'s_last_login12_argument'} !== null) ${'s_last_login12_argument'}->setColumnType('date');
if(isset($args->s_regdate_more)) {
${'s_regdate_more13_argument'} = new ConditionArgument('s_regdate_more', $args->s_regdate_more, 'more');
${'s_regdate_more13_argument'}->createConditionValue();
if(!${'s_regdate_more13_argument'}->isValid()) return ${'s_regdate_more13_argument'}->getErrorMessage();
} else
${'s_regdate_more13_argument'} = NULL;if(${'s_regdate_more13_argument'} !== null) ${'s_regdate_more13_argument'}->setColumnType('date');
if(isset($args->s_regdate_less)) {
${'s_regdate_less14_argument'} = new ConditionArgument('s_regdate_less', $args->s_regdate_less, 'less');
${'s_regdate_less14_argument'}->createConditionValue();
if(!${'s_regdate_less14_argument'}->isValid()) return ${'s_regdate_less14_argument'}->getErrorMessage();
} else
${'s_regdate_less14_argument'} = NULL;if(${'s_regdate_less14_argument'} !== null) ${'s_regdate_less14_argument'}->setColumnType('date');
if(isset($args->s_last_login_more)) {
${'s_last_login_more15_argument'} = new ConditionArgument('s_last_login_more', $args->s_last_login_more, 'more');
${'s_last_login_more15_argument'}->createConditionValue();
if(!${'s_last_login_more15_argument'}->isValid()) return ${'s_last_login_more15_argument'}->getErrorMessage();
} else
${'s_last_login_more15_argument'} = NULL;if(${'s_last_login_more15_argument'} !== null) ${'s_last_login_more15_argument'}->setColumnType('date');
if(isset($args->s_last_login_less)) {
${'s_last_login_less16_argument'} = new ConditionArgument('s_last_login_less', $args->s_last_login_less, 'less');
${'s_last_login_less16_argument'}->createConditionValue();
if(!${'s_last_login_less16_argument'}->isValid()) return ${'s_last_login_less16_argument'}->getErrorMessage();
} else
${'s_last_login_less16_argument'} = NULL;if(${'s_last_login_less16_argument'} !== null) ${'s_last_login_less16_argument'}->setColumnType('date');

${'page19_argument'} = new Argument('page', $args->{'page'});
${'page19_argument'}->ensureDefaultValue('1');
if(!${'page19_argument'}->isValid()) return ${'page19_argument'}->getErrorMessage();

${'page_count20_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count20_argument'}->ensureDefaultValue('10');
if(!${'page_count20_argument'}->isValid()) return ${'page_count20_argument'}->getErrorMessage();

${'list_count21_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count21_argument'}->ensureDefaultValue('20');
if(!${'list_count21_argument'}->isValid()) return ${'list_count21_argument'}->getErrorMessage();

${'sort_index17_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index17_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index17_argument'}->isValid()) return ${'sort_index17_argument'}->getErrorMessage();

${'sort_order18_argument'} = new SortArgument('sort_order18', $args->sort_order);
${'sort_order18_argument'}->ensureDefaultValue('asc');
if(!${'sort_order18_argument'}->isValid()) return ${'sort_order18_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`is_admin`',$is_admin1_argument,"equal")
,new ConditionWithArgument('`denied`',$is_denied2_argument,"equal", 'and')
,new ConditionWithArgument('`member_srl`',$member_srls3_argument,"in", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`user_id`',$s_user_id4_argument,"like")
,new ConditionWithArgument('`user_name`',$s_user_name5_argument,"like", 'or')
,new ConditionWithArgument('`nick_name`',$s_nick_name6_argument,"like", 'or')
,new ConditionWithArgument('`nick_name`',$html_nick_name7_argument,"like", 'or')
,new ConditionWithArgument('`email_address`',$s_email_address8_argument,"like", 'or')
,new ConditionWithArgument('`birthday`',$s_birthday9_argument,"like", 'or')
,new ConditionWithArgument('`extra_vars`',$s_extra_vars10_argument,"like", 'or')
,new ConditionWithArgument('`regdate`',$s_regdate11_argument,"like_prefix", 'or')
,new ConditionWithArgument('`last_login`',$s_last_login12_argument,"like_prefix", 'or')
,new ConditionWithArgument('`member`.`regdate`',$s_regdate_more13_argument,"more", 'or')
,new ConditionWithArgument('`member`.`regdate`',$s_regdate_less14_argument,"less", 'or')
,new ConditionWithArgument('`member`.`last_login`',$s_last_login_more15_argument,"more", 'or')
,new ConditionWithArgument('`member`.`last_login`',$s_last_login_less16_argument,"less", 'or')),'and')
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index17_argument'}, $sort_order18_argument)
));
$query->setLimit(new Limit(${'list_count21_argument'}, ${'page19_argument'}, ${'page_count20_argument'}));
return $query; ?>