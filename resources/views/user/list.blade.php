@extends('layouts.master')
@section('title' , 'user_list')
@section('content')
    <h1>Hello this is user category!</h1>

    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>
@endsection