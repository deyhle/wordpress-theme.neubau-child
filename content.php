<?php
/**
 * The default template for displaying content
 *
 * @package Neubau
 * @since Neubau 1.0
 * @version 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?>
<?php if (in_category('Rezept')) : ?> itemscope itemtype="http://schema.org/Recipe"<?php endif;?>>
	<div class="fadein-wrap fadethis">

	<?php if ( '' != get_the_post_thumbnail() && ! post_password_required() && is_sticky() ) : ?>
		<div class="entry-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div><!-- end .entry-thumbnail -->
	<?php else : ?>
		<div class="entry-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('neubau-medium'); ?></a></div><!-- end .entry-thumbnail -->
	<?php endif; ?>
	<meta itemprop="image" content="<?php the_post_thumbnail_url('full') ?>" />

	<div class="post-wrap ">
		<header class="entry-header">
			<?php the_title( sprintf( '<h2 class="entry-title" itemprop="name"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			<div class="entry-meta">
				<meta itemprop="url" content="<?php the_permalink(); ?>" />
				<span class="entry-date">
					<a href="<?php the_permalink(); ?>"><?php echo get_the_date(); ?></a>
				</span><!-- end .entry-date -->
				<span class="entry-author" itemprop="author" property="article:author">
				<?php
					printf( __( 'by <a href="%1$s" title="%2$s">%3$s</a>', 'neubau' ),
					esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
					sprintf( esc_attr__( 'All posts by %s', 'neubau' ), get_the_author() ),
					get_the_author() );
				?>
				</span><!-- end .entry-author -->
				<?php edit_post_link( esc_html__( 'Edit', 'neubau' ), '<span class="entry-edit">', '</span>' ); ?>
			</div><!-- end .entry-meta -->
		</header><!-- end .entry-header -->
		
		<div class="entry-summary" itemprop="description" property="og:description">
			<?php the_excerpt(); ?>
		</div><!-- .entry-content -->
	</div><!-- .post-wrap -->
	</div><!-- .fadein-wrap -->
</article><!-- end post -<?php the_ID(); ?> -->
