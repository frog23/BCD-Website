<?php

function nav_list_entry($title, $url) {
  echo "<li>";
      $class = (current_page() == $url) ? 'active' : '';
      link_to($title, $url, $class);
    echo "</li>";
}

function is_makingof() {
  $currentPage = current_page();
  $makingof = array("closed-door.php", "trivia.php", "download.php" );
  return in_array($currentPage, $makingof);
}

function render_footer() {
  echo '
      </div>
    </div>
    <div id="footer">
      <div id="navigation">
        <ul>';
          
  $is_makingof = is_makingof();
  // is behind closed doors?
  if(!$is_makingof) {    
    nav_list_entry("Trailer", 'index.php');
    nav_list_entry("Synopsis", 'synopsis.php');
    nav_list_entry("Cast", 'cast.php');
    nav_list_entry("Presse", 'press.php');
    nav_list_entry("The Closed Door", 'closed-door.php');
  } else {
    nav_list_entry("Production", 'closed-door.php');
    nav_list_entry("Trivia", 'trivia.php');
    nav_list_entry("Download", 'download.php');
    nav_list_entry("To the movie", 'index.php');
  }
          
          
          
  echo '
        </ul>
      </div>';
  if($is_makingof)
    echo '<div id="license">
        <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/2.0/de/">
        <img alt="Creative Commons License" style="border-width:0;float:left;padding-right:10px;" src="http://i.creativecommons.org/l/by-nc-sa/2.0/de/88x31.png" /></a>
        This <span xmlns:dc="http://purl.org/dc/elements/1.1/" href="http://purl.org/dc/dcmitype/MovingImage" rel="dc:type">work</span> is licensed under a
        <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/2.0/de/">Creative Commons Attribution-Noncommercial-Share Alike 2.0 Germany License</a>.
      </div>';
      
echo '    </div>
  </div>  
</body>
</html>
';  
}

?>

