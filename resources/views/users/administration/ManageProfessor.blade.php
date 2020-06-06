@extends('layouts.app')
@section('content')
<div class="container">
    <manage-professor :professor="{{$professor}}"></manage-professor>
</div>
@endsection
