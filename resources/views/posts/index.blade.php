@extends('main')

@section('title', 'All Posts')

@section('content')

	<div class="row">
		<div class="col-md-10">
			<h1>All Posts</h1>
		</div>

		<div class="col-md-2">
			<a href="{{	route('posts.create')	}}" class="btn btn-lg btn-block btn-primary btn-spacing">Create New Posts</a>
		</div>
		
		<div class="col-md-12">
			<hr>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<th>#</th>
					<th>Title</th>
					<th>Body</th>
					<th>Created At</th>
					<th></th>
				</thead>

				<tbody>
					@foreach($posts as $post)
					<tr>
						<td>{{	$post->id	}}</td>
						<td>{{	$post->title	}}</td>
						<td>{{	substr($post->body, 0, 50)	}}{{	strlen($post->body) > 50 ? "...":""}}</td>
						<td>{{	date("M j, Y", strtotime($post->created_at))	}}</td>
						<td>
							{!!	Html::linkRoute('posts.show', 'View', array($post->id), array('class' => 'btn btn-default'))	!!}
							{!!	Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-default'))	!!}
						</td>
					</tr>							
					@endforeach
				</tbody>
			</table>
			<div class="text-center">
				{!!	$posts->links();	!!}
			</div>
		</div>
	</div>
@endsection