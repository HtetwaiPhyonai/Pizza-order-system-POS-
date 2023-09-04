@extends('layouts.master')
@section('title' , 'Category')
@section('content')
    <h1>Hello this is admin categorty page!</h1>

    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>
@endsection