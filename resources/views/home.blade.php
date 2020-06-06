@extends('layouts.app')

@section('content')

    @if (Auth::user()->type == 'Supervisor')

        <supervisor-menu :presencetable="{{$presencetab}}" :timetable="{{$timetable}}"></supervisor-menu>
    @endif
    @if (Auth::user()->type == 'Professor')
        Professor
    @endif
    @if (Auth::user()->type=='Admin')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        Admin
                    </div>
                </div>
            </div>

        </div>
    </div>
    @endif

@endsection
