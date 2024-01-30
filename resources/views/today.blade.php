@extends('templates.template')

@include('subs.header')

@section('title')
    FS - Treni di oggi
@endsection

@section('main')
    <h4 class="text-center pb-4">Questi sono tutti i treni in partenza oggi, se invece vuoi vedere tutti i treni disponibili,
        clicca
        sotto</h4>
    <a href="{{ route('home') }}"><button class="btn btn-danger text-uppercase">Tutti i treni disponibili</button></a>
    <ul class="row">
        @foreach ($trains as $train)
            <li class=" col-12 col-md-6 col-xl-4 py-4">
                <div class="card p-3">
                    <h3 class="nome-azienda text-uppercase">{{ $train['azienda'] }} </h3>farà partire il treno
                    <h5 class="codice-treno pt-2">{{ $train['codice_treno'] }}</h5>

                    <span class="data mb-2">
                        @if ($train['data_partenza'] === now()->toDateString())
                            oggi
                        @else
                            in data {{ \Carbon\Carbon::parse($train['data_partenza'])->format('d M Y') }}
                        @endif
                        alle ore {{ \Carbon\Carbon::parse($train['orario_partenza'])->format('H:i') }}
                    </span>

                    @if ($train['in_orario'] === 0)
                        <h5 class="ritardo py-2 mt-2">Il treno è IN RITARDO</h5>
                    @endif

                    @if ($train['cancellato'] === 1)
                        <h5 class="cancellato py-2 mt-2">Il treno è stato CANCELLATO</h5>
                    @endif
                </div>
            </li>
        @endforeach
    </ul>
@endsection


@include('subs.footer')
