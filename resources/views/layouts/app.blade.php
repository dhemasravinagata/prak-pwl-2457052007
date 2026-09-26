<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'PWL' }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:#fff;
            color:#000;
        }

        .card-simple{
            border:1px solid #000;
            border-radius:8px;
        }

        .table th{
            background:#000;
            color:#fff;
        }

        .btn-black{
            background:#000;
            color:#fff;
        }

        .btn-black:hover{
            background:#222;
            color:#fff;
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

    @include('components.navbar')

    <main class="container py-4 flex-grow-1">
        @yield('content')
    </main>

    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>