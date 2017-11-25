<html>

<body>
{{Form::open(['url' => 'communities'])}}

{{Form::label('Name', 'Name',['class' => 'control-label'])}}
{{Form::text('name')}}
<br>
{{Form::label('Jurusan', 'Jurusan',['class' => 'control-label'])}}
<select name="jurusan">
	<?php foreach ($majors as $major) : ?>
		<option value="<?php echo $major->id; ?>"><?php echo $major->name."|".$major->university->name; ?></option>
	<?php endforeach ?>
</select>
{{Form::submit('Create', ['class' => 'btn btn-success'])}}

{{Form::close()}}
</body>
</html>