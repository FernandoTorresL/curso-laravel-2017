@extends('layouts.app')

@section('content')
    <h1>Seguidos por {{ $user->name }}</h1>

    <div class="row">
    @foreach($user->follows as $follow)
        <div class="col-6">
            <li>{{ $follow->username }}</li>
        </div>
    @endforeach
    </div>

@endsection
