<?php

//index.php
include ('index_action.php');

?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="library/bootstrap-5/bootstrap.min.css" rel="stylesheet" />
        <link href="library/dataTables.bootstrap5.min.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

        <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
        <script src="library/bootstrap-5/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
        <script src="library/Chart.bundle.min.js"></script>
        <script src="library/jquery.dataTables.min.js"></script>
        <script src="library/dataTables.bootstrap5.min.js"></script>
    </head>
    <body>
        <div class="container-fluid">
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
                                    <td>Total: <?php echo $total; ?></td>
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
    </body>
</html>

<script>

$(document).ready(function(){

    fetch_data();

    var sale_chart;

    function fetch_data(start_date = '', end_date = '')
    {
        var dataTable = $('#order_table').DataTable({
            "processing" : true,
            "serverSide" : true,
            "order" : [],
            "ajax" : {
                url:"index_action.php",
                type:"POST",
                data:{action:'fetch', start_date:start_date, end_date:end_date}
            },
            "drawCallback" : function(settings)
            {
                var sales_date = [];
                var sale = [];

                for(var count = 0; count < settings.aoData.length; count++)
                {
                    sales_date.push(settings.aoData[count]._aData[2]);
                    sale.push(parseFloat(settings.aoData[count]._aData[1]));
                }

                var chart_data = {
                    labels:sales_date,
                    datasets:[
                        {
                            label : 'Usuarios',
                            backgroundColor : 'rgb(255, 205, 86)',
                            color : '#fff',
                            data:sale
                        }
                    ]
                };

                var group_chart3 = $('#bar_chart');

                if(sale_chart)
                {
                    sale_chart.destroy();
                }

                sale_chart = new Chart(group_chart3, {
                    type:'bar',
                    data:chart_data
                });
            }
        });
    }

    $('#daterange_textbox').daterangepicker({
        ranges:{
            'Today' : [moment(), moment()],
            'Yesterday' : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
            'Last 30 Days' : [moment().subtract(29, 'days'), moment()],
            'This Month' : [moment().startOf('month'), moment().endOf('month')],
            'Last Month' : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        format : 'YYYY-MM-DD'
    }, function(start, end){

        $('#order_table').DataTable().destroy();

        fetch_data(start.format('YYYY-MM-DD'), end.format('YYYY-MM-DD'));

    });

});

</script>
