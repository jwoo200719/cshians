<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getSiteAddonIsActivated");
$query->setAction("select");
$query->setPriority("");

${'site_srl43_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl43_argument'}->checkNotNull();
${'site_srl43_argument'}->createConditionValue();
if(!${'site_srl43_argument'}->isValid()) return ${'site_srl43_argument'}->getErrorMessage();
if(${'site_srl43_argument'} !== null) ${'site_srl43_argument'}->setColumnType('number');

${'addon44_argument'} = new ConditionArgument('addon', $args->addon, 'equal');
${'addon44_argument'}->checkNotNull();
${'addon44_argument'}->createConditionValue();
if(!${'addon44_argument'}->isValid()) return ${'addon44_argument'}->getErrorMessage();
if(${'addon44_argument'} !== null) ${'addon44_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_addons_site`', '`addons_site`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl43_argument,"equal")
,new ConditionWithArgument('`addon`',$addon44_argument,"equal", 'and')
,new ConditionWithoutArgument('`is_used`',"'Y'","equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>