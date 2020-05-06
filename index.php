<?php

$html = '<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>All-In-1 Video Downloader</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	</style>
</head>
<body>
	<div class="container my-5">
		<div class="row">
			<div class="col-12"></div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script>
	(function() {
		"use strict";
		window.addEventListener("load", function() {
			var forms = document.getElementsByClassName("needs-validation");\
			var validation = Array.prototype.filter.call(forms, function(form) {
				form.addEventListener("submit", function(event) {
					if (form.checkValidity() === false) {
						event.preventDefault();
						event.stopPropagation();
					}
					form.classList.add("was-validated");
				}, false);
			});
		}, false);
	})();
	</script>
</body>
</html>';

header('Content-Disposition: attachment; filename="index.html"');

die($html);
