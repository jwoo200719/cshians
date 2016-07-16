<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getComponentList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->enabled)) {
${'enabled6_argument'} = new ConditionArgument('enabled', $args->enabled, 'equal');
${'enabled6_argument'}->createConditionValue();
if(!${'enabled6_argument'}->isValid()) return ${'enabled6_argument'}->getErrorMessage();
} else
${'enabled6_argument'} = NULL;if(${'enabled6_argument'} !== null) ${'enabled6_argument'}->setColumnType('char');

${'sort_index7_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index7_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index7_argument'}->isValid()) return ${'sort_index7_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_editor_components`', '`editor_components`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`enabled`',$enabled6_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index7_argument'}, "asc")
));
$query->setLimit();
return $query; ?>