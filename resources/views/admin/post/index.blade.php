@extends('admin.layouts.repeat')
@section('title', 'Posts')
@section('content')

<div class="content-wrapper">

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Info boxes -->
      <div class="row d-flex flex-column">
        <a href="{{ route('admin.post.create') }}" class="ml-2 btn btn-block btn-dark col-1 mb-5 mt-5">Создать пост</a>
        
        <div class="card ml-2 col-6">
          <div class="card-header">
            <h3 class="card-title">Таблица постов</h3>
        
            <div class="card-tools">
              <div class="input-group input-group-sm" style="width: 150px;">
        

              </div>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Титульник</th>
                  <th class="text-center">Посмотреть</th>
                  <th class="text-center">Редактировать</th>
                  <th class="text-center">Удалить</th>
                </tr>
              </thead>
              <tbody>
                @foreach($posts as $post)
                <tr>
                  <td>{{ $post->id }}</td>
                  <td>{{ $post->title }}</td>
                  <td class="text-center">
                    <a href="{{ route('admin.post.show', $post->id) }}">
                      <i class="far fa-eye"></i>
                    </a>
                  </td>
                  <td class="text-center"><a href="{{ route('admin.post.edit', $post->id) }}"><i class="fas fa-pencil-alt text-success"></i></a></td>
                  <td class="text-center">
                    <form action="{{ route('admin.post.delete', $post->id) }}" method="POST">
                      @csrf
                      @method('delete')
                      <button type="submit" class="border-0 bg-transparent">
                        <i class="fas fa-trash text-danger"></i>
                      </button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>

      </div>

    </div>
    <!--/. container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Main Footer -->
</div>

@endsection