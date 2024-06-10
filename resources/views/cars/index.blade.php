@extends('layouts.app')

@section('customCss')
    <link rel="stylesheet" href="//cdn.datatables.net/2.0.7/css/dataTables.dataTables.min.css">
@endsection

@section('content')
    <div class="container">
        <a href="{{ route('cars.create') }}" class="btn btn-success">Add new car</a>
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
            <tr>
                <th>Brand</th>
                <th>Model</th>
                <th>Registration</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cars as $car)
                <tr>
                    <td>{{ $car->brand }}</td>
                    <td>{{ $car->model }}</td>
                    <td>{{ $car->registration }}</td>
                    <td>
                        <a href="{{ route('cars.show', $car->id) }}" class="btn btn-info">View car</a>
                        <a href="{{ route('cars.edit', $car->id) }}" class="btn btn-warning">Edit car</a>
                        <form action="{{ route('cars.destroy', $car->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete car</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
@if(session('success'))
    <div id="success-alert" class="alert alert-success">
        {{session('success')}}
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var alert = document.getElementById('success-alert');
            setTimeout(function() {
                alert.style.display = 'none';
            }, 2000);
        });
    </script>
@endif
@section('customJs')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
            crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.bootstrap5.js"></script>
    <script type="text/javascript">
        new DataTable('#example');
    </script>
@endsection
