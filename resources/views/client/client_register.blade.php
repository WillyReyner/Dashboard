@extends('layouts.client')
@section('menu')
@extends('sidebar.dashboard')
@endsection
@section('content')
<div id="main">
    <style>
        .avatar.avatar-im .avatar-content,
        .avatar.avatar-xl img {
            width: 40px !important;
            height: 40px !important;
            font-size: 1rem !important;
        }

        .form-group[class*=has-icon-].has-icon-lefts .form-select {
            padding-left: 2rem;
        }
        .hidden {
            display: none;
        }
    </style>
    <div class="row h-100">
        <div class="col-lg-6 col-12">
            <div id="auth-left">
                <!-- <div class="auth-logo">
                        <a href="index.html"><img src="assets/images/logo/logo.png" alt="Logo"></a>
                    </div> -->
                <div class="mb-5">
                    <h1>Cadastro de Clientes</h1>
                </div>
                <!-- <p class="auth-subtitle mb-5">Input your data to register to our website.</p> -->
                <form method="POST" action="{{ route('client/add/save') }}" class="md-float-material">
                    @csrf
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="text" class="form-control form-control-lg @error('cpf') is-invalid @enderror" name="cpf" value="{{ old('cpf') }}" placeholder="CPF">
                        <div class="form-control-icon">
                            <i class="bi bi-emoji-smile"></i>
                        </div>
                        @error('cpf')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="text" class="form-control form-control-lg @error('register') is-invalid @enderror" name="register" value="{{ old('register') }}" placeholder="RG">
                        <div class="form-control-icon">
                            <i class="bi bi-emoji-wink"></i>
                        </div>
                        @error('register')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Nome Completo">
                        <div class="form-control-icon">
                            <i class="bi bi-emoji-laughing"></i>
                        </div>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    {{-- insert defaults --}}
                    <input type="hidden" class="status" name="status" value="Ativo">
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="text" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email">
                        <div class="form-control-icon">
                            <i class="bi bi-emoji-sunglasses"></i>
                        </div>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="text" name="phone-mask" id="phone-mask" value="{{ old('phone-mask') }}" class="phone form-control form-control-lg @error('phone-mask') is-invalid @enderror" placeholder="Telefone" />
                        <div class="form-control-icon">
                            <i class="bi bi-emoji-neutral"></i>
                        </div>
                    </div>
                    @error('phone-mask')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="text" id="celphone" value="{{ old('celphone') }}" class="form-control form-control-lg @error('celphone') is-invalid @enderror" data-mdb-input-mask="+55 (62) 99999-9999" placeholder="Celular" />
                        <div class="form-control-icon">
                            <i class="bi bi-emoji-smile-upside-down"></i>
                        </div>
                    </div>
                    @error('celphone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="text" class="form-control form-control-lg" name="cep" id="cep" placeholder="Digite o CEP">
                    </div>

                    <div class="form-group position-relative has-icon-left mb-4 hidden">
                        <input type="text" class="form-control form-control-lg @error('address') is-invalid @enderror" name="address" id="address" value="{{ old('address') }}" placeholder="Logradouro">
                        <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div>
                        @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group position-relative has-icon-left mb-4 hidden">
                        <input type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" id="bairro" value="{{ old('name') }}" placeholder="Bairro">
                        <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group position-relative has-icon-left mb-4 hidden">
                        <input type="text" class="form-control form-control-lg @error('city') is-invalid @enderror" name="city" id="city" value="{{ old('city') }}" placeholder="Cidade">
                        <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div>
                        @error('city')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group position-relative has-icon-left mb-4 hidden">
                        <input type="text" class="form-control form-control-lg @error('state') is-invalid @enderror" name="state" value="{{ old('state') }}" placeholder="Estado">
                        <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div>
                        @error('state')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>


                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-primary btn-lg shadow-lg mt-2">Salvar</button>
                    </div>
                </form>
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script>
                    $(document).ready(function() {
                        $('#cep').blur(function() {
                            const cep = $(this).val().replace(/\D/g, '');

                            if (cep.length === 8) {
                                $.get(`/consulta-cep/${cep}`, function(data) {
                                    if (data) {
                                        $('#cep').val(data.cep);
                                        $('#address').val(data.logradouro);
                                        $('#bairro').val(data.bairro);
                                        $('#city').val(data.localidade);
                                        $('#state').val(data.uf);

                                        // Mostrar os campos ocultos
                                        $('.form-group.hidden').show();
                                    }
                                });
                            }
                        });
                    });
                </script>


                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-primary btn-lg shadow-lg mt-2">Salvar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
