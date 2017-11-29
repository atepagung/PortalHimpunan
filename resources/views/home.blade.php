@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Public Post</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    @if (isset($posts))
                        @foreach($posts as $post)
                            @include('other.miniPost')
                        @endforeach
                        <div class="text-center"><a href="#" id="loadmore" class="btn btn-primary">Older Posts...</a></div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
