<?php
/**
 * @var array $_
 * @var \OCP\IL10N $l
 * @var OC_Defaults $theme
 */
?>
<div id="admin-tips" class="section">
	<h2 class="app-name"><?php p($l->t('Tips & tricks'));?></h2>
	<ul>
		<li><a target="_blank" rel="noreferrer" href="<?php p(link_to_docs(\OCP\Constants::DOCS_ADMIN_BACKUP)); ?>"><?php p($l->t('How to do backups'));?> ↗</a></li>
		<li><a target="_blank" rel="noreferrer" href="<?php p(link_to_docs(\OCP\Constants::DOCS_ADMIN_PERFORMANCE)); ?>"><?php p($l->t('Performance tuning'));?> ↗</a></li>
		<li><a target="_blank" rel="noreferrer" href="<?php p(link_to_docs(\OCP\Constants::DOCS_ADMIN_CONFIG)); ?>"><?php p($l->t('Improving the config.php'));?> ↗</a></li>
		<li><a target="_blank" rel="noreferrer" href="<?php p(link_to_docs(\OCP\Constants::DOCS_DEVELOPER_THEMING)); ?>"><?php p($l->t('Theming'));?> ↗</a></li>
		<li><a target="_blank" rel="noreferrer" href="<?php p(link_to_docs(\OCP\Constants::DOCS_ADMIN_SECURITY)); ?>"><?php p($l->t('Hardening and security guidance'));?> ↗</a></li>
	</ul>
</div>
