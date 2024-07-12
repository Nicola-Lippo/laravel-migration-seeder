@extends('layouts.app')

@section('main')
    <main>
        <div class="container">
            <h1 class="text-center">TRAINS</h1>

            <div class="row">
                @foreach ($trains as $train)
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Train Code: {{ $train['train_code'] }}</h5>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><strong>Company: {{ $train['agency'] }}</strong></li>
                                <li class="list-group-item">Departure Station: {{ $train['departure_station'] }}</li>
                                <li class="list-group-item">Arrival Station: {{ $train['arrival_station'] }}</li>
                                <li class="list-group-item">Departure Time: {{ $train['departure_time'] }}</li>
                                <li class="list-group-item">Arrival Time: {{ $train['arrival_time'] }}</li>
                                <li class="list-group-item">Carriage: {{ $train['number_of_carriages'] }}</li>
                            </ul>
                            <div class="card-body">
                                <a href="" class="card-link">Dettagli</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>


        </div>
    </main>
@endsection
