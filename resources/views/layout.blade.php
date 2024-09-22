<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management Project</title>
    <link rel="stylesheet" href="{{ asset('assets/css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/create.css') }}">
</head>

<body>
    <div class="container">
        <aside class="sidebar">
            <h2>Menu</h2>
            <ul>
                <li><a href="{{url('/')}}" class="active">Home</a></li>
                <li><a href="{{url('/students')}}">Student</a></li>
                <li><a href="{{url('/teachers')}}">Teacher</a></li>
                <li><a href="{{url('/payment')}}">Payment</a></li>
                <li><a href="{{url('/cources')}}">Courses</a></li>
                <li><a href="{{url('/enrollment')}}">Enrollment</a></li>
            </ul>
        </aside>
        <main class="navbar">
            <header class="header">
                <h1>Student Management Project</h1>
            </header>
            <div class="col-md-9">
                @yield('content')
            </div>
        </main>
        

    </div>
</body>

</html>
