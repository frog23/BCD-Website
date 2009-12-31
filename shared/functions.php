<?php


function current_page() {
  $file = $_SERVER["SCRIPT_NAME"];
  $break = Explode('/', $file);
  $pfile = $break[count($break) - 1];
  return $pfile;
}

global $page;
$page = current_page();

function link_to($name, $url, $class = "", $title = "") {
  echo '<a href="'.$url.'" ';
  
  if($title != "")
    echo ' title="'.$title.'" ';
  if($class != "")
    echo ' class="'.$class.'" ';
  echo '>'.$name.'</a>';
}

?>