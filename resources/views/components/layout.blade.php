<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Bootstrap CDN Link --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    {{-- Fontawesome CDN Link --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />



    <title>Ecommerce</title>


</head>

<body>


    {{-- Navication Bar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid px-5">
            <div class="nav-brand">
                <strong class="text-primary fs-2">E<span class="text-light">commerce</span></strong>
            </div>
            <div>
                <input type="search" name="search" id="search"
                    class="form-control outline-none border-secondary bg-transparent text-light">
            </div>
            <div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="" class="nav-link"><i class="fa-solid fa-right-to-bracket me-2"></i>Login</a>
                    </li>
                    <span class="nav-link align-self-center mx-2"> | </span>
                    <li class="nav-item">
                        <a href="" class="nav-link"><i class="fa-solid fa-cart-shopping me-2"></i>Cart</a>
                    </li>
                    <li class="nav-item">
                        <img src="..."class="rounded me-2">
                        <div class="btn-group">
                            <a type="submit"
                                class="btn btn-transparent border-0 outline-none dropdown-toggle text-white-50"
                                data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                                Username
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                                <li><a class="dropdown-item" type="button">Profile</a></li>
                                <li><a class="dropdown-item" type="button">Logout</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{ $slot }}


    {{-- Footer Section --}}
    <footer class="bg-dark px-5 h-25 mt-3">
        <div class="col">
            <strong class="text-primary fs-2">E<span class="text-light">commerce</span></strong>
        </div>
        <div class="col">
            <div class="text-white my-2">&copy; 2023 Ecommerce. All Rights Reserved.</div>
        </div>
    </footer>

    {{-- Bootstrap CDN Link --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
