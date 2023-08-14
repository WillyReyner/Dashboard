@extends('layouts.download')
@section('menu')
@extends('sidebar.dashboard')
@endsection
@section('content')
<div class="container-fluid">
@include('index_action')
            <h1 class="mt-2 mb-3 text-center text-primary">Pagina de Relatórios</h1>
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col col-sm-9"></div>
                        <div class="col col-sm-3">
                            <input type="text" id="daterange_textbox" class="form-control" readonly />
                        </div>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item nav-link active">
                                <span>
                                    <td><a class="nav-link" href="index.php">Usuários Cadastrados</a></td>
                                </span>
                                <span>
                                    <td>Total: </td>
                                </span>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="exames.php">Exames por Plano de Saúde</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="relatorio_3.php">Estatísticas por Fonte</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="relatorio_4.php">Estatísticas por Data</a>
                            </li>
                        </ul>
                    </div>
                    <table class="table table-striped table-bordered" id="order_table">
                        <div class="card-body">
                            <!-- TESTE -->
                            <!-- <div class="pull-right col-sm-12">
                                <div class="row"> -->
                                <!-- table: forum_word -->
                                    <!-- <select name="graph_metric1" class="form-select form-select-sm" aria-label=".form-select-sm example" style="width: 170px;">
                                        <option value="posts">Número de posts</option>
                                        <option value="clicks">Visualizações</option>
                                        <option value="replys">Número de Respostas</option>
                                        <option value="flowers">Gostos</option>
                                        <option value="eggs">Número de críticas ruins</option>
                                        <option value="clicksPerPost">Visualizações por postagem</option>
                                        <option value="replysPerPost">Número de Respostas por post </option>
                                        <option value="flowersPerPost">Gostos por postagem</option>
                                    </select>

                                    <select name="graph_metric2" class="form-select form-select-sm" aria-label=".form-select-sm example" style="width: 170px">
                                        <option value="posts">Número de posts</option>
                                        <option value="clicks">Visualizações</option>
                                        <option value="replys">Número de Respostas</option>
                                        <option value="flowers">Gostos</option>
                                        <option value="eggs">Número de críticas ruins</option>
                                        <option value="clicksPerPost">Visualizações por postagem</option>
                                        <option value="replysPerPost">Número de Respostas por post </option>
                                        <option value="flowersPerPost">Gostos por postagem</option>
                                    </select>

                                    <select name="graph_units" class="form-select form-select-sm" aria-label=".form-select-sm example" style="width: 100px; display: none">
                                        <option value="days"> Diariamente</option>
                                        <option value="weeks"> Semanalmente</option>
                                        <option value="months">Mensalmente</option>
                                    </select>

                                    <btn class="btn btn-default btn-sm graph_download" rel="tooltip" title="Baixar Excel CSV" style="margin-left: 7px; background: #fff; border-width: 1px">
                                        <i class="fa fa-download"></i>
                                    </btn>
                                </div> -->
                            <!-- End Teste -->
                            <div class="table-responsive">
                                <div class="chart-container pie-chart">
                                    <canvas id="bar_chart" height="40"> </canvas>
                                </div>
                                <thead>
                                    <tr>
                                        <th>Usuarios</th>
                                        <th>Quantidades de Download</th>
                                        <th>Data Dia/Mes/Ano</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            <div>
                        </div>
                    </table>
                </div>
            </div>
        </div>
@endsection

