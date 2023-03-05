<?php
include_once( ABSPATH . WPINC . '/feed.php' );
$rss = fetch_feed( '' );
if ( ! is_wp_error( $rss ) ) :
    $maxitems = $rss->get_item_quantity( 1 ); 
    $rss_items = $rss->get_items( 0, $maxitems );

foreach ( $rss_items as $item ) :
				$rss_title = $item->get_title();
		
endforeach;
endif; ?>

// Output of feed items into Alert div
<ul>
<?php if ($maxitems == 1 && (strtolower ( $rss_title ) == 'clear' )) echo ' ';
else
foreach ( $rss_items as $item ) : ?>
<div class="rave-alert" aria-label="Active RAVE Alert">
<li><strong><a href="<?php echo $item->get_permalink(); ?>"><?php echo $item->get_title(); ?></a></strong> - <?php echo $item->get_description() ?></li>
</div>
<?php endforeach; ?>
</ul>