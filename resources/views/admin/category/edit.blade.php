@extends('admin.layouts.repeat')
@section('title', 'Редактирование категории')
@section('content')

<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Редактирование категории</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>


  <section class="content">
    <div class="container-fluid">
      <div class="row d-flex flex-column">

        <form action="{{ route('admin.category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('patch')
          <div class="form-group col-2">
            <label for="exampleInputpost">Название категории</label>
            <input type="text" name="title" class="form-control border-0" id="exampleInputpost"
              placeholder="Введи название" value="{{ $category->title }}">
            @error('title')
            <div class="text-danger">{{ $message }}</div>
            @enderror
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