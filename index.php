<?php get_header(); ?>

<body>
            <br><br><br>
<!---------MAIN---------->
    <main>
            <section>  

            
            <?php
            $formationsList = new WP_Query([
                'post_type' => 'formations',
                'posts_per_page' => -1
            ]);
            ?>
            <h2>Formations</h2>
                <ul>
                    <?php while ( $formationsList->have_posts() ) : $formationsList->the_post(); 
                            $start_date = get_post_meta(get_the_ID(), 'start_date', true);
                            $end_date = get_post_meta(get_the_ID(), 'end_date', true);
                    ?>
                    <li>
                        <?php if($start_date && $end_date): ?>
                            <?php echo date('Y', strtotime($start_date)); ?> - <?php echo date('Y', strtotime($end_date)); ?> :
                        <?php endif; ?>    
                        <?php the_title(); ?>
                    </li>
                    <?php endwhile; ?>
                </ul>
            </section>





            <?php 
                $exp_proList = new WP_Query(['post_type' => 'exp_pro']);
            ?>
            <?php if ($exp_proList->have_posts()): ?>
            <h2>Expériences Professionnelles</h2>
                <ul><em>
                    <?php while ($exp_proList->have_posts()): $exp_proList->the_post(); ?>
                    <li><?php the_title(); ?></li>
                    <?php the_content(); ?>
                    <?php endwhile; ?>
            </em></ul>
            <?php endif; ?>







            <?php 
                $skillsList = new WP_Query(['post_type' => 'skills']);
            ?>
            <?php if ($skillsList->have_posts()): ?>
               <h2>Soft Skills</h2> 
                <ul>
                        <?php while ($skillsList->have_posts()): $skillsList->the_post(); ?>
                        <li><?php the_title(); ?></li>
                        <?php endwhile; ?>
                </ul>
            <?php endif; ?>








            <?php 
                $hskillsList = new WP_Query(['post_type' => 'hskills']);
            ?>
            <?php if ($hskillsList->have_posts()): ?>
                    <h2>Hard Skills</h2>
                    <ul>
                        <?php while ($hskillsList->have_posts()): $hskillsList->the_post(); ?>
                        <li><?php the_title(); ?></li>
                        <?php endwhile; ?>
                    </ul>
            <?php endif; ?>






            <?php 
                $langues = new WP_Query(['post_type' => 'langues']);
            ?>
            <?php if ($langues->have_posts()): ?>
            <h2>Langues</h2>
                <ul>
                <?php while ($langues->have_posts()): $langues->the_post(); ?>
                    <li><?php the_title(); ?></li> 
                <?php endwhile; ?>
                </ul>
             <?php endif; ?>






            <?php 
                    $interets = new WP_Query(['post_type' => 'interets']);
                ?>
            <?php if ($interets->have_posts()): ?>

                <h2>Centres d'intérêts</h2>
                <ul>
                    <?php while ($interets->have_posts()): $interets->the_post(); ?>
                        <li><?php the_title(); ?></li> 
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>

    </main>

    <?php get_footer(); ?>

