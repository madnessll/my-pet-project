@extends('admin.layouts.repeat')
@section('title', 'Создание категории')
@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Создание категории</h1>
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

        <form action="{{ route('admin.category.store') }}" method="POST">
          @csrf


          <div class="form-group col-2">
            <label for="exampleInputEmail1">Нейминг категории</label>
            <input type="text" name="title" class="form-control border-0" id="exampleInputEmail1"
              placeholder="Введи название" value="{{ old('title') }}">
            @error('title')
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