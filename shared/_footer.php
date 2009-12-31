<?php

function nav_list_entry($title, $url) {
  echo "<li>";
      $class = (current_page() == $url) ? 'active' : '';
      link_to($title, $url, $class);
    echo "</li>";
}

function is_makingof() {
  $currentPage = current_page();
  $makingof = array("production.php", "trivia.php", "download.php" );
  return in_array($currentPage, $makingof);
}

function render_footer() {
  echo '
    </div>
    <div id="footer">
      <div id="navigation">
        <ul>';
          
          
  // is behind closed doors?
  if(!is_makingof()) {    
    nav_list_entry("Trailer", 'index.php');
    nav_list_entry("Synopsis", 'synopsis.php');
    nav_list_entry("Cast", 'cast.php');
    nav_list_entry("Presse", 'press.php');
    nav_list_entry("The Closed Door", 'closed-door.php');
  } else {
    nav_list_entry("Production", 'production.php');
    nav_list_entry("Trivia", 'trivia.php');
    nav_list_entry("Download", 'download.php');
    nav_list_entry("To the movie", 'index.php');
  }
          
          
          
  echo '
        </ul>
      </div>
    </div>
  </div>  
</body>
</html>
';  
}

?>

