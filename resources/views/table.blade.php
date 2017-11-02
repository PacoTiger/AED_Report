<!-- resources/views/table.blade.php -->
@extends('welcome')

@section('content')
	@if (count($trackers) > 0)
		<table class="table table-dark table-striped table-bordered table-hover text-center">
		  <thead>
		  	<tr>
		      <th scope="row" colspan="5">9h to 10h</th>
		    </tr>
		    <tr>
		      <th scope="col">S</th>
		      <th scope="col">L</th>
		      <th scope="col">C</th>
		      <th scope="col">T</th>
		      <th scope="col">x</th>
		      <th scope="col">Speaker</th>
		    </tr>
		  </thead>

		 
		  <tbody>
		  	@foreach($at9s as $at9);
		    <tr>
		      <td>{{ $at9->segmentation }}</td>
		      <td>{{ $at9->lead }}</td>
		      <td>{{ $at9->call }}</td>
		      <td>{{ $at9->tMinute }}</td>
		      <td>{{ $at9->iSecondsAvg }}</td>
		      <td>{{ $at9->speaker }}</td>
		    </tr>
		    @endforeach
		  </tbody>
		 
		</table>
	@endif

@endsection
