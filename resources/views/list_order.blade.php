@include('head')

<body>

    @include('navbar')
    <div class="container-fluid p-4">
        @foreach ($data_ordering as $data)
            <a href="{{ url('/detail', [$data->ordering_id]) }}" style="text-decoration: none;">
                <div class="card border-success mb-3" style="max-width: 25rem;cursor:pointer; ">
                    <div class="card-header bg-transparent border-success text-center">Menunggu Approval</div>
                    <div class="card-body text-success text-center">
                        <h5 class="card-title">Order id :{{ $data->ordering_id }}</h5>
                        <p class="card-text text-dark">Date : {{ $data->order_date }}</p>
                    </div>
                    <div class="card-footer bg-transparent border-success">Footer</div>
                </div>
            </a>
        @endforeach
    </div>
</body>
