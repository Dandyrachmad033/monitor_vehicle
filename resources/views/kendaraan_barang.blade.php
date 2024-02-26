@include('head1')

<body>
    @include('navbar')
    <div class="container-fluid p-4">
        <div class="card text-center border-danger">
            <div class="card-header">
                Order Kendaraan Barang
            </div>
            <form action="{{ url('/order') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-lg-4 col-md-4 col-sm-12">

                            <label class="form-label">Kendaraan Tersedia</label>
                            @foreach ($vehicle as $kendaraan)
                                <div class="d-flex justify-content-center">
                                    <input class="form-check-input border-dark mx-2" type="radio" name="id_vehicle"
                                        id="flexRadioDefault1" value="{{ $kendaraan->vehicle_id }}">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        {{ $kendaraan->type }}
                                    </label>
                                </div>
                            @endforeach

                        </div>
                        <div class="col-12 col-lg-4 col-md-4 col-sm-12">
                            <label class="form-label">Driver</label>
                            <select class="form-select form-select-lg mb-3 border-dark"
                                aria-label=".form-select-lg example" name="driver">
                                @foreach ($driver as $driver)
                                    <option value="{{ $driver->driver_name }}">{{ $driver->driver_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12 col-lg-4 col-md-4 col-sm-12">
                            <div class="mb-3">
                                <label class="form-label">Tanggal Pemesanan</label>
                                <input type="date" class="form-control border-dark" name="tgl_pemesanan"
                                    style="color: black">
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 col-md-4 col-sm-12">

                        </div>
                        <div class="col-12 col-lg-4 col-md-4 col-sm-12">
                            <div class="mb-3">
                                <label class="form-label">Approval 1</label>
                                <select class="form-select form-select-lg mb-3 border-dark"
                                    aria-label=".form-select-lg example" name="approval1">
                                    @foreach ($users as $user)
                                        <option value="{{ $user->username }}">{{ $user->username }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 col-md-4 col-sm-12">
                            <div class="mb-3">
                                <label class="form-label">Approval 2</label>
                                <select class="form-select form-select-lg mb-3 border-dark"
                                    aria-label=".form-select-lg example" name="approval2">
                                    @foreach ($users as $user)
                                        <option value="{{ $user->username }}">{{ $user->username }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <button type="submit" class="btn btn-success btn-sm">Order</button>
                </div>
            </form>
        </div>
    </div>
</body>
