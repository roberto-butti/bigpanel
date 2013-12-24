@extends('layouts.scaffold')

@section('main')

<h1>Edit Resource</h1>
{{ Form::model($resource, array('method' => 'PATCH', 'route' => array('resources.update', $resource->id))) }}
	<ul>
        <li>
            {{ Form::label('first_name', 'First_name:') }}
            {{ Form::text('first_name') }}
        </li>

        <li>
            {{ Form::label('last_name', 'Last_name:') }}
            {{ Form::text('last_name') }}
        </li>

        <li>
            {{ Form::label('email', 'Email:') }}
            {{ Form::text('email') }}
        </li>

        <li>
            {{ Form::label('profile', 'Profile:') }}
            {{ Form::text('profile') }}
        </li>

        <li>
            {{ Form::label('contract', 'Contract:') }}
            {{ Form::text('contract') }}
        </li>

        <li>
            {{ Form::label('active', 'Active:') }}
            {{ Form::checkbox('active') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('resources.show', 'Cancel', $resource->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
