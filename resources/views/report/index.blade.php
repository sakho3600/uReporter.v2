@extends('layouts.app')

@section('title', 'Explore Reports')

@section('explore_reports', 'explore_reports')

@section('content')

    <div class="container-fluid">
        <!-- Display Validation Errors -->
        @include('common.errors')

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <form class="navbar-form navbar-right">
                    <input type="date" class="form-control" name="from_date"
                           value="{{ ($fromDate != '%%') ? $fromDate : '' }}">
                    <input type="date" class="form-control" name="to_date" value="{{$toDate }}">

                    <select class="form-control" name="report_type" onchange="changeSubType(this.value)">
                        @foreach ($reportTypeList as $reportTypeEntry)
                            @if ($reportType == '%%' or strcmp($reportType, $reportTypeEntry))
                                {!! '<option value="'.$reportTypeEntry.'">'.$reportTypeEntry.'</option>' !!}
                            @else
                                {!! '<option value="'.$reportTypeEntry.'" selected>'.$reportTypeEntry.'</option>' !!}
                            @endif
                        @endforeach
                    </select>

                    <select class="form-control" name="report_subtype" id="report_subtype"> </select>
                    <input type="text" class="form-control" name="incident_location" placeholder="Incident Location"
                           value="{{ ($incidentLocation != '%%') ? $incidentLocation : '' }}">
                    <button type="submit" class="btn btn-success">
							<span class="glyphicon glyphicon-search">
							</span> Search
                    </button>

                </form>
                <div class="navbar-header">
                    <a class="navbar-brand">
                        Total Reports : {{ $total_reports }}
                    </a>
                </div>
            </div>
        </nav>

        @if(count($pending)>0)
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <strong>
                        Pending Reports : {{ count($pending) }}
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
                    Reviewed Reports : {{ count($reviewed) }}
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