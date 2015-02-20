<?php get_header(); ?>
  <div class="container">
  <?php get_sidebar(); ?>
  <?php if ( have_posts() ) : ?>
    <div class="images">
      
      <?php
      while ( have_posts() ) : the_post();
      ?>
        <div class="post">
          <ul>
            <li class="author">
              <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/avatars/nicky.png" alt="icon">
              </a>
              <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" title="Смотреть все публикации автора.">
                <span><?php the_author_meta( 'display_name' ); ?></span>
              </a>
            </li>
            <li class="img_title">
              <a href="<?php the_permalink(); ?>">
                <span><?php the_title(); ?></span>
              </a>
            </li>
            <li  class="date">
              <?php the_date( "d/m/y", "<span>Дата: ", "</span>"); ?>
            </li>
          </ul>
          <div class="image">
            <a href="<?php the_permalink();?>">
              <?php the_post_thumbnail( 'main', array( 'alt' => get_the_title() ) ); ?>
            </a>
          </div>
          <ul>
            <li>
                <?php the_category(); ?>
            </li>
            <li>
                <?php the_tags( '<ul class="post__tags"><li>', '</li><li>', '</li></ul>' ); ?>
            </li>
            <li class="post__download">
              <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                <a href="<?php echo $url; ?>" download="<?php echo substr($url, 0, strrpos($url, '\\')); ?>" target="_blank">
                    <span>Скачать</span>
                </a>
            </li>
          </ul>
        </div>
      <?php
      endwhile;
      ?>

      <?php
    else :

    endif;
    ?>


    </div>
  </div>



<?php get_footer(); ?>