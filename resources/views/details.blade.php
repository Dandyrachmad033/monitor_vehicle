@include('head')

<body>
    @include('navbar')
    <div class="container-fluid p-4">
        <div class="card">
            <div class="card-header">
                {{ $data_ordering->ordering_id }}
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <p>{{ $data_ordering->order_date }}</p>
                    <p>{{ $data_ordering->type }}</p>
                    <p>{{ $data_ordering->fuel }}</p>
                    <p>{{ $data_ordering->category }}</p>
                    <p>{{ $data_ordering->driver_name }}</p>
                    <p>{{ $data_ordering->no_telp }}</p>
                    <form action="{{ url('/approve', [$data_ordering->ordering_id]) }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-success">Approve</button>
                    </form>

                </blockquote>
            </div>
        </div>

    </div>
</body>
