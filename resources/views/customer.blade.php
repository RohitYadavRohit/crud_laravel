<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .required label::after{
            content: "*";
            color: red;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-dark">

    <div class="container-fluid bg-dark">
        <div class="container">
            <nav class="navbar navbar-expand-sm">
                <a href="#" class="navbar-brand" style="color: white">WsCube Tech</a>
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" 
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
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
    <form action="{{$url}}" method="post">
        @csrf
        <div class="container mt-4 card p-3 bg-white">
            <h3 class="text-center text-primary">
                {{$title}}
            </h3>
            <div class="row">
                <div class="form-group col-md-6 required">
                    <label for="">Name:</label>
                    <input type="text" name="name" id="" class="form-control" value="{{$customer->name ?? '' }}"/>
                    <span class="text-danger">
                        @error('name')
                        {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="">Email:</label>
                    <input type="text" name="email" id="" class="form-control" value="{{$customer->email ?? '' }}"/>
                    <span class="text-danger">
                        @error('email')
                        {{$message}}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6 required">
                    <label for="">Password:</label>
                    <input type="password" name="password" id="" class="form-control"/>
                    <span class="text-danger">
                        @error('password')
                        {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="">Confirm Password:</label>
                    <input type="password" name="confirm_password" id="" class="form-control"/>
                    <span class="text-danger">
                        @error('confirm_password')
                        {{$message}}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="">Country:</label>
                    <input type="text" name="country" id="" class="form-control" value="{{$customer->country ?? '' }}"/>
                    <span class="text-danger">
                        @error('country')
                        {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="form-group col-md-6">
                    <label for="">State:</label>
                    <input type="text" name="state" id="" class="form-control" value="{{$customer->state ?? '' }}"/>
                    <span class="text-danger">
                        @error('state')
                        {{$message}}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <label for="">Address:</label>
                    <textarea name="address" id="" class="form-control">{{$customer->address ?? '' }}</textarea>
                    <span class="text-danger">
                        @error('address')
                        {{$message}}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="">Gender:</label>
                    <div class="d-flex">
                        <div class="form-check me-3">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="M"
                            {{isset($customer) && $customer->gender == "M" ? "checked" : ""}}
                            />
                            <label class="form-check-label" for="male">
                                Male
                            </label>
                        </div>
                        <div class="form-check me-3">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="F"
                            {{isset($customer) && $customer->gender == "F" ? "checked" : ""}}
                            />
                            <label class="form-check-label" for="female">
                                Female
                            </label>
                        </div>
                        <div class="form-check me-3">
                            <input class="form-check-input" type="radio" name="gender" id="other" value="O"
                            {{isset($customer) && $customer->gender == "O" ? "checked" : ""}}
                            />
                            <label class="form-check-label" for="other">
                                Other
                            </label>
                        </div>
                        <span class="text-danger">
                            @error('gender')
                            {{$message}}
                            @enderror
                        </span>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="">Date of Birth:</label>
                    <input type="date" name="dob" id="" class="form-control" value="{{$customer->dob ?? '' }}"/>
                    <span class="text-danger">
                        @error('dob')
                        {{$message}}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary w-100">
                        Submit
                    </button>
                </div>
            </div>
        </div>

    </form>
    
</body>
</html>