<?php /* Template Name: Custom */ ?>

<?php
get_header();
?>
<div id="content">
	<?php
		$id = get_the_ID();
		$post_id = get_post($id);
		$content = $post_id->post_content;
		$content = apply_filters('the_content', $content);
		echo $content;
	?>
</div>
<?php
get_footer();
?>