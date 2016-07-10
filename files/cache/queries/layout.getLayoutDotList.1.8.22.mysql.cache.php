<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getLayoutDotList");
$query->setAction("select");
$query->setPriority("");

${'site_srl3_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl3_argument'}->checkFilter('number');
${'site_srl3_argument'}->ensureDefaultValue('0');
${'site_srl3_argument'}->checkNotNull();
${'site_srl3_argument'}->createConditionValue();
if(!${'site_srl3_argument'}->isValid()) return ${'site_srl3_argument'}->getErrorMessage();
if(${'site_srl3_argument'} !== null) ${'site_srl3_argument'}->setColumnType('number');

${'layout_type4_argument'} = new ConditionArgument('layout_type', $args->layout_type, 'equal');
${'layout_type4_argument'}->ensureDefaultValue('P');
${'layout_type4_argument'}->createConditionValue();
if(!${'layout_type4_argument'}->isValid()) return ${'layout_type4_argument'}->getErrorMessage();
if(${'layout_type4_argument'} !== null) ${'layout_type4_argument'}->setColumnType('char');

${'layout5_argument'} = new ConditionArgument('layout', $args->layout, 'like');
${'layout5_argument'}->ensureDefaultValue('.');
${'layout5_argument'}->createConditionValue();
if(!${'layout5_argument'}->isValid()) return ${'layout5_argument'}->getErrorMessage();
if(${'layout5_argument'} !== null) ${'layout5_argument'}->setColumnType('varchar');

${'sort_index6_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index6_argument'}->ensureDefaultValue('layout_srl');
if(!${'sort_index6_argument'}->isValid()) return ${'sort_index6_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_layouts`', '`layouts`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl3_argument,"equal")
,new ConditionWithArgument('`layout_type`',$layout_type4_argument,"equal", 'and')
,new ConditionWithArgument('`layout`',$layout5_argument,"like", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index6_argument'}, "desc")
));
$query->setLimit();
return $query; ?>