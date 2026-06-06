<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container-fluid bg-dark">
        <div class="container">
            <nav class="navbar navbar-expand-sm">
                <a href="#" class="navbar-brand" style="color: white">WsCube Tech</a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                data-target="#collapsibleNavId" aria-colrols="collapsibleNavId" 
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a href="{{url('/')}}" class="nav-link" style="color: white">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/register')}}" class="nav-link" style="color: white">Register</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/customer')}}" class="nav-link" style="color: white">Customer</a>
                    </li>
                </ul>
            </div>
            </nav>
        </div>
    </div>
    
</body>
</html>