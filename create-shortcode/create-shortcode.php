<?php
add_shortcode( 'tilde-widget', 'tilde_widget' );
function tilde_widget() {
    
  $widget_id = get_option('widget_id');

  $widget_content ="<div id='towoo-widget'></div>" . 
  "<script type='text/javascript'>" . 
    "var Towoo = Towoo || {};" . 
    "Towoo.widgetId = '" . $widget_id . "';" . 

    "(function(t,i,l,d,e) {" . 
        "d=t.createElement(i);d.src=l;d.async=1;" . 
        "e=t.getElementsByTagName(i)[0];" . 
        "e.parentNode.appendChild(d);" . 
    "})(document,'script','//cdn.towoo.io/widget.js');" . 
  "</script>";

  return $widget_content;
}