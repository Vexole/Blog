@extends('main')

@section('title', 'Edit Post');

@section('content')
	
		<div class="row">

		{!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT'])	!!}

		<div class="col-md-8">
			
			{{	Form::label('title', 'Title:')}}
			{{	Form::text('title', null, ["class" => 'form-control'])}}
			<br>
			{{	Form::label('slug', 'Slug:')}}
			{{	Form::text('slug', null, ["class" => 'form-control'])}}
			
			<br>
			{{	Form::label('body', 'Body:')	}}
			{{ Form::textarea('body', null, ["class" => 'form-control'])}}
			
		</div>

		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<dt>Created At:</dt>
					<dd>{{	date('M j, Y h:i a', strtotime($post->created_at))	}}</dd>
				</dl>

				<dl class="dl-horizontal">
					<dt>Updated At:</dt> 
					<dd>{{	date('M j, Y h:i a', strtotime($post->updated_at))	}}</dd>
				</dl>

				<hr>

				<div class="row">
					<div class="row-sm-6">
						{!!	Form::submit('Save Change', ['class' => 'btn btn-success btn-block'])	!!}
						<!--<a href="#" class="btn btn-success btn-block">Edit</a>-->
					</div>

					<div class="row-sm-6">
						{!!	Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block'))	!!}
						<!--<a href="#" class="btn btn-danger btn-block">Delete</a>-->
					</div>
				</div>

			</div>
		</div>

		{!!	Form::close()	!!}
	</div>

@endsection