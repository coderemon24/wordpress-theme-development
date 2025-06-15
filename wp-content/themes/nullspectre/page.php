<?php get_header() ?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-title py-3 text-uppercase"><?php the_title() ?></h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="page-content">
                <?php the_content() ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer() ?>