<?php if($page->isHomepage()): ?>
<?php $pageTitle = $site->title()->html() ?>
<?php else: ?>
<?php $pageTitle = $site->title()->html() . ' - ' .  $page->title();  ?>
<?php endif; ?>
<meta property="og:title" content="<?= $pageTitle ?>" />
<title><?= $pageTitle ?></title>
