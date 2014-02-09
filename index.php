<!DOCTYPE html>
<html>
<head>
    <title>Viewporter</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="styles.css" media="all" />
</head>
<body>
<?php //Get URL Parameter
	$src = (empty($_GET['url'])) ? 'http://fourkitchens.com/' : addslashes(filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL));
?>
<header class="sg-header" role="banner">
	<div class="nav url-change">
		<form method="get" action="">
			<label for="url" id="url-toggle" class="url-toggle">URL</label>
		     <input id="url" type="url" name="url" placeholder="Enter any URL" value="<?php echo $src; ?>" />
		     <button id="url-submit">Go</button>
		  </form>
	</div>
	<div class="sg-controls" id="sg-controls">
		<div class="sg-control-content">
			<ul class="sg-control">
				<li class="sg-size">
					<div class="sg-current-size">
						<form id="sg-form">
							Size <input type="text" class="sg-input sg-size-px" value="320">px /
							<input type="text" class="sg-input sg-size-em" value="20">em
						</form><!--end #sg-form-->
					</div><!--end #sg-current-size-->
					<ul class="sg-acc-panel sg-size-options">
						<li class="sg-quarter"><a href="#" id="sg-size-s">S</a></li>
						<li class="sg-quarter"><a href="#" id="sg-size-m">M</a></li>
						<li class="sg-quarter"><a href="#" id="sg-size-l">L</a></li>
						<li class="sg-half"><a href="#" id="sg-size-full">Full</a></li>
						<li class="sg-daylight"><a href="#" id="sg-daylight">Daylight</a></li>
						<li class="sg-half sg-extras"><a href="#" id="sg-size-random">Random</a></li>
						<li class="sg-half sg-extras"><a href="#" class="mode-link" id="sg-size-hay">Grow</a></li>
						<li class="sg-half sg-extras"><a href="#" class="mode-link" id="sg-size-disco">Disco</a></li>
						<li class="sg-half sg-extras"><a href="javascript:(function(){var url=encodeURIComponent(window.location);window.location=('http://<?php echo $_SERVER["HTTP_HOST"] . $_SERVER['REQUEST_URI']; ?>?url='+url);})();" class="mode-link" id="sg-bookmarklet"><span class="title">Viewporter</span><span class="replacement"></span></a></li>
						<li class="sg-expand"><a href="#" id="sg-expand">&lt;</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</header>

<!-- Iframe -->
<div id="sg-vp-wrap">
	<div id="sg-cover"></div>
	<div id="sg-gen-container">
		<iframe id="sg-viewport" src="<?php echo $src; ?>"></iframe>
		<div id="sg-rightpull-container">
			<div id="sg-rightpull"></div>
		</div>
	</div>
</div>
<!--end iFrame-->


<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="js/data-saver.js "></script>
<script type="text/javascript" src="js/url-handler.js "></script>
<script type="text/javascript" src="js/init.js "></script>
</body>
</html>