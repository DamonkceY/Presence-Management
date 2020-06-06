@extends('layouts.app')
@section('content')
<div class="container">
    @foreach ($classes as $item)
        {{ $item->number }}
    @endforeach
</div>
@endsection
