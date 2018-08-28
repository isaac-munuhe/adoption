@extends('layouts.main')


@section('content')
<script src="https://raw.githubusercontent.com/nnnick/Chart.js/master/dist/Chart.bundle.js"></script>
<script>
    var year = ['Monday','Tuesday','Wednesday', 'Thursday'];
    var data_child = <?php echo $child; ?>;


    var barChartData = {
        labels: day,
        datasets: [{
            label: 'Child',
            backgroundColor: "rgba(151,187,205,0.5)",
            data: data_child
        }]
    };


    window.onload = function() {
        var ctx = document.getElementById("canvas").getContext("2d");
        window.myBar = new Chart(ctx, {
            type: 'bar',
            data: barChartData,
            options: {
                elements: {
                    rectangle: {
                        borderWidth: 2,
                        borderColor: 'rgb(0, 255, 0)',
                        borderSkipped: 'bottom'
                    }
                },
                responsive: true,
                title: {
                    display: true,
                    text: 'Daily Adopted Children'
                }
            }
        });


    };
</script>


<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="card card-default">
                <div class="card-heading">Dashboard</div>
                <div class="card-body">
                    <canvas id="canvas" height="280" width="600"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection