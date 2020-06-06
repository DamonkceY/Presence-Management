@extends('layouts.app')
@section('content')
<div class="container">
    <manage-supervisor :supervisor="{{$supervisor}}"></manage-supervisor>
</div>
@endsection

