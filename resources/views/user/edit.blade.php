@extends('layouts.main')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать категорию</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Категории</li>
                        <li class="breadcrumb-item">Главная</li>
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
                <form action="{{route('user.update', $user->id)}}" method="POST">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <label for="name">Имя</label>
                        <input type="text" name="name" class="form-control mb-3" value="{{$user->name ?? old('name')}}"
                               placeholder="Имя">

                        @error('name')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="surname">Фамилия</label>
                        <input type="text" name="surname" class="form-control mb-3" value="{{$user->surname ?? old('surname')}}"
                               placeholder="Фамилия">

                        @error('surname')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="patronymic">Отчество</label>
                        <input type="text" name="patronymic" class="form-control mb-3" value="{{$user->patronymic ?? old('patronymic')}}"
                               placeholder="Отчество">

                        @error('patronymic')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="age">Восзраст</label>
                        <input type="text" name="age" class="form-control mb-3" value="{{$user->age ?? old('age')}}"
                               placeholder="Возраст">

                        @error('age')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="address">Адрес</label>
                        <input type="text" name="address" class="form-control mb-3" value="{{$user->address ?? old('address')}}"
                               placeholder="Адрес">

                        @error('address')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="gender">Пол</label>
                        <select class="form-control custom-select" id="exampleSelectBorder" name="gender">
                            <option disabled selected>Пол</option>
                            <option {{$user->gender == 1 || old('gender') == 1 ? 'selected' : ''}} value="1">Мужской</option>
                            <option {{$user->gender == 2 || old('gender') == 2 ? 'selected' : ''}} value="2">Женский</option>
                        </select>

                        @error('gender')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Редактировать">
                    </div>
                </form>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection
