@extends('layouts.scaffold')

@section('main')

<h1>Show Resource</h1>

<p>{{ link_to_route('resources.index', 'Return to all resources') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>First_name</th>
				<th>Last_name</th>
				<th>Email</th>
				<th>Profile</th>
				<th>Contract</th>
				<th>Active</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $resource->first_name }}}</td>
					<td>{{{ $resource->last_name }}}</td>
					<td>{{{ $resource->email }}}</td>
					<td>{{{ $resource->profile }}}</td>
					<td>{{{ $resource->contract }}}</td>
					<td>{{{ $resource->active }}}</td>
                    <td>{{ link_to_route('resources.edit', 'Edit', array($resource->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('resources.destroy', $resource->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
