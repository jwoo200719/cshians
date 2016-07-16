<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertModuleExtraVars");
$query->setAction("insert");
$query->setPriority("");

${'module_srl68_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl68_argument'}->checkFilter('number');
${'module_srl68_argument'}->checkNotNull();
if(!${'module_srl68_argument'}->isValid()) return ${'module_srl68_argument'}->getErrorMessage();
if(${'module_srl68_argument'} !== null) ${'module_srl68_argument'}->setColumnType('number');

${'name69_argument'} = new Argument('name', $args->{'name'});
${'name69_argument'}->checkNotNull();
if(!${'name69_argument'}->isValid()) return ${'name69_argument'}->getErrorMessage();
if(${'name69_argument'} !== null) ${'name69_argument'}->setColumnType('varchar');

${'value70_argument'} = new Argument('value', $args->{'value'});
${'value70_argument'}->checkNotNull();
if(!${'value70_argument'}->isValid()) return ${'value70_argument'}->getErrorMessage();
if(${'value70_argument'} !== null) ${'value70_argument'}->setColumnType('text');

$query->setColumns(array(
new InsertExpression('`module_srl`', ${'module_srl68_argument'})
,new InsertExpression('`name`', ${'name69_argument'})
,new InsertExpression('`value`', ${'value70_argument'})
));
$query->setTables(array(
new Table('`xe_module_extra_vars`', '`module_extra_vars`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>