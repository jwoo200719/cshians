<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModuleSiteInfo");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl3_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl3_argument'}->checkFilter('number');
${'module_srl3_argument'}->createConditionValue();
if(!${'module_srl3_argument'}->isValid()) return ${'module_srl3_argument'}->getErrorMessage();
} else
${'module_srl3_argument'} = NULL;if(${'module_srl3_argument'} !== null) ${'module_srl3_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`modules`.`module_srl`', '`module_srl`')
,new SelectExpression('`modules`.`mid`', '`mid`')
,new SelectExpression('`sites`.`domain`', '`domain`')
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
,new Table('`xe_sites`', '`sites`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`modules`.`module_srl`',$module_srl3_argument,"equal")
,new ConditionWithoutArgument('`sites`.`site_srl`','`modules`.`site_srl`',"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>