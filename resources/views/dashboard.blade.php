@include('head1')

<body>
    @include('navbar')
    <div class="container-fluid p-4 pt-2">
        <canvas id="myChart" style="width:100%; height: 400px"></canvas>
        <div class="card border-danger mb-3">
            <div class="card-header text-center">Order Vehicle</div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="card mb-3 border-dark">
                            <img src="{{ asset('images/angkutan-barang.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Kendaraan Barang</h5>
                                <p class="card-text text-dark">Kendaraan yang mengangkut barang</p>
                                <div class="flex">
                                    <form action="{{ url('/kendaraan_barang') }}" method="POST">
                                        @csrf
                                        <input type="submit" class="btn btn-primary btn-sm" name="bahan_bakar"
                                            value="Bensin">
                                        <input type="submit" class="btn btn-primary btn-sm" name="bahan_bakar"
                                            value="Solar">
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col">

                        <div class="card mb-3 border-dark">
                            <img src="{{ asset('images/angkutan-orang.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Kendaraan Umum</h5>
                                <p class="card-text text-dark">Kendaraan yang mengangkut orang</p>
                                <div class="flex">
                                    <form action="{{ url('/kendaraan_umum') }}" method="POST">
                                        @csrf
                                        <input type="submit" class="btn btn-primary btn-sm" name="bahan_bakar"
                                            value="Bensin">
                                        <input type="submit" class="btn btn-primary btn-sm" name="bahan_bakar"
                                            value="Solar">
                                    </form>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col">
                        <div class="card mb-3 border-dark">
                            <img src="{{ asset('images/angkutan-tambang.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Kendaraan Tambang</h5>
                                <p class="card-text  text-dark">Kendaraan yang mengangkut bahan Tambang</p>
                                <a href="{{ url('/kendaraan_tambang') }}">
                                    <button type="button" class="btn btn-primary btn-sm">Solar</button>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script>
        const xValues = ["january", "february", "march"];
        const yValues = {!! json_encode(array_values($dataTransaksi)) !!}; // Ambil nilai dari jumlah transaksi

        const barColors = ["red", "green", "blue", "orange", "brown"];

        new Chart("myChart", {
            type: "bar",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true, // Mulai dari nilai 0
                            stepSize: 1 // Langkah interval
                        }
                    }]
                },
                legend: {
                    display: false
                },
                title: {
                    display: true,
                    text: "Grafik Order Kendaraan"
                }
            }
        });
    </script>
    {{-- <script>
        const xValues = ["january", "february", "march"];
        const yValues = [{{ $bulan }}, 0, 9];

        const barColors = ["red", "green", "blue", "orange", "brown"];

        new Chart("myChart", {
            type: "bar",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            options: {
                legend: {
                    display: false
                },
                title: {
                    display: true,
                    text: "Grafik Order Kendaraan"
                }
            }
        });
    </script> --}}

</body>
