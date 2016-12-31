<?php
#-=-=-=-=-=-=-
# Shortcodes
#-=-=-=-=-=-=-
function short($sc_name){
  add_shortcode($sc_name, $sc_name);
}

function no_title()
{
  return "<style>.entry-title{display: none;}</style>";
}
function header_no_bottom_margin()
{
  return "<style>#masthead{margin-bottom: 0;}</style>";
}
short('no_title');
short('header_no_bottom_margin');

?>
