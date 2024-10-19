<x-layout>
    <x-navbar></x-navbar>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center py-5">
                    Contattaci!
                </h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">

                {{-- metodo get o post --}}
                {{-- Action è l'azione che sarà collegata ad una funzione --}}
                <form action="{{route('contact.submit')}}" method="POST" class="p-5 rounded shadow bg-secondary-subtle">
                    <h1>Contattaci</h1>

                    @csrf
                    {{-- cross site request forgery: falsificazione di richiesta da un sito all'altro,  protegge da una vulnerabilità dei siti dinamici --}}
                    <div class="mb-3">
                        {{-- name serve come identificativo backend --}}
                        <label for="name" class="form-label">Nome e Cognome</label>
                        <input type="text" id="name" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Il tuo messaggio:</label>
                        <textarea name="message" class="form-control" id="message" cols="30" rows="10"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-outline-success">Invia</button>
                    </div>
                </form>

            </div>

            <div class="col-12 col-md-6">
                {{-- metodo get o post --}}
                {{-- Action è l'azione che sarà collegata ad una funzione --}}
                <form action="{{route('contactAdmin.submit')}}" method="POST" class="p-5 rounded shadow bg-secondary-subtle">
                    <h1>Contatta un amministratore</h1>
                    @csrf
                    {{-- cross site request forgery: falsificazione di richiesta da un sito all'altro,  protegge da una vulnerabilità dei siti dinamici --}}
                    <div class="mb-3">
                        {{-- name serve come identificativo backend --}}
                        <label for="name" class="form-label">Nome e Cognome</label>
                        <input type="text" id="name" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Il tuo messaggio:</label>
                        <textarea name="message" class="form-control" id="message" cols="30" rows="10"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-outline-success">Invia</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
    <x-footer></x-footer>
</x-layout>
