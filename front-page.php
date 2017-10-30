<?php get_header(); ?>
    <div id="main">
        <div class="containerーfluid">
            <div class="row">
                <div class="col-md-9 col-md-push-3">
                    <div class="row">
                        <?php $news = get_posts('posts_per_page=9'); ?>
                        <?php foreach($news as $post): ?>
                            <?php setup_postdata($post); ?>
                            <div class="col-lg-4 col-md-6 eachpost">
                                <?php
                                    $image_id = get_post_thumbnail_id();
                                    $image_url = wp_get_attachment_image_src($image_id, true);
                                ?>
                                <a href="<?php the_permalink(); ?>" class="img" style="background-image: url(<?php echo $image_url[0]; ?>)"></a>
                                <h3 class="mono">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                                <div>
                                    <?php /*
                                    <?php the_content('read more'); ?>
                                    */ ?>
                                    <span class="date"><?php the_date('Y.n.d'); ?></span>
                                    <span class="category"><?php the_category(); ?></span>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                </div>
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>