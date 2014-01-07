@extends('layouts.scaffold')

@section('main')

<h1>Show Allocation</h1>

<p>{{ link_to_route('allocations.index', 'Return to all allocations') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Date</th>
				<th>Hours</th>
				<th>Percent</th>
				<th>Allocation</th>
				<th>Resource_id</th>
				<th>Project_id</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $allocation->date }}}</td>
					<td>{{{ $allocation->hours }}}</td>
					<td>{{{ $allocation->percent }}}</td>
					<td>{{{ $allocation->allocation }}}</td>
					<td>{{{ $allocation->resource_id }}}</td>
					<td>{{{ $allocation->project_id }}}</td>
                    <td>{{ link_to_route('allocations.edit', 'Edit', array($allocation->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('allocations.destroy', $allocation->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
