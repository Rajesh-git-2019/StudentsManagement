@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-light bg-dark" >Welcome to Student Managemnet System !!!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <br>
                    <br>
                    <button class="navbar-brand btn-outline-success" href="{{ url('http://127.0.0.1:8000/') }}">
                        View Students Profile
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
