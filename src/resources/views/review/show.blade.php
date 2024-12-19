<x-layout>
    <x-header>Отзыв {{ $review->user->login }}</x-header>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex p-3">
                            {{-- <div class="mr-2">
                                <a href="{{ route('reviews.edit', ['review' => $review, 'course' => $course]) }}" class="btn btn-primary">Редактировать</a>
                            </div> --}}
                            <form action="{{ route('reviews.destroy', ['review' => $review, 'course' => $course]) }}" method="POST">
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
                                        <td>{{ $review->id }}</td>
                                    </tr>
                                    <tr>
                                        <td>Автор:</td>
                                        <td>{{ $review->user->login }}</td>
                                    </tr>
                                    <tr>
                                        <td>Курс:</td>
                                        <td>{{ $review->course->title }}</td>
                                    </tr>
                                    <tr>
                                        <td>Содержание:</td>
                                        <td><textarea class="form-control">{{$review->content}}</textarea></td>
                                    </tr>
                                    <tr>
                                        <td>Оценка:</td>
                                        <td>{{$review->grade}}</td>
                                    </tr>
                                    <tr>
                                        <td>Оставлен:</td>
                                        <td>{{$review->created_at}}</td>
                                    </tr>
                                    <tr>
                                        <td>Изменен:</td>
                                        <td>{{$review->updated_at}}</td>
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
