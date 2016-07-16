<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getExceptModuleSrls");
$query->setAction("select");
$query->setPriority("");

$query->setColumns(array(
new SelectExpression('`module_srl`')
));
$query->setTables(array(
new Table('`xe_syndication_except_modules`', '`syndication_except_modules`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>