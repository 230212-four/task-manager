<!DOCTYPE html>
<html>
<head>
    <title>Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="/">My Portfolio</a>
            <a class="nav-link text-white" href="/projects">Projects</a>
            <a class="nav-link text-white" href="/skills">Skills</a>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>