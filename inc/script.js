$(function() {
	$("#grab").click(function() {
		$("#loading").fadeIn(300)
		var uri = $("#uri").val()
		var get = "namakuki=uri&value="+uri+"&durasi=1000"
		$.ajax({
			type: "POST",
			url: "aksi/setCookie.php",
			data: get,
			success: function() {
				$("#loading").fadeOut(100)
				$.get("aksi/get.php", function(res) {
					$("#result").fadeIn(250)
					$("#load").html(res)
				})
			}
		})
		return false
	})
})