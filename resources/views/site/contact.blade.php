@extends('layouts.site')

@section('content')
    <div class="container mt-4">
        <div class="row mb-5 pt-5 pb-5 p-2">
            <div class="col-md-5">
                {!! $contact->address !!}
            </div>
            <div class="col-md-7">
                <h3 class="mb-3">Envie uma Mensagem</h3>

                <x-alert />

                <form method="POST" action="{{ route('contact.send') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Nome completo"
                            value="{{ old('name') }}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="Melhor e-mail"
                            value="{{ old('email') }}">
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">Assunto</label>
                        <input type="text" name="subject" id="subject" class="form-control"
                            placeholder="Assunto da mensagem" value="{{ old('subject') }}">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Nome</label>
                        <textarea name="message" id="message" rows="3" class="form-control" placeholder="Mensagem"> {{ old('message') }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Enviar</button>

                </form>
            </div>
        </div>
    </div>
@endsection
