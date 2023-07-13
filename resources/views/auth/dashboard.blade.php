@extends('layouts.app')
@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Dashboard</div>
            <div class="card-body">
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    {{ $message }}
                </div>
                @else
                <div class="alert alert-success">
                    You are logged in!
                </div>
                @endif
                <form action="{{url('logout')}}" method="POST">
                    @csrf
                    <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Logout">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
