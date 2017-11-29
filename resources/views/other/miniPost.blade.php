<div class="row">
    <div class="col-md-1"></div>
	<div class="col-md-6">
		<div id="postlist">
			<div class="panel">
                <div class="panel-heading">
                    <div class="text-center">
                        <div class="row">
                            <div class="col-sm-9">
                                <h3 class="pull-left">{{ $post->title }}</h3>
                            </div>
                            <div class="col-sm-3">
                                <h4 class="pull-right">
                                <small><em>{{ $post->created_at }}</em></small>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                
            <div class="panel-body">
                {!! substr($post->body, 0, 255) !!}... <a href="/post/{{ $post->id }}">Read more</a>
            </div>
            
            <div class="panel-footer">
                <span class="label label-default">{{ $post->user->username }}</span> <span class="label label-default">{{ $post->post_type->title }}</span>
            </div>
        </div>
    </div>
</div>
	<div class="col-md-1"></div>
	<div class="col-md-3">
	</div>
	<div class="col-md-1">
	</div>
</div>