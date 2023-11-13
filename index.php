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
            <h2>Expérience Professionnelles</h2>
                <ul>
                    <em>
                    <li>Avril 2016 - Présent : Développeur Front-End, Société TechVision, Bruxelles </li>
                        <ul>
                            <li>Conception et développement d'interfaces utilisateur pour des applications web et mobiles en utilisant HTML, CSS et JavaScript.</li>
                            <li>Collaboration étroite avec les designers pour transformer des maquettes en interfaces interactives et conviviales.</li>
                            <li>Expérience dans la mise en œuvre de projets Agile, avec des sprints et des réunions de planification et de rétrospective.</li>
                            <li>Utilisation de frameworks tels que React et Vue.js pour créer des expériences utilisateur dynamiques et réactives.</li>
                            <li>Intégration de services RESTful et utilisation de Git pour le contrôle de version.</li>  
                        </ul> 
                </ul>

                <ul>
                    <li>Avril 2016 - Présent : Développeur Front-End, Société TechVision, Bruxelles </li>
                        <ul>
                            <li>Conception et développement d'interfaces utilisateur pour des applications web et mobiles en utilisant HTML, CSS et JavaScript.</li>
                            <li>Collaboration étroite avec les designers pour transformer des maquettes en interfaces interactives et conviviales.</li>
                            <li>Expérience dans la mise en œuvre de projets Agile, avec des sprints et des réunions de planification et de rétrospective.</li>
                        </ul>
                    </em>
                </ul>


<?php 
    $skillsList = new WP_Query(['post_type' => 'skills']);
?>
<?php if ($skillsList->have_posts()): ?>
        <h2>Soft Skills</h2>
                <ul>
                    
                    <?php while ($skillsList->have_posts()): $skillsList->the_post(); ?>
                    <li><?php the_content(); ?></li>
                    <?php endwhile; ?>
                </ul>
<?php endif; ?>

            <h2>Hard Skills</h2>
                <ul>
                    <li>Certification TOSA Illustrator : 706/1000, niveau oprationnel</li>
                    <li>Gestion de projets : Assurer la planification, la coordination et la mise en œuvre de projets multimédias, en veillant au respect des délais et des objectifs fixés.</li>
                </ul>

            <h2>Langues</h2>
                <ul>
                    <li>Français (courant),</li>
                    <li>Anglais (avancé),</li>
                    <li>Néerlandais (notions),</li>
                </ul>

            <h2>Centres d'intérêts</h2>
                <ul>
                    <li>Programmation créative</li>
                    <li>Musique : Pratique de la guitare et de la composition musicale</li>
                    <li>Randonnée : Exploration des magnifiques paysages naturels en Belgique et ailleurs</li>
                </ul>
    </main>

    <?php get_footer(); ?>

</body>
</html>