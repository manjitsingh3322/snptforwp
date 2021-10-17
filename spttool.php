<?php>
<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
 <header class="header">
<a href="<?php echo home_url( '/' ); ?>">
<img src="<?php echo get_template_directory_uri(); ?>/img/hello.png" >
</a> 
</header>

<article class="post">

 <h1>title is here <?php the_title(); ?></h1>
 <div class="post__meta">

 <p>
 date section<?php the_date(); ?>
 user name <?php the_author(); ?>
 
 </p>
 </div>
 <div class="post__content">
 <?php the_content(); ?>
 </div>
</article>
<?php endwhile; endif; ?