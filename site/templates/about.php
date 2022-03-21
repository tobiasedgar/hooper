<?= snippet ('head')?>

<section>

    <div class="about__section">
        <div class="about__about block">
            <h3 class="font__caption font__black">About</h3>
            <p class="font__body font__black">
                <?= $page->about()->kti(); ?>
            </p>
        </div>

        <div class="about__clients block">
            <h3 class="font__caption font__black">Clients</h3>
            <?php if ($page->clients()->isNotEmpty()) : ?>
                <p class="font__body font__black">
                    <?= $page->clients()->kti() ?>
                </p>
            <?php endif ?>
        </div>
        
        <?php if ($page->telephone()->isNotEmpty() && $page->email()->isNotEmpty() ) : ?>
            <div class="about__contact block">
            <h3 class="font__caption font__black">Contact</h3>
                <?php if ($page->telephone()->isNotEmpty()) : ?>
                    <p class="font__body font__black">
                        <?= $page->telephone()->kti(); ?>
                    </p>
                <?php endif ?>
                <?php if ($page->email()->isNotEmpty()) : ?>
                    <p class="font__body font__black">
                        <?= $page->email()->kti(); ?>
                    </p>
                <?php endif ?>
                <?php if ( $page->contactInfo()->toStructure()->isNotEmpty() ) : ?>
                    <?php foreach ($page->contactInfo()->toStructure() as $contact) : ?>
                        <p class="font__body font__black">
                            <?= $contact->addContact()->kti(); ?>
                        </p>
                    <?php endforeach ?>
                <?php endif ?>

            </div>
        <?php endif ?>

        <?php if ($page->instagramName()->isNotEmpty() && $page->stravaName()->isNotEmpty() ) : ?>
            <div class="about__links block">
                <h3 class="font__caption font__black">Links</h3>
                <?php if ($page->instagramName()->isNotEmpty()) : ?>
                    <a href="https://www.instagram.com/<?= $page->instagramName()?>" target="_blank" aria-label="Link to instagram" class="font__body font__grey">
                        Instagram
                    </a>
                <?php endif ?>
                <?php if ($page->stravaName()->isNotEmpty()) : ?>
                    <br><a href="<?= $page->stravaName() ?>" class="font__body font__grey">
                        Strava
                    </a>
                <?php endif ?>
                <?php if ( $page->addLinks()->toStructure()->isNotEmpty() ) : ?>
                    <?php foreach ($page->addLinks()->toStructure() as $link) : ?>
                        <br><a href="<?= $link->linkTo() ?>" class="font__body font__grey">
                        <?= $link->linkFor()->kti() ?>
                        </a>
                    <?php endforeach ?>
                <?php endif ?>
            </div>
        <?php endif ?>
    </div>


    <div class="about__hero block">
        <?php $file = $page->image() ?>
        <img src="<?= $file->thumb('blurred')->url() ?>" srcset="<?= $file->thumb('blurred')->url() ?>" data-src="<?= $file->url() ?>" data-srcset="<?= $file->srcset([720, 1280, 1920, 2400]) ?>" <?= $file->orientation() ?> class="lazy" alt="<?= $file->alt() ?>" />
        
    </div>

</section>
<?= snippet ('footer')?>