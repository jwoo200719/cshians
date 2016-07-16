<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteModuleConfig");
$query->setAction("delete");
$query->setPriority("");

${'module1_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module1_argument'}->checkNotNull();
${'module1_argument'}->createConditionValue();
if(!${'module1_argument'}->isValid()) return ${'module1_argument'}->getErrorMessage();
if(${'module1_argument'} !== null) ${'module1_argument'}->setColumnType('varchar');

${'site_srl2_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl2_argument'}->checkNotNull();
${'site_srl2_argument'}->createConditionValue();
if(!${'site_srl2_argument'}->isValid()) return ${'site_srl2_argument'}->getErrorMessage();
if(${'site_srl2_argument'} !== null) ${'site_srl2_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_module_config`', '`module_config`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module`',$module1_argument,"equal")
,new ConditionWithArgument('`site_srl`',$site_srl2_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>