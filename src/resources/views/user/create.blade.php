<x-layout>
    <x-header>Создать пользователя</x-header>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <form action="{{route('users.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="login" value="{{old('login')}}" class="form-control" placeholder="Логин (Никнейм)">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" value="{{old('email')}}" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Пароль">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password_confirmation" class="form-control" placeholder="Подтвердить пароль">
                    </div>
                    <div class="form-group">
                        <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="Имя пользователя">
                    </div>
                    <div class="form-group">
                        <input type="text" name="surname" value="{{old('surname')}}" class="form-control" placeholder="Фамилия пользователя">
                    </div>
                    <div class="form-group">
                        <input type="text" name="patronymic" value="{{old('patronymic')}}" class="form-control" placeholder="Отчество пользователя">
                    </div>
                    <div class="form-group">
                        <input type="number" name="age" value="{{old('age')}}" class="form-control" placeholder="Возраст пользователя">
                    </div>
                    <div class="form-group">
                        <select name="gender" class="custom-select form-control-border" id="exampleSelectBorder">
                            <option disabled selected></option>
                            <option {{old('gender') == 1 ? ' selected' : ''}} value="1">Мужской</option>
                            <option {{old('gender') == 2 ? ' selected' : ''}} value="2">Женский</option>
                          </select>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Добавить">
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-layout>
