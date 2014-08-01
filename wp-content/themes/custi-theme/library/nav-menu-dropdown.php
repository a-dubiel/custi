<?php
class SelectBox_Menu_Walker extends Walker_Nav_Menu {

        function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
                global $wp_query;
                $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

                $classes = empty( $item->classes ) ? array() : (array) $item->classes;
                $selected = in_array('current-menu-item',$classes) ? 'selected="selected"' : '';
                $output .= '<option '.$selected.' value="'.$item->url.'">';
                $output .= $item->title;
        }
        function end_el( &$output, $item, $depth = 0, $args = array() ) {
                $output .= "</option>";
        }
}