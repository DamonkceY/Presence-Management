@extends('layouts.app')
@section('content')
<div class="container">
    <time-table :classgroup="{{$classgroup}}" :classroom="{{$classroom}}" :timetable="{{$timetable}}" :professor="{{$professor}}"></time-table>
</div>
@endsection
