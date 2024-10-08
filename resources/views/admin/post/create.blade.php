@extends('admin.layouts.repeat')
@section('title', 'Posts')
@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Создание поста</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Info boxes -->
      <div class="row d-flex flex-column">

        <form action="{{ route('admin.post.store') }}" method="POST" enctype="multipart/form-data">
          @csrf


          <div class="form-group col-2">
            <label for="exampleInputEmail1">Название поста</label>
            <input type="text" name="title" class="form-control border-0" id="exampleInputEmail1"
              placeholder="Введи название" value="{{ old('title') }}">
            @error('title')
            <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>

          <div class="form-group col-3">
            <label>Описание поста</label>
            <textarea name="content" class="form-control border-0" rows="3"
              placeholder="Введите описание">{{ old('content') }}</textarea>
            @error('content')
            <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>


          <div class="form-group col-3">
            <label>Картинка</label>
            <div class="input-group">
              <div class="custom-file">
                <input name="image" role="button" type="file" class="custom-file-input">
                <label class="custom-file-label">Выбери картинку</label>
              </div>
              <div class="input-group-append">
                <span class="input-group-text">...</span>
              </div>
            </div>

            @error('image')
            <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>


          <div class="form-group col-3">
            <label>Выберите категорию</label>
            <select name="category_id" class="form-control">
              @foreach($categories as $category)
              <option value="{{ $category->id }}" {{ old('category_id')==$category->id ? ' selected' : '' }}>
                {{ $category->title }}</option>
              @endforeach
            </select>
            @error('category_id')
            <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>


          <div class="form-group col-1 mt">
            <input type="submit" class="btn btn-block btn-dark" value="Добавить">
          </div>


        </form>


      </div>

    </div>
    <!--/. container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Main Footer -->
</div>
<style>
  .custom-file-input:lang(en)~.custom-file-label::after {
    content: "Тыкай";
  }

  .mt {
    margin-top: 40px;
  }
</style>


@endsection