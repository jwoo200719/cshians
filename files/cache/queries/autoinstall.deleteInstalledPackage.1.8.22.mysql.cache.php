<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteInstalledPackage");
$query->setAction("delete");
$query->setPriority("");
if(isset($args->package_srl)) {
${'package_srl19_argument'} = new ConditionArgument('package_srl', $args->package_srl, 'equal');
${'package_srl19_argument'}->checkFilter('number');
${'package_srl19_argument'}->createConditionValue();
if(!${'package_srl19_argument'}->isValid()) return ${'package_srl19_argument'}->getErrorMessage();
} else
${'package_srl19_argument'} = NULL;if(${'package_srl19_argument'} !== null) ${'package_srl19_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_ai_installed_packages`', '`ai_installed_packages`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`package_srl`',$package_srl19_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>