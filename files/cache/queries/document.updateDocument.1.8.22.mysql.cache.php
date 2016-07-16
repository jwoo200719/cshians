<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateDocument");
$query->setAction("update");
$query->setPriority("LOW");

${'module_srl2_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl2_argument'}->checkFilter('number');
${'module_srl2_argument'}->ensureDefaultValue('0');
if(!${'module_srl2_argument'}->isValid()) return ${'module_srl2_argument'}->getErrorMessage();
if(${'module_srl2_argument'} !== null) ${'module_srl2_argument'}->setColumnType('number');

${'category_srl3_argument'} = new Argument('category_srl', $args->{'category_srl'});
${'category_srl3_argument'}->checkFilter('number');
${'category_srl3_argument'}->ensureDefaultValue('0');
if(!${'category_srl3_argument'}->isValid()) return ${'category_srl3_argument'}->getErrorMessage();
if(${'category_srl3_argument'} !== null) ${'category_srl3_argument'}->setColumnType('number');

${'is_notice4_argument'} = new Argument('is_notice', $args->{'is_notice'});
${'is_notice4_argument'}->ensureDefaultValue('N');
${'is_notice4_argument'}->checkNotNull();
if(!${'is_notice4_argument'}->isValid()) return ${'is_notice4_argument'}->getErrorMessage();
if(${'is_notice4_argument'} !== null) ${'is_notice4_argument'}->setColumnType('char');

${'title5_argument'} = new Argument('title', $args->{'title'});
${'title5_argument'}->checkNotNull();
if(!${'title5_argument'}->isValid()) return ${'title5_argument'}->getErrorMessage();
if(${'title5_argument'} !== null) ${'title5_argument'}->setColumnType('varchar');

${'title_bold6_argument'} = new Argument('title_bold', $args->{'title_bold'});
${'title_bold6_argument'}->ensureDefaultValue('N');
if(!${'title_bold6_argument'}->isValid()) return ${'title_bold6_argument'}->getErrorMessage();
if(${'title_bold6_argument'} !== null) ${'title_bold6_argument'}->setColumnType('char');

${'title_color7_argument'} = new Argument('title_color', $args->{'title_color'});
${'title_color7_argument'}->ensureDefaultValue('N');
if(!${'title_color7_argument'}->isValid()) return ${'title_color7_argument'}->getErrorMessage();
if(${'title_color7_argument'} !== null) ${'title_color7_argument'}->setColumnType('varchar');

${'content8_argument'} = new Argument('content', $args->{'content'});
${'content8_argument'}->checkNotNull();
if(!${'content8_argument'}->isValid()) return ${'content8_argument'}->getErrorMessage();
if(${'content8_argument'} !== null) ${'content8_argument'}->setColumnType('bigtext');

${'uploaded_count9_argument'} = new Argument('uploaded_count', $args->{'uploaded_count'});
${'uploaded_count9_argument'}->ensureDefaultValue('0');
if(!${'uploaded_count9_argument'}->isValid()) return ${'uploaded_count9_argument'}->getErrorMessage();
if(${'uploaded_count9_argument'} !== null) ${'uploaded_count9_argument'}->setColumnType('number');
if(isset($args->password)) {
${'password10_argument'} = new Argument('password', $args->{'password'});
if(!${'password10_argument'}->isValid()) return ${'password10_argument'}->getErrorMessage();
} else
${'password10_argument'} = NULL;if(${'password10_argument'} !== null) ${'password10_argument'}->setColumnType('varchar');
if(isset($args->nick_name)) {
${'nick_name11_argument'} = new Argument('nick_name', $args->{'nick_name'});
if(!${'nick_name11_argument'}->isValid()) return ${'nick_name11_argument'}->getErrorMessage();
} else
${'nick_name11_argument'} = NULL;if(${'nick_name11_argument'} !== null) ${'nick_name11_argument'}->setColumnType('varchar');
if(isset($args->member_srl)) {
${'member_srl12_argument'} = new Argument('member_srl', $args->{'member_srl'});
if(!${'member_srl12_argument'}->isValid()) return ${'member_srl12_argument'}->getErrorMessage();
} else
${'member_srl12_argument'} = NULL;if(${'member_srl12_argument'} !== null) ${'member_srl12_argument'}->setColumnType('number');
if(isset($args->user_id)) {
${'user_id13_argument'} = new Argument('user_id', $args->{'user_id'});
if(!${'user_id13_argument'}->isValid()) return ${'user_id13_argument'}->getErrorMessage();
} else
${'user_id13_argument'} = NULL;if(${'user_id13_argument'} !== null) ${'user_id13_argument'}->setColumnType('varchar');

${'user_name14_argument'} = new Argument('user_name', $args->{'user_name'});
${'user_name14_argument'}->ensureDefaultValue('');
if(!${'user_name14_argument'}->isValid()) return ${'user_name14_argument'}->getErrorMessage();
if(${'user_name14_argument'} !== null) ${'user_name14_argument'}->setColumnType('varchar');
if(isset($args->email_address)) {
${'email_address15_argument'} = new Argument('email_address', $args->{'email_address'});
${'email_address15_argument'}->checkFilter('email');
if(!${'email_address15_argument'}->isValid()) return ${'email_address15_argument'}->getErrorMessage();
} else
${'email_address15_argument'} = NULL;if(${'email_address15_argument'} !== null) ${'email_address15_argument'}->setColumnType('varchar');
if(isset($args->homepage)) {
${'homepage16_argument'} = new Argument('homepage', $args->{'homepage'});
${'homepage16_argument'}->checkFilter('homepage');
if(!${'homepage16_argument'}->isValid()) return ${'homepage16_argument'}->getErrorMessage();
} else
${'homepage16_argument'} = NULL;if(${'homepage16_argument'} !== null) ${'homepage16_argument'}->setColumnType('varchar');

${'tags17_argument'} = new Argument('tags', $args->{'tags'});
${'tags17_argument'}->ensureDefaultValue('');
if(!${'tags17_argument'}->isValid()) return ${'tags17_argument'}->getErrorMessage();
if(${'tags17_argument'} !== null) ${'tags17_argument'}->setColumnType('text');
if(isset($args->extra_vars)) {
${'extra_vars18_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars18_argument'}->isValid()) return ${'extra_vars18_argument'}->getErrorMessage();
} else
${'extra_vars18_argument'} = NULL;if(${'extra_vars18_argument'} !== null) ${'extra_vars18_argument'}->setColumnType('text');
if(isset($args->regdate)) {
${'regdate19_argument'} = new Argument('regdate', $args->{'regdate'});
if(!${'regdate19_argument'}->isValid()) return ${'regdate19_argument'}->getErrorMessage();
} else
${'regdate19_argument'} = NULL;if(${'regdate19_argument'} !== null) ${'regdate19_argument'}->setColumnType('date');

${'last_update20_argument'} = new Argument('last_update', $args->{'last_update'});
${'last_update20_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'last_update20_argument'}->isValid()) return ${'last_update20_argument'}->getErrorMessage();
if(${'last_update20_argument'} !== null) ${'last_update20_argument'}->setColumnType('date');

${'ipaddress21_argument'} = new Argument('ipaddress', $args->{'ipaddress'});
${'ipaddress21_argument'}->ensureDefaultValue($_SERVER['REMOTE_ADDR']);
if(!${'ipaddress21_argument'}->isValid()) return ${'ipaddress21_argument'}->getErrorMessage();
if(${'ipaddress21_argument'} !== null) ${'ipaddress21_argument'}->setColumnType('varchar');
if(isset($args->list_order)) {
${'list_order22_argument'} = new Argument('list_order', $args->{'list_order'});
if(!${'list_order22_argument'}->isValid()) return ${'list_order22_argument'}->getErrorMessage();
} else
${'list_order22_argument'} = NULL;if(${'list_order22_argument'} !== null) ${'list_order22_argument'}->setColumnType('number');

${'update_order23_argument'} = new Argument('update_order', $args->{'update_order'});
${'update_order23_argument'}->ensureDefaultValue('0');
if(!${'update_order23_argument'}->isValid()) return ${'update_order23_argument'}->getErrorMessage();
if(${'update_order23_argument'} !== null) ${'update_order23_argument'}->setColumnType('number');

${'allow_trackback24_argument'} = new Argument('allow_trackback', $args->{'allow_trackback'});
${'allow_trackback24_argument'}->ensureDefaultValue('Y');
if(!${'allow_trackback24_argument'}->isValid()) return ${'allow_trackback24_argument'}->getErrorMessage();
if(${'allow_trackback24_argument'} !== null) ${'allow_trackback24_argument'}->setColumnType('char');

${'notify_message25_argument'} = new Argument('notify_message', $args->{'notify_message'});
${'notify_message25_argument'}->ensureDefaultValue('N');
if(!${'notify_message25_argument'}->isValid()) return ${'notify_message25_argument'}->getErrorMessage();
if(${'notify_message25_argument'} !== null) ${'notify_message25_argument'}->setColumnType('char');

${'status26_argument'} = new Argument('status', $args->{'status'});
${'status26_argument'}->ensureDefaultValue('PUBLIC');
if(!${'status26_argument'}->isValid()) return ${'status26_argument'}->getErrorMessage();
if(${'status26_argument'} !== null) ${'status26_argument'}->setColumnType('varchar');

${'commentStatus27_argument'} = new Argument('commentStatus', $args->{'commentStatus'});
${'commentStatus27_argument'}->ensureDefaultValue('ALLOW');
if(!${'commentStatus27_argument'}->isValid()) return ${'commentStatus27_argument'}->getErrorMessage();
if(${'commentStatus27_argument'} !== null) ${'commentStatus27_argument'}->setColumnType('varchar');

${'document_srl28_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl28_argument'}->checkFilter('number');
${'document_srl28_argument'}->checkNotNull();
${'document_srl28_argument'}->createConditionValue();
if(!${'document_srl28_argument'}->isValid()) return ${'document_srl28_argument'}->getErrorMessage();
if(${'document_srl28_argument'} !== null) ${'document_srl28_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`module_srl`', ${'module_srl2_argument'})
,new UpdateExpression('`category_srl`', ${'category_srl3_argument'})
,new UpdateExpression('`is_notice`', ${'is_notice4_argument'})
,new UpdateExpression('`title`', ${'title5_argument'})
,new UpdateExpression('`title_bold`', ${'title_bold6_argument'})
,new UpdateExpression('`title_color`', ${'title_color7_argument'})
,new UpdateExpression('`content`', ${'content8_argument'})
,new UpdateExpression('`uploaded_count`', ${'uploaded_count9_argument'})
,new UpdateExpression('`password`', ${'password10_argument'})
,new UpdateExpression('`nick_name`', ${'nick_name11_argument'})
,new UpdateExpression('`member_srl`', ${'member_srl12_argument'})
,new UpdateExpression('`user_id`', ${'user_id13_argument'})
,new UpdateExpression('`user_name`', ${'user_name14_argument'})
,new UpdateExpression('`email_address`', ${'email_address15_argument'})
,new UpdateExpression('`homepage`', ${'homepage16_argument'})
,new UpdateExpression('`tags`', ${'tags17_argument'})
,new UpdateExpression('`extra_vars`', ${'extra_vars18_argument'})
,new UpdateExpression('`regdate`', ${'regdate19_argument'})
,new UpdateExpression('`last_update`', ${'last_update20_argument'})
,new UpdateExpression('`ipaddress`', ${'ipaddress21_argument'})
,new UpdateExpression('`list_order`', ${'list_order22_argument'})
,new UpdateExpression('`update_order`', ${'update_order23_argument'})
,new UpdateExpression('`allow_trackback`', ${'allow_trackback24_argument'})
,new UpdateExpression('`notify_message`', ${'notify_message25_argument'})
,new UpdateExpression('`status`', ${'status26_argument'})
,new UpdateExpression('`comment_status`', ${'commentStatus27_argument'})
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl28_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>