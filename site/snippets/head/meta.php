<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php if($page->isHomepage()): ?>
<meta name="description" content="<?= $site->description()->html() ?>">
<meta name="og:description" content="<?= $site->description()->html() ?>">
<?php else: ?>
<?php if($page->text()->isNotEmpty()): ?>
<meta name="description" content="<?= $page->text()->excerpt(250) ?>">
<meta property="og:description" content="<?= $page->text()->excerpt(250) ?>" />
<?php else: ?>
<meta name="description" content="">
<meta property="og:description" content="" />
<?php endif ?>
<?php endif ?>
<meta name="robots" content="index,follow" />
<meta name="keywords" content="<?= $site->keywords()->html() ?>">
<meta property="og:type" content="website" />
<meta property="og:url" content="<?= html($page->url()) ?>" />
<?php if($page->featured()->isNotEmpty() && $ogimage = $page->featured()->toFile()): ?>
<?php $ogimage = $ogimage->resize(1200) ?>
<meta property="og:image" content="<?= $ogimage->url() ?>"/>
<meta property="og:image:width" content="<?= $ogimage->width() ?>"/>
<meta property="og:image:height" content="<?= $ogimage->height() ?>"/>
<?php else: ?>
<?php if($site->ogimage()->isNotEmpty() && $ogimage = $site->ogimage()->toFile()): ?>
<?php $ogimage = $ogimage->resize(1200) ?>
<meta property="og:image" content="<?= $ogimage->url() ?>"/>
<meta property="og:image:width" content="<?= $ogimage->width() ?>"/>
<meta property="og:image:height" content="<?= $ogimage->height() ?>"/>
<?php endif ?>
<?php endif ?>
