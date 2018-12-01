@extends('layouts.app')

@section('content')
Test
@foreach ($conversations as $conversation)
    <li class="list-group-item">
        <a href="{{ url('/conversations/' . $conversation->id) }}">
            Conversation {{ $conversation->id }}
        </a>
    </li>
@endforeach

@endsection
