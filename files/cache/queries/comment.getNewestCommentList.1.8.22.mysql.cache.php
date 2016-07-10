<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getNewestCommentList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->status)) {
${'status38_argument'} = new ConditionArgument('status', $args->status, 'equal');
${'status38_argument'}->createConditionValue();
if(!${'status38_argument'}->isValid()) return ${'status38_argument'}->getErrorMessage();
} else
${'status38_argument'} = NULL;if(${'status38_argument'} !== null) ${'status38_argument'}->setColumnType('number');
if(isset($args->module_srl)) {
${'module_srl39_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl39_argument'}->checkFilter('number');
${'module_srl39_argument'}->createConditionValue();
if(!${'module_srl39_argument'}->isValid()) return ${'module_srl39_argument'}->getErrorMessage();
} else
${'module_srl39_argument'} = NULL;if(${'module_srl39_argument'} !== null) ${'module_srl39_argument'}->setColumnType('number');
if(isset($args->document_srl)) {
${'document_srl40_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl40_argument'}->checkFilter('number');
${'document_srl40_argument'}->createConditionValue();
if(!${'document_srl40_argument'}->isValid()) return ${'document_srl40_argument'}->getErrorMessage();
} else
${'document_srl40_argument'} = NULL;if(${'document_srl40_argument'} !== null) ${'document_srl40_argument'}->setColumnType('number');

${'list_count42_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count42_argument'}->ensureDefaultValue('20');
if(!${'list_count42_argument'}->isValid()) return ${'list_count42_argument'}->getErrorMessage();

${'sort_index41_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index41_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index41_argument'}->isValid()) return ${'sort_index41_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_comments`', '`comments`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`status`',$status38_argument,"equal", 'and')
,new ConditionWithArgument('`module_srl`',$module_srl39_argument,"in", 'and')
,new ConditionWithArgument('`document_srl`',$document_srl40_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index41_argument'}, "asc")
));
$query->setLimit(new Limit(${'list_count42_argument'}));
return $query; ?>