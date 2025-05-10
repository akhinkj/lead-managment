@extends('layouts.app')

@section('content')
<div class="container">
    <h1>User Profile</h1>
    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <td>{{ Auth::user()->name }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ Auth::user()->email }}</td>
        </tr>
        <tr>
            <th>Joined At</th>
            <td>{{ Auth::user()->created_at }}</td>
        </tr>
    </table>
</div>
@endsection