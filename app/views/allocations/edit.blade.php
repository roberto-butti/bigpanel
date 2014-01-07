@extends('layouts.scaffold')

@section('main')

<h1>Edit Allocation</h1>
{{ Form::model($allocation, array('method' => 'PATCH', 'route' => array('allocations.update', $allocation->id))) }}
	<ul>
        <li>
            {{ Form::label('date', 'Date:') }}
            {{ Form::text('date') }}
        </li>

        <li>
            {{ Form::label('hours', 'Hours:') }}
            {{ Form::input('number', 'hours') }}
        </li>

        <li>
            {{ Form::label('percent', 'Percent:') }}
            {{ Form::input('number', 'percent') }}
        </li>

        <li>
            {{ Form::label('allocation', 'Allocation:') }}
            {{ Form::input('number', 'allocation') }}
        </li>

        <li>
            {{ Form::label('resource_id', 'Resource_id:') }}
            {{ Form::input('number', 'resource_id') }}
        </li>

        <li>
            {{ Form::label('project_id', 'Project_id:') }}
            {{ Form::input('number', 'project_id') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('allocations.show', 'Cancel', $allocation->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
