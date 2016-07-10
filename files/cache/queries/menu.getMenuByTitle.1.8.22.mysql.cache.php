<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMenuByTitle");
$query->setAction("select");
$query->setPriority("");

${'title7_argument'} = new ConditionArgument('title', $args->title, 'in');
${'title7_argument'}->checkNotNull();
${'title7_argument'}->createConditionValue();
if(!${'title7_argument'}->isValid()) return ${'title7_argument'}->getErrorMessage();
if(${'title7_argument'} !== null) ${'title7_argument'}->setColumnType('varchar');

${'site_srl8_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl8_argument'}->ensureDefaultValue('0');
${'site_srl8_argument'}->createConditionValue();
if(!${'site_srl8_argument'}->isValid()) return ${'site_srl8_argument'}->getErrorMessage();
if(${'site_srl8_argument'} !== null) ${'site_srl8_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_menu`', '`menu`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`title`',$title7_argument,"in")
,new ConditionWithArgument('`site_srl`',$site_srl8_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>