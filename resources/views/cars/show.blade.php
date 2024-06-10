@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mb-3">
                <label for="brand" class="form-label">Brand</label>
                <input class="form-control" type="text" id="brand" value="{{ $car->brand }}" disabled readonly>
            </div>
            <div class="col-md-6 mb-3">
                <label for="model" class="form-label">Model</label>
                <input class="form-control" type="text" id="model" value="{{ $car->model }}" disabled readonly>
            </div>
            <div class="col-md-6 mb-3">
                <label for="registration" class="form-label">Registration</label>
                <input class="form-control" type="text" id="registration" value="{{ $car->registration }}" disabled readonly>
            </div>
            <div class="col-md-6 mb-3">
                <label for="serial_number" class="form-label">Serial number</label>
                <input class="form-control" type="text" id="serial_number" value="{{ $car->serial_number }}" disabled readonly>
            </div>
            <div class="col-md-6 mb-3">
                <label for="fiscal_power" class="form-label">Fiscal power</label>
                <input class="form-control" type="text" id="fiscal_power" value="{{ $car->fiscal_power }}" disabled readonly>
            </div>
            <div class="col-md-6 mb-3">
                <label for="circulation_date" class="form-label">Circulation date</label>
                <input class="form-control" type="text" id="circulation_date" value="{{ $car->circulation_date }}" disabled readonly>
            </div>
            <!-- Champ vide pour équilibrer la dernière ligne -->
            <div class="col-md-6 mb-3"></div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <a href="{{ route('cars.index') }}" class="btn btn-primary">Back to cars list</a>
            </div>
        </div>
    </div>
@endsection
