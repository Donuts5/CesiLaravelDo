@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Add new car</h2>
        <form action="{{ route('cars.store') }}" method="post">
            @csrf
            @method('POST')
            <div class="row justify-content-center">
                <div class="col-md-6 mb-3">
                    <label for="brand" class="form-label">Brand :</label>
                    <input type="text" id="brand" name="brand" class="form-control" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="model" class="form-label">Model :</label>
                    <input type="text" id="model" name="model" class="form-control" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="registration" class="form-label">Registration:</label>
                    <input type="text" id="registration" name="registration" class="form-control" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="serial_number" class="form-label">Serial number :</label>
                    <input type="text" id="serial_number" name="serial_number" class="form-control" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="fiscal_power" class="form-label">Fiscal power :</label>
                    <input type="text" id="fiscal_power" name="fiscal_power" class="form-control" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="circulation_date" class="form-label">Circulation date :</label>
                    <input type="text" id="circulation_date" name="circulation_date" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <button type="submit" class="btn btn-primary">Add car</button>
                </div>
            </div>
        </form>
    </div>
@endsection
