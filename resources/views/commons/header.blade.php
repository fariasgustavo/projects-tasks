<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projects and Tasks</title>
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/main.min.css")}}">
    <script src="{{asset("js/app.js")}}"></script>
</head>
<body>
    <header class="container-fluid">
        <a href="{{url("/")}}"><h1>Projects and Tasks</h1></a>
        <a class="button create float-right" href="{{url('project/create')}}">New project</a>
    </header>

    <main class="container">
        <div class="alerts">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>