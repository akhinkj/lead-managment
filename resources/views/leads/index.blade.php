@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Leads</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Mobile Number</th>
                <th>Street 1</th>
                <th>Street 2</th>
                <th>City</th>
                <th>State</th>
                <th>Country</th>
                <th>Lead Source</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($leads as $lead)
            <tr>
                <td>{{ $lead->first_name }}</td>
                <td>{{ $lead->last_name }}</td>
                <td>{{ $lead->email }}</td>
                <td>{{ $lead->mobile_number }}</td>
                <td>{{ $lead->street_1 }}</td>
                <td>{{ $lead->street_2 }}</td>
                <td>{{ $lead->city }}</td>
                <td>{{ $lead->state }}</td>
                <td>{{ $lead->country }}</td>
                <td>{{ $lead->lead_source }}</td>
                <td>{{ $lead->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection