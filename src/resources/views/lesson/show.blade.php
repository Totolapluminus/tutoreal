<x-layout>
    <x-header>{{ $lesson->title }}</x-header>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex p-3">
                            <div class="mr-2">
                                <a href="{{ route('lessons.edit', ['lesson' => $lesson, 'course' => $course]) }}" class="btn btn-primary">Редактировать</a>
                            </div>
                            <form action="{{ route('lessons.destroy', ['lesson' => $lesson, 'course' => $course]) }}" method="POST">
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
                                        <td>{{ $lesson->id }}</td>
                                    </tr>
                                    <tr>
                                        <td>Название урока:</td>
                                        <td>{{ $lesson->title }}</td>
                                    </tr>
                                    <tr>
                                        <td>Описание:</td>
                                        <td><textarea class="form-control">{{ $lesson->description }}</textarea></td>
                                    </tr>
                                    <tr>
                                        <td>Видео:</td>
                                        <td>{{$lesson->video}}</td>
                                    </tr>
                                    <tr>
                                        <td>Материалы:</td>
                                        <td>{{$lesson->material}}</td>
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
