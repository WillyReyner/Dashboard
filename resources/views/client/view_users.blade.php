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
    </style>

    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Dados do Usúario</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dados do Usúario</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Detalhes do Usúario</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal" action="{{ route('update') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $data[0]->id }}">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Nome Completo</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="text" class="form-control" placeholder="Name"
                                                    id="first-name-icon" name="fullName" value="{{ $data[0]->name }}">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <label>Foto</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-lefts">
                                            <div class="position-relative">
                                                <input type="file" class="form-control" placeholder="Name"
                                                    id="first-name-icon" name="image" />
                                                <div class="form-control-icon avatar avatar.avatar-im">
                                                    <img src="{{ URL::to('/images/'. $data[0]->avatar) }}">
                                                </div>
                                                <input type="hidden" name="hidden_image" value="{{ $data[0]->avatar }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <label>Endereço de Email</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="email" class="form-control" placeholder="Email"
                                                    id="first-name-icon" name="email" value="{{ $data[0]->email }}">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-envelope"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Telefone Celular</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="number" class="form-control" placeholder="Mobile"
                                                    name="phone_number" value="{{ $data[0]->phone_number }}">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-phone"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Status</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group position-relative has-icon-left mb-4">
                                            <fieldset class="form-group">
                                                <select class="form-select" name="status" id="status">
                                                    <option value="{{ $data[0]->status }}"
                                                        {{ ( $data[0]->status == $data[0]->status) ? 'selected' : ''}}>
                                                        {{ $data[0]->status }}
                                                    </option>
                                                    @foreach ($userStatus as $key => $value)
                                                    <option value="{{ $value->type_name }}"> {{ $value->type_name }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                                <div class="form-control-icon">
                                                    <i class="bi bi-bag-check"></i>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Função</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group position-relative has-icon-left mb-4">
                                            <fieldset class="form-group">
                                                <select class="form-select" name="role_name" id="role_name">
                                                    <option value="{{ $data[0]->role_name }}"
                                                        {{ ( $data[0]->role_name == $data[0]->role_name) ? 'selected' : ''}}>
                                                        {{ $data[0]->role_name }}
                                                    </option>
                                                    @foreach ($roleName as $key => $value)
                                                    <option value="{{ $value->role_type }}"> {{ $value->role_type }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                                <div class="form-control-icon">
                                                    <i class="bi bi-bag-check"></i>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Senha</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group position-relative has-icon-left mb-4">
                                            <input type="password" value="{{ $data[0]->password }}"
                                                class="form-control form-control-lg @error('new_password') is-invalid @enderror"
                                                name="new_password" placeholder="Coloque Nova Senha">
                                            <div class="form-control-icon">
                                                <i class="bi bi-shield-lock"></i>
                                            </div>
                                            @error('new_password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <label>Confirme a Senha</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group position-relative has-icon-left mb-4">
                                            <input type="password" class="form-control form-control-lg" value="{{ $data[0]->password }}"
                                                name="new_confirm_password" placeholder="Confirme Nova Senha">
                                            <div class="form-control-icon">
                                                <i class="bi bi-shield-lock"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Atualizar</button>
                                        <a href="{{ route('user_management') }}"
                                            class="btn btn-light-secondary me-1 mb-1">Retornar</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer clearfix mb-0 text-muted">
            <div class="float-start">
                <p>2019 &copy; WWCSistemas</p>
            </div>
            <div class="float-end">
                <p>Desenvolvido por <span class="text-danger"></span> Willy Reyner Carneiro</p>
            </div>
        </div>
    </footer>
</div>
@endsection
