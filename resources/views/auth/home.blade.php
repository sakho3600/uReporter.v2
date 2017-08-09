@extends('layouts.app')

@section('title', 'My Reports')

@section('home', 'home')

@section('content')

    <div class="container-fluid">
        @if(count($pending)>0)
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <strong>
                        Waiting For Review : {{ count($pending) }}
                    </strong>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>
                                    Date_And_Time
                                </th>
                                <th>
                                    Incident_Location
                                </th>
                                <th>
                                    Short_Description
                                </th>
                                <th>
                                    Report_SubType
                                </th>
                                <th>
                                    Total_Comments
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($pending as $report)
                                <tr>
                                    <td>{{ $report->date_and_time }}</td>
                                    <td>{{ $report->incident_location }}</td>
                                    <td>{{ $report->short_description }}</td>
                                    <td>{{ $report->report_subtype }}</td>
                                    <td>{{ $report->total_comments }}</td>
                                    <td>
                                        <a class="btn btn-warning"
                                           href="{{ url('/report/'.$report->id) }}">Full View</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endif
        <div class="panel panel-success">
            <div class="panel-heading">
                <strong>
                    Published Reports : {{ count($reviewed) }}
                </strong>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>
                                Date_And_Time
                            </th>
                            <th>
                                Incident_Location
                            </th>
                            <th>
                                Short_Description
                            </th>
                            <th>
                                Report_SubType
                            </th>
                            <th>
                                Total_Comments
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($reviewed as $report)
                            <tr>
                                <td>{{ $report->date_and_time }}</td>
                                <td>{{ $report->incident_location }}</td>
                                <td>{{ $report->short_description }}</td>
                                <td>{{ $report->report_subtype }}</td>
                                <td>{{ $report->total_comments }}</td>
                                <td>
                                    <a class="btn btn-success"
                                       href="{{ url('/report/'.$report->id) }}">Full View</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection