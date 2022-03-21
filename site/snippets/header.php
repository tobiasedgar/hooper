<header>
    <div class="site__title">
        <h1><a class="font__body font__black" href=" <?= $site->url()?>" aria-label="Click to <?= $site->title() ?>"><?= $site->title() ?></a></h1>
    </div>

    <nav class="nav">
        <ul>
            <?php foreach ( $site->children()->listed() as $item) : ?>
                <li class="underline__animation__shorter"><a class="font__body font__black" href=" <?= $item->url()?>" aria-label="Click to <?= $item->title() ?>">
                    <?= $item->title() ?>
                    <span>,</span>
                </a></li>

            <?php endforeach ?>
        </ul>
    </nav>

    

</header>
    
<input id="menu__toggle" type="checkbox" aria-label="menu toggle"/>
<label class="burger__menu" for="menu__toggle" aria-label="menu toggle button">
    <span class="__top" ></span>
    <span class="__bottom"></span>
</label>


<nav class="mobile__nav">
    <div class="site__title">
        <h1><a class="font__body font__black" href=" <?= $site->url()?>" aria-label="Click to <?= $site->title() ?>"><?= $site->title() ?></a></h1>
    </div>  

    <div class="mobile__nav__content_pages ">
        <ul>
            <?php foreach ( $site->children()->listed() as $item) : ?>
                <li class=""><a class="font__overlay font__black" href=" <?= $item->url()?>" aria-label="Click to <?= $item->title() ?>">
                    <?= $item->title() ?>
                </a></li>

            <?php endforeach ?>
        </ul>
    </div>

</nav>

