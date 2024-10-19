<x-layout>

    <x-navbar></x-navbar>

    @if (@session('mailSuccess'))
    <div class="alert alert-success text-center">
        {{session('mailSuccess')}}
    </div>

    {{-- @endsession --}}
    @endif
    <div class="container-fluid bg-black vh-100">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <h1 class="text-white text-center display-4">{{$title}}</h1>
            </div>
        </div>
    </div>
    <x-footer></x-footer>

</x-layout>
