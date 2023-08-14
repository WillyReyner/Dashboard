@extends('layouts.employee')
@section('menu')
@extends('sidebar.dashboard')
@endsection
@section('content')
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    <div class="page-heading">
        <h3>Profile Statistics</h3>
    </div>
    {{-- message --}}
    {!! Toastr::message() !!}
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-9">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Teste4</h4>
                            </div>
                            <div class="card-body">
                                {{$dataTable->table()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>
        {{$dataTable->scripts()}}
    </div>

    <!-- <footer>
        <div class="footer clearfix mb-0 text-muted">
            <div class="float-start">
                <p>2019 &copy; WWCSistemas</p>
            </div>
            <div class="float-end">
                <p>Desenvolvido por <span class="text-danger"></span> Willy Reyner Carneiro</p>
            </div>
        </div>
    </footer>-->
</div>
@endsection

