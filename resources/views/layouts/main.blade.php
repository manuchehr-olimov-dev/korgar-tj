<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    @vite([
        'resources/css/main.css',
        'resources/css/employer.css', 
        'resources/js/app.js'
        ])
    
    <title>Document</title>
</head>
<body>
    <header  class="container-fluid d-inline-flex justify-content-between">
        <div class="left-side d-inline-flex">
            <h2 class = "m-auto">KorgarTJ</h2>
            <div class="btn-group m-auto help ms-3">
                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <a href="#">Ищу сотрудника</a>
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/worker">Ищу работу</a></li>
                  <li><a class="dropdown-item" href="/employer">Ищу сотрудника</a></li>
                </ul>
            </div>
        </div>
        <div class=" right-side" >
            <p class="bi bi-search m-auto me-2 d-none"></p>
            <p class=" m-auto me-4 d-none">Поиск</p>
            <a href="#" class="m-auto me-4 create-cv">Разместить вакансию</a>
            <a href="#" class="m-auto me-4 log-in">Войти</a>
        </div>
    </header>
    @yield('content')
</body>
</html>