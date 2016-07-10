<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getActionForward");
$query->setAction("select");
$query->setPriority("");
if(isset($args->act)) {
${'act11_argument'} = new ConditionArgument('act', $args->act, 'equal');
${'act11_argument'}->createConditionValue();
if(!${'act11_argument'}->isValid()) return ${'act11_argument'}->getErrorMessage();
} else
${'act11_argument'} = NULL;if(${'act11_argument'} !== null) ${'act11_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_action_forward`', '`action_forward`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`act`',$act11_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>