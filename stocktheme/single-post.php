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
                <?php echo get_avatar(get_the_author_meta('ID'), 96); ?>
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
          <div class="action-wrapper cf">
            <div class="action-wrapper-download">
              <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                <a href="<?php echo $url; ?>" download="<?php echo substr($url, 0, strrpos($url, '\\')); ?>" target="_blank" class="action-wrapper-download__btn"><i class="fa fa-download action-wrapper-download__btn-icon" data-pid="<?php echo $post->ID; ?>"></i>Скачать</a>
            </div>                
          </div>  
          <!-- <div class="realated-photos cf">
            <h2 class="realated-photos__title">Похожие фотографии </h2>
            <div class="related-photos-wrapper">
              <a href="" class="related-photos-wrapper-link">
                  <img src="http://www.marowall.ru/Priroda/Gori/16001200/1/9.jpg" class="realated-photos-item" alt="">
              </a>
              <a href="" class="related-photos-wrapper-link">
                  <img src="http://www.marowall.ru/Priroda/Gori/16001200/1/9.jpg" class="realated-photos-item" alt="">
              </a>
              <a href="" class="related-photos-wrapper-link">
                  <img src="http://www.marowall.ru/Priroda/Gori/16001200/1/9.jpg" class="realated-photos-item" alt="">
              </a>
              <a href="" class="related-photos-wrapper-link">
                  <img src="http://www.marowall.ru/Priroda/Gori/16001200/1/9.jpg" class="realated-photos-item" alt="">
              </a>  
            </div>                                   
          </div> -->
          <div class="tegs cf">
              <h2 class="realated-photos__title">Теги</h2>
              <?php the_tags( '<div class="tegs__list"><div class="tegs__list-item">', '</div><div class="tegs__list-item">', '</div></div>' ); ?>
          </div>

          <ul>
            <li>
                <?php the_category(); ?>
            </li>
          </ul>
        </div>
      <?php
      endwhile;
    else :

    endif;
    ?>

    </div>
  </div>

<?php get_footer(); ?>