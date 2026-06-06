<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container-fluid bg-dark">
        <div class="container">
            <nav class="navbar navbar-expand-sm">
                <a href="#" class="navbar-brand" style="color: white">WsCube Tech</a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                data-target="#collapsibleNavId" aria-controls="collapsibleNavId" 
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
    <div class="container">
        <a href="{{route('customer.create')}}">
            <button class="btn btn-primary d-inline-block m-2 float-end"> Add </button>
        </a>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>DOB</th>
                    <th>Address</th>
                    <th>State</th>
                    <th>Country</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $customer)
                <tr>
                    <td>{{$customer->name}}</td>
                    <td>{{$customer->email}}</td>
                    <td>
                        @if($customer->gender == "M")
                        Male
                        @elseif($customer->gender == "F")
                        Female
                        @elseif($customer->gender == "O")
                        Other
                        @endif
                    </td>
                    <td>{{$customer->dob}}</td>
                    <td>{{$customer->address}}</td>
                    <td>{{$customer->state}}</td>
                    <td>{{$customer->country}}</td>
                    <td>
                        @if($customer->status == "1")
                        <a href="">
                            <span class="badge bg-success">Active</span>
                        </a>                        
                        @else
                        <a href="">
                            <span class="badge bg-danger">Inactive</span>
                        </a>
                        @endif
                    </td>
                    <td>
                        <a href="{{url('/customer/delete/')}}/{{$customer->customer_id}}">
                            <button class="btn btn-danger">Delete</button>
                        </a>
                        <a href="{{route('customer.edit',['id' => $customer->customer_id])}}">
                            <button class="btn btn-primary">Edit</button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>
    </div>
</body>
</html>