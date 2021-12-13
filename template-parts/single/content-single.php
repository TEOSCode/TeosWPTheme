<?php
        $prev_post = get_previous_post(); 
        $id = $prev_post->ID ;
        $permalink = get_permalink( $id );

        $next_post = get_next_post();
        $nid = $next_post->ID ;
        $permalinkn = get_permalink($nid);
    ?>
<main id="content" <?php post_class('site-main'); ?>>

    <?php do_action('orbital_before_single_header'); ?>

    <?php get_template_part('template-parts/header/header', 'default'); ?>

    <?php do_action('orbital_after_single_header'); ?>

    <div id="content-wrapper" class="container flex post-content">
        <div class="entry-content single-content">
            <?php do_action('orbital_before_single_content'); ?>
            <div class="entry-post-content">
                <?php the_content(); ?>
                 
                <?php wp_link_pages(array('next_or_number' => 'next')); ?>

                <?php do_action('orbital_after_single_content'); ?>
                <div class="next-prev-postlinks">
                    
                        <a href="<?php  echo $permalink;?>" class="prev-link">
                            <i class="fas fa-angle-left"></i>
                            <span><?php echo $prev_post->post_title;?></span>
                        </a>
                    
                    
                        <a href="<?php  echo $permalinkn;?>" class="next-link">
                            <span><?php echo $next_post->post_title;?></span>
                            <i class="fas fa-angle-right"></i>
                        </a>
                    
                </div>
                <footer class="entry-footer">

                    <?php do_action('orbital_before_single_comments'); ?>

                    <?php if (comments_open() || get_comments_number()) : ?>
                        <?php comments_template(); ?>
                    <?php endif; ?>

                    <?php do_action('orbital_after_single_comments'); ?>

                </footer>
            </div>
           

        </div>

        <?php get_template_part('template-parts/widgets/widget', 'posts'); ?>

    </div>
</main>

