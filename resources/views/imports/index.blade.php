@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Imports</h1>
    <form action="{{ route('imports.upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="file">Upload File</label>
            <input type="file" name="file" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Upload</button>
    </form>
    <hr>

    <h2>Imported Files</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>File Name</th>
                <th>Status</th>
                <th>Error Details</th>
            </tr>
        </thead>
        <tbody>
            @foreach($imports as $import)
            <tr>
                <td>{{ $import->file_name }}</td>
                <td>{{ $import->status }}</td>
                <td>
                    @if($import->error_details)
                        <ul>
                            @foreach($import->error_details as $error)
                                <li>Row: {{ $error['row'] }}, Error: {{ $error['error'] }}</li>
                            @endforeach
                        </ul>
                    @else
                        N/A
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection