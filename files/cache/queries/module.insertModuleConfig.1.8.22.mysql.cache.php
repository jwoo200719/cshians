<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertModuleConfig");
$query->setAction("insert");
$query->setPriority("");

${'module3_argument'} = new Argument('module', $args->{'module'});
${'module3_argument'}->checkNotNull();
if(!${'module3_argument'}->isValid()) return ${'module3_argument'}->getErrorMessage();
if(${'module3_argument'} !== null) ${'module3_argument'}->setColumnType('varchar');
if(isset($args->config)) {
${'config4_argument'} = new Argument('config', $args->{'config'});
if(!${'config4_argument'}->isValid()) return ${'config4_argument'}->getErrorMessage();
} else
${'config4_argument'} = NULL;if(${'config4_argument'} !== null) ${'config4_argument'}->setColumnType('text');

${'site_srl5_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl5_argument'}->checkNotNull();
if(!${'site_srl5_argument'}->isValid()) return ${'site_srl5_argument'}->getErrorMessage();
if(${'site_srl5_argument'} !== null) ${'site_srl5_argument'}->setColumnType('number');

${'regdate6_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate6_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate6_argument'}->isValid()) return ${'regdate6_argument'}->getErrorMessage();
if(${'regdate6_argument'} !== null) ${'regdate6_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`module`', ${'module3_argument'})
,new InsertExpression('`config`', ${'config4_argument'})
,new InsertExpression('`site_srl`', ${'site_srl5_argument'})
,new InsertExpression('`regdate`', ${'regdate6_argument'})
));
$query->setTables(array(
new Table('`xe_module_config`', '`module_config`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>