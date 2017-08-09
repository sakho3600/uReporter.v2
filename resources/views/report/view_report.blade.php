@extends('layouts.app')

@section('title', 'View Report')

@section('view_reports', 'view_reports')

@section('content')
    <div class="container">
        <!-- Display Validation Errors -->
        @include('common.errors')
        <form class="form-horizontal" role="form" enctype="multipart/form-data" method="POST"
              action="{{ url('/opinion/'.$report_data[0]->id) }}">
            {!! csrf_field() !!}

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <strong>
                        Detail Report
                    </strong>
                </div>
                <div class="panel-body">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong>
                                Report ID : {{$report_data[0]->id}}
                            </strong>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="col-sm-2 text-right">
                                    Report Type :
                                </label>
                                <label class="col-sm-4">
                                    {{ $report_data[0]->report_type }}
                                </label>
                                <label class="col-sm-2 text-right">
                                    Report SubType :
                                </label>
                                <label class="col-sm-4">
                                    {{ $report_data[0]->report_subtype }}
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 text-right">
                                    Accused :
                                </label>
                                <label class="col-sm-4">
                                    {{ !empty($report_data[0]->accused) ? $report_data[0]->accused : "N/A" }}
                                </label>
                                <label class="col-sm-2 text-right">
                                    Responsible :
                                </label>
                                <label class="col-sm-4">
                                    {{ !empty($report_data[0]->responsible) ? $report_data[0]->responsible : "N/A" }}
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 text-right">
                                    Incident Location :
                                </label>
                                <label class="col-sm-4">
                                    {{ $report_data[0]->incident_location }}
                                </label>
                                <label class="col-sm-2 text-right">
                                    Date and Time :
                                </label>
                                <label class="col-sm-4">
                                    {{ $report_data[0]->date_and_time }}
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 text-right">
                                    Short Description :
                                </label>
                                <label class="col-sm-10">
                                    {{ $report_data[0]->short_description }}
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 text-right">
                                    Evidences :
                                </label>
                                <label class="col-sm-4">
                                    <a href=" {{url('download/'.$report_data[0]->id) }}">{{$report_data[0]->evidences}}</a>
                                </label>
                                <label class="col-sm-2 text-right">
                                    Submission Time :
                                </label>
                                <label class="col-sm-4">
                                    {{ $report_data[0]->created_at }}
                                </label>
                            </div>
                        </div>
                        <div class="panel-heading">
                            <strong>
                                Total Updates : {{ count($updates) }}
                            </strong>
                        </div>
                        <div class="panel-body">
                            @foreach ($updates as $row)
                                <div class="form-group">
                                    <label class="col-sm-2 text-right">
                                        Reporter :
                                    </label>
                                    <label class="col-sm-10">
                                        {{ $row->public_opinion }}
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 text-right">
                                        Evidences :
                                    </label>
                                    <label class="col-sm-4">
                                        @if (empty($row->evidences))
                                            {{ "N/A" }}
                                        @else
                                            <a href=" {{url('download_extra/'.$row->id) }}">{{$row->evidences}}</a>
                                        @endif
                                    </label>
                                    <label class="col-sm-2 text-right">
                                        Submission Time :
                                    </label>
                                    <label class="col-sm-4">
                                        {{ $row->created_at }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                        <div class="panel-heading">
                            <strong>
                                Total Reviews : {{ count($reviews) }}
                            </strong>
                        </div>
                        <div class="panel-body">
                            @foreach ($reviews as $row)
                                <div class="form-group">
                                    <label class="col-sm-2 text-right">
                                        Reviewer :
                                    </label>
                                    <label class="col-sm-10">
                                        {{ $row->public_opinion }}
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 text-right">
                                        Evidences :
                                    </label>
                                    <label class="col-sm-4">
                                        @if (empty($row->evidences))
                                            {{ "N/A" }}
                                        @else
                                            <a href=" {{url('download_extra/'.$row->id) }}">{{$row->evidences}}</a>
                                        @endif
                                    </label>
                                    <label class="col-sm-2 text-right">
                                        Submission Time :
                                    </label>
                                    <label class="col-sm-4">
                                        {{ $row->created_at }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                        <div class="panel-footer text-right">
                            <strong>
                                Reporter ID
                                :{{empty($report_data[0]->reporter_id) ? 'N/A' : $report_data[0]->reporter_id}}
                            </strong>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong>
                                Total Comments : {{ count($comments) }}
                            </strong>
                        </div>
                        <div class="panel-body">
                            @foreach ($comments as $row)
                                <div class="form-group">
                                    <label class="col-sm-2 text-right">
                                        Reporter ID {{empty($row->reporter_id) ? 'N/A' : $row->reporter_id}} :
                                    </label>
                                    <label class="col-sm-10">
                                        {{ $row->public_opinion }}
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 text-right">
                                        Evidences :
                                    </label>
                                    <label class="col-sm-4">
                                        @if (empty($row->evidences))
                                            {{ "N/A" }}
                                        @else
                                            <a href=" {{url('download_extra/'.$row->id) }}">{{$row->evidences}}</a>
                                        @endif
                                    </label>
                                    <label class="col-sm-2 text-right">
                                        Submission Time :
                                    </label>
                                    <label class="col-sm-4">
                                        {{ $row->created_at }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-success">
                <div class="panel-heading">
                    <strong>
                        Public Opinion
                    </strong>
                </div>
                <div class="panel-body">
                    <div class="form-group{{ $errors->has('my_opinion') ? ' has-error' : '' }}">
                        <label class="col-sm-2 control-label">
                            My Opinion
                        </label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="5" name="my_opinion"
                                      required>{{ old('my_opinion') }}</textarea>
                            <span class="help-block">
									Your information should be correct and concise
								</span>
                            @if ($errors->has('my_opinion'))
                                <span class="help-block error">
                                        <strong>{{ $errors->first('my_opinion') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('evidences') ? ' has-error' : '' }}">
                        <label class="col-sm-2 control-label">
                            Evidences (optional)
                        </label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" name="evidences" accept=".zip"
                                   value="{{ old('evidences') }}">
											<span class="help-block">
												Attachable documents/pictures/audio/videos (.zip). Maxsize is 16 MB.
											</span>
                            @if ($errors->has('evidences'))
                                <span class="help-block error">
                                        <strong>{{ $errors->first('evidences') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">
                            Information
                        </label>
                        <div class="col-sm-10">
                            <span class="help-block">
                                            <p><span class="glyphicon glyphicon-minus"></span>
                                                You can supplement report anonymously. But, your supplement will be treated as low
                                                credible supplement.</p>
                                            <p><span class="glyphicon glyphicon-minus"></span>
                                                We donot capture your personal information from
                                                login system.</p>
                                            <p><span class="glyphicon glyphicon-minus"></span>
                                                If you have not enough faith on us, just logout
                                                and supplement report.
                                            </p>
                                        </span>
                            <br>
                            <label>
                                <input type="checkbox" name="anonymous" value="true"> I want to stay
                                anonymous
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10" align="right">
                            <div class="btn-group">
                                <a class="btn btn-default" href="{{url('/report')}}">
                                    Back
                                </a>
                                <button type="submit" class="btn btn-success">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection