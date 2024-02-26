@include('head')

<body>
    @include('navbar')
    <div class="container-fluid p-4">
        <div class="card text-center">
            <div class="card-header">
                History
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr class="bg-danger">
                            <th>Vehicle Type</th>
                            <th>Fuel</th>
                            <th>Category</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Baris-baris data disini -->
                    </tbody>
                </table>
            </div>
            <div class="card-footer text-muted">
                2 days ago
            </div>
        </div>
    </div>
</body>
