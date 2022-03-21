<?= snippet ('head')?>

<?php

    $filterBy = get('filter');

    $projects = $page
        ->children()
        ->listed()
        ->when($filterBy, function($filterBy) {
            return $this->filterBy('category', $filterBy);
        });

    $filters = $projects->pluck('category', null, true);

    $categorys = $page
        ->children()
        ->listed()
        ->pluck('category', null, true)


?>

<!-- filter nav -->

<nav class="filter__nav  ">
    <div class="site__title">
        <h1><a class="font__body font__black" href=" <?= $site->url()?>" aria-label="Click to <?= $site->title() ?>"><?= $site->title() ?></a></h1>
    </div>  

    <a class="filter__nav__close" aria-label="close filter nav button" href="javascript:void(0)"><span></span></a>


    <div class="mobile__nav__content_category visually__hidden">
        <ul>
            <li><a href="<?= $page->url() ?>" class="option__overlay__all font__overlay font__black">All<span>,</span></a></li>

            <?php foreach ( $categorys as $filter) : ?>
                <li> <a href="<?= $page->url() ?>?filter=<?= $filter ?>" class=" filter_overlay__option font__overlay font__black"><?= $filter ?><span>,</span>
                </a></li>
            <?php endforeach ?>
        </ul>
    </div>
</nav>


<div class="project__filter font__body">
    <a href="<?= $page->url() ?>" class="option__all">All<span class="all__comma">,</span></a>

    <button aria-label="Filter Toggle" class="filter__btn font__body" id="filterBtn"></button>


    <button aria-label="Filter Overlay Toggle" class="filter__overlay__btn font__body"></button>

    <?php foreach ( $categorys as $filter) : ?>
        <a href="<?= $page->url() ?>?filter=<?= $filter ?>" class="underline__animation filter__option" id="filter<?= $filter ?>"><?= $filter ?><span>, </span>
        </a>
    <?php endforeach ?>
    
</div> 




<section class="project__grid">

    <ul>
        <?php foreach ( $projects as $item) : ?>
            <li class="block project project__<?= $item->displayImage()->toFile()->orientation() ?> <?php if ($item->align()->isNotEmpty()) : ?>align__<?= $item->align() ?> <?php else : ?> align__center <?php endif ?> ">
                <a class="font__body font__black" href=" <?= $item->url()?>" aria-label="Click to <?= $item->title() ?>">
                    <?php snippet('media', ['field' => $item->displayImage()]) ?>
                    <p class="font__black font__caption"><?= $item->title() ?></p>                    
                </a>
                
            </li>
        <?php endforeach ?>
    </ul>

</section>

<?= snippet ('footer')?>