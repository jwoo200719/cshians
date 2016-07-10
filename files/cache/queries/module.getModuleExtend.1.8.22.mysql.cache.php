<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModuleExtend");
$query->setAction("select");
$query->setPriority("");
if(isset($args->parent_module)) {
${'parent_module2_argument'} = new ConditionArgument('parent_module', $args->parent_module, 'equal');
${'parent_module2_argument'}->createConditionValue();
if(!${'parent_module2_argument'}->isValid()) return ${'parent_module2_argument'}->getErrorMessage();
} else
${'parent_module2_argument'} = NULL;if(${'parent_module2_argument'} !== null) ${'parent_module2_argument'}->setColumnType('varchar');
if(isset($args->extend_module)) {
${'extend_module3_argument'} = new ConditionArgument('extend_module', $args->extend_module, 'equal');
${'extend_module3_argument'}->createConditionValue();
if(!${'extend_module3_argument'}->isValid()) return ${'extend_module3_argument'}->getErrorMessage();
} else
${'extend_module3_argument'} = NULL;if(${'extend_module3_argument'} !== null) ${'extend_module3_argument'}->setColumnType('varchar');
if(isset($args->type)) {
${'type4_argument'} = new ConditionArgument('type', $args->type, 'equal');
${'type4_argument'}->createConditionValue();
if(!${'type4_argument'}->isValid()) return ${'type4_argument'}->getErrorMessage();
} else
${'type4_argument'} = NULL;if(${'type4_argument'} !== null) ${'type4_argument'}->setColumnType('varchar');
if(isset($args->kind)) {
${'kind5_argument'} = new ConditionArgument('kind', $args->kind, 'equal');
${'kind5_argument'}->createConditionValue();
if(!${'kind5_argument'}->isValid()) return ${'kind5_argument'}->getErrorMessage();
} else
${'kind5_argument'} = NULL;if(${'kind5_argument'} !== null) ${'kind5_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_module_extend`', '`module_extend`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`parent_module`',$parent_module2_argument,"equal")
,new ConditionWithArgument('`extend_module`',$extend_module3_argument,"equal", 'and')
,new ConditionWithArgument('`type`',$type4_argument,"equal", 'and')
,new ConditionWithArgument('`kind`',$kind5_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>