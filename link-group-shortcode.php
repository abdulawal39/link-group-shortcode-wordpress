<?php
function tnc_menu_item( $atts ) {

extract( shortcode_atts(
	array(
		'link' => '',
		'name' => '',
	), $atts )
);

return '<li><a href="'.$link.'">'.$name.'</a></li>';
}
add_shortcode( 'tnclink', 'tnc_menu_item' );

function tnc_menu_cotainer( $atts , $content = null ) {

	extract( shortcode_atts(
		array(), $atts )
	);

return '<ul>'.do_shortcode($content).'</ul>';
}
add_shortcode( 'tncmenu', 'tnc_menu_cotainer' );
?>
