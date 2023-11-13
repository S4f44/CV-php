<?php get_header(); ?>

<body>
            <br><br><br>
<!---------MAIN---------->
    <main>
           
        <section>    
            <h2>Formations</h2>
                    <ul>
                        <li>2021-2022 : CESS à l'Athénée Charles Janssens</li>
                        <li>2022-maintenant : Ecriture multimédia à la haute école ISFSC</li>
                    </ul>
        </section>





            <?php 
                $exproList = new WP_Query(['post_type' => 'expro']);
            ?>
            <?php if ($exproList->have_posts()): ?>
            <h2>Expériences Professionnelles</h2>
                <ul><em>
                    <?php while ($exproList->have_posts()): $exproList->the_post(); ?>
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
                        <?php while ($skillsList->have_posts()): $skillsList->the_post(); ?>
                        <?php the_content(); ?>
                        <?php endwhile; ?>
            <?php endif; ?>








            <?php 
                $hskillsList = new WP_Query(['post_type' => 'hskills']);
            ?>
            <?php if ($hskillsList->have_posts()): ?>
                    <h2>Hard Skills</h2>
                    <ul>
                        <?php while ($hskillsList->have_posts()): $hskillsList->the_post(); ?>
                        <li><?php the_content(); ?></li>
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
                    <li><?php the_content(); ?></li> 
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
                        <li><?php the_content(); ?></li> 
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>

    </main>

    <?php get_footer(); ?>

</body>
</html>