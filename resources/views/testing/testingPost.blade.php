<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- include libraries(jQuery, bootstrap) -->
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 

	<!-- include summernote css/js-->
	<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
	<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>
	<title>Post</title>
</head>
<body>
	<form action="/testingPost" method="post">
		<?php echo csrf_field(); ?>
		Title
		<input type="text" name="title" id="title">
		<br>
		Body
	<div id="summernote"></div>
		<br>
		Post type
		<input type="text" name="body" id="body" hidden>
		<select name="post_type" id="post_type">
			@foreach($post_types as $post_type)
				<option value="{{ $post_type->id }}">{{ $post_type->title }}</option>
			@endforeach
		</select>
		<br>
		visibility
		<input type="radio" name="visibility" value="1" checked>public
		<input type="radio" name="visibility" value="2" >internal
		<br>
		<input type="submit" value="Send" onclick="save()">
	</form>
	<!-- <button id="save" onclick="save()" type="button">Save</button> -->
	<!-- <p id="hasil_save"></p> -->
	<script>
		$(document).ready(function() {
		  $('#summernote').summernote({
		  	height:	300,
		  	minHeight:	null,
		  	maxHeight:	null,
		  	focus:	true
		  });
		  //var markup = $('#summernote').summernote('code');
		  //$('#body').val(markup);
		});

		var save = function() {
			var markup = $('#summernote').summernote('code');
			//$('#summernote').summernote('code', '');
			//$('#summernote').summernote('destroy');
			$('#body').val(markup);
		};
	</script>
</body>
</html>