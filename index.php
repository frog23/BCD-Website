<?php
  require("shared/partials.php");
  render_html_header("Behind Closed Doors - Trailer");
  render_header();
  ?>


    <!-- Insert your content here -->
<h2>Trailer</h2>

<div class="embedded_video">
	<p id="player2"><a href="http://www.macromedia.com/go/getflashplayer">Get the Flash Player</a> to see this player.</p>
	<script type="text/javascript">
		var s2 = new SWFObject("flvplayer.swf","single","480","360","7");
		s2.addParam("allowfullscreen","true");
		s2.addVariable("file","http://www.si-entertainment.com/dahie/videos/BehindClosedDoors2.flv");
		s2.addVariable("displayheight","480");
		s2.addVariable("backcolor","0x000000");
		s2.addVariable("frontcolor","0xCCCCCC");
		s2.addVariable("lightcolor","0x557722");
		s2.write("player2");
	</script>
</div>
  

    
<?php render_footer(); ?>
