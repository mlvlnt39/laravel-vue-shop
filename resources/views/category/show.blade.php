@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Категория</h1>
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
                                <a href="{{ route('category.edit', $category->id) }}" class="btn btn-primary">Редактировать</a>
                            </div>
                            <form action="{{ route('category.delete', $category->id) }}" method="POST">
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
                                        <td>{{ $category->id }}</td>
                                    </tr>
                                    <tr data-widget="expandable-table" aria-expanded="false">
                                        <td>Наименование</td>
                                        <td>{{ $category->title }}</td>
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
