<?php 
require_once('../../../wp-blog-header.php'); 

$_sAction = $_POST['action'];
switch($_sAction){
	case 'showmore':
		$_iPerPage = (int) $_POST['perpage'];
		$_iNextPage = (int) $_POST['next'];
		$_iCategory = (int) $_POST['cat'];
		showMore($_iCategory,$_iPerPage,$_iNextPage);
		break;
}
function showMore($_iCategory,$_iPerPage,$_iNextPage){
	function my_post_limits($limit) 
	{
		$_iPerPage = (int) $_POST['perpage']; 
		$_iNextPage = (int) $_POST['next'];
		$_start = $_iPerPage * $_iNextPage + 5; 
		return 'LIMIT '.$_start.', '.$_iPerPage;
	}	
	add_filter( 'post_limits', 'my_post_limits');
	$_aRecent = new WP_Query("cat=".$_iCategory); 
	while($_aRecent->have_posts()) { 
		$_aRecent->the_post();
		$_sImage = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
		$_aTags = wp_get_post_tags(get_the_ID());
		?>
		
		<div class="item<?php if(strlen($_sImage) == 0){ echo ' item-without-image'; } ?>">
			<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
			<div class="info"><?php the_date(); ?>, аўтар: <strong><?php the_author(); ?></strong></div>
			<?php if(strlen($_sImage) > 0):?><div class="image"><img src="<?php echo $_sImage; ?>" alt="<?php the_title(); ?>"></div><?php endif; ?>
			<div class="text">
				<?php the_excerpt(); ?>
			</div>
			<div class="tags">
			<?php foreach($_aTags as $_aTag):?>
				<a href="<?php echo get_tag_link($_aTag->term_id); ?>"><?php echo $_aTag->name; ?></a>
			<?php endforeach; ?>
			</div>
		</div>
		<?php
	}
}
?>