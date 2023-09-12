@extends('layouts.main')

@section('page-title', 'Laravel Migration Seeder')

@section('content')
    <h1 class="text-center">
        Trains
    </h1>
    <div class="container">
        <div class="row">
           @foreach ($trains as $item)
               <div class="card mb-5">
                    <div class="card-body">
                        <h2>
                            Company : {{ $item->company }}
                        </h2>
                        <h3>
                            Departure Station: {{ $item->departure_station }} --- Arrival Station: {{ $item->arrival_station }}
                        </h3>
                        <h4>
                            Departure Time: {{ $item->Departure_time }} --- Arrival Time: {{ $item->arrival_time }}
                        </h4>
                        <h4>
                            Train Type: {{ $item->train_type }}
                        </h4>
                        <h4 class="d-inline-block">
                            In Time:    
                            @php
                                if($item->in_time == true) {
                                    echo '<h4 class="text-success d-inline-block ms-2">yes</h4>';
                                }
                                else {
                                    echo 'no';
                                }   
                            @endphp
                        </h4>
                        <h4>
                            Deleted:
                            @php
                                if($item->deleted == false) {
                                    echo 'no';
                                }
                                else {
                                    echo 'yes';
                                }   
                            @endphp
                        </h4>
                    </div>
               </div>
           @endforeach
        </div>
    </div>
@endsection