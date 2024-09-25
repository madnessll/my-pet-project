@extends('admin.layouts.repeat')
@section('title', 'Posts')
@section('content')

<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Редактирование поста</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>


  <section class="content">
    <div class="container-fluid">
      <div class="row d-flex flex-column">

        <form action="{{ route('admin.post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('patch')
          <div class="form-group col-2">
            <label for="exampleInputpost">Название поста</label>
            <input type="text" name="title" class="form-control border-0" id="exampleInputpost"
              placeholder="Введи название" value="{{ $post->title }}">
            @error('title')
            <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>

          <div class="form-group col-3">
            <label>Описание поста</label>
            <textarea name="content" class="form-control border-0" rows="3"
              placeholder="Введите описание">{{ $post->content }}</textarea>
            @error('content')
            <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>

          <div class="form-group col-3">
            <div>Картинка</div>
            <img style=" height: 400px;" src="{{ url('storage/' . $post->image) }}"
              class="mt-2 col-auto pl-0 mb-3"></img>
            <div class="input-group">
              <div class="custom-file">
                <input name="image" role="button" type="file" class="custom-file-input">
                <label class="custom-file-label">Выбери новую картинку</label>
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
              <option value="{{ $category->id }}" {{ $category->id == $post->category_id ? ' selected' : '' }}
                >{{ $category->title }}</option>
              @endforeach
            </select>
            @error('category_id')
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