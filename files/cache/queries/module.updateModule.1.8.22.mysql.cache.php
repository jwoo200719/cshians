<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateModule");
$query->setAction("update");
$query->setPriority("");

${'module43_argument'} = new Argument('module', $args->{'module'});
${'module43_argument'}->checkNotNull();
if(!${'module43_argument'}->isValid()) return ${'module43_argument'}->getErrorMessage();
if(${'module43_argument'} !== null) ${'module43_argument'}->setColumnType('varchar');
if(isset($args->module_category_srl)) {
${'module_category_srl44_argument'} = new Argument('module_category_srl', $args->{'module_category_srl'});
if(!${'module_category_srl44_argument'}->isValid()) return ${'module_category_srl44_argument'}->getErrorMessage();
} else
${'module_category_srl44_argument'} = NULL;if(${'module_category_srl44_argument'} !== null) ${'module_category_srl44_argument'}->setColumnType('number');
if(isset($args->layout_srl)) {
${'layout_srl45_argument'} = new Argument('layout_srl', $args->{'layout_srl'});
if(!${'layout_srl45_argument'}->isValid()) return ${'layout_srl45_argument'}->getErrorMessage();
} else
${'layout_srl45_argument'} = NULL;if(${'layout_srl45_argument'} !== null) ${'layout_srl45_argument'}->setColumnType('number');
if(isset($args->skin)) {
${'skin46_argument'} = new Argument('skin', $args->{'skin'});
if(!${'skin46_argument'}->isValid()) return ${'skin46_argument'}->getErrorMessage();
} else
${'skin46_argument'} = NULL;if(${'skin46_argument'} !== null) ${'skin46_argument'}->setColumnType('varchar');

${'is_skin_fix47_argument'} = new Argument('is_skin_fix', $args->{'is_skin_fix'});
${'is_skin_fix47_argument'}->ensureDefaultValue('N');
if(!${'is_skin_fix47_argument'}->isValid()) return ${'is_skin_fix47_argument'}->getErrorMessage();
if(${'is_skin_fix47_argument'} !== null) ${'is_skin_fix47_argument'}->setColumnType('char');
if(isset($args->mskin)) {
${'mskin48_argument'} = new Argument('mskin', $args->{'mskin'});
if(!${'mskin48_argument'}->isValid()) return ${'mskin48_argument'}->getErrorMessage();
} else
${'mskin48_argument'} = NULL;if(${'mskin48_argument'} !== null) ${'mskin48_argument'}->setColumnType('varchar');

${'is_mskin_fix49_argument'} = new Argument('is_mskin_fix', $args->{'is_mskin_fix'});
${'is_mskin_fix49_argument'}->ensureDefaultValue('N');
if(!${'is_mskin_fix49_argument'}->isValid()) return ${'is_mskin_fix49_argument'}->getErrorMessage();
if(${'is_mskin_fix49_argument'} !== null) ${'is_mskin_fix49_argument'}->setColumnType('char');
if(isset($args->menu_srl)) {
${'menu_srl50_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl50_argument'}->checkFilter('number');
if(!${'menu_srl50_argument'}->isValid()) return ${'menu_srl50_argument'}->getErrorMessage();
} else
${'menu_srl50_argument'} = NULL;if(${'menu_srl50_argument'} !== null) ${'menu_srl50_argument'}->setColumnType('number');

${'mid51_argument'} = new Argument('mid', $args->{'mid'});
${'mid51_argument'}->checkNotNull();
if(!${'mid51_argument'}->isValid()) return ${'mid51_argument'}->getErrorMessage();
if(${'mid51_argument'} !== null) ${'mid51_argument'}->setColumnType('varchar');

${'browser_title52_argument'} = new Argument('browser_title', $args->{'browser_title'});
${'browser_title52_argument'}->checkNotNull();
if(!${'browser_title52_argument'}->isValid()) return ${'browser_title52_argument'}->getErrorMessage();
if(${'browser_title52_argument'} !== null) ${'browser_title52_argument'}->setColumnType('varchar');

${'description53_argument'} = new Argument('description', $args->{'description'});
${'description53_argument'}->ensureDefaultValue('');
if(!${'description53_argument'}->isValid()) return ${'description53_argument'}->getErrorMessage();
if(${'description53_argument'} !== null) ${'description53_argument'}->setColumnType('text');

${'is_default54_argument'} = new Argument('is_default', $args->{'is_default'});
${'is_default54_argument'}->ensureDefaultValue('N');
${'is_default54_argument'}->checkNotNull();
if(!${'is_default54_argument'}->isValid()) return ${'is_default54_argument'}->getErrorMessage();
if(${'is_default54_argument'} !== null) ${'is_default54_argument'}->setColumnType('char');
if(isset($args->content)) {
${'content55_argument'} = new Argument('content', $args->{'content'});
if(!${'content55_argument'}->isValid()) return ${'content55_argument'}->getErrorMessage();
} else
${'content55_argument'} = NULL;if(${'content55_argument'} !== null) ${'content55_argument'}->setColumnType('bigtext');
if(isset($args->mcontent)) {
${'mcontent56_argument'} = new Argument('mcontent', $args->{'mcontent'});
if(!${'mcontent56_argument'}->isValid()) return ${'mcontent56_argument'}->getErrorMessage();
} else
${'mcontent56_argument'} = NULL;if(${'mcontent56_argument'} !== null) ${'mcontent56_argument'}->setColumnType('bigtext');

${'open_rss57_argument'} = new Argument('open_rss', $args->{'open_rss'});
${'open_rss57_argument'}->ensureDefaultValue('Y');
${'open_rss57_argument'}->checkNotNull();
if(!${'open_rss57_argument'}->isValid()) return ${'open_rss57_argument'}->getErrorMessage();
if(${'open_rss57_argument'} !== null) ${'open_rss57_argument'}->setColumnType('char');

${'header_text58_argument'} = new Argument('header_text', $args->{'header_text'});
${'header_text58_argument'}->ensureDefaultValue('');
if(!${'header_text58_argument'}->isValid()) return ${'header_text58_argument'}->getErrorMessage();
if(${'header_text58_argument'} !== null) ${'header_text58_argument'}->setColumnType('text');

${'footer_text59_argument'} = new Argument('footer_text', $args->{'footer_text'});
${'footer_text59_argument'}->ensureDefaultValue('');
if(!${'footer_text59_argument'}->isValid()) return ${'footer_text59_argument'}->getErrorMessage();
if(${'footer_text59_argument'} !== null) ${'footer_text59_argument'}->setColumnType('text');
if(isset($args->mlayout_srl)) {
${'mlayout_srl60_argument'} = new Argument('mlayout_srl', $args->{'mlayout_srl'});
if(!${'mlayout_srl60_argument'}->isValid()) return ${'mlayout_srl60_argument'}->getErrorMessage();
} else
${'mlayout_srl60_argument'} = NULL;if(${'mlayout_srl60_argument'} !== null) ${'mlayout_srl60_argument'}->setColumnType('number');

${'use_mobile61_argument'} = new Argument('use_mobile', $args->{'use_mobile'});
${'use_mobile61_argument'}->ensureDefaultValue('N');
if(!${'use_mobile61_argument'}->isValid()) return ${'use_mobile61_argument'}->getErrorMessage();
if(${'use_mobile61_argument'} !== null) ${'use_mobile61_argument'}->setColumnType('char');

${'site_srl62_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl62_argument'}->checkFilter('number');
${'site_srl62_argument'}->ensureDefaultValue('0');
${'site_srl62_argument'}->checkNotNull();
${'site_srl62_argument'}->createConditionValue();
if(!${'site_srl62_argument'}->isValid()) return ${'site_srl62_argument'}->getErrorMessage();
if(${'site_srl62_argument'} !== null) ${'site_srl62_argument'}->setColumnType('number');

${'module_srl63_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl63_argument'}->checkFilter('number');
${'module_srl63_argument'}->checkNotNull();
${'module_srl63_argument'}->createConditionValue();
if(!${'module_srl63_argument'}->isValid()) return ${'module_srl63_argument'}->getErrorMessage();
if(${'module_srl63_argument'} !== null) ${'module_srl63_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`module`', ${'module43_argument'})
,new UpdateExpression('`module_category_srl`', ${'module_category_srl44_argument'})
,new UpdateExpression('`layout_srl`', ${'layout_srl45_argument'})
,new UpdateExpression('`skin`', ${'skin46_argument'})
,new UpdateExpression('`is_skin_fix`', ${'is_skin_fix47_argument'})
,new UpdateExpression('`mskin`', ${'mskin48_argument'})
,new UpdateExpression('`is_mskin_fix`', ${'is_mskin_fix49_argument'})
,new UpdateExpression('`menu_srl`', ${'menu_srl50_argument'})
,new UpdateExpression('`mid`', ${'mid51_argument'})
,new UpdateExpression('`browser_title`', ${'browser_title52_argument'})
,new UpdateExpression('`description`', ${'description53_argument'})
,new UpdateExpression('`is_default`', ${'is_default54_argument'})
,new UpdateExpression('`content`', ${'content55_argument'})
,new UpdateExpression('`mcontent`', ${'mcontent56_argument'})
,new UpdateExpression('`open_rss`', ${'open_rss57_argument'})
,new UpdateExpression('`header_text`', ${'header_text58_argument'})
,new UpdateExpression('`footer_text`', ${'footer_text59_argument'})
,new UpdateExpression('`mlayout_srl`', ${'mlayout_srl60_argument'})
,new UpdateExpression('`use_mobile`', ${'use_mobile61_argument'})
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl62_argument,"equal")
,new ConditionWithArgument('`module_srl`',$module_srl63_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>