<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/member/skins/default','common_header.html') ?>
<h1><?php echo $__Context->member_title = $__Context->lang->msg_leave_member ?></h1>
<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == 'modules/member/skin/default/1'){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<?php Context::addJsFile("modules/member/ruleset/leaveMember.xml", FALSE, "", 0, "body", TRUE, "") ?><form  id="fo_insert_member" action="./" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="leaveMember" />
	<input type="hidden" name="module" value="member" />
	<input type="hidden" name="act" value="procMemberLeave" />
    <input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
    <input type="hidden" name="document_srl" value="<?php echo $__Context->document_srl ?>" />
    <input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
	<input type="hidden" name="xe_validator_id" value="modules/member/skin/default/1" />
	<div>
		<input type="email" value="<?php echo $__Context->formValue ?>" readonly title="<?php echo Context::getLang($__Context->identifier) ?>" />
	</div>
	<div>
		<span class="input-append">
			<input type="password" name="password" id="cpw" required placeholder="<?php echo $__Context->lang->password ?>" title="<?php echo $__Context->lang->password ?>" />
			<input type="submit" value="<?php echo $__Context->lang->cmd_leave ?>" class="btn btn-inverse" />
		</span>
	</div>
</form>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/member/skins/default','common_footer.html') ?>
