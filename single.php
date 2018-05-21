<?php
/**
 * The Template for displaying single posts.
 *
 * @package Neubau
 * @since Neubau 1.0
 * @version 1.0.1
 */

get_header(); ?>

<div id="primary" class="site-content cf" role="main">

	<?php while ( have_posts() ) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?>>
	
	<header class="entry-header cf">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<div class="entry-meta">
				<span class="entry-date">
					<a href="<?php the_permalink(); ?>"><?php echo get_the_date(); ?></a>
				</span><!-- end .entry-date -->
				<span class="entry-author">
				<?php
					printf( __( 'by <a href="%1$s" title="%2$s">%3$s</a>', 'neubau' ),
					esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
					sprintf( esc_attr__( 'All posts by %s', 'neubau' ), get_the_author() ),
					get_the_author() );
				?>
				</span><!-- end .entry-author -->
				
			<?php edit_post_link( esc_html__( 'Edit', 'neubau' ), '<span class="entry-edit">', '</span>' ); ?>
			<?php if ( has_category() ) : ?>
			<div class="entry-cats">
				<span><?php esc_html_e('Category: ', 'neubau') ?></span><?php the_category(', '); ?>
			</div><!-- end .entry-cats -->
			<?php endif; // has_category() ?>
			<?php $tags_list = get_the_tag_list();
					if ( $tags_list ): ?>
					<div class="diningtales-tags">Tags: <?php the_tags('', ', ', ''); ?></div>
				<?php endif; // has tags ?>
		</div><!-- end .entry-meta -->
	</header><!-- end .entry-header -->
	
	<div class="post-content-wrap">
		
	<?php if ( '' != get_the_post_thumbnail() && ! post_password_required()  &&  ! get_theme_mod('neubau_hide_singlethumb') ) : ?>
			<div class="entry-thumbnail">
				<?php the_post_thumbnail('neubau-small'); ?>
			</div><!-- end .entry-thumbnail -->
		<?php endif; ?>
		
		<div class="post-comments-wrap">
		<div class="entry-content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'neubau' ),
					'after'  => '</div>',
				) );
			?>
			</div><!-- end .entry-content -->
			
		</div>
	</div><!-- end .post-content-wrap -->

	<div class="sidebar-wrap">
		
		<?php get_sidebar(); ?>
	</div><!-- end .sidebar-wrap -->
	
	<?php the_post_navigation( array (
				'next_text' => '<span class="meta-nav">' . __( 'Next', 'neubau' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Next Post', 'neubau' ) . '</span> ',
				'prev_text' => '<span class="meta-nav">' . __( 'Previous', 'neubau' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Previous Post', 'neubau' ) . '</span> ',
			) ); ?>

		<?php endwhile; // End of the loop. ?>

	</div><!-- end #primary -->

<?php get_footer(); ?>
