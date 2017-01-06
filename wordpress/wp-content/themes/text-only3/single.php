<?php get_header(); ?>

      <main class="mdl-layout__content">
        <div class="mdl-layout__tab-panel is-active" id="overview">
          
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <!-- post -->
          <section class=" mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
            <header class="section__play-btn mdl-cell mdl-cell--3-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone mdl-color--teal-100 mdl-color-text--white">
            <?php
                // check if the post has a Post Thumbnail assigned to it.
              if ( has_post_thumbnail() ) {
                the_post_thumbnail('imagen-full');
              }
              ?>
            </header>
            <div class="mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
              <div class="mdl-card__supporting-text">
                <h4><?php the_title(); ?></h4>
                <?php the_content(); ?>
              </div>
              <div class="mdl-card__actions">
                <?php comments_template(); ?>
              </div>
            </div>
            
          </section>

          <?php endwhile; ?>
          <!-- post navigation -->
          <?php else: ?>
          <!-- no posts found -->
          <h3>No se encontro la página que buscas</h3>
          <?php endif; ?>
          
          
          
          
        </div>

        

<?php get_footer(); ?>