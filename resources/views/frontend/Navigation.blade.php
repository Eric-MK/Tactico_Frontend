<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>


       .nav-link {
    text-decoration: none;
}

.nav-link.active {
    border: 1px solid black;
    border-radius: 9px;
    text-decoration: none;
}

.nav-link.active:hover {

    text-decoration: none;
}

.nav-link:hover {
    text-decoration: underline;
}
.nav-link.logout{
           color: red;
           text-decoration: none;

        }

        .nav-link.logout:hover{
            color: red;
            font-size: 17px;
          text-decoration: none;

        }


    </style>
</head>
<body>
<!-- Your content here -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/dashboard">Tactico</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="/dashboard">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Shortlist</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Profile</a>
                </li>
            </ul>
            <span class="navbar-text">
                Logged in as: {{ auth()->user()->name }}
            </span>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link logout" href="{{ route('logout') }}">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>