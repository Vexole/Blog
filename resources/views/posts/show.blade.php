@extends('main')

@section('title', "View Posts");

@section('content')

	<div class="row">
		<div class="col-md-8">
			<h1>{{	$post->title }}</h1>
			<div class="lead">{{	$post->body 	}}</div>
		</div>

		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<label>URL Slug:</label>
					<p><a href="{{	url('blog/' . $post->slug)	}}">{{	url('blog/' . $post->slug)	}}</a></p>
				</dl>

				<dl class="dl-horizontal">
					<label>Created At:</label>
					<p>{{	date('M j, Y h:i a', strtotime($post->created_at))	}}</p>
				</dl>

				<dl class="dl-horizontal">
					<label>Updated At:</label> 
					<p>{{	date('M j, Y h:i a', strtotime($post->updated_at))	}}</p>
				</dl>

				<hr>

				<div class="row">
					<div class="row-sm-6">
						{!!	Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block'))	!!}
						<!--<a href="#" class="btn btn-primary btn-block">Edit</a>-->
					</div>

					<div class="row-sm-6">
						{!!	Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE'])	!!}


						<!--<a href="#" class="btn btn-danger btn-block">Delete</a>-->

						{!!	Form::submit('Delete', ['class' => 'btn btn-danger btn-block'])	!!}
						
						{!!	Form::close()	!!}
					</div>

					<div class="col-md-12">
						{!!	Html::linkRoute('posts.index', '<< See All Posts', [], array('class' => 'btn btn-primary btn-block'))	!!}
					</div>
				</div>

			</div>
		</div>
	</div>
@endsection

