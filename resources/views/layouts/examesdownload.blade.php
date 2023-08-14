<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Ralatorio</title>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>



</head>
<style>
.form-group[class*=has-icon-].has-icon-left .form-select {
    padding-left: 2.5rem;
}

body {
    font-family: 'Roboto Mono', monospace;
}

h1 {
    text-align: center;
    font-size: 35px;
    font-weight: 900;
}
</style>

<body>
    <div id="app">
        @yield('menu')
        {{-- content main page --}}
        @yield('content')
    </div>



    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::to('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="{{ URL::to('assets/vendors/iconly/bold.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/vendors/simple-datatables/style.css') }}">
    <link href="library/bootstrap-5/bootstrap.min.css" rel="stylesheet" />

    {{-- message toastr --}}
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:wght@200;300;400;500&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Kodchasan:ital,wght@0,300;1,200;1,300&family=Montserrat:ital,wght@0,200;0,300;0,800;1,200;1,300;1,400;1,500;1,600;1,700&family=Noto+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Parisienne&family=Playball&family=Poppins:ital,wght@0,100;0,200;0,300;0,800;0,900;1,100;1,200;1,300&family=Roboto+Condensed:wght@300;400;700&family=Roboto+Mono:ital,wght@0,100;1,100&family=Roboto:ital,wght@0,100;0,300;1,100&family=Rubik+Beastly&family=Teko:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />


    <!-- JQUERY -->
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="library/Chart.bundle.min.js"></script>
    <script src="library/jquery.dataTables.min.js"></script>
    <script src="library/dataTables.bootstrap5.min.js"></script>


    <script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {

        fetch_data();

        var sale_chart;

        function fetch_data(start_date = '', end_date = '') {
            var dataTable = $('#order_table').DataTable({
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    url: "exames_action.php",
                    type: "POST",
                    data: {
                        action: 'fetch',
                        start_date: start_date,
                        end_date: end_date
                    }
                },
                "drawCallback": function(settings) {
                    var sales_date = [];
                    var sale = [];

                    for (var count = 0; count < settings.aoData.length; count++) {
                        sales_date.push(settings.aoData[count]._aData[2]);
                        sale.push(parseFloat(settings.aoData[count]._aData[1]));
                    }

                    var chart_data = {
                        labels: sales_date,
                        datasets: [{
                            label: 'Usuarios',
                            backgroundColor: 'rgb(255, 205, 86)',
                            color: '#fff',
                            data: sale
                        }]
                    };

                    var group_chart3 = $('#bar_chart');

                    if (sale_chart) {
                        sale_chart.destroy();
                    }

                    sale_chart = new Chart(group_chart3, {
                        type: 'bar',
                        data: chart_data
                    });
                }
            });
        }

        $('#daterange_textbox').daterangepicker({
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
                    'month').endOf('month')]
            },
            format: 'YYYY-MM-DD'
        }, function(start, end) {

            $('#order_table').DataTable().destroy();

            fetch_data(start.format('YYYY-MM-DD'), end.format('YYYY-MM-DD'));

        });

    });
    </script>

</body>

</html>