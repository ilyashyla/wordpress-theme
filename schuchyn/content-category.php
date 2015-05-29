<?php $_sImage = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>
<?php $_aTags = wp_get_post_tags(get_the_ID()); ?>
<div class="item<?php if(strlen($_sImage) == 0){ echo ' item-without-image'; } ?>">
	<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	<div class="info"><?php the_date(); ?>,, аўтар: <strong><?php the_author(); ?></strong></div>
	<?php if(strlen($_sImage) > 0):?><div class="image"><img src="<?php echo $_sImage; ?>" alt="<?php echo $_aNews[$_iCount]['title']; ?>"></div><?php endif; ?>
	<div class="text">
		<?php the_excerpt(); ?>
	</div>
	<div class="tags">
		<?php foreach($_aTags as $_aTag):?>
		<a href="<?php echo get_tag_link($_aTag->term_id); ?>"><?php echo $_aTag->name; ?></a>
		<?php endforeach; ?>
	</div>
</div>