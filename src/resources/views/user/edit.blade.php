<x-layout>
    <x-header>Редактировать пользователя</x-header>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <form action="{{route('users.update', $user->id)}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <input type="text" name="name" value="{{$user->name}}" class="form-control" placeholder="Имя пользователя">
                    </div>
                    <div class="form-group">
                        <input type="text" name="surname" value="{{$user->surname}}" class="form-control" placeholder="Фамилия пользователя">
                    </div>
                    <div class="form-group">
                        <input type="text" name="patronymic" value="{{$user->patronymic}}" class="form-control" placeholder="Отчество пользователя">
                    </div>
                    <div class="form-group">
                        <input type="number" name="age" value="{{$user->age}}" class="form-control" placeholder="Возраст пользователя">
                    </div>
                    <div class="form-group">
                        <select name="gender" class="custom-select form-control-border" id="exampleSelectBorder">
                            <option disabled selected></option>
                            <option {{$user->gender == 1 ? ' selected' : ''}} value="1">Мужской</option>
                            <option {{$user->gender == 2 ? ' selected' : ''}} value="2">Женский</option>
                          </select>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Изменить">
                    </div>
            </div>
        </div>
    </section>
</x-layout>
