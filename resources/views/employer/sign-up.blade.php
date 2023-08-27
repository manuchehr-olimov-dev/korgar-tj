@extends('layouts.main')

@section('content')
  <div class="bg-img"></div>

    <div class="form mt-3 border flex-column">
      <form action="" method="post" class="d-flex flex-column">
        <h1>Регистрация</h1>
        <div class="mb-3">
          <label for="formGroupExampleInput2" class="form-label">Название компании</label>
          <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Название вашей компании">
        </div>
        <div class="mb-3">
          <label for="formGroupExampleInput" class="form-label">Email</label>
          <input type="email" class="form-control" id="formGroupExampleInput" placeholder="Введите email">
        </div>
        <div class="mb-3">
          <label for="formGroupExampleInput2" class="form-label">Номер телефона</label>
          <input type="tel" class="form-control" id="formGroupExampleInput2" placeholder="Введите номер">
        </div>
        <div class="mb-3">
          <label for="formGroupExampleInput2" class="form-label">Пароль</label>
          <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Введите пароль">
        </div>
        <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
      </form>
      
      <a href="/employer/sign-in" class="text-white btn btn-primary mt-2">Есть аккаунт?</a>
    </div>
@endsection