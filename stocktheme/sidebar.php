<div class="sidebar">
    <div class="categories">
        <h2 class="sidebar_title">Категории</h2>
        <ul>
            <?php 
            $args = array(
                'show_option_all'    => '',
                'orderby'            => 'name',
                'order'              => 'ASC',
                'style'              => 'list',
                'show_count'         => 0,
                'hide_empty'         => 1,
                'use_desc_for_title' => 1,
                'child_of'           => 0,
                'feed'               => '',
                'feed_type'          => '',
                'feed_image'         => '',
                'exclude'            => '',
                'exclude_tree'       => '',
                'include'            => '',
                'hierarchical'       => 0,
                'title_li'           => '',
                'show_option_none'   => __( '' ),
                'number'             => null,
                'echo'               => 1,
                'depth'              => 0,
                'current_category'   => 0,
                'pad_counts'         => 0,
                'taxonomy'           => 'category',
                'walker'             => null
            );
            wp_list_categories( $args ); 
             ?>
        </ul>
    </div>
    <div class="tags">
        <h2 class="sidebar_title">Тэги</h2>
        <?php 
            $args = array(
              'smallest'                  => 10, 
              'largest'                   => 22,
              'unit'                      => 'pt', 
              'number'                    => 50,  
              'format'                    => 'flat',
              'separator'                 => "\n",
              'orderby'                   => 'count', 
              'order'                     => 'RAND',
              'exclude'                   => null, 
              'include'                   => null, 
              'link'                      => 'view', 
              'taxonomy'                  => 'post_tag', 
              'echo'                      => true,
            );
            wp_tag_cloud( $args );
        ?>
            
    </div>
</div>