<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background: #343a40;
            padding-top: 20px;
        }
        .sidebar a {
            padding: 12px 20px;
            text-decoration: none;
            font-size: 16px;
            color: #ddd;
            display: block;
        }
        .sidebar a:hover {
            background: #495057;
            color: #fff;
        }
        .content {
            margin-left: 250px;
            padding: 20px;
        }
        .active-link {
            background: #0d6efd;
            color: white !important;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h4 class="text-center text-white">Dashboard</h4>
        @if(Auth::user()->is_admin==1)
        <a href="{{ url('/students/index') }}" class="{{ request()->routeIs('students.*') ? 'active-link' : '' }}">👨‍🎓 Student List</a>
        @endif
        <a href="{{ url('/subjects/index') }}" class="{{ request()->routeIs('subjects.*') ? 'active-link' : '' }}">📚 Subject List</a>
        @if(Auth::user()->is_admin==1)
        <a href="{{ url('/marks/create') }}" class="{{ request()->routeIs('marks.*') ? 'active-link' : '' }}">✍️ Mark Entry</a>
        @endif
        <a href="{{ url('/result/index') }}" class="{{ request()->routeIs('results.*') ? 'active-link' : '' }}">📊 Results</a>
    </div>

    <div class="content">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
