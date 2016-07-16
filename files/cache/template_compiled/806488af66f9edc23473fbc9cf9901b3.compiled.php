<?php if(!defined("__XE__"))exit;
echo '<?xml version="1.0" encoding="utf-8"?>' ?>
<feed xmlns="http://webmastertool.naver.com">
	<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/syndication/tpl','include.channel.html') ?>
	<?php if($__Context->articles->list){ ?>
		<?php if($__Context->articles->list&&count($__Context->articles->list))foreach($__Context->articles->list as $__Context->key=>$__Context->article){ ?>
			<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/syndication/tpl','include.articles.html') ?>
		<?php } ?>
	<?php } ?>
	<?php if($__Context->deleted->list){ ?>
		<?php if($__Context->deleted->list&&count($__Context->deleted->list))foreach($__Context->deleted->list as $__Context->key=>$__Context->delete){ ?>
			<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/syndication/tpl','include.deleted.html') ?>
		<?php } ?>
	<?php } ?>
</feed>
