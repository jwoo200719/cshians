<?php if(!defined("__XE__"))exit;?><id><![CDATA[<?php echo $__Context->channel_info->self_href ?>]]></id>
<title><![CDATA[<?php echo $__Context->channel_info->site_title ?>]]></title>
<author>
	<name><![CDATA[<?php echo $__Context->channel_info->webmaster_name ?>]]></name>
	<url><![CDATA[<?php echo $__Context->channel_info->site_url ?>]]></url>
</author>
<updated><?php echo $__Context->channel_info->updated ?></updated>
<link rel="site" href="<?php echo htmlspecialchars($__Context->channel_info->site_url) ?>" title="<?php echo htmlspecialchars($__Context->channel_info->site_title) ?>" />
