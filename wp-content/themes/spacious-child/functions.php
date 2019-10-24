<?php
//靜態資源刪除查詢字串
function ewp_remove_script_version( $src ){
	return remove_query_arg( 'ver', $src );
}

add_filter( 'script_loader_src', 'ewp_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', 'ewp_remove_script_version', 15, 1 );
//刪除排版號
function remove_version() {
	return '';
}
add_filter('the_generator', 'remove_version');