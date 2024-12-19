<x-layout>
    <x-header>Редактировать урок</x-header>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <form action="{{route('lessons.update', ['lesson' => $lesson, 'course' => $course])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <input type="text" name="title" value="{{$lesson->title}}" class="form-control" placeholder="Название урока">
                    </div>
                    <div class="form-group">
                        <input type="text" name="description" value="{{$lesson->description}}" class="form-control" placeholder="Описание урока">
                    </div>
                    <div class="form-group">
                        <label for="video">Видео урока</label>
                        <input type="file" name="video" value="{{$lesson->video}}" class="form-control" placeholder="Видеоматериал">
                    </div>
                    <div class="form-group">
                        <label for="material">Архив урока</label>
                        <input type="file" name="material" value="{{$lesson->material}}" class="form-control" placeholder="Архив с материалами">
                    </div>


                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Изменить">
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-layout>
