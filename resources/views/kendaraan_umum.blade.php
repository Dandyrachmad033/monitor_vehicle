@include('head')

<body>
    @include('navbar')
    <div class="container-fluid p-4">
        <div class="card text-center border-danger">
            <div class="card-header">
                Order Kendaraan Umum
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-4 col-md-4 col-sm-12">
                        <div class="mb-3">
                            <label class="form-label">Jenis Kendaraan</label>
                            <input type="text" class="form-control border-dark" id="exampleInputEmail1"
                                aria-describedby="emailHelp">

                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-md-4 col-sm-12">
                        <div class="mb-3">
                            <label class="form-label">Jenis Bahan Bakar</label>
                            <input type="text" class="form-control border-dark" id="exampleInputEmail1"
                                aria-describedby="emailHelp">

                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-md-4 col-sm-12">
                        <div class="mb-3">
                            <label class="form-label">Driver</label>
                            <input type="text" class="form-control border-dark" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-md-4 col-sm-12">
                        <div class="mb-3">
                            <label class="form-label">Tanggal Pemesanan</label>
                            <input type="date" class="form-control border-dark" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                    </div>
                </div>

            </div>
            <div class="card-footer text-muted">
                <button type="button" class="btn btn-success btn-sm">Order</button>
            </div>
        </div>
    </div>
</body>
