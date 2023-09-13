<section>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('add-student') }}">Add Student</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('manage-student') }}">Manage Student</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('departments.index') }}">Manage Dept</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('departments.create') }}">Add Dept</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('sessions.index') }}">Manage Session</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('sessions.create') }}">Add Session</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</section>
