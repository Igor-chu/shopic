@extends('layouts.main')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить пользователя</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Пользователи</li>
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
                <form action="{{route('user.store')}}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <input type="text" name="name" class="form-control" value="{{old('name')}}"
                               placeholder="Имя">

                        @error('name')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <input type="text" name="surname" class="form-control" value="{{old('surname')}}"
                               placeholder="Фамилия">

                        @error('surname')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <input type="text" name="patronymic" class="form-control" value="{{old('patronymic')}}"
                               placeholder="Отчество">

                        @error('patronymic')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <input type="email" name="email" class="form-control" value="{{old('email')}}"
                               placeholder="Email">

                        @error('email')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <input type="password" name="password" class="form-control" value="{{old('password')}}"
                               placeholder="Пароль">

                        @error('password')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <input type="password" name="password_confirmation" class="form-control" value="{{old('password_confirmation')}}"
                               placeholder="Пароль еще раз">

                        @error('password_confirmation')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <input type="text" name="age" class="form-control" value="{{old('age')}}"
                               placeholder="Возраст">

                        @error('age')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <input type="text" name="address" class="form-control" value="{{old('address')}}"
                               placeholder="Адрес">

                        @error('address')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <select class="form-control custom-select" id="exampleSelectBorder" name="gender">
                            <option disabled selected>Пол</option>
                            <option {{old('gender') == 1 ? 'selected' : ''}} value="1">Мужской</option>
                            <option {{old('gender') == 2 ? 'selected' : ''}} value="2">Женский</option>
                        </select>

                        @error('gender')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <input type="submit" class="btn btn-primary" value="Добавить">
                    </div>


                </form>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection
