<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Auth | @yield('title', 'Page') </title>

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}">
    @stack('styles')
</head>

<body>
    <div class="auth-container">
        <div class="brand-info">
            <h1 class="brand-heading">Welcome back</h1>
            <p class="brand-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
        </div>
        <div class="auth-form">
            <div class="logo-container">
                <h1>ChatApp</h1>
            </div>
            @yield('content', '')

            <span class="copyright">Copyright &copy; {{ date('Y') }}. All rights Received</span>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(function() {
            $(document).on('submit', 'form', function(e) {
                $('button, input[type="submit"]').prop('disabled', true);
            });
        })
    </script>
    @stack('scripts')
</body>

</html>
