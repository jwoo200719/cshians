<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModuleSkinDotList");
$query->setAction("select");
$query->setPriority("");

${'skin10_argument'} = new ConditionArgument('skin', $args->skin, 'like');
${'skin10_argument'}->ensureDefaultValue('.');
${'skin10_argument'}->createConditionValue();
if(!${'skin10_argument'}->isValid()) return ${'skin10_argument'}->getErrorMessage();
if(${'skin10_argument'} !== null) ${'skin10_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('`module`')
,new SelectExpression('`skin`')
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`skin`',$skin10_argument,"like")))
));
$query->setGroups(array(
'`skin`' ));
$query->setOrder(array());
$query->setLimit();
return $query; ?>