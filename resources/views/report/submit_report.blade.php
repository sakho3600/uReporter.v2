@extends('layouts.app')

@section('title', 'Submit Report')

@section('submit_report', 'submit_report')

@section('content')
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <strong>
                    Submit Report
                </strong>
            </div>
            <div class="panel-body">
                <!-- Display Validation Errors -->
                @include('common.errors')
                <form class="form-horizontal" role="form" enctype="multipart/form-data" method="POST"
                      action="{{ url('/report') }}">
                    {!! csrf_field() !!}


                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Type of Report
                        </div>
                        <div class="panel-body">
                            <div class="form-group{{ $errors->has('report_type') ? ' has-error' : '' }}">
                                <label class="col-sm-2 control-label">
                                    Report Type
                                </label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="report_type" onchange="changeSubType(this.value)"
                                            required>

                                        <?php $reportType = old('report_type'); ?>

                                        @foreach ($reportTypeList as $reportTypeEntry)
                                            @if (empty($reportType) or strcmp($reportType, $reportTypeEntry))
                                                {!! '<option value="'.$reportTypeEntry.'">'.$reportTypeEntry.'</option>' !!}
                                            @else
                                                {!! '<option value="'.$reportTypeEntry.'" selected>'.$reportTypeEntry.'</option>' !!}
                                            @endif
                                        @endforeach

                                    </select>
                                    @if ($errors->has('report_type'))
                                        <span class="help-block error">
                                <strong>{{ $errors->first('report_type') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('report_subtype') ? ' has-error' : '' }}">
                                <label class="col-sm-2 control-label">
                                    Report SubType
                                </label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="report_subtype" id="report_subtype" required>
                                    </select>

                                    <span class="help-block">
                                        Select report type first. Then select subtype.
                                    </span>

                                    @if ($errors->has('report_subtype'))
                                        <span class="help-block error">
                                <strong>{{ $errors->first('report_subtype') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="panel-heading">
                            Authority Information (optional)
                        </div>
                        <div class="panel-body">
                            <div class="form-group{{ $errors->has('accused_authority') ? ' has-error' : '' }}">
                                <label class="col-sm-2 control-label">
                                    Accused Authority
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="accused_authority"
                                           placeholder="Please enter accused authority name"
                                           value="{{ old('accused_authority') }}">
											<span class="help-block error">
												Accused Person/Personnel/Organization
											</span>
                                    @if ($errors->has('accused_authority'))
                                        <span class="help-block error">
                                        <strong>{{ $errors->first('accused_authority') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('responsible_authority') ? ' has-error' : '' }}">
                                <label class="col-sm-2 control-label">
                                    Responsible Authority
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="responsible_authority"
                                           placeholder="Please enter responsible authority name"
                                           value="{{ old('responsible_authority') }}">
											<span class="help-block">
												Responsible Person/Personnel/Organization
											</span>
                                    @if ($errors->has('responsible_authority'))
                                        <span class="help-block error">
                                        <strong>{{ $errors->first('responsible_authority') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="panel-heading">
                            Specific Data
                        </div>
                        <div class="panel-body">
                            <div class="form-group{{ $errors->has('date_and_time') ? ' has-error' : '' }}">
                                <label class="col-sm-2 control-label">
                                    Date and Time
                                </label>
                                <div class="col-sm-10">
                                    <input type="datetime-local" class="form-control" name="date_and_time"
                                           value="{{ old('date_and_time') }}" required>
                                    @if ($errors->has('date_and_time'))
                                        <span class="help-block error">
                                        <strong>{{ $errors->first('date_and_time') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('incident_location') ? ' has-error' : '' }}">
                                <label class="col-sm-2 control-label">
                                    Incident Location
                                </label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="2" name="incident_location"
                                              required>{{ old('incident_location') }}</textarea>
                                    @if ($errors->has('incident_location'))
                                        <span class="help-block error">
                                        <strong>{{ $errors->first('incident_location') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('short_description') ? ' has-error' : '' }}">
                                <label class="col-sm-2 control-label">
                                    Short Description
                                </label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="5" name="short_description"
                                              required>{{ old('short_description') }}</textarea>
                                <span class="help-block">
												Your information should be correct and concise
											</span>
                                    @if ($errors->has('short_description'))
                                        <span class="help-block error">
                                        <strong>{{ $errors->first('short_description') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('evidences') ? ' has-error' : '' }}">
                                <label class="col-sm-2 control-label">
                                    Evidences
                                </label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="evidences" accept=".zip" value="{{ old('evidences') }}" required>
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
                        </div>
                        <div class="panel-heading">
                            Reporter Information
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">
                                    Information
                                </label>
                                <div class="col-sm-10">
                                    <h4><span class="help-block">
                                            <p><span class="glyphicon glyphicon-minus"></span>
                                                You can report anonymously. But, your report will be treated as low
                                                credible report.</p>
                                            <p><span class="glyphicon glyphicon-minus"></span>
                                                We donot capture your personal information from
                                                login system.</p>
                                            <p><span class="glyphicon glyphicon-minus"></span>
                                                If you have not enough faith on us, just logout
                                                and submit report.
                                            </p>
                                        </span>
                                        <br>
                                        <label>
                                            <input type="checkbox" name="anonymous" value="true"> I want to stay anonymous
                                        </label></h4>
                                </div>
                            </div>
                        </div>

                        <div class="panel-heading">
                            Bots Detector
                        </div>
                        <div class="panel-body">
                            <div class="form-group{{ $errors->has('CaptchaCode') ? ' has-error' : '' }}">
                                <label class="col-sm-2 control-label">
                                    Captcha
                                </label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        {!! captcha_image_html('RegisterCaptcha') !!}
                                        <input type="text" class="form-control" id="CaptchaCode" name="CaptchaCode"
                                               placeholder="Enter the code" required>
                                    </div>
                                    @if ($errors->has('CaptchaCode'))
                                        <span class="help-block error">
                                         <strong>{{ $errors->first('CaptchaCode') }}</strong>
                                     </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10" align="right">
                            <div class="btn-group">
                                <button type="reset" class="btn btn-default">
                                    Reset
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="panel-footer text-right">
                <strong>
                    <em>
                        uReporter, An Open Public Reporting System
                    </em>
                </strong>
            </div>
        </div>
    </div>
@endsection

