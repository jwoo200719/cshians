<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updatePackage");
$query->setAction("update");
$query->setPriority("");

${'path12_argument'} = new Argument('path', $args->{'path'});
${'path12_argument'}->checkNotNull();
if(!${'path12_argument'}->isValid()) return ${'path12_argument'}->getErrorMessage();
if(${'path12_argument'} !== null) ${'path12_argument'}->setColumnType('varchar');

${'have_instance13_argument'} = new Argument('have_instance', $args->{'have_instance'});
${'have_instance13_argument'}->checkNotNull();
if(!${'have_instance13_argument'}->isValid()) return ${'have_instance13_argument'}->getErrorMessage();
if(${'have_instance13_argument'} !== null) ${'have_instance13_argument'}->setColumnType('char');

${'updatedate14_argument'} = new Argument('updatedate', $args->{'updatedate'});
${'updatedate14_argument'}->checkNotNull();
if(!${'updatedate14_argument'}->isValid()) return ${'updatedate14_argument'}->getErrorMessage();
if(${'updatedate14_argument'} !== null) ${'updatedate14_argument'}->setColumnType('date');
if(isset($args->category_srl)) {
${'category_srl15_argument'} = new Argument('category_srl', $args->{'category_srl'});
${'category_srl15_argument'}->checkFilter('number');
if(!${'category_srl15_argument'}->isValid()) return ${'category_srl15_argument'}->getErrorMessage();
} else
${'category_srl15_argument'} = NULL;if(${'category_srl15_argument'} !== null) ${'category_srl15_argument'}->setColumnType('number');

${'latest_item_srl16_argument'} = new Argument('latest_item_srl', $args->{'latest_item_srl'});
${'latest_item_srl16_argument'}->checkNotNull();
if(!${'latest_item_srl16_argument'}->isValid()) return ${'latest_item_srl16_argument'}->getErrorMessage();
if(${'latest_item_srl16_argument'} !== null) ${'latest_item_srl16_argument'}->setColumnType('number');

${'version17_argument'} = new Argument('version', $args->{'version'});
${'version17_argument'}->checkNotNull();
if(!${'version17_argument'}->isValid()) return ${'version17_argument'}->getErrorMessage();
if(${'version17_argument'} !== null) ${'version17_argument'}->setColumnType('varchar');

${'package_srl18_argument'} = new ConditionArgument('package_srl', $args->package_srl, 'equal');
${'package_srl18_argument'}->checkNotNull();
${'package_srl18_argument'}->createConditionValue();
if(!${'package_srl18_argument'}->isValid()) return ${'package_srl18_argument'}->getErrorMessage();
if(${'package_srl18_argument'} !== null) ${'package_srl18_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`path`', ${'path12_argument'})
,new UpdateExpression('`have_instance`', ${'have_instance13_argument'})
,new UpdateExpression('`updatedate`', ${'updatedate14_argument'})
,new UpdateExpression('`category_srl`', ${'category_srl15_argument'})
,new UpdateExpression('`latest_item_srl`', ${'latest_item_srl16_argument'})
,new UpdateExpression('`version`', ${'version17_argument'})
));
$query->setTables(array(
new Table('`xe_autoinstall_packages`', '`autoinstall_packages`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`package_srl`',$package_srl18_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>