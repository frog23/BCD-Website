<?php

function render_html_header($title) {
  echo '<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="de" xml:lang="de">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
  <title>'.$title.'</title>
  <link href="stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="swfobject.js"></script>
</head>
<body>';
}

?>