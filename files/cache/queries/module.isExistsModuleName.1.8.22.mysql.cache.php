<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("isExistsModuleName");
$query->setAction("select");
$query->setPriority("");

${'site_srl40_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl40_argument'}->ensureDefaultValue('0');
${'site_srl40_argument'}->checkNotNull();
${'site_srl40_argument'}->createConditionValue();
if(!${'site_srl40_argument'}->isValid()) return ${'site_srl40_argument'}->getErrorMessage();
if(${'site_srl40_argument'} !== null) ${'site_srl40_argument'}->setColumnType('number');

${'mid41_argument'} = new ConditionArgument('mid', $args->mid, 'equal');
${'mid41_argument'}->checkNotNull();
${'mid41_argument'}->createConditionValue();
if(!${'mid41_argument'}->isValid()) return ${'mid41_argument'}->getErrorMessage();
if(${'mid41_argument'} !== null) ${'mid41_argument'}->setColumnType('varchar');

${'module_srl42_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'notequal');
${'module_srl42_argument'}->ensureDefaultValue('0');
${'module_srl42_argument'}->checkNotNull();
${'module_srl42_argument'}->createConditionValue();
if(!${'module_srl42_argument'}->isValid()) return ${'module_srl42_argument'}->getErrorMessage();
if(${'module_srl42_argument'} !== null) ${'module_srl42_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl40_argument,"equal")
,new ConditionWithArgument('`mid`',$mid41_argument,"equal", 'and')
,new ConditionWithArgument('`module_srl`',$module_srl42_argument,"notequal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>