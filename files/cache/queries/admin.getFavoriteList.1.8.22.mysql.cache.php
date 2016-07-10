<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getFavoriteList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->site_srl)) {
${'site_srl35_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl35_argument'}->createConditionValue();
if(!${'site_srl35_argument'}->isValid()) return ${'site_srl35_argument'}->getErrorMessage();
} else
${'site_srl35_argument'} = NULL;if(${'site_srl35_argument'} !== null) ${'site_srl35_argument'}->setColumnType('number');
if(isset($args->module)) {
${'module36_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module36_argument'}->createConditionValue();
if(!${'module36_argument'}->isValid()) return ${'module36_argument'}->getErrorMessage();
} else
${'module36_argument'} = NULL;if(${'module36_argument'} !== null) ${'module36_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_admin_favorite`', '`admin_favorite`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl35_argument,"equal")
,new ConditionWithArgument('`module`',$module36_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>