@extends('layouts.app')

@section('content')
	{!! $post->title !!}
	{!! $post->body !!}
	@foreach($post->comments as $comment)
		{!! $comment->body !!}
	@endforeach
@endsection