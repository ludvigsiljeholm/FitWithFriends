<!DOCTYPE html>
<html lang="en">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link href="cssplayer/stylesheetvideo.css" rel="stylesheet" type="text/css">
	<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous"> -->
	<title>Video Player</title>
</head>

<body>
	<div class="container">
		<div class="Tennis-video">
			<video class="video" src="movie/adobevideo.mov" ></video>
			<div class="controls">
				<div class="video-bar">
					<div class="progress-bar"></div>
				</div>
				<div class="buttons">
					<button id="start-stop"></button>
					<input type="range" name="volume" class="volumeSlider" min="0" max="1" step="0.05" value="1">
					<input type="range" name="playSpeed" class="speedSlider" min="0" max="3" step="0.1" value="1">
					<div id="duration" style="color:aliceblue"></div>
				</div>
			</div>
		</div>
	</div>



			

	<script src="jsplayer/script.js"></script>
</body>
</html>

