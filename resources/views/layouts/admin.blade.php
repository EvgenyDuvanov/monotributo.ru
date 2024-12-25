<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Панель администратора</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" >
    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show position-fixed bottom-0 end-0 m-3" style="z-index: 1050; width: 300px;" role="alert" id="success-alert">
                {{ session('success') }}
            </div>
        @endif
    </div>
   <div class="d-flex flex-column justify-content-between min-vh-100 text-center">
        @include('admin.includes.header')

        <main>
            @yield('content')
        </main>

        @include('admin.includes.footer')
    </div>

    <style>
        .service-card {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            background-color: #f9f9f9;
            box-shadow: 0 4px 6px rgba(218, 222, 223, 0.909);
            transition: transform 0.3s ease;
            height: 100%;
        }
        .service-card:hover {
            transform: scale(1.05);
        }
        .service-icon {
            font-size: 5rem;
            color: #53bde0;
            margin-bottom: 1rem;
        }
        .service-title {
            font-size: 1.25rem;
            margin-bottom: 0.5rem;
        }
    <style>
</body>
</html>