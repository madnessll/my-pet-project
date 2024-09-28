@extends('layouts.header-and-footer')
@section('title', 'Редачим профиль')
@section('content')

<section class="blog-section spad">
  <div class="container">
    <div class="row justify-content-center">
      <div class="d-flex flex-column align-items-center">
        <h2 class="account__name">Твоя аватарка сейчас:</h2>
        <div>

          <img class="account__img rounded-circle"
            src="{{ asset('storage/' . (empty(Auth::user()->avatar) ? 'avatars/default-avatar.jpg' : Auth::user()->avatar)) }}"
            alt="User Avatar">
        </div>
        <form action="{{ route('account.update') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="input-group account__form">
            <div class="custom-file">
              <input name="avatar" role="button" type="file" class="custom-file-input">
              <label class="custom-file-label">Выбери новую картинку</label>
            </div>
            <div class="input-group-append">
              <span class="input-group-text">...</span>
            </div>
          </div>
          <div class="form-group account__group">
            <input type="submit" class="btn btn-block btn-dark" value="Изменить">
          </div>
        </form>
      </div>

    </div>
  </div>
</section>


@endsection