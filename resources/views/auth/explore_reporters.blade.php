@extends('layouts.app')

@section('title', 'Explore Reporters')

@section('explore_reporters', 'explore_reporters')

@section('content')
    <div class="container-fluid">
        <!-- Display Validation Errors -->
        @include('common.errors')

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <form class="navbar-form navbar-right">
                    <input type="text" class="form-control" name="user_id" placeholder="User ID"
                           value="{{ ($userId != '%%') ? $userId : '' }}">

                    <select class="form-control" name="occupation">
                        @foreach ($occupationList as $occupationEntry)
                            @if ($occupation == '%%' or strcmp($occupation, $occupationEntry))
                                {!! '<option value="'.$occupationEntry.'">'.$occupationEntry.'</option>' !!}
                            @else
                                {!! '<option value="'.$occupationEntry.'" selected>'.$occupationEntry.'</option>' !!}
                            @endif
                        @endforeach
                    </select>

                    <button type="submit" class="btn btn-success">
							<span class="glyphicon glyphicon-search">
							</span> Search
                    </button>

                </form>
                <div class="navbar-header">
                    <a class="navbar-brand">
                        Total Reporters : {{ count($reporters) }}
                    </a>
                </div>
            </div>
        </nav>


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
                        National_ID_Number
                    </th>
                    <th>
                        Date_Of_Birth
                    </th>
                    <th>
                        Occupation
                    </th>
                    <th>
                        Total_Reports
                    </th>
                    <th>
                        Action
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach ($reporters as $reporter)
                    <tr>
                        <td>{{ $reporter->id }}</td>
                        <td>{{ $reporter->full_name }}</td>
                        <td>{{ $reporter->contact_number }}</td>
                        <td>{{ $reporter->email_address }}</td>
                        <td>{{ $reporter->national_id_number }}</td>
                        <td>{{ $reporter->date_of_birth }}</td>
                        <td>{{ $reporter->occupation }}</td>
                        <td>{{ $reporter->total_reports }}</td>
                        <td>
                            <a class="btn btn-success"
                               href="{{ url('/home/'.$reporter->id) }}">Full View</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection