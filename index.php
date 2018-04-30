<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale = 1">
	<title>Instagram Downloader</title>
	<link href="http://cdn.riyansatria.tk/fw/build/fw.css" rel="stylesheet">
	<link href="http://cdn.riyansatria.tk/fw/build/font-awesome.min.css" rel="stylesheet">
	<link href="inc/style.index.css" rel="stylesheet">
	<script src="http://cdn.riyansatria.tk/jquery-3.1.1.min.js"></script>
</head>
<body>

<div class="container">
	<div class="wrap">
		<h1>Instagram Downloader</h1>
		<form>
			<div class="isi">Please fill Instagram Post URI below :</div>
			<input type="text" class="box" id="uri">
			<button id="grab"><i class="fa fa-download"></i></button>
		</form>
		<div id="loading"><i class="fa fa-spinner"></i> wait a second...</div>
		<div class="result" id="result">
			<div class="isi">This is your image :</div>
			<div id="load"></div>
		</div>
		<div id="footer">
			<div class="isi" style="font-size: 18px;margin-top: 20px;">or fetch all images from url profile <a href="./profile">here</a></div>
		</div>
	</div>
</div>

<script src="inc/script.js"></script>
</body>
</html>