<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMenuItemByUrl");
$query->setAction("select");
$query->setPriority("");

${'url64_argument'} = new ConditionArgument('url', $args->url, 'equal');
${'url64_argument'}->checkNotNull();
${'url64_argument'}->createConditionValue();
if(!${'url64_argument'}->isValid()) return ${'url64_argument'}->getErrorMessage();
if(${'url64_argument'} !== null) ${'url64_argument'}->setColumnType('varchar');
if(isset($args->is_shortcut)) {
${'is_shortcut65_argument'} = new ConditionArgument('is_shortcut', $args->is_shortcut, 'equal');
${'is_shortcut65_argument'}->createConditionValue();
if(!${'is_shortcut65_argument'}->isValid()) return ${'is_shortcut65_argument'}->getErrorMessage();
} else
${'is_shortcut65_argument'} = NULL;if(${'is_shortcut65_argument'} !== null) ${'is_shortcut65_argument'}->setColumnType('char');

${'site_srl66_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl66_argument'}->checkNotNull();
${'site_srl66_argument'}->createConditionValue();
if(!${'site_srl66_argument'}->isValid()) return ${'site_srl66_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_menu_item`', '`MI`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`MI`.`url`',$url64_argument,"equal")
,new ConditionWithArgument('`MI`.`is_shortcut`',$is_shortcut65_argument,"equal", 'and')
,new ConditionSubquery('`MI`.`menu_srl`',new Subquery('`getSiteSrl`', array(
new SelectExpression('`menu_srl`')
), 
array(
new Table('`xe_menu`', '`M`')
),
array(
new ConditionGroup(array(
new ConditionWithArgument('`M`.`site_srl`',$site_srl66_argument,"equal")))
),
array(),
array(),
null
),"in", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>