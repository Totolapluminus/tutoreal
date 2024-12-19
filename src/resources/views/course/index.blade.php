<x-layout>
    <x-header>Курсы</x-header>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-tools">
                                <a href="{{ route('courses.create') }}" class="btn btn-primary">Добавить курс</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Превью</th>
                                        <th>Название</th>
                                        <th>Описание</th>
                                        <th>Опубликован</th>
                                        <th>Премиум</th>
                                        <th>Автор</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($courses as $course)
                                        <tr>
                                            <td>{{ $course->id }}</td>
                                            <td><img class="w-25 h-25" src="{{ asset('storage/' . $course->preview_image) }}" alt=""></td>
                                            <td><a href="{{ route('courses.show', $course->id) }}">{{ $course->title }}</a></td>
                                            <td><textarea class="form-control">{{ $course->description }}</textarea></td>
                                            <td><input class="form-check-input mx-auto" type="checkbox" disabled {{$course->is_published == 1 ? ' checked' : ''}}></td>
                                            <td><input class="form-check-input mx-auto" type="checkbox" disabled {{$course->is_premium == 1 ? ' checked' : ''}}></td>
                                            <td>{{ $course->users()->where('role', 'author')->value('login')}}</td>
                                        </tr>
                                    @endforeach
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
