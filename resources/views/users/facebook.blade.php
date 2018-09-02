@extends('layouts.app')

@section('content')
    <form action="/auth/facebook/register" method="post">
        {{ csrf_field() }}
        <div class="card">
            <div class="card-body">
                <img class='img-thumbnail' src="{{ $user->avatar }}" alt="">
            </div>
            <div class="card-body">

                <div class="form-group">
                    <label for="name" class="form-control-label">
                        Nombre
                    </label>
                    <input class="form-control" type="text" name="name" value="{{ $user->name }}" readonly>
                </div>

                <div class="form-group">
                    <label for="email" class="form-control-label">
                        Email
                    </label>
                    <input class="form-control" type="text" name="email" value="{{ $user->email }}" readonly>
                </div>

                <div class="form-group">
                    <label for="username" class="form-control-label">
                        Nombre de usuario
                    </label>
                    <input class="form-control" type="text" name="username" value="{{ old('username') }}">
                </div>

                <div class="card-footer">
                    <button class="btn btn-primary" type="submit">
                        Registrarse
                    </button>
                </div>

            </div>
        </div>
@endsection
