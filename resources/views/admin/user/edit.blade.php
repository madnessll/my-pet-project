@extends('admin.layouts.repeat')
@section('title', 'Редактирование роли пользователя')
@section('content')

<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Редактирование роли пользователя</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>


  <section class="content">
    <div class="container-fluid">
      <div class="row d-flex flex-column">

        <form action="{{ route('admin.user.update', $user->id) }}" method="POST">
          @csrf
          @method('patch')
          {{-- <div class="form-group col-2">
            <label for="exampleInputpost"><span class="font-weight-light">Имя юзера:</span> {{ $user->name }}</label>
            <div class="mb-2">1 = Админ <br> 0 = обычный юзер</div>
            <input type="text" name="role" class="form-control border-0" id="exampleInputpost"
              placeholder="Введи название" value="{{ $user->role }}">
          </div> --}}

          <div class="form-group col-3">
            <label>Выбери роль</label>
            <select name="role" class="form-control">
              <option value="0" {{ $user->role == 0 ? 'selected' : '' }}>Обычный пользователь</option>
              <option value="1" {{ $user->role == 1 ? 'selected' : '' }}>Админ</option>
            </select>
          </div>


          <div class="form-group col-1 mt">
            <input type="submit" class="btn btn-block btn-dark" value="Изменить">
          </div>

        </form>
      </div>
    </div>
  </section>
</div>




@endsection