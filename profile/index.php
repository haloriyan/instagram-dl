<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale = 1">
	<title>Fetch from Instagram Profile</title>
	<link href="http://cdn.riyansatria.tk/fw/build/fw.css" rel="stylesheet">
	<link href="http://cdn.riyansatria.tk/fw/build/font-awesome.min.css" rel="stylesheet">
	<link href="../inc/style.index.css" rel="stylesheet">
	<script src="http://cdn.riyansatria.tk/jquery-3.1.1.js"></script>
</head>
<body>

<div class="container">
	<div class="wrap">
		<h1 style="font-size: 72px;">Instagram Profile Downloader</h1>
		<div class="isi rata-tengah" style="margin-top: -25px;font-family: OBold;">
			Fetch all images from Instagram profile
		</div>
		<div class="isi" style="font-size: 20px;margin-top: 30px;">
			Fill Instagram profile URL :
		</div>
		<form>
			<input type="text" class="box" id="uri">
			<button id="grab"><i class="fa fa-download"></i></button>
		</form>
		<div class="isi" style="font-size: 16px;">
			*) make sure the profile isn't private
		</div>
		<div id="loading"><i class="fa fa-spinner"></i> wait a second...</div>
		<div class="result" id="allImages">
			<div class="isi">Result :</div>
			<div id="load"></div>
		</div>
	</div>
</div>

<script>
	$(function() {
		$("#grab").click(function() {
			$("#loading").fadeIn(200)
			var url = $("#uri").val()
			var get = "namakuki=profile&value="+url+"&durasi=500"
			$.ajax({
				type: "POST",
				url: "../aksi/setCookie.php",
				data: get,
				success: function() {
					$("#loading").fadeOut(200)
					$(".result").fadeIn(200)
					$.get("../aksi/all.php", function(res) {
						$("#load").html(res)
					})
				}
			})
			return false
		})
	})
</script>

</body>
</html>