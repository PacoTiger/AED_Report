<!-- resources/views/table.blade.php -->
@extends('welcome')

@section('content')
	
		<table class="table table-dark table-striped table-bordered table-hover text-center">
		  <thead>
		  	<tr>
		      <th scope="row" colspan="5">9h to 10h</th>
		      <th scope="row" colspan="5"> 10h</th>
		      <th scope="row" colspan="5"> 11h</th>
		      <th scope="row" colspan="5"> 12h</th>
		      <th scope="row" colspan="5"> 13h</th>
		      <th scope="row" colspan="5"> 14h</th>
		      <th scope="row" colspan="5"> 15h</th>
		      <th scope="row" colspan="5"> 16h</th>
		    </tr>
		    <tr>
		    {{-- from 9h --}}	
		      <th scope="col" class="bg-primary">S</th>
		      <th scope="col">L</th>
		      <th scope="col">C</th>
		      <th scope="col">T</th>
		      <th scope="col">x</th>
		    {{-- from 10h --}}
		      <th scope="col" class="bg-primary">S</th>
		      <th scope="col">L</th>
		      <th scope="col">C</th>
		      <th scope="col">T</th>
		      <th scope="col">x</th>
		    {{-- from 11h --}}
		      <th scope="col" class="bg-primary">S</th>
		      <th scope="col">L</th>
		      <th scope="col">C</th>
		      <th scope="col">T</th>
		      <th scope="col">x</th>
		      {{-- from 12h --}}
		      <th scope="col" class="bg-primary">S</th>
		      <th scope="col">L</th>
		      <th scope="col">C</th>
		      <th scope="col">T</th>
		      <th scope="col">x</th>

		      {{-- from 13h --}}
		      <th scope="col" class="bg-primary">S</th>
		      <th scope="col">L</th>
		      <th scope="col">C</th>
		      <th scope="col">T</th>
		      <th scope="col">x</th>

		      {{-- from 14h --}}
		      <th scope="col" class="bg-primary">S</th>
		      <th scope="col">L</th>
		      <th scope="col">C</th>
		      <th scope="col">T</th>
		      <th scope="col">x</th>

		      {{-- from 15h --}}
		      <th scope="col" class="bg-primary">S</th>
		      <th scope="col">L</th>
		      <th scope="col">C</th>
		      <th scope="col">T</th>
		      <th scope="col">x</th>

		      {{-- from 16h --}}
		      <th scope="col" class="bg-primary">S</th>
		      <th scope="col">L</th>
		      <th scope="col">C</th>
		      <th scope="col">T</th>
		      <th scope="col">x</th>


		      <th scope="col">Speaker</th>
		    </tr>		    
		  </thead>
		  	{{-- 	@for ($i = 0; $i <= count($spLists); $i++)
		  		 @if (! empty($spLists[$i]))
		  		
		  		<h3>Tenemos datos en la posicion marcada
		  		{{ $i }}
		  		</h3>
		  		@else
		  		<h3>
		  		No tenemos datos en esa posicion
		  		{{ $i }}
		  		</h3>
		  		@endif 
		  		@endfor --}}
		 
		  <tbody>
		  	@foreach ($trackers as $speaker => $values)
		  		
		  		
		  		
		  	

		  	<tr>
		  		
		  	 @foreach ($values as $detail)	
		 			  	
		  	  @if($detail->time == "09:00:00")
		  	  <td scope="row" class="bg-primary">{{ $detail->segmentation }}</td>
		      <td scope="col">{{ $detail->lead }}</td>
		      <td scope="col">{{ $detail->outcall }}</td>
		      <td scope="col">{{ $detail->tMinute }}</td>
		      <td scope="col">{{ $detail->iSecondsAvg }}</td>
		      @endif


		       @if($detail->time == "10:00:00")
		  	  <td scope="row" class="bg-primary">{{ $detail->segmentation }}</td>
		      <td scope="col">{{ $detail->lead }}</td>
		      <td scope="col">{{ $detail->outcall }}</td>
		      <td scope="col">{{ $detail->tMinute }}</td>
		      <td scope="col">{{ $detail->iSecondsAvg }}</td>
		      @endif

		       @if($detail->time == "11:00:00")
		  	  <td scope="row" class="bg-primary">{{ $detail->segmentation }}</td>
		      <td scope="col">{{ $detail->lead }}</td>
		      <td scope="col">{{ $detail->outcall }}</td>
		      <td scope="col">{{ $detail->tMinute }}</td>
		      <td scope="col">{{ $detail->iSecondsAvg }}</td>
		      @endif

		       @if($detail->time == "12:00:00")
		  	  <td scope="row" class="bg-primary">{{ $detail->segmentation }}</td>
		      <td scope="col">{{ $detail->lead }}</td>
		      <td scope="col">{{ $detail->outcall }}</td>
		      <td scope="col">{{ $detail->tMinute }}</td>
		      <td scope="col">{{ $detail->iSecondsAvg }}</td>
		      @endif

		      @if($detail->time == "13:00:00")
		  	  <td scope="row" class="bg-primary">{{ $detail->segmentation }}</td>
		      <td scope="col">{{ $detail->lead }}</td>
		      <td scope="col">{{ $detail->outcall }}</td>
		      <td scope="col">{{ $detail->tMinute }}</td>
		      <td scope="col">{{ $detail->iSecondsAvg }}</td>
		      @endif

		      @if($detail->time == "14:00:00")
		  	  <td scope="row" class="bg-primary">{{ $detail->segmentation }}</td>
		      <td scope="col">{{ $detail->lead }}</td>
		      <td scope="col">{{ $detail->outcall }}</td>
		      <td scope="col">{{ $detail->tMinute }}</td>
		      <td scope="col">{{ $detail->iSecondsAvg }}</td>
		      @endif

		      @if($detail->time == "15:00:00")
		  	  <td scope="row" class="bg-primary">{{ $detail->segmentation }}</td>
		      <td scope="col">{{ $detail->lead }}</td>
		      <td scope="col">{{ $detail->outcall }}</td>
		      <td scope="col">{{ $detail->tMinute }}</td>
		      <td scope="col">{{ $detail->iSecondsAvg }}</td>
		      @endif

		      @if($detail->time == "16:00:00")
		  	  <td scope="row" class="bg-primary">{{ $detail->segmentation }}</td>
		      <td scope="col">{{ $detail->lead }}</td>
		      <td scope="col">{{ $detail->outcall }}</td>
		      <td scope="col">{{ $detail->tMinute }}</td>
		      <td scope="col">{{ $detail->iSecondsAvg }}</td>
		      @endif


		  	 @endforeach
		  	  <td scope="col">{{ $speaker }}
		     </tr>
		     
		   @endforeach  

		
		  </tbody>
		  </table>

		  	{{--  @foreach ($trackers as $tracker)
				@foreach ($tracker as $detail)
				 	<h1>one loop</h1>
				 	{{ $detail->speaker }}
				 	{{ $detail->id }}
				 	{{ $detail->day}}
				 	{{ $detail->time }}
				 	{{ $detail->outcall }}
				 	@if ($detail->time == '10:00:00')
				 		<p>aqui salta el if de las 10</p>
				 		{{ $detail->speaker }}
				 		{{ $detail->time }}
				 		{{ $detail->outcall }}
				 		<p>se acaba el if de las 10:00:00</p>
				 	@endif

				 @endforeach
		 	@endforeach  --}}

		   {{-- @foreach($trackers as $tracker)
		   	
		    <tr>

		      <td scope="row">{{ $at9->segmentation }}</td>
		      <td scope="col">{{ $at9->lead }}</td>
		      <td scope="col">{{ $at9->call }}</td>
		      <td scope="col">{{ $at9->tMinute }}</td>
		      <td scope="col">{{ $at9->iSecondsAvg }}</td>
		      <td scope="col">{{ $at9->speaker }}</td>
	       
		    </tr>
		    
	       @endforeach --}}
		    
		   
		    
		 
		 
		
	

@endsection
