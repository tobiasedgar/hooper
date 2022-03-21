<?php if ($field->isNotEmpty()) : ?>
    <?php $file = $field->toFile(); ?>
    <figure class="aspectholder <?php if (isset($device)) : ?><?= $device ?><?php endif ?>" data-type="<?= $file->type() ?>">
        <?php if ($file->type() == 'image') : ?>
            <?php if ($file->extension() == 'svg') : ?>
                <?= svg($file) ?>
            <?php else : ?>
                <img src="<?= $file->thumb('blurred')->url() ?>" srcset="<?= $file->thumb('blurred')->url() ?>" data-src="<?= $file->url() ?>" data-srcset="<?= $file->srcset([720, 1280, 1920, 2400]) ?>" <?= $file->orientation() ?> class="lazy" alt="<?= $file->alt() ?>" />
            <?php endif ?>
        <?php elseif ($file->type() == 'code') : ?>
            <div class="lottie" data-animation-path="<?= $file->url() ?>" data-anim-loop="true" data-anim-type="svg"></div>
        <?php elseif ($file->type() == 'video') : ?>
            <video class="lazy" autoplay muted playsinline loop>
                <source src="<?= $file->url() ?>">
            </video>
        <?php endif ?>
    </figure>
<?php endif ?>