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