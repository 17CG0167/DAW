<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/estilos.css') }}">
    <title>Document</title>
</head>
<body>
    
    <h1>hola</h1>
    <div class="container">
        <div class="row">
            <div class="col mt-3 px-md-1 d-lg-block d-none d-xl-block"><div class="p-3 border bg-primary text-center">a</div></div>
            <div class="col mt-3 px-md-1 d-lg-none d-xl-none d-m-block"><div class="p-3 border bg-primary text-center">l</div></div>
        </div>

        <div class="row">
            <div class="col mt-3 px-md-1 d-lg-block d-xl-block d-m-block d-none"><div class="p-3 border bg-primary text-center">b</div></div>
            <div class="col mt-3 px-md-1"><div class="p-3 border bg-primary text-center">c</div></div>
            <div class="col mt-3 px-md-1"><div class="p-3 border bg-primary text-center ">d</div></div>
            <div class="col mt-3 px-md-1 col mt-3 px-md-1 d-lg-none d-none d-xl-block"><div class="p-3 border bg-primary text-center">e</div></div>
        </div>

        <div class="row d-lg-block d-xl-block d-m-block d-none">
            <div class="col mt-3 px-md-1"><div class="p-3 border bg-primary text-center">f</div></div>
            <div class="col mt-3 px-md-1"><div class="p-3 border bg-primary text-center">g</div></div>
        </div>

        <div class="row">
            <div class="col-8 mt-3 px-md-1 d-lg-none d-none d-xl-block"><div class="p-3 border bg-primary text-center">h</div></div>
            <div class="col-4 mt-3 px-md-1 d-lg-none d-none d-xl-block"><div class="p-3 border bg-primary text-center">i</div></div>
        </div>

        <div class="row justify-content-evenly">
            <div class="col-3 mt-3 px-md-1 d-lg-none d-none d-xl-block"><div class="p-3 border bg-primary text-center">j</div></div>
            <div class="col-3 mt-3 px-md-1 d-lg-none d-none d-xl-block"><div class="p-3 border bg-primary text-center">k</div></div>
        </div>

        <div class="row d-lg-none d-xl-none d-m-block">
            <div class="col-12 mt-3 px-md-1"><div class="p-3 border bg-primary text-center">f</div></div>
            <div class="col-12 mt-3 px-md-1"><div class="p-3 border bg-primary text-center">m</div></div>
            <div class="col-12 mt-3 px-md-1"><div class="p-3 border bg-primary text-center">h</div></div>
            <div class="col-12 mt-3 px-md-1"><div class="p-3 border bg-primary text-center">i</div></div>
            <div class="col-12 mt-3 px-md-1 "><div class="p-3 border bg-primary text-center">j</div></div>
            <div class="col-12 mt-3 px-md-1 "><div class="p-3 border bg-primary text-center">k</div></div>
        </div>

    </div>

<script src="{{asset('/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>