<?php $v->layout("index"); ?>
<div class="row slider">
    <div class="slider__box style= width: 100%">
        <div class="slider__box__item style= width: 100%">

            <div class="slider__box__item__box">
                <h1>Só Telhas</h1>
                <p>Cobrindo o Brasil com Aço</p>
            </div>

            <picture alt="">
                <source srcset="<?= thumb()->make("web/assets/img/slider-01.jpg", 1920, 600) ?>" media="(min-width: 1024px)">
                <source srcset="<?= thumb()->make("web/assets/img/slider-01.jpg", 1920, 900) ?>" media="(min-width: 768px)">
                <source srcset="<?= thumb()->make("web/assets/img/slider-01.jpg", 1200, 1000) ?>" media="(min-width: 510px)">
                <img src="<?= thumb()->make("web/assets/img/slider-01.jpg", 1200, 1350) ?>" alt="Só Telhas - Cobrindo o Brasil com Aço">
            </picture>

        </div>

        <div class="slider__controls">
            <span></span>
            <span class="active"></span>
            <span></span>
        </div>

    </div>
</div>

<?= $v->insert('inc/products'); ?>
<?= $v->insert('inc/lead-form'); ?>
<?= $v->insert('inc/about-us'); ?>
<?= $v->insert('inc/our-differentials'); ?>
<?= $v->insert('inc/newsletter'); ?>
<?= $v->insert('inc/feedback'); ?>
<?= $v->insert('inc/contact'); ?>