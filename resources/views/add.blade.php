<!doctype html>
<html lang="en">

<head>
    <title>CRUD</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link" href="/register">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/view">View</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <form action="{{ url('/register') }}" method="POST">
        @csrf
        <h1 class="text-center" style="background-color:rgb(45, 236, 12)">Registration Form</h1>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name:</label>
            <input type="text" name='name' class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
            <span class="text-danger">
                @error('name')
                    {{ $message }}
                @enderror
            </span>

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Class:</label>
            <input type="text" name='class' class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
            <span class="text-danger">
                @error('class')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email Address:</label>
            <input type="email" name='email' class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
            <span class="text-danger">
                @error('email')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password:</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            <span class="text-danger">
                @error('password')
                    {{ $message }}
                @enderror
            </span>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
