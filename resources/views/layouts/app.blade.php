<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Image Editor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <style>
        html,
        body {
            background-color: #1e1e1e;
            color: #fff;
        }
    </style>
    @livewireStyles
</head>

<body>
    <div class="container">
        @yield('content')
    </div>

    @livewireScripts
    <script>
        window.livewire.on('fileUploaded', () => {
            $('#form-photo-upload')[0].reset();
        });
    </script>
</body>

</html>