<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Rooah-test-app</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">    
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body id="home-page">
        <div class="container" >
            <div class="row">
                <div class="col-md-7 mx-auto pt-5 mt-5 mb-5">
                   <div class="card p-3 shadow-sm mb-5">
                    <h1 class="text-center mt-5"><b>Todo List Application</b></h1>
                    <p class="text-center">Manage your tasks with Ease. Register Below</p>
                    <div class="d-flex mx-auto m-3 mb-5">
                        <a href="{{route('register')}}" class="btn btn-success m-2 text-light">Register</a>
                        <a href="{{route('login')}}" class="btn btn-info m-2 text-light">Login</a>
                    </div>
                   </div>
                </div>
            </div>
        </div>
    </body>
</html>
