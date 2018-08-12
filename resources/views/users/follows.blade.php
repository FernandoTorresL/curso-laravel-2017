@extends('layouts.app')

@section('content')
    <h1>{{ $user->name }}</h1>

    <div class="row">
        <ul class="list-unstyled">
        @foreach($follows as $follow)
            <div class="col-6">
                <li>{{ $follow->username }}</li>
            </div>
        @endforeach
        </ul>
    </div>

@endsection
