@extends('layouts.main')

@section("content") 
<div class="bg-img"></div>
<div class="form border flex-column mt-5">
  <form action="" method="post" class="d-flex flex-column">
    <h1>Вход</h1>
    <div class="mb-3">
      <label for="formGroupExampleInput" class="form-label">Email</label>
      <input type="email" class="form-control" id="formGroupExampleInput" placeholder="Введите email">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Пароль</label>
        <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Пароль">
    </div>
    <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
  </form>
  
  <a href="/employer/sign-up" class="text-white btn btn-primary mt-2">Нету аккаунт?</a>
</div>
@endsection