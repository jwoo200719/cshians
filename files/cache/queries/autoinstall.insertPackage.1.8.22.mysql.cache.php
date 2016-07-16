<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertPackage");
$query->setAction("insert");
$query->setPriority("");

${'package_srl19_argument'} = new Argument('package_srl', $args->{'package_srl'});
${'package_srl19_argument'}->checkFilter('number');
${'package_srl19_argument'}->checkNotNull();
if(!${'package_srl19_argument'}->isValid()) return ${'package_srl19_argument'}->getErrorMessage();
if(${'package_srl19_argument'} !== null) ${'package_srl19_argument'}->setColumnType('number');
if(isset($args->category_srl)) {
${'category_srl20_argument'} = new Argument('category_srl', $args->{'category_srl'});
${'category_srl20_argument'}->checkFilter('number');
if(!${'category_srl20_argument'}->isValid()) return ${'category_srl20_argument'}->getErrorMessage();
} else
${'category_srl20_argument'} = NULL;if(${'category_srl20_argument'} !== null) ${'category_srl20_argument'}->setColumnType('number');

${'path21_argument'} = new Argument('path', $args->{'path'});
${'path21_argument'}->checkNotNull();
if(!${'path21_argument'}->isValid()) return ${'path21_argument'}->getErrorMessage();
if(${'path21_argument'} !== null) ${'path21_argument'}->setColumnType('varchar');

${'have_instance22_argument'} = new Argument('have_instance', $args->{'have_instance'});
${'have_instance22_argument'}->checkNotNull();
if(!${'have_instance22_argument'}->isValid()) return ${'have_instance22_argument'}->getErrorMessage();
if(${'have_instance22_argument'} !== null) ${'have_instance22_argument'}->setColumnType('char');

${'updatedate23_argument'} = new Argument('updatedate', $args->{'updatedate'});
${'updatedate23_argument'}->checkNotNull();
if(!${'updatedate23_argument'}->isValid()) return ${'updatedate23_argument'}->getErrorMessage();
if(${'updatedate23_argument'} !== null) ${'updatedate23_argument'}->setColumnType('date');

${'latest_item_srl24_argument'} = new Argument('latest_item_srl', $args->{'latest_item_srl'});
${'latest_item_srl24_argument'}->checkNotNull();
if(!${'latest_item_srl24_argument'}->isValid()) return ${'latest_item_srl24_argument'}->getErrorMessage();
if(${'latest_item_srl24_argument'} !== null) ${'latest_item_srl24_argument'}->setColumnType('number');

${'version25_argument'} = new Argument('version', $args->{'version'});
${'version25_argument'}->checkNotNull();
if(!${'version25_argument'}->isValid()) return ${'version25_argument'}->getErrorMessage();
if(${'version25_argument'} !== null) ${'version25_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`package_srl`', ${'package_srl19_argument'})
,new InsertExpression('`category_srl`', ${'category_srl20_argument'})
,new InsertExpression('`path`', ${'path21_argument'})
,new InsertExpression('`have_instance`', ${'have_instance22_argument'})
,new InsertExpression('`updatedate`', ${'updatedate23_argument'})
,new InsertExpression('`latest_item_srl`', ${'latest_item_srl24_argument'})
,new InsertExpression('`version`', ${'version25_argument'})
));
$query->setTables(array(
new Table('`xe_autoinstall_packages`', '`autoinstall_packages`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>