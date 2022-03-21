<?php if ($site->googleSiteVerification()->isNotEmpty() ): ?>
<?php $code = $site->googleSiteVerification()->html() ?>
<meta name="google-site-verification" content="<?= $code ?>" />
<?php endif; ?>
