<?php 
if ( ! empty( $title ) )
	echo $before_title . $title . $after_title;

if(!empty($instance['ads'])) :

	$ads = $instance['ads'];
	$size = $instance['size'];

	if($instance['size'] == 'custom'){
		$ad_size = 'style="width:'.$instance['ad_width'].'px; height:'.$instance['ad_height'].'px;"';
	} else {
		$ad_size = '';
	}
?>

<ul class="goran_adswidget_ul <?php echo $instance['size'];?>">
	<?php foreach($ads as $ad) : ?>
	<li><a rel="nofollow" href="<?php echo $ad['link'];?>" target="_blank"><img src="<?php echo $ad['img'];?>" alt="<?php echo esc_attr(basename($ad['img'])); ?>" <?php echo $ad_size; ?>/></a></li>
	<?php endforeach; ?>
</ul>

<?php endif; ?>