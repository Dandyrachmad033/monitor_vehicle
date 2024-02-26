<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

        <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/dashboard') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('/history') }}">History</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('/approval') }}">Approve</a>
                </li>

            </ul>
            <form class="d-flex" action="{{ url('/logout') }}" method="post">
                @csrf

                <button class="btn btn-outline-success" type="submit">Logout</button>
            </form>
        </div>
    </div>
</nav>
