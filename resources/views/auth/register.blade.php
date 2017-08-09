@extends('layouts.app')

@section('title', 'Personal Information')

@section('register', 'register')

@section('content')
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <strong>
                    Personal Information
                </strong>
            </div>
            <div class="panel-body">
                <!-- Display Validation Errors -->
                @include('common.errors')
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                    {!! csrf_field() !!}

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Information
                        </div>
                        <div class="panel-body">
                            <div class="form-group{{ $errors->has('full_name') ? ' has-error' : '' }}">
                                <label class="col-sm-2 control-label">
                                    Full Name
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="full_name"
                                           value="{{ old('full_name') }}" placeholder="Firstname Lastname" required>

                                    @if ($errors->has('full_name'))
                                        <span class="help-block error">
                                                 <strong>{{ $errors->first('full_name') }}</strong>
                                                 </span>
                                    @endif

                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('contact_number') ? ' has-error' : '' }}">
                                <label class="col-sm-2 control-label">
                                    Contact Number
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="contact_number"
                                           placeholder="01XXXXXXXXX" maxlength="11" required
                                           value="{{ old('contact_number') }}">
                                    @if ($errors->has('contact_number'))
                                        <span class="help-block error">
                                                 <strong>{{ $errors->first('contact_number') }}</strong>
                                                 </span>
                                    @endif
                                </div>
                            </div>
                        </div>


                        <div class="panel-heading">
                            Sign In
                        </div>
                        <div class="panel-body">
                            <div class="form-group{{ $errors->has('email_address') ? ' has-error' : '' }}">
                                <label class="col-sm-2 control-label">
                                    Email Address
                                </label>
                                <div class="col-sm-10">

                                    <input type="email" class="form-control" name="email_address"
                                           placeholder="user.name@domain.com" value="{{ old('email_address') }}"
                                           required>

                                    @if ($errors->has('email_address'))
                                        <span class="help-block error">
                                        <strong>{{ $errors->first('email_address') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label class="col-sm-2 control-label">
                                    New Password
                                </label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="password" pattern=".{6,}"
                                           placeholder="minimum 6 characters" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block error">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <label class="col-sm-2 control-label">
                                    Confirm Password
                                </label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="password_confirmation" required
                                           pattern=".{6,}"
                                           placeholder="Retype your password">
                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block error">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="panel-heading">
                            National Identity
                        </div>
                        <div class="panel-body">
                            <div class="form-group{{ $errors->has('national_id_number') ? ' has-error' : '' }}">
                                <label class="col-sm-2 control-label">
                                    National ID Number
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="national_id_number"
                                           placeholder="Enter all 17 digits of your NID number"
                                           value="{{ old('national_id_number') }}" required maxlength="17">
										<span class="help-block error">
											Add birthyear in front of your NID, if it has 13 digits
										</span>
                                    @if ($errors->has('national_id_number'))
                                        <span class="help-block error">
                                        <strong>{{ $errors->first('national_id_number') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('date_of_birth') ? ' has-error' : '' }}">
                                <label class="col-sm-2 control-label">
                                    Date of Birth
                                </label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="date_of_birth"
                                           value="{{ old('date_of_birth') }}" required>
                                    @if ($errors->has('date_of_birth'))
                                        <span class="help-block error">
                                        <strong>{{ $errors->first('date_of_birth') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="panel-heading">
                            Additional Information
                        </div>
                        <div class="panel-body">
                            <div class="form-group{{ $errors->has('occupation') ? ' has-error' : '' }}">
                                <label class="col-sm-2 control-label">
                                    Occupation
                                </label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="occupation" required>
                                        <?php $occupationList = array("Please select your occupation", "Government Service",
                                                "Private Service", "Student", "Doctor", "Engineer", "Teacher",
                                                "Politician", "Lawyer", "Law and Order", "Businessman", "Journalist", "Banker",
                                                "Housewife", "Unemployed", "Worker", "Farmer", "Others");
                                        $occupation = old('occupation');
                                        ?>

                                        @foreach ($occupationList as $occupationEntry)
                                            @if (empty($occupation) or strcmp($occupation, $occupationEntry))
                                                {!! '<option value="'.$occupationEntry.'">'.$occupationEntry.'</option>' !!}
                                            @else
                                                {!! '<option value="'.$occupationEntry.'" selected>'.$occupationEntry.'</option>' !!}
                                            @endif
                                        @endforeach

                                    </select>
                                    @if ($errors->has('occupation'))
                                        <span class="help-block error">
                                <strong>{{ $errors->first('occupation') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('designation') ? ' has-error' : '' }}">
                                <label class="col-sm-2 control-label">
                                    Designation <br/> (optional)
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="designation"
                                           placeholder="Please enter your designation, if any"
                                           value="{{ old('designation') }}">
                                    @if ($errors->has('designation'))
                                        <span class="help-block error">
                                        <strong>{{ $errors->first('designation') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('contact_address') ? ' has-error' : '' }}">
                                <label class="col-sm-2 control-label">
                                    Contact Address <br/> (optional)
                                </label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="2"
                                              name="contact_address">{{ old('contact_address') }}</textarea>
                                    @if ($errors->has('contact_address'))
                                        <span class="help-block error">
                                        <strong>{{ $errors->first('contact_address') }}</strong>
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
                                    Register
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="panel-footer" align="center">
                <strong><em>
                        Already Registered?
                        <a href="{{ url('/login') }}">
                            Log In Now!
                        </a>
                    </em></strong>
            </div>
        </div>
    </div>
@endsection
