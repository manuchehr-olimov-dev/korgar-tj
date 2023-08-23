<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Document</title>
</head>
<body>
    <header  class="container-fluid d-inline-flex justify-content-between">
        <div class="left-side d-inline-flex">
            <h2 class = "m-auto">KorgarTJ</h2>
            <div class="btn-group m-auto help ms-3">
                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  
                    @if ($userType == "worker")
                        <a href="/worker">Ищу работу</a>
                    @else
                        <a href="/employer">Ищу сотрудника</a>
                    @endif

                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/worker">Ищу работу</a></li>
                  <li><a class="dropdown-item" href="/employer">Ищу сотрудника</a></li>
                </ul>
              </div>
        </div>
        <div class=" right-side" >
            <p class="bi bi-search m-auto me-2"></p>
            <p class=" m-auto me-4">Поиск</p>
            <a href="#" class="m-auto me-4 create-cv">Создать резюме</a>
            <a href="#" class="m-auto me-4 log-in">Войти</a>
        </div>
    </header>
    @yield('content')
    
</body>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+ 3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</html>