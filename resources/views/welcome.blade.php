<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>IoT Dashboard</title>
    <link href="{!! asset('css/app.css') !!}" media="all" rel="stylesheet" type="text/css" />

</head>
<body>
    <div class="container text-center">
        <h1 class="d-block p-3">IoT Dashboard</h1>
        <div class="row m-4">
            <div class="mx-auto col-md-4">
                <img class="img-thumbnail rounded mx-auto d-block" src="{!! asset('img/chart.png') !!}" alt="QR">
                <h2 class="text-success">Scan QR To load This page</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-md-offset-2">
                <table class="table table-hover table-striped table-condensed table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Time</th>
                        <th>pH</th>
                        <th>Temperature</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($Records as $Record)
                        <tr>
                            <td>{{ $Record->id }}</td>
                            <td>{{ $Record->created_at }}</td>
                            <td>{{ $Record->ph }}</td>
                            <td>{{ $Record->tempC }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="{!! asset('js/app.js') !!}"></script>
</body>
</html>
