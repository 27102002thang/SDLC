@extends('admin.home')

@section('content')
{{--    <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">--}}
{{--        <div class="chart-container">--}}
{{--            <canvas id="myChart"></canvas>--}}
{{--        </div>--}}
{{--    </div>--}}

    <script>
        // Lấy thẻ canvas bằng ID
        var ctx = document.getElementById('myChart').getContext('2d');
        // Tạo một biểu đồ dòng
        var myChart = new Chart(ctx, {
            type: 'line', // Loại biểu đồ: dòng
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'Sales',
                    data: [65, 59, 80, 81, 56, 55, 40], // Dữ liệu
                    borderColor: 'rgba(255, 99, 132, 1)', // Màu đường viền
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
@endsection
