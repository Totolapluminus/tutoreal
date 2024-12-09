<x-layout>
    <x-header>{{ $user->login }}</x-header>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex p-3">
                            <div class="mr-2">
                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Редактировать</a>
                            </div>
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger" value="Удалить">
                            </form>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <tbody>
                                    <tr>
                                        <td>ID:</td>
                                        <td>{{ $user->id }}</td>
                                    </tr>
                                    <tr>
                                        <td>Логин:</td>
                                        <td>{{ $user->login }}</td>
                                    </tr>
                                    <tr>
                                        <td>Email:</td>
                                        <td>{{ $user->email }}</td>
                                    </tr>
                                    <tr>
                                        <td>Имя:</td>
                                        <td>{{ $user->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Фамилия:</td>
                                        <td>{{ $user->surname }}</td>
                                    </tr>
                                    <tr>
                                        <td>Отчество:</td>
                                        <td>{{ $user->patronymic }}</td>
                                    </tr>
                                    <tr>
                                        <td>Возраст:</td>
                                        <td>{{ $user->age }}</td>
                                    </tr>
                                    <tr>
                                        <td>Пол:</td>
                                        <td>{{ $user->genderTitle }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
</x-layout>
