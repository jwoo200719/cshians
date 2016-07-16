<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deletePackage");
$query->setAction("delete");
$query->setPriority("");

${'path26_argument'} = new ConditionArgument('path', $args->path, 'equal');
${'path26_argument'}->checkNotNull();
${'path26_argument'}->createConditionValue();
if(!${'path26_argument'}->isValid()) return ${'path26_argument'}->getErrorMessage();
if(${'path26_argument'} !== null) ${'path26_argument'}->setColumnType('varchar');

$query->setTables(array(
new Table('`xe_autoinstall_packages`', '`autoinstall_packages`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`path`',$path26_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>