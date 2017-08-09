@extends('layouts.app')

@section('title', 'Administration')

@section('admin', 'admin')

@section('content')
    <div class="container">
        <!-- Display Validation Errors -->
        @include('common.errors')

        <div class="panel panel-success">
            <div class="panel-heading">
                <strong>
                    Admin Panel : {{ count($admins) }}
                </strong>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>
                                User_ID
                            </th>
                            <th>
                                Full_Name
                            </th>
                            <th>
                                Contact_Number
                            </th>
                            <th>
                                Email_Address
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($admins as $row)
                            <tr>
                                <td>{{ $row->id }}</td>
                                <td>{{ $row->full_name }}</td>
                                <td>{{ $row->contact_number }}</td>
                                <td>{{ $row->email_address }}</td>
                                <td align="center">
                                    <form class="form-inline" action="{{ url('/admin/'.$row->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('PATCH') }}
                                        <a class="btn btn-success" href="{{ url('/home/'.$row->id) }}">View Admin</a>
                                        @if($row->id != \Auth::id())
                                            <input type="submit" class="btn btn-warning" name="delete_admin" value="Delete Admin">
                                        @endif
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="panel-heading">
                <strong>
                    Reviewer Panel : {{ count($reviewers) }}
                </strong>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>
                                User_ID
                            </th>
                            <th>
                                Full_Name
                            </th>
                            <th>
                                Contact_Number
                            </th>
                            <th>
                                Email_Address
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($reviewers as $row)
                            <tr>
                                <td>{{ $row->id }}</td>
                                <td>{{ $row->full_name }}</td>
                                <td>{{ $row->contact_number }}</td>
                                <td>{{ $row->email_address }}</td>
                                <td align="center">
                                    <form class="form-inline" action="{{ url('/admin/'.$row->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('PATCH') }}
                                        <input type="submit" class="btn btn-info" name="create_admin" value="Create Admin">
                                        <a class="btn btn-success" href="{{ url('/home/'.$row->id) }}">View Reviewer</a>
                                        <input type="submit" class="btn btn-warning" name="delete_reviewer" value="Delete Reviewer">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('reviewer_id') ? ' has-error' : '' }}">
                        <label class="col-sm-2 control-label">
                            User ID
                        </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="reviewer_id" value="{{ old('reviewer_id') }}"
                                   placeholder="Enter existing user id to make reviewer" required>
                            @if ($errors->has('reviewer_id'))
                                <span class="help-block error">
                                 <strong>{{ $errors->first('reviewer_id') }}</strong>
                                 </span>
                            @endif
                        </div>
                        <div class="col-sm-2" align="right">
                            <button type="submit" class="btn btn-info"> Create Reviewer</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="panel-heading">
                <strong>
                    Authority Panel : {{ count($authorities) }}
                </strong>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>
                                User_ID
                            </th>
                            <th>
                                Full_Name
                            </th>
                            <th>
                                Contact_Number
                            </th>
                            <th>
                                Email_Address
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($authorities as $row)
                            <tr>
                                <td>{{ $row->id }}</td>
                                <td>{{ $row->full_name }}</td>
                                <td>{{ $row->contact_number }}</td>
                                <td>{{ $row->email_address }}</td>
                                <td align="center">
                                    <form class="form-inline" action="{{ url('/admin/'.$row->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('PATCH') }}
                                        <a class="btn btn-success" href="{{ url('/home/'.$row->id) }}">View Authority</a>
                                        <input type="submit" class="btn btn-warning" name="delete_authority" value="Delete Authority">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>


                <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('authority_id') ? ' has-error' : '' }}">
                        <label class="col-sm-2 control-label">
                            User ID
                        </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="authority_id" value="{{ old('authority_id') }}"
                                   placeholder="Enter existing user id to make authority" required>
                            @if ($errors->has('authority_id'))
                                <span class="help-block error">
                                 <strong>{{ $errors->first('authority_id') }}</strong>
                                 </span>
                            @endif
                        </div>
                        <div class="col-sm-2" align="right">
                            <button type="submit" class="btn btn-info"> Create Authority</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="panel-heading">
                <strong>
                    Publisher Panel : {{ count($publishers) }}
                </strong>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>
                                User_ID
                            </th>
                            <th>
                                Full_Name
                            </th>
                            <th>
                                Contact_Number
                            </th>
                            <th>
                                Email_Address
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($publishers as $row)
                            <tr>
                                <td>{{ $row->id }}</td>
                                <td>{{ $row->full_name }}</td>
                                <td>{{ $row->contact_number }}</td>
                                <td>{{ $row->email_address }}</td>
                                <td align="center">
                                    <form class="form-inline" action="{{ url('/admin/'.$row->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('PATCH') }}
                                        <a class="btn btn-success" href="{{ url('/home/'.$row->id) }}">View Publisher</a>
                                        <input type="submit" class="btn btn-warning" name="delete_publisher" value="Delete Publisher">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>


                <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('publisher_id') ? ' has-error' : '' }}">
                        <label class="col-sm-2 control-label">
                            User ID
                        </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="publisher_id" value="{{ old('publisher_id') }}"
                                   placeholder="Enter existing user id to make publisher" required>
                            @if ($errors->has('publisher_id'))
                                <span class="help-block error">
                                 <strong>{{ $errors->first('publisher_id') }}</strong>
                                 </span>
                            @endif
                        </div>
                        <div class="col-sm-2" align="right">
                            <button type="submit" class="btn btn-info"> Create Publisher</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection