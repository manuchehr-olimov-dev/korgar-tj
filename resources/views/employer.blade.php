<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    @vite(['resources/css/app.css', 'resources/css/employer-style.css', 'resources/js/app.js'])

    
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
    <div class="search__worker" >
            <h1 class="search__worker__title">Разместите</h1>
            <h1 class="search__worker__title">вакансию на Korgar.TJ</h1>

            <p class="search__worker__p mt-2">И находите сотрудников среди тех, кто хочет у вас работать.</p> 
            <p class="search__worker__p">Korgar.TJ — сервис №1 по поиску сотрудников в Таджикистане.</p>
            <button class="btn btn-primary mt-3 fs-4"><a href="/employer/add-job" class="text-white">Разместить вакансию</a></button>
    </div>
</body>
</html>
