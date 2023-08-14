@extends('layouts.master')

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


    </style>

    <div class="row h-100">
        <div class="col-lg-6 col-12">
            <div id="auth-left">
                <div class="mb-5">
                    <h1>Cadastro de Usuário</h1>
                </div>

                <form method="POST" action="{{ route('storeUser') }}" class="md-float-material">
                    @csrf
                    <div class="form-group position-relative has-icon-left mb-4">
                        <fieldset class="form-group">
                            <select class="form-select @error('role_name') is-invalid @enderror" name="role_name" id="role_name">
                                <option selected disabled>Selecione a função</option>
                                <option value="Admin">Admin</option>
                                <option value="Super Admin">Super Admin</option>
                                <option value="Normal User">Normal User</option>
                            </select>
                            <div class="form-control-icon">
                                <i class="bi bi-exclude"></i>
                            </div>
                        </fieldset>
                        @error('role_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Nome Completo">
                        <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    {{-- insert defaults --}}
                    <input type="hidden" class="image" name="image" value="photo_defaults.jpg">
                    <input type="hidden" class="status" name="status" value="Ativo">
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="text" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email">
                        <div class="form-control-icon">
                            <i class="bi bi-envelope"></i>
                        </div>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="text" class="form-control form-control-lg @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" placeholder="Telefone" />
                        <div class="form-control-icon">
                            <i class="bi bi-phone"></i>
                        </div>
                    </div>
                    @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="text" class="form-control form-control-lg" name="cep" id="cep" placeholder="Digite o CEP">
                    </div>

                    <div  class="form-group position-relative has-icon-left mb-4 hidden">
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

                    <div  class="form-group position-relative has-icon-left mb-4 hidden">
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

                    <div  class="form-group position-relative has-icon-left mb-4 hidden">
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

                    <div  class="form-group position-relative has-icon-left mb-4 hidden">
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

                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="text" class="form-control form-control-lg @error('user') is-invalid @enderror" name="user" value="{{ old('user') }}" placeholder="Usúario">
                        <div class="form-control-icon">
                            <i class="bi bi-envelope"></i>
                        </div>
                        @error('user')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" placeholder="Password">
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="password" class="form-control form-control-lg" name="password_confirmation" placeholder="Confirme Password">
                        <div class="form-control-icon">
                            <i class="bi bi-shield-check"></i>
                        </div>
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
            </div>
        </div>
    </div>
</div>
@endsection
