<article class="post-in-list post-item">
    <section class="post-excerpt">
        <a href="<?php the_permalink();?>">
            <img class="lazy" alt="cover" src="<?php echo angela_get_background_image($post->ID);?>">
        </a>
        <div class="info-mask">
            <div class="mask-wrapper">
                <h2 class="post-title">
                    <a href="<?php the_permalink();?>"><?php the_title();?></a>
                </h2>
                <div class="post-meta">
<span class="post-time">
<time datetime="2016-08-20"><?php echo get_the_date();?></time>
</span>
                    <span class="post-tags">
<?php echo get_the_tag_list('','','');?>
</span>
                </div>
            </div>
        </div>
    </section>
</article>