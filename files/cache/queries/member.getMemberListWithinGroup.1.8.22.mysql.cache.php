<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMemberListWithinGroup");
$query->setAction("select");
$query->setPriority("");

${'selected_group_srl13_argument'} = new ConditionArgument('selected_group_srl', $args->selected_group_srl, 'in');
${'selected_group_srl13_argument'}->checkNotNull();
${'selected_group_srl13_argument'}->createConditionValue();
if(!${'selected_group_srl13_argument'}->isValid()) return ${'selected_group_srl13_argument'}->getErrorMessage();
if(${'selected_group_srl13_argument'} !== null) ${'selected_group_srl13_argument'}->setColumnType('number');
if(isset($args->is_admin)) {
${'is_admin14_argument'} = new ConditionArgument('is_admin', $args->is_admin, 'equal');
${'is_admin14_argument'}->createConditionValue();
if(!${'is_admin14_argument'}->isValid()) return ${'is_admin14_argument'}->getErrorMessage();
} else
${'is_admin14_argument'} = NULL;if(${'is_admin14_argument'} !== null) ${'is_admin14_argument'}->setColumnType('char');
if(isset($args->is_denied)) {
${'is_denied15_argument'} = new ConditionArgument('is_denied', $args->is_denied, 'equal');
${'is_denied15_argument'}->createConditionValue();
if(!${'is_denied15_argument'}->isValid()) return ${'is_denied15_argument'}->getErrorMessage();
} else
${'is_denied15_argument'} = NULL;if(${'is_denied15_argument'} !== null) ${'is_denied15_argument'}->setColumnType('char');
if(isset($args->member_srls)) {
${'member_srls16_argument'} = new ConditionArgument('member_srls', $args->member_srls, 'in');
${'member_srls16_argument'}->createConditionValue();
if(!${'member_srls16_argument'}->isValid()) return ${'member_srls16_argument'}->getErrorMessage();
} else
${'member_srls16_argument'} = NULL;if(${'member_srls16_argument'} !== null) ${'member_srls16_argument'}->setColumnType('number');
if(isset($args->s_user_id)) {
${'s_user_id17_argument'} = new ConditionArgument('s_user_id', $args->s_user_id, 'like');
${'s_user_id17_argument'}->createConditionValue();
if(!${'s_user_id17_argument'}->isValid()) return ${'s_user_id17_argument'}->getErrorMessage();
} else
${'s_user_id17_argument'} = NULL;if(${'s_user_id17_argument'} !== null) ${'s_user_id17_argument'}->setColumnType('varchar');
if(isset($args->s_user_name)) {
${'s_user_name18_argument'} = new ConditionArgument('s_user_name', $args->s_user_name, 'like');
${'s_user_name18_argument'}->createConditionValue();
if(!${'s_user_name18_argument'}->isValid()) return ${'s_user_name18_argument'}->getErrorMessage();
} else
${'s_user_name18_argument'} = NULL;if(${'s_user_name18_argument'} !== null) ${'s_user_name18_argument'}->setColumnType('varchar');
if(isset($args->s_nick_name)) {
${'s_nick_name19_argument'} = new ConditionArgument('s_nick_name', $args->s_nick_name, 'like');
${'s_nick_name19_argument'}->createConditionValue();
if(!${'s_nick_name19_argument'}->isValid()) return ${'s_nick_name19_argument'}->getErrorMessage();
} else
${'s_nick_name19_argument'} = NULL;if(${'s_nick_name19_argument'} !== null) ${'s_nick_name19_argument'}->setColumnType('varchar');
if(isset($args->html_nick_name)) {
${'html_nick_name20_argument'} = new ConditionArgument('html_nick_name', $args->html_nick_name, 'like');
${'html_nick_name20_argument'}->createConditionValue();
if(!${'html_nick_name20_argument'}->isValid()) return ${'html_nick_name20_argument'}->getErrorMessage();
} else
${'html_nick_name20_argument'} = NULL;if(${'html_nick_name20_argument'} !== null) ${'html_nick_name20_argument'}->setColumnType('varchar');
if(isset($args->s_email_address)) {
${'s_email_address21_argument'} = new ConditionArgument('s_email_address', $args->s_email_address, 'like');
${'s_email_address21_argument'}->createConditionValue();
if(!${'s_email_address21_argument'}->isValid()) return ${'s_email_address21_argument'}->getErrorMessage();
} else
${'s_email_address21_argument'} = NULL;if(${'s_email_address21_argument'} !== null) ${'s_email_address21_argument'}->setColumnType('varchar');
if(isset($args->s_birthday)) {
${'s_birthday22_argument'} = new ConditionArgument('s_birthday', $args->s_birthday, 'like');
${'s_birthday22_argument'}->createConditionValue();
if(!${'s_birthday22_argument'}->isValid()) return ${'s_birthday22_argument'}->getErrorMessage();
} else
${'s_birthday22_argument'} = NULL;if(${'s_birthday22_argument'} !== null) ${'s_birthday22_argument'}->setColumnType('char');
if(isset($args->s_extra_vars)) {
${'s_extra_vars23_argument'} = new ConditionArgument('s_extra_vars', $args->s_extra_vars, 'like');
${'s_extra_vars23_argument'}->createConditionValue();
if(!${'s_extra_vars23_argument'}->isValid()) return ${'s_extra_vars23_argument'}->getErrorMessage();
} else
${'s_extra_vars23_argument'} = NULL;if(${'s_extra_vars23_argument'} !== null) ${'s_extra_vars23_argument'}->setColumnType('text');
if(isset($args->s_regdate)) {
${'s_regdate24_argument'} = new ConditionArgument('s_regdate', $args->s_regdate, 'like_prefix');
${'s_regdate24_argument'}->createConditionValue();
if(!${'s_regdate24_argument'}->isValid()) return ${'s_regdate24_argument'}->getErrorMessage();
} else
${'s_regdate24_argument'} = NULL;if(${'s_regdate24_argument'} !== null) ${'s_regdate24_argument'}->setColumnType('date');
if(isset($args->s_last_login)) {
${'s_last_login25_argument'} = new ConditionArgument('s_last_login', $args->s_last_login, 'like_prefix');
${'s_last_login25_argument'}->createConditionValue();
if(!${'s_last_login25_argument'}->isValid()) return ${'s_last_login25_argument'}->getErrorMessage();
} else
${'s_last_login25_argument'} = NULL;if(${'s_last_login25_argument'} !== null) ${'s_last_login25_argument'}->setColumnType('date');
if(isset($args->s_regdate_more)) {
${'s_regdate_more26_argument'} = new ConditionArgument('s_regdate_more', $args->s_regdate_more, 'more');
${'s_regdate_more26_argument'}->createConditionValue();
if(!${'s_regdate_more26_argument'}->isValid()) return ${'s_regdate_more26_argument'}->getErrorMessage();
} else
${'s_regdate_more26_argument'} = NULL;if(${'s_regdate_more26_argument'} !== null) ${'s_regdate_more26_argument'}->setColumnType('date');
if(isset($args->s_regdate_less)) {
${'s_regdate_less27_argument'} = new ConditionArgument('s_regdate_less', $args->s_regdate_less, 'less');
${'s_regdate_less27_argument'}->createConditionValue();
if(!${'s_regdate_less27_argument'}->isValid()) return ${'s_regdate_less27_argument'}->getErrorMessage();
} else
${'s_regdate_less27_argument'} = NULL;if(${'s_regdate_less27_argument'} !== null) ${'s_regdate_less27_argument'}->setColumnType('date');
if(isset($args->s_last_login_more)) {
${'s_last_login_more28_argument'} = new ConditionArgument('s_last_login_more', $args->s_last_login_more, 'more');
${'s_last_login_more28_argument'}->createConditionValue();
if(!${'s_last_login_more28_argument'}->isValid()) return ${'s_last_login_more28_argument'}->getErrorMessage();
} else
${'s_last_login_more28_argument'} = NULL;if(${'s_last_login_more28_argument'} !== null) ${'s_last_login_more28_argument'}->setColumnType('date');
if(isset($args->s_last_login_less)) {
${'s_last_login_less29_argument'} = new ConditionArgument('s_last_login_less', $args->s_last_login_less, 'less');
${'s_last_login_less29_argument'}->createConditionValue();
if(!${'s_last_login_less29_argument'}->isValid()) return ${'s_last_login_less29_argument'}->getErrorMessage();
} else
${'s_last_login_less29_argument'} = NULL;if(${'s_last_login_less29_argument'} !== null) ${'s_last_login_less29_argument'}->setColumnType('date');

${'page32_argument'} = new Argument('page', $args->{'page'});
${'page32_argument'}->ensureDefaultValue('1');
if(!${'page32_argument'}->isValid()) return ${'page32_argument'}->getErrorMessage();

${'page_count33_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count33_argument'}->ensureDefaultValue('10');
if(!${'page_count33_argument'}->isValid()) return ${'page_count33_argument'}->getErrorMessage();

${'list_count34_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count34_argument'}->ensureDefaultValue('20');
if(!${'list_count34_argument'}->isValid()) return ${'list_count34_argument'}->getErrorMessage();

${'sort_index30_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index30_argument'}->ensureDefaultValue('member.list_order');
if(!${'sort_index30_argument'}->isValid()) return ${'sort_index30_argument'}->getErrorMessage();

${'sort_order31_argument'} = new SortArgument('sort_order31', $args->sort_order);
${'sort_order31_argument'}->ensureDefaultValue('asc');
if(!${'sort_order31_argument'}->isValid()) return ${'sort_order31_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`member`.*')
,new SelectExpression('`site_srl`')
,new SelectExpression('`group_srl`')
));
$query->setTables(array(
new Table('`xe_member`', '`member`')
,new Table('`xe_member_group_member`', '`member_group`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_group`.`group_srl`',$selected_group_srl13_argument,"in")
,new ConditionWithoutArgument('`member`.`member_srl`','`member_group`.`member_srl`',"equal", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`member`.`is_admin`',$is_admin14_argument,"equal")
,new ConditionWithArgument('`member`.`denied`',$is_denied15_argument,"equal", 'and')
,new ConditionWithArgument('`member`.`member_srl`',$member_srls16_argument,"in", 'and')),'and')
,new ConditionGroup(array(
new ConditionWithArgument('`member`.`user_id`',$s_user_id17_argument,"like")
,new ConditionWithArgument('`member`.`user_name`',$s_user_name18_argument,"like", 'or')
,new ConditionWithArgument('`member`.`nick_name`',$s_nick_name19_argument,"like", 'or')
,new ConditionWithArgument('`member`.`nick_name`',$html_nick_name20_argument,"like", 'or')
,new ConditionWithArgument('`member`.`email_address`',$s_email_address21_argument,"like", 'or')
,new ConditionWithArgument('`member`.`birthday`',$s_birthday22_argument,"like", 'or')
,new ConditionWithArgument('`member`.`extra_vars`',$s_extra_vars23_argument,"like", 'or')
,new ConditionWithArgument('`member`.`regdate`',$s_regdate24_argument,"like_prefix", 'or')
,new ConditionWithArgument('`member`.`last_login`',$s_last_login25_argument,"like_prefix", 'or')
,new ConditionWithArgument('`member`.`regdate`',$s_regdate_more26_argument,"more", 'or')
,new ConditionWithArgument('`member`.`regdate`',$s_regdate_less27_argument,"less", 'or')
,new ConditionWithArgument('`member`.`last_login`',$s_last_login_more28_argument,"more", 'or')
,new ConditionWithArgument('`member`.`last_login`',$s_last_login_less29_argument,"less", 'or')),'and')
));
$query->setGroups(array(
'`member`.`member_srl`' ));
$query->setOrder(array(
new OrderByColumn(${'sort_index30_argument'}, $sort_order31_argument)
));
$query->setLimit(new Limit(${'list_count34_argument'}, ${'page32_argument'}, ${'page_count33_argument'}));
return $query; ?>