<?php
get_header();
?>
<h2><?php the_title()?></h2>

<?php
$query=new WP_Query(
    [
        'post_type'=>'post',
        'post_status'=>'publish',
        'posts_per_page'=>-1,
    ]
    );

    if($query->have_posts()){
        while($query->have_posts()): $query->the_post();
        ?>
        <div>
            <h3><?php the_title()?></h3>
            <p><?php the_date()?></p>
            <p><?php the_excerpt()?></p>
            <a href="<?php the_permalink()?>">detail de l'article</a>
        </div>
        <?php
        endwhile;
    }
    get_footer();