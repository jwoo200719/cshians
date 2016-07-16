<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModules");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srls)) {
${'module_srls1_argument'} = new ConditionArgument('module_srls', $args->module_srls, 'in');
${'module_srls1_argument'}->createConditionValue();
if(!${'module_srls1_argument'}->isValid()) return ${'module_srls1_argument'}->getErrorMessage();
} else
${'module_srls1_argument'} = NULL;if(${'module_srls1_argument'} !== null) ${'module_srls1_argument'}->setColumnType('number');
if(isset($args->except_module_srls)) {
${'except_module_srls2_argument'} = new ConditionArgument('except_module_srls', $args->except_module_srls, 'notin');
${'except_module_srls2_argument'}->createConditionValue();
if(!${'except_module_srls2_argument'}->isValid()) return ${'except_module_srls2_argument'}->getErrorMessage();
} else
${'except_module_srls2_argument'} = NULL;if(${'except_module_srls2_argument'} !== null) ${'except_module_srls2_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`modules`.`site_srl`', '`site_srl`')
,new SelectExpression('`modules`.`module_srl`', '`module_srl`')
,new SelectExpression('`sites`.`domain`', '`domain`')
,new SelectExpression('`modules`.`mid`', '`mid`')
,new SelectExpression('`modules`.`module`', '`module`')
,new SelectExpression('`modules`.`browser_title`', '`browser_title`')
,new SelectExpression('`modules`.`description`', '`description`')
));
$query->setTables(array(
new Table('`xe_sites`', '`sites`')
,new Table('`xe_modules`', '`modules`')
,new JoinTable('`xe_syndication_except_modules`', '`except_modules`', "left join", array(
new ConditionGroup(array(
new ConditionWithoutArgument('`modules`.`module_srl`','`except_modules`.`module_srl`',"equal")))
))
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`modules`.`module_srl`',$module_srls1_argument,"in")
,new ConditionWithArgument('`modules`.`module_srl`',$except_module_srls2_argument,"notin", 'and')
,new ConditionWithoutArgument('`sites`.`site_srl`','`modules`.`site_srl`',"equal", 'and')
,new ConditionWithoutArgument('`except_modules`.`module_srl`','1',"null", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>