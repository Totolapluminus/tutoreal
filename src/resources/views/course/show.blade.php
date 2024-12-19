<x-layout>
    <x-header>{{ $course->title }}</x-header>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex p-3">
                            <div class="mr-2">
                                <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-primary">Редактировать</a>
                            </div>
                            <form action="{{ route('courses.destroy', $course->id) }}" method="POST">
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
                                        <td>{{ $course->id }}</td>
                                    </tr>
                                    <tr>
                                        <td>Изображение курса (превью):</td>
                                        <td>{{ $course->preview_image }}</td>
                                    </tr>
                                    <tr>
                                        <td>Название курса:</td>
                                        <td>{{ $course->title }}</td>
                                    </tr>
                                    <tr>
                                        <td>Описание:</td>
                                        <td><textarea class="form-control">{{ $course->description }}</textarea></td>
                                    </tr>
                                    <tr>
                                        <td>Опубликован:</td>
                                        <td><input class="form-check-input mx-auto" type="checkbox" disabled {{$course->is_published == 1 ? ' checked' : ''}}></td>
                                    </tr>
                                    <tr>
                                        <td>Премиум:</td>
                                        <td><input class="form-check-input mx-auto" type="checkbox" disabled {{$course->is_premium == 1 ? ' checked' : ''}}></td>
                                    </tr>
                                    <tr>
                                        <td>Автор:</td>
                                        <td>
                                            @foreach ($authors as $author)
                                            <a href="{{route('users.show', $author->id)}}">
                                                {{$author->login}}
                                                </a>
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Зрители:</td>
                                        <td>
                                            @foreach ($viewers as $viewer)
                                            <a class="pr-1" href="{{route('users.show', $viewer->id)}}">
                                                {{$viewer->login}}
                                                </a>
                                            @endforeach
                                        </td>
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

    <x-header>Уроки курса</x-header>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-tools">
                                <a href="{{ route('lessons.create', ['course' => $course]) }}" class="btn btn-primary">Добавить урок</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Название</th>
                                        <th>Описание</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($lessons as $lesson)
                                        <tr>
                                            <td>{{ $lesson->id }}</td>
                                            <td><a href="{{ route('lessons.show', ['lesson' => $lesson, 'course' => $course]) }}">{{ $lesson->title }}</a></td>
                                            <td><textarea class="form-control">{{ $lesson->description }}</textarea></td>
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

    <x-header>Отзывы курса</x-header>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            {{-- <div class="card-tools">
                                <a href="{{ route('reviews.create', ['course' => $course]) }}" class="btn btn-primary">Добавить урок</a>
                            </div> --}}
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Автор</th>
                                        <th>Содержание</th>
                                        <th>Оценка</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($reviews as $review)
                                        <tr>
                                            <td><a href="{{ route('users.show', $review->user->id) }}">{{ $review->user->name }}</a></td>
                                            <td><a href="{{ route('reviews.show', ['review' => $review, 'course' => $course]) }}">{{ $review->title }}</a></td>
                                            <td><textarea class="form-control">{{ $review->content }}</textarea></td>
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
