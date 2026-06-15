<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'IoT Monitoring Solutions') - Sistem Monitoring IoT Profesional</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    @include('components.navbar')
    
    <main>
        @yield('content')
    </main>
    
    @include('components.footer')
    
    <script src="{{ asset('js/main.js') }}"></script>
    @stack('scripts')
</body>
</html>
