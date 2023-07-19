@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Пользователь</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Главная</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex p-3">
                            <div class="mr-3">
                                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary">Редактировать</a>
                            </div>
                            <form action="{{ route('user.delete', $user->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <input type="submit" class="btn btn-danger" value="Удалить">
                            </form>
                        </div>

                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <tbody>
                                    <tr data-widget="expandable-table" aria-expanded="false">
                                        <td>#</td>
                                        <td>{{ $user->id }}</td>
                                    </tr>
                                    <tr data-widget="expandable-table" aria-expanded="false">
                                        <td>Имя</td>
                                        <td>{{ $user->name }}</td>
                                    </tr>
                                    <tr data-widget="expandable-table" aria-expanded="false">
                                        <td>Фамилия</td>
                                        <td>{{ $user->surname }}</td>
                                    </tr>
                                    <tr data-widget="expandable-table" aria-expanded="false">
                                        <td>Отчество</td>
                                        <td>{{ $user->patronymic }}</td>
                                    </tr>
                                    <tr data-widget="expandable-table" aria-expanded="false">
                                        <td>Email</td>
                                        <td>{{ $user->email }}</td>
                                    </tr>
                                    <tr data-widget="expandable-table" aria-expanded="false">
                                        <td>Возраст</td>
                                        <td>{{ $user->age }}</td>
                                    </tr>
                                    <tr data-widget="expandable-table" aria-expanded="false">
                                        <td>Пол</td>
                                        <td>{{ $user->genderTitle }}</td>
                                    </tr>
                                    <tr data-widget="expandable-table" aria-expanded="false">
                                        <td>Адрес</td>
                                        <td>{{ $user->address }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
            </div>
            <!-- /.row -->

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
@endsection
