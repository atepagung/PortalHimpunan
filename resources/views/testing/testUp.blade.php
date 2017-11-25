{{Form::open(['url' => 'communities', 'files' => true])}}

{{Form::label('image', 'image',['class' => 'control-label'])}}
{{Form::file('image')}}
{{Form::submit('Save', ['class' => 'btn btn-success'])}}

{{Form::close()}}
