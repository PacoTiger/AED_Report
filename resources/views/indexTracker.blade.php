<!-- resources/views/index.blade.php -->
@extends('welcome')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <h1>Test</h1>

            </div>

            <!-- Current Tasks -->
            @if (count($trackers) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Current Tasks
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">

                            <!-- Table Headings -->
                            <thead>
                            <th>Day</th>
                            <th>Time</th>
                            <th>Name</th>
                            <th>Campaing</th>
                            <th>Leads</th>
                            <th>Deals</th>
                            <th>Calls</th>
                            <th>Phone Time</th>
                            <th>Seconds per call</th>
                            </thead>

                            <!-- Table Body -->
                            <tbody>
                            @foreach ($trackers as $tracker)
                                <tr>
                                    <!-- Displaying Day -->
                                    <td class="table-text">
                                        <div>{{ $tracker->day }}</div>
                                    </td>

                                    <!-- Displaying Time -->
                                    <td class="table-text">
                                        <div>{{ $tracker->time }}</div>
                                    </td>

                                    <!-- Displaying Speaker -->
                                    <td class="table-text">
                                        <div>{{ $tracker->speaker }}</div>
                                    </td>

                                    <!-- Displaying Campaing -->
                                    <td class="table-text">
                                        <div>{{ $tracker->segmentation }}</div>
                                    </td>

                                    <!-- Displaying Leads -->
                                    <td class="table-text">
                                        <div>{{ $tracker->lead }}</div>
                                    </td>

                                    <!-- Displaying Deals -->
                                    <td class="table-text">
                                        <div>{{ $tracker->deal }}</div>
                                    </td>

                                    <!-- Displaying Calls -->
                                    <td class="table-text">
                                        <div>{{ $tracker->call }}</div>
                                    </td>

                                    <!-- Displaying Phone Time -->
                                    <td class="table-text">
                                        <div>{{ $tracker->tMinute }}</div>
                                    </td>

                                    <!-- Displaying Average -->
                                    <td class="table-text">
                                        <div>{{ $tracker->iSecondsAvg }}</div>
                                    </td>
                                </tr>

                            @endforeach
                            </tbody>


                        </table>
                
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection

