<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management Project</title>
    <link rel="stylesheet" href="assets/css/layout.css">

</head>

<body>
    <div class="container">
        <aside class="sidebar">
            <h2>Menu</h2>
            <ul>
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">Student</a></li>
                <li><a href="#">Teacher</a></li>
                <li><a href="#">Payment</a></li>
                <li><a href="#">Courses</a></li>
                <li><a href="#">Enrollment</a></li>
            </ul>
        </aside>
        <main class="navbar">
            <header class="header">
                <h1>Student Management Project</h1>
            </header>
        </main>
        <div class="content">
            @yield('content')
        </div>
    </div>
</body>

</html>