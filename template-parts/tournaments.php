<section class="tournaments" id="tournaments">
    <div class="container">
        <h2 class="tournaments-title">Турнири</h2>
        <hr class="tournaments-divider">

        <?php $today = date('Ymd'); ?>

        <?php
        $all_tournaments = new WP_Query([
            'post_type' => 'tournament',
            'posts_per_page' => -1,
            'orderby' => 'meta_value',
            'meta_key' => 'tournament_date',
            'order' => 'ASC',
        ]);

        $upcoming = [];
        $past = [];

        if ($all_tournaments->have_posts()):
            while ($all_tournaments->have_posts()):
                $all_tournaments->the_post();
                $date = get_field('tournament_date');
                if ($date >= $today):
                    $upcoming[] = ['title' => get_the_title(), 'date' => $date];
                else:
                    $past[] = ['title' => get_the_title(), 'date' => $date];
                endif;
            endwhile;
            wp_reset_postdata();
        endif;
        ?>

        <div class="tournaments-layout">

            <div class="tournaments-label">
                <h3>Предстоящи<br>турнири</h3>
            </div>
            <div class="tournaments-list">
                <?php if (!empty($upcoming)): ?>
                    <?php foreach ($upcoming as $t): ?>
                        <div class="tournament-row">
                            <p class="tournament-row-date">
                                <?php echo esc_html(date('d.m.Y', strtotime($t['date']))); ?>
                            </p>
                            <p class="tournament-row-title"><?php echo esc_html($t['title']); ?></p>
                            <hr>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>Няма предстоящи турнири.</p>
                <?php endif; ?>
            </div>

            <div class="tournaments-label">
                <h3>Минали<br>турнири</h3>
            </div>
            <div class="tournaments-list">
                <?php if (!empty($past)): ?>
                    <?php foreach (array_reverse($past) as $t): ?>
                        <div class="tournament-row">
                            <p class="tournament-row-date">
                                <?php echo esc_html(date('d.m.Y', strtotime($t['date']))); ?>
                            </p>
                            <p class="tournament-row-title"><?php echo esc_html($t['title']); ?></p>
                            <hr>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>Няма минали турнири.</p>
                <?php endif; ?>
            </div>

        </div>
    </div>
</section>