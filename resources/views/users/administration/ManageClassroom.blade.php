@extends('layouts.app')
@section('content')
<div class="container">
    @foreach ($classes as $item)
        {{ $item->name }}
    @endforeach
</div>
@endsection
