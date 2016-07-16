<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateMenuItem");
$query->setAction("update");
$query->setPriority("");
if(isset($args->menu_srl)) {
${'menu_srl2_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
if(!${'menu_srl2_argument'}->isValid()) return ${'menu_srl2_argument'}->getErrorMessage();
} else
${'menu_srl2_argument'} = NULL;if(${'menu_srl2_argument'} !== null) ${'menu_srl2_argument'}->setColumnType('number');
if(isset($args->parent_srl)) {
${'parent_srl3_argument'} = new Argument('parent_srl', $args->{'parent_srl'});
if(!${'parent_srl3_argument'}->isValid()) return ${'parent_srl3_argument'}->getErrorMessage();
} else
${'parent_srl3_argument'} = NULL;if(${'parent_srl3_argument'} !== null) ${'parent_srl3_argument'}->setColumnType('number');
if(isset($args->name)) {
${'name4_argument'} = new Argument('name', $args->{'name'});
if(!${'name4_argument'}->isValid()) return ${'name4_argument'}->getErrorMessage();
} else
${'name4_argument'} = NULL;if(${'name4_argument'} !== null) ${'name4_argument'}->setColumnType('text');
if(isset($args->desc)) {
${'desc5_argument'} = new Argument('desc', $args->{'desc'});
if(!${'desc5_argument'}->isValid()) return ${'desc5_argument'}->getErrorMessage();
} else
${'desc5_argument'} = NULL;if(${'desc5_argument'} !== null) ${'desc5_argument'}->setColumnType('varchar');
if(isset($args->url)) {
${'url6_argument'} = new Argument('url', $args->{'url'});
if(!${'url6_argument'}->isValid()) return ${'url6_argument'}->getErrorMessage();
} else
${'url6_argument'} = NULL;if(${'url6_argument'} !== null) ${'url6_argument'}->setColumnType('varchar');
if(isset($args->is_shortcut)) {
${'is_shortcut7_argument'} = new Argument('is_shortcut', $args->{'is_shortcut'});
if(!${'is_shortcut7_argument'}->isValid()) return ${'is_shortcut7_argument'}->getErrorMessage();
} else
${'is_shortcut7_argument'} = NULL;if(${'is_shortcut7_argument'} !== null) ${'is_shortcut7_argument'}->setColumnType('char');
if(isset($args->open_window)) {
${'open_window8_argument'} = new Argument('open_window', $args->{'open_window'});
if(!${'open_window8_argument'}->isValid()) return ${'open_window8_argument'}->getErrorMessage();
} else
${'open_window8_argument'} = NULL;if(${'open_window8_argument'} !== null) ${'open_window8_argument'}->setColumnType('char');
if(isset($args->expand)) {
${'expand9_argument'} = new Argument('expand', $args->{'expand'});
if(!${'expand9_argument'}->isValid()) return ${'expand9_argument'}->getErrorMessage();
} else
${'expand9_argument'} = NULL;if(${'expand9_argument'} !== null) ${'expand9_argument'}->setColumnType('char');
if(isset($args->normal_btn)) {
${'normal_btn10_argument'} = new Argument('normal_btn', $args->{'normal_btn'});
if(!${'normal_btn10_argument'}->isValid()) return ${'normal_btn10_argument'}->getErrorMessage();
} else
${'normal_btn10_argument'} = NULL;if(${'normal_btn10_argument'} !== null) ${'normal_btn10_argument'}->setColumnType('varchar');
if(isset($args->hover_btn)) {
${'hover_btn11_argument'} = new Argument('hover_btn', $args->{'hover_btn'});
if(!${'hover_btn11_argument'}->isValid()) return ${'hover_btn11_argument'}->getErrorMessage();
} else
${'hover_btn11_argument'} = NULL;if(${'hover_btn11_argument'} !== null) ${'hover_btn11_argument'}->setColumnType('varchar');
if(isset($args->active_btn)) {
${'active_btn12_argument'} = new Argument('active_btn', $args->{'active_btn'});
if(!${'active_btn12_argument'}->isValid()) return ${'active_btn12_argument'}->getErrorMessage();
} else
${'active_btn12_argument'} = NULL;if(${'active_btn12_argument'} !== null) ${'active_btn12_argument'}->setColumnType('varchar');
if(isset($args->group_srls)) {
${'group_srls13_argument'} = new Argument('group_srls', $args->{'group_srls'});
if(!${'group_srls13_argument'}->isValid()) return ${'group_srls13_argument'}->getErrorMessage();
} else
${'group_srls13_argument'} = NULL;if(${'group_srls13_argument'} !== null) ${'group_srls13_argument'}->setColumnType('text');

${'menu_item_srl14_argument'} = new ConditionArgument('menu_item_srl', $args->menu_item_srl, 'equal');
${'menu_item_srl14_argument'}->checkFilter('number');
${'menu_item_srl14_argument'}->checkNotNull();
${'menu_item_srl14_argument'}->createConditionValue();
if(!${'menu_item_srl14_argument'}->isValid()) return ${'menu_item_srl14_argument'}->getErrorMessage();
if(${'menu_item_srl14_argument'} !== null) ${'menu_item_srl14_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`menu_srl`', ${'menu_srl2_argument'})
,new UpdateExpression('`parent_srl`', ${'parent_srl3_argument'})
,new UpdateExpression('`name`', ${'name4_argument'})
,new UpdateExpression('`desc`', ${'desc5_argument'})
,new UpdateExpression('`url`', ${'url6_argument'})
,new UpdateExpression('`is_shortcut`', ${'is_shortcut7_argument'})
,new UpdateExpression('`open_window`', ${'open_window8_argument'})
,new UpdateExpression('`expand`', ${'expand9_argument'})
,new UpdateExpression('`normal_btn`', ${'normal_btn10_argument'})
,new UpdateExpression('`hover_btn`', ${'hover_btn11_argument'})
,new UpdateExpression('`active_btn`', ${'active_btn12_argument'})
,new UpdateExpression('`group_srls`', ${'group_srls13_argument'})
));
$query->setTables(array(
new Table('`xe_menu_item`', '`menu_item`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`menu_item_srl`',$menu_item_srl14_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>