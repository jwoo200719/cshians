<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteDocumentExtraVars");
$query->setAction("delete");
$query->setPriority("");

${'module_srl29_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl29_argument'}->checkFilter('number');
${'module_srl29_argument'}->checkNotNull();
${'module_srl29_argument'}->createConditionValue();
if(!${'module_srl29_argument'}->isValid()) return ${'module_srl29_argument'}->getErrorMessage();
if(${'module_srl29_argument'} !== null) ${'module_srl29_argument'}->setColumnType('number');
if(isset($args->document_srl)) {
${'document_srl30_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl30_argument'}->checkFilter('number');
${'document_srl30_argument'}->createConditionValue();
if(!${'document_srl30_argument'}->isValid()) return ${'document_srl30_argument'}->getErrorMessage();
} else
${'document_srl30_argument'} = NULL;if(${'document_srl30_argument'} !== null) ${'document_srl30_argument'}->setColumnType('number');
if(isset($args->var_idx)) {
${'var_idx31_argument'} = new ConditionArgument('var_idx', $args->var_idx, 'equal');
${'var_idx31_argument'}->checkFilter('number');
${'var_idx31_argument'}->createConditionValue();
if(!${'var_idx31_argument'}->isValid()) return ${'var_idx31_argument'}->getErrorMessage();
} else
${'var_idx31_argument'} = NULL;if(${'var_idx31_argument'} !== null) ${'var_idx31_argument'}->setColumnType('number');
if(isset($args->lang_code)) {
${'lang_code32_argument'} = new ConditionArgument('lang_code', $args->lang_code, 'equal');
${'lang_code32_argument'}->createConditionValue();
if(!${'lang_code32_argument'}->isValid()) return ${'lang_code32_argument'}->getErrorMessage();
} else
${'lang_code32_argument'} = NULL;if(${'lang_code32_argument'} !== null) ${'lang_code32_argument'}->setColumnType('varchar');
if(isset($args->eid)) {
${'eid33_argument'} = new ConditionArgument('eid', $args->eid, 'equal');
${'eid33_argument'}->createConditionValue();
if(!${'eid33_argument'}->isValid()) return ${'eid33_argument'}->getErrorMessage();
} else
${'eid33_argument'} = NULL;if(${'eid33_argument'} !== null) ${'eid33_argument'}->setColumnType('varchar');

$query->setTables(array(
new Table('`xe_document_extra_vars`', '`document_extra_vars`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl29_argument,"equal")
,new ConditionWithArgument('`document_srl`',$document_srl30_argument,"equal", 'and')
,new ConditionWithArgument('`var_idx`',$var_idx31_argument,"equal", 'and')
,new ConditionWithArgument('`lang_code`',$lang_code32_argument,"equal", 'and')
,new ConditionWithArgument('`eid`',$eid33_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>