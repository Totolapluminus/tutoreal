<x-layout>
    <x-header>Редактировать пользователя</x-header>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <form action="{{route('courses.update', $course->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <input type="text" name="title" value="{{$course->title}}" class="form-control" placeholder="Название курса">
                    </div>
                    <div class="form-group">
                        <input type="text" name="description" value="{{$course->title}}" class="form-control" placeholder="Описание курса">
                    </div>
                    <div class="form-group">
                        <label for="is_premium">Превью курса</label>
                        <input type="file" name="preview_image" value="{{$course->preview_image}}" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="is_published">Опубликовать</label>
                        <input {{$course->is_published == 1 ? ' checked' : ''}} class=""  type="checkbox" name="is_published">
                    </div>
                    <div class="form-group">
                        <label for="is_premium">Сделать премиум</label>
                        <input {{$course->is_premium == 1 ? ' checked' : ''}} class="" type="checkbox" name="is_premium">
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Добавить">
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-layout>
