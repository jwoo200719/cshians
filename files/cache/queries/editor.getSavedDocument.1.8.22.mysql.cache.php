<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getSavedDocument");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl3_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl3_argument'}->createConditionValue();
if(!${'module_srl3_argument'}->isValid()) return ${'module_srl3_argument'}->getErrorMessage();
} else
${'module_srl3_argument'} = NULL;if(${'module_srl3_argument'} !== null) ${'module_srl3_argument'}->setColumnType('number');
if(isset($args->member_srl)) {
${'member_srl4_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl4_argument'}->createConditionValue();
if(!${'member_srl4_argument'}->isValid()) return ${'member_srl4_argument'}->getErrorMessage();
} else
${'member_srl4_argument'} = NULL;if(${'member_srl4_argument'} !== null) ${'member_srl4_argument'}->setColumnType('number');
if(isset($args->ipaddress)) {
${'ipaddress5_argument'} = new ConditionArgument('ipaddress', $args->ipaddress, 'equal');
${'ipaddress5_argument'}->createConditionValue();
if(!${'ipaddress5_argument'}->isValid()) return ${'ipaddress5_argument'}->getErrorMessage();
} else
${'ipaddress5_argument'} = NULL;if(${'ipaddress5_argument'} !== null) ${'ipaddress5_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_editor_autosave`', '`editor_autosave`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl3_argument,"equal")
,new ConditionWithArgument('`member_srl`',$member_srl4_argument,"equal", 'and')
,new ConditionWithArgument('`ipaddress`',$ipaddress5_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>