<?php if(!defined("__XE__"))exit;?><entry>
	<id><?php echo $__Context->article->alternative_href ?></id>
	<title><![CDATA[<?php echo $__Context->article->title ?>]]></title>
	<author>
		<name><![CDATA[<?php echo $__Context->article->nick_name ?>]]></name>
	</author>
	<updated><?php echo $__Context->article->updated ?></updated>
	<published><?php echo $__Context->article->published ?></published>
	<link rel="via" href="<?php echo $__Context->article->channel_alternative_href ?>" title="<?php echo htmlspecialchars($__Context->channel_info->title) ?>" />
	<content type="html"><![CDATA[<?php echo $__Context->article->content ?>]]></content>
	<?php if($__Context->article->category){ ?><category term="<?php echo $__Context->article->category->term ?>" label="<?php echo htmlspecialchars($__Context->article->category->label) ?>" /><?php } ?>
</entry>
