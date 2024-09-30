@extends('admin.layouts.repeat')
@section('title', 'Users')
@section('content')

<div class="content-wrapper">

  <!-- Main content -->
  <section class="content mt-100">
    <div class="container-fluid">
      <!-- Info boxes -->
      <div class="row d-flex flex-column ">
        
        <div class="card ml-2 col-6">
          <div class="card-header">
            <h3 class="card-title">Таблица юзеров</h3>
        
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
                  <th class="text-center">ID</th>
                  <th class="text-center">Имя</th>
                  <th class="text-center">Роль</th>
                  <th class="text-center">Изменить роль</th>
                </tr>
              </thead>
              <tbody>
                @foreach($users as $user)
                <tr>
                  <td class="text-center">{{ $user->id }}</td>
                  <td class="text-center">{{ $user->name }}</td>
                  <td class="text-center">
                    @if($user->role == 0)
                    Дефолт юзер
                    @elseif($user->role == 1)
                    Админ
                    @endif
                  </td>

                  <td class="text-center"><a href="{{ route('admin.user.edit', $user->id) }}"><i class="fas fa-pencil-alt text-success"></i></a></td>
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

<style>
  .mt-100 {
    margin-top: 100px;
  }
</style>