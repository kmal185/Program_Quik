@extends('layouts.template3')
@section('content')
<div class="row">
    <div class="col-xl-6">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-chart-bar me-1"></i>
                
                Promedio horas programadas por proceso
            </div>
            <div class="card-body"><canvas id="myAreaChart" width="5%" height="5%"></canvas></div>
    
<!-- Carga la librería Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Crea un canvas para la gráfica -->
<div style="height: 400px;width: 500px;display: flex;justify-content: center;align-items: center">
    
<canvas id="myChart1"></canvas>

</div>

<script>
    // Obtiene el canvas y crea la gráfica de barras
    var ctx = document.getElementById('myChart1').getContext('2d');
    var myChart = new Chart(ctx, {
        
        type: 'bar',
        data: {
            labels: ['ARQUI', 'ADI', 'PRODESST', 'CIM', 'GECS', 'SOP','ASES','PROMYD','GEF','SIG','MIN','CLIC','COM'],
            datasets: [{
                label: 'Promedio por procesos horas programadas',
                data: [87, 93, 73, 85, 92, 93,78,88,64,87,76,85,87],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(153, 102, 255, 0.2)'
                            ],
                            borderWidth: 2
                        }]
                    }, 
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    min: 5,
                                    max: -4
                                }
                            }]
                        }
                    }
                     });
</script>
</div>
</div>
<br>
<div class="col-xl-6">
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-chart-area me-1"></i>
            Ranking empleados
        </div>
        <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
        <div style="height: 500px;width: 500px;">
        <!-- Crea un canvas para la gráfica -->
        <canvas id="myChart2"></canvas>
        </div>
        <script>
            // Obtiene el canvas y crea la gráfica de barras
            var ctx = document.getElementById('myChart2').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'pie',
                
                data: {
                    labels: ['Diego Duarte ', 'Gisela Hernandez'],
                    datasets: [{
                        label: 'Ranking ',
                        data: [87, 93],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                min: 16,
                                max: -4
                            }
                        }]
                    }
                }
    });
</script>
</div>
</div>      
@endsection

