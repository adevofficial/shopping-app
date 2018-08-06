@extends('layouts.main') 
@section('content')
<div class="container">

    <div class="card mt-5 mx-auto w-50">
        <div class="card-header">Dashboard</div>
        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif You are logged in!
        </div>
    </div>

</div>
@endsection