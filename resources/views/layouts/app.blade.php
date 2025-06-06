<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lead Management</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Lead Management</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('leads.index') }}">Leads</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('imports.index') }}">Imports</a>
                    </li>
                    <li class="nav-item">
                        <!-- <a class="nav-link" href="{{ route('profile.index') }}">Profile</a> -->
                    </li>
                    <li class="nav-item">
                        <!-- <form method="POST" action="{{ route('logout') }}"> -->
                            <form>
                            @csrf
                            <!-- <button type="submit" class="btn btn-link nav-link">Logout</button> -->
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="py-4">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>