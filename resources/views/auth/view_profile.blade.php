@extends('layouts.app')

@section('title', 'My Profile')

@section('view_profile', 'view_profile')

@section('content')
    <div class="container">
        <form class="form-horizontal" role="form">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <strong>
                        Personal Information
                    </strong>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-2 text-right">
                            Full Name :
                        </label>
                        <label class="col-sm-4">
                            {{ $user_data[0]->full_name }}
                        </label>
                        <label class="col-sm-2 text-right">
                            Reporter ID :
                        </label>
                        <label class="col-sm-4">
                            {{ $user_data[0]->id }}
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 text-right">
                            Contact Number :
                        </label>
                        <label class="col-sm-4">
                            {{ $user_data[0]->contact_number }}
                        </label>
                        <label class="col-sm-2 text-right">
                            Email Address :
                        </label>
                        <label class="col-sm-4">
                            {{ $user_data[0]->email_address }}
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 text-right">
                            National Id Number :
                        </label>
                        <label class="col-sm-4">
                            {{ $user_data[0]->national_id_number }}
                        </label>
                        <label class="col-sm-2 text-right">
                            Date Of Birth :
                        </label>
                        <label class="col-sm-4">
                            {{ $user_data[0]->date_of_birth }}
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 text-right">
                            Occupation :
                        </label>
                        <label class="col-sm-4">
                            {{ $user_data[0]->occupation }}
                        </label>
                        <label class="col-sm-2 text-right">
                            Designation :
                        </label>
                        <label class="col-sm-4">
                            {{ !empty($user_data[0]->designation) ? $user_data[0]->designation : "N/A" }}
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 text-right">
                            Contact Address :
                        </label>
                        <label class="col-sm-10">
                            {{ !empty($user_data[0]->contact_address) ? $user_data[0]->contact_address : "N/A" }}
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 text-right">
                            Submitted Reports :
                        </label>
                        <label class="col-sm-4">
                            {{ $submitted_reports[0]->submitted_reports }}
                        </label>
                        <label class="col-sm-2 text-right">
                            Personal Rating :
                        </label>
                        <label class="col-sm-4">
                            {{ $user_data[0]->personal_rating }}
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 text-right">
                            Registration Time :
                        </label>
                        <label class="col-sm-4">
                            {{ $user_data[0]->created_at }}
                        </label>
                        <label class="col-sm-2 text-right">
                            Update Time :
                        </label>
                        <label class="col-sm-4">
                            {{ $user_data[0]->updated_at }}
                        </label>
                    </div>
                </div>
                <div class="panel-footer text-right">
                    <strong>
                        <em>
                            uReporter, An Open Public Reporting System
                        </em>
                    </strong>
                </div>
            </div>
        </form>
    </div>
@endsection