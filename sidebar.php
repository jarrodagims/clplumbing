<div id="sidebar">
    <?php if (is_page('contact-us')) : ?>
        <div id="contact-form">
            <?php if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') {
                echo do_shortcode('[contact-form-7 id="41" title="Contact Form"]');
            } else {
                echo do_shortcode('[contact-form-7 id="41" title="Contact Form"]');
            }
            ?>
        </div>
    <?php endif; ?>
    <?php if (!is_page('contact-us')) : ?>
        <section>
            <div class="flex-col bg">
                <div class="container-half">
                    <section class="icon-row">
                            <ul class="flex-row">
                                    <li class="flex-col">
                                        <a href="<?= SITEURL; ?>/products/plumbing-fixtures/">
                                            <?php get_template_part('template-parts/icon', '1'); ?>
                                            Plumbing Fixtures
                                        </a>
                                    </li>
                                    <li class="flex-col">
                                        <a href="<?= SITEURL; ?>/products/water-heaters/">
                                            <?php get_template_part('template-parts/icon', '2'); ?>
                                            Water Heaters</a>
                                    </li>
                                    <li class="flex-col">
                                        <a href="<?= SITEURL; ?>/products/piping-and-fittings/">
                                            <?php get_template_part('template-parts/icon', '3'); ?>
                                            Piping</a>
                                    </li>
                                    <li class="flex-col">
                                        <a href="<?= SITEURL; ?>/products/toilets/">
                                            <?php get_template_part('template-parts/icon', '4'); ?>
                                            Toilets</a></li>
                                    <li class="flex-col">
                                        <a href="<?= SITEURL; ?>/products/showers/">
                                            <?php get_template_part('template-parts/icon', '5'); ?>
                                            Showers</a>
                                    </li>
                                    <li class="flex-col">
                                        <a href="<?= SITEURL; ?>/products/bathtubs/">
                                            <?php get_template_part('template-parts/icon', '6'); ?>
                                            Tubs</a>
                                    </li>
                                    <li class="flex-col">
                                        <a href="<?= SITEURL; ?>/products/heating-and-cooling/">
                                            <?php get_template_part('template-parts/icon', '7'); ?>
                                            Heating & Cooling</a>
                                    </li>
                                    <li class="flex-col">
                                        <a href="<?= SITEURL; ?>/products/power-tools/">
                                            <?php get_template_part('template-parts/icon', '8'); ?>
                                            Power Tools</a>
                                    </li>
                                    <li class="flex-col">
                                        <a href="<?= SITEURL; ?>/products/adhesive/">
                                            <?php get_template_part('template-parts/icon', '9'); ?>
                                            Adhesives</a>
                                    </li>
                            </ul>
                    </section>
                </div>
            </div>
        </section>

    <section>
        <div class="card">
            <div class="card-top">
                <img src="<?= IMGURL; ?>bg-sidebar-top.jpg" alt="Wrench" />
            </div>
           <div class="card-text">
            <p><strong>Plumbing Supply Store</strong>

            Your One-Stop Shop for All Your <br />Plumbing Supply Needs</p>

            <a href="<?= SITEURL ?>/contact-us/">
                <button class="btn btn-primary">Get Started</button>
            </a></div>

            <div class="card-bottom">
                <a href="<?= SITEURL ?>/contact-us/" class="arrow">El Paso’s best supplier</a>
            </div>
        </div>
    </section>
    <?php endif; ?>
</div>
