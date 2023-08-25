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
            <p class="bi bi-search m-auto me-2 d-none"></p>
            <p class=" m-auto me-4 d-none">Поиск</p>
            <a href="#" class="m-auto me-4 create-cv">Создать резюме</a>
            <a href="#" class="m-auto me-4 log-in">Войти</a>
        </div>
    </header>
    <div class="searchJob" >
            
            @if ($userType == "worker")
                <h6 class="searchJob__title__mobile mt-2">Поиск работы в городе <a href="/">Санкт-Петербург</a></h6>
            @else
                <h6 class="searchJob__title__mobile mt-2">Поиск сотрудника в городе <a href="/">Санкт-Петербург</a></>
            @endif

            <h1 class="text-white fw-bold searchJob__title__desktop">Работа найдется для каждого.</h1>
            <div class="searchForm mt-2">
                <form action="" method="post">
                    @csrf
                    <input  class="searchInput" type="text" placeholder="Профессия, должность или компания...">
                    <button class=" findButton btn btn-primary ms-2">Найти работу</button>
                    <button class="ms-2"><a href="/vacancies/advanced" class = "bi bi-sliders advancedButton" data-bs-toggle="tooltip" data-bs-title="Default tooltip"  data-bs-placement="bottom"></a> </button>     
                </form>
            </div>
    </div>
    <div class="actualVacancies">
        <h1>Вакансии дня</h1>
    </div>
</body>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+ 3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

</html>
