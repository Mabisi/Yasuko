<article class="post-in-list post-item">
        <div class="post-image" style="background-image: url(<?php echo angela_get_background_image($post->ID);?>);">
        
        <div class="info-mask">
            <div class="mask-wrapper">
                <h2 class="post-title">
                    <a href="<?php the_permalink();?>"><?php the_title();?></a>
                </h2>
                <div class="post-meta">
                <div class="block-snippet block-snippet--subtitle" itemprop="about"><?php echo mb_strimwidth(strip_shortcodes(strip_tags(apply_filters('the_content', $post->post_content))), 0, 120,"...");?></div>
                <div class="post-info"><span class="post-time"><time datetime="2016-08-20"><?php echo get_the_date();?></time></span><span class="middotDivider"></span><span class="post-tags"><?php the_category(',');;?></span></div>
                </div>
            </div>
        </div>
        </div>
</article>