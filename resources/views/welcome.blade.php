<x-layout>

    <x-navbar></x-navbar>

    @if (@session('mailSuccess'))
    <div class="alert alert-success text-center">
        {{session('mailSuccess')}}
    </div>

    {{-- @endsession --}}
    @endif
    <div class="container-fluid bg-black">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <h1 class="text-white text-center display-4">{{$title}}</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($pokemons as $pokemon)
            <div class="col-12 col-md-3">
                <div class="card shadow rounded">
                    <h5 class="card-title">
                        {{$pokemon['name']}}
                    </h5>
                    <div class="text-center">
                        <a href="{{route('pokemon.detail',['name'=>$pokemon['name']])}}" class="btn btn-primary">Dettaglio</a>
                    </div>
                </div>

            </div>
            {{-- @dump($pokemon) --}}
            @endforeach
        </div>



    </div>

    {{-- @dump($pokemons) --}}
    <x-footer></x-footer>

</x-layout>
