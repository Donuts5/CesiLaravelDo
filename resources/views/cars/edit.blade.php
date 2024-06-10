@extends('layouts.app')

@section('content')
    <div>
        <h2>Edit car informations</h2>
        <form action="{{ route('cars.update', $car->id) }}" method="post">
            @csrf
            @method('PUT')
            <label for="brand">Brand :</label>
            <input type="text" id="brand" name="brand" required size="100" value="{{ $car->brand }}"/>
            <br>
            <label for="model">Model :</label>
            <input type="text" id="model" name="model" required size="100" value="{{ $car->model }}"/>
            <br>
            <label for="registration">Registration:</label>
            <input type="text" id="registration" name="registration" required size="100" value="{{ $car->registration }}"/>
            <br>
            <label for="serial_number">Serial number :</label>
            <input type="text" id="serial_number" name="serial_number" required size="100" value="{{ $car->serial_number }}"/>
            <br>
            <label for="fiscal_power">Fiscal power :</label>
            <input type="text" id="fiscal_power" name="fiscal_power" required size="100" value="{{ $car->fiscal_power }}"/>
            <br>
            <label for="circulation_date">Circulation date :</label>
            <input type="text" id="circulation_date" name="circulation_date" required size="100" value="{{ $car->circulation_date }}"/>
            <br>
            <button type="submit">Register</button>
        </form>
    </div>
@endsection
