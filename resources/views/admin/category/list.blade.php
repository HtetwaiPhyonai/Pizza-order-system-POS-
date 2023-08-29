@extends('layouts.master')

@section('content')
    <h1>This is Category page</h1>

    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>
@endsection
