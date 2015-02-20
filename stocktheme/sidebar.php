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
            <ul>
            <?php 
                $tags = get_tags();
                if ($tags) {
                    foreach ($tags as $tag) {
                        echo '<li><a href="' . get_tag_link( $tag->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $tag->name ) . '" ' . '>' . $tag->name.'</a> </li> ';
                    }
                }
             ?>
            </ul>
    </div>
</div>