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
                <h1 class="text-white text-center display-4">Informazioni su: <span class="fst-italic">{{$pokemon['name']}}</span></h1>
            </div>
        </div>
        <div class="row justify-content-center">
            {{-- @dd($pokemon) --}}

            <div class="col-12 col-md-4">
                <img src="{{$pokemon['sprites']['front_default']}}" alt="">
                <img src="{{$pokemon['sprites']['back_default']}}" alt="">

            </div>
            <div class="col-12 col-md-8 text-white">
                <h3>Nome: {{$pokemon['name']}}</h3>

            </div>

        </div>



    </div>

    {{-- @dump($pokemons) --}}
    <x-footer></x-footer>

</x-layout>
