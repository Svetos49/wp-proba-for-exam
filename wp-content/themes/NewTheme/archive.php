<?php get_header(); ?>
 
<?php the_archive_title(); ?>

<ul class="properties-listing">
	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
		<?php get_template_part('template-parts/post', 'item'); ?>

		<?php endwhile; ?>

		<?php posts_nav_link(); ?>

	<?php endif; ?>

</ul>




<footer class="site-footer">
	<p>&copy; Copyright 2023 | Developer links:
		<a href="/edits.html">Edits</a>,
		<a href="/index.html">Home</a>,
		<a href="/single.html">Single</a>
	</p>
</footer>
</div>

<?php get_footer(); ?>