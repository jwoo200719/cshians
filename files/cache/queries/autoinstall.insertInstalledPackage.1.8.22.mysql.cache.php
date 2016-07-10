<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertInstalledPackage");
$query->setAction("insert");
$query->setPriority("");

${'package_srl20_argument'} = new Argument('package_srl', $args->{'package_srl'});
${'package_srl20_argument'}->checkFilter('number');
${'package_srl20_argument'}->checkNotNull();
if(!${'package_srl20_argument'}->isValid()) return ${'package_srl20_argument'}->getErrorMessage();
if(${'package_srl20_argument'} !== null) ${'package_srl20_argument'}->setColumnType('number');

${'version21_argument'} = new Argument('version', $args->{'version'});
${'version21_argument'}->checkNotNull();
if(!${'version21_argument'}->isValid()) return ${'version21_argument'}->getErrorMessage();
if(${'version21_argument'} !== null) ${'version21_argument'}->setColumnType('varchar');

${'current_version22_argument'} = new Argument('current_version', $args->{'current_version'});
${'current_version22_argument'}->checkNotNull();
if(!${'current_version22_argument'}->isValid()) return ${'current_version22_argument'}->getErrorMessage();
if(${'current_version22_argument'} !== null) ${'current_version22_argument'}->setColumnType('varchar');
if(isset($args->need_update)) {
${'need_update23_argument'} = new Argument('need_update', $args->{'need_update'});
if(!${'need_update23_argument'}->isValid()) return ${'need_update23_argument'}->getErrorMessage();
} else
${'need_update23_argument'} = NULL;if(${'need_update23_argument'} !== null) ${'need_update23_argument'}->setColumnType('char');

$query->setColumns(array(
new InsertExpression('`package_srl`', ${'package_srl20_argument'})
,new InsertExpression('`version`', ${'version21_argument'})
,new InsertExpression('`current_version`', ${'current_version22_argument'})
,new InsertExpression('`need_update`', ${'need_update23_argument'})
));
$query->setTables(array(
new Table('`xe_ai_installed_packages`', '`ai_installed_packages`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>