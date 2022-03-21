<?= snippet ('head')?>

<div class="page__header">
    <h3 class="font__body"> <?= $page->title() ?></h3>
</div>

<section class="project__grid">
    <?php if ($page->heroImage()->isNotEmpty()) : ?>
        <div class="project__hero__img block hero__<?= $page->heroImage()->toFile()->orientation() ?>">
            <?php snippet('media', ['field' => $page->heroImage()]) ?> 
            <?php if ( $page->heroImage()->toFile()->caption()->isNotEmpty() ) : ?> 
                <figcaption class="font__black font__caption"><?= $page->heroImage()->toFile()->caption()->kti() ?></figcaption>
            <?php endif ?>
        </div>
    <?php else : ?>
        <div class="project__hero__img block hero__<?= $page->displayImage()->toFile()->orientation() ?>">
            <?php snippet('media', ['field' => $page->displayImage()]) ?> 
        </div> 
    <?php endif ?>
   

    <?php if ($page->projectText()->isNotEmpty()) : ?>
        <div class="project__text font__body block">
                <?= $page->projectText()->kti() ?>
        </div>
    <?php endif ?>

    <?php if ($page->projectDetails()->toStructure()->isNotEmpty()) : ?>
        <div class="project__info font__body">
            <ul>
                <?php foreach ($page->projectDetails()->toStructure() as $detail) : ?>
                    <li class="block">
                        <h3 class="font__caption font__black "><?= $detail->detailTitle() ?></h3>
                        <p class="font__caption font__grey"><?= $detail->detailInfo() ?></p>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    <?php endif ?>


    <div class="project__gallery">
        
        <ul>
            <?php foreach($page->galleryImages()->toFiles() as $image) : ?>
                <li class="block gallery__image__<?= $image->orientation() ?>">
                    
                    <?php $file = $image; ?>
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

                    <?php if ( $image->caption()->isNotEmpty() ) : ?> 
                        <figcaption class="font__black font__caption"><?= $image->caption() ?></figcaption>
                    <?php endif ?>
                </li>
            <?php endforeach?>
        </ul>
               
    </div>

</section>

<nav class="page__pagination">
        <?php if ($page->hasNextListed()): ?>
            <a href="<?= $page->nextListed()->url() ?>">
                <p class="font__black font__body">Next Project</p>
                <p class="font__grey font__body"><?= $page->nextListed()->title() ?></p>
            </a>
        <?php else : ?>
            <a href="<?= $site->children()->children()->first()->url() ?>">
                <p class="font__black font__body">Next Project</p>
                <p class="font__grey font__body"><?= $site->children()->children()->first()->title() ?></p>
            </a>
        <?php endif ?>
 </nav>

 <?= snippet ('footer')?>