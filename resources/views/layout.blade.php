<!DOCTYPE html>
<html>
    <head>
    <title>
        elquent orm
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-8 bg-warning-subtle mb-3">
                <h4>@yield('title')</h4>
                <div class="row">
                    <div class="col-8">
                        @if (session('status'))
                        <div class="alert alert-success">
                            {{session('status')}}
                        </div>
                            
                        @endif
                <div class="row>"
                <div class="col-8">
                    @yield('content')
            
            </div>
        </div>
    </div>
    </body>
</html>