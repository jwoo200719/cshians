<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getSiteUpdatedTime");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl4_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl4_argument'}->checkFilter('number');
${'module_srl4_argument'}->createConditionValue();
if(!${'module_srl4_argument'}->isValid()) return ${'module_srl4_argument'}->getErrorMessage();
} else
${'module_srl4_argument'} = NULL;if(${'module_srl4_argument'} !== null) ${'module_srl4_argument'}->setColumnType('number');
if(isset($args->start_date)) {
${'start_date5_argument'} = new ConditionArgument('start_date', $args->start_date, 'more');
${'start_date5_argument'}->checkFilter('number');
${'start_date5_argument'}->createConditionValue();
if(!${'start_date5_argument'}->isValid()) return ${'start_date5_argument'}->getErrorMessage();
} else
${'start_date5_argument'} = NULL;if(${'start_date5_argument'} !== null) ${'start_date5_argument'}->setColumnType('date');
if(isset($args->end_date)) {
${'end_date6_argument'} = new ConditionArgument('end_date', $args->end_date, 'less');
${'end_date6_argument'}->checkFilter('number');
${'end_date6_argument'}->createConditionValue();
if(!${'end_date6_argument'}->isValid()) return ${'end_date6_argument'}->getErrorMessage();
} else
${'end_date6_argument'} = NULL;if(${'end_date6_argument'} !== null) ${'end_date6_argument'}->setColumnType('date');
if(isset($args->except_modules)) {
${'except_modules7_argument'} = new ConditionArgument('except_modules', $args->except_modules, 'notin');
${'except_modules7_argument'}->createConditionValue();
if(!${'except_modules7_argument'}->isValid()) return ${'except_modules7_argument'}->getErrorMessage();
} else
${'except_modules7_argument'} = NULL;if(${'except_modules7_argument'} !== null) ${'except_modules7_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('max(`doc`.`last_update`)', '`last_update`')
));
$query->setTables(array(
new Table('`xe_documents`', '`doc`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`doc`.`module_srl`',$module_srl4_argument,"equal")
,new ConditionWithArgument('`doc`.`last_update`',$start_date5_argument,"more", 'and')
,new ConditionWithArgument('`doc`.`last_update`',$end_date6_argument,"less", 'and')
,new ConditionWithArgument('`doc`.`module_srl`',$except_modules7_argument,"notin", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>