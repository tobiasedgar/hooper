<?php if ($site->googleAnalyticsID()->isNotEmpty() ): ?>
<?php $gaID = $site->googleAnalyticsID()->html() ?>
<script async src="https://www.googletagmanager.com/gtag/js?id=<?= $gaID ?>"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', '<?= $gaID ?>');
</script>
<?php endif; ?>
