<section class="tournaments" id="tournaments">
    <div class="container">
        <?php
        $tournaments = new WP_Query([
            'post_type' => 'tournament',
            'posts_per_page' => 6,
            'orderby' => 'meta_value',
            'meta_key' => 'tournament_date',
            'order' => 'ASC',
        ]);
        ?>

        <?php if ($tournaments->have_posts()): ?>
            <div class="tournaments-grid">
                <?php while ($tournaments->have_posts()):
                    $tournaments->the_post(); ?>
                    <article class="tournament-card">
                        <div class="tournament-card-content">

                            <?php if ($date = get_field('tournament_date')): ?>
                                <p class="tournament-card-date"><?php echo esc_html($date); ?></p>
                            <?php endif; ?>

                            <h3 class="tournament-card-title">
                                <?php the_title(); ?>
                            </h3>

                        </div>
                    </article>
                <?php endwhile;
                wp_reset_postdata(); ?>
            </div>
        <?php else: ?>
            <p>No tournaments scheduled at this time. Check back soon!</p>
        <?php endif; ?>
    </div>
</section>