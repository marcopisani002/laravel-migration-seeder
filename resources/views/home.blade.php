@extends('index')

@section('content')
    @foreach ($trains as $train)
        <div class="text-center">
            <div class="row mt-5 text-center mx-5 px-5">
                <div class="col-sm-6">
                    <div class="card bg-warning">
                        <div class="card-body">
                            <h5 class="card-title text-success fw-bold">{{ $train->Azienda }}</h5>
                            <p class="card-text"><strong> Stazione di partenza: <br></strong>{{ $train->Stazione_di_partenza }}
                            </p>
                            <p class="card-text"><strong> Stazione di arrivo:</strong><br>{{ $train->Stazione_di_arrivo }}</p>

                            <p class="card-text"><strong>Orario di partenza:</strong> <br>{{ $train->Orario_di_partenza }}
                            </p>
                            <p class="card-text"><strong> Orario di arrivo:</strong> <br>{{ $train->Orario_di_arrivo }}</p>
                            <p class="card-text"><strong> Codice treno:</strong> <br>{{ $train->Codice_treno }}</p>
                            <p class="card-text"><strong>Numero carrozze:</strong><br>{{ $train->Numero_carrozze }}</p>
                            <p class="card-text"><strong> In orario:</strong><br>{{ $train->In_orario }}</p>
                            <p class="card-text"> <strong> cancellato:</strong><br>{{ $train->cancellato }}</p>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endforeach
@endsection
