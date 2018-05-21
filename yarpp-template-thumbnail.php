<?php
/*
YARPP Template: Thumbnails
Description: Requires a theme which supports post thumbnails
Author: mitcho (Michael Yoshitaka Erlewine)
*/ ?>
<?php if (have_posts()):?>
  <style>
    .related-posts:before {
  content : "";
  display:block;
  margin: 30px auto;
  text-align: center;
  width: 60%;
  height  : 1px;
  max-width: 350px;
  border-bottom: 1px solid #ccc;
}
.related-posts .related-post {
position: relative;
  background-size: cover;
  height: 300px;
  margin: 1em 0 3em 0;
}
.related-posts .related-post-title {
  position: absolute;
  font-size: 2em;
  bottom: 0;
  color: #000;
  font-weight: bold;
  font-family: 'Amiri', serif;
  background-color: rgba(255,255,255,0.6);
  padding: 0.2em;
}

  </style>
  <div class="related-posts">
<h3>Mehr Rezepte</h3>
	<?php while (have_posts()) : the_post(); ?>
		<?php if (has_post_thumbnail()):?>
      <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
		<div class="related-post" style="background-image: url('<?php the_post_thumbnail_url('medium_large'); ?>')"><h6 class="related-post-title"><?php the_title();?></h6></div></a>
		<?php endif; ?>
	<?php endwhile; ?>
</div>
<?php else: ?>
<?php endif; ?>