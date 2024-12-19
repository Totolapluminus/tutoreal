<x-layout>
    <x-header>Создать курс</x-header>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <form action="{{route('courses.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="title" value="{{old('title')}}" class="form-control" placeholder="Название курса">
                    </div>
                    <div class="form-group">
                        <input type="text" name="description" value="{{old('description')}}" class="form-control" placeholder="Описание курса">
                    </div>
                    <div class="form-group">
                        <label for="is_premium">Превью курса</label>
                        <input type="file" name="preview_image" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="is_published">Опубликовать</label>
                        <input class="" type="checkbox" name="is_published">
                    </div>
                    <div class="form-group">
                        <label for="is_premium">Сделать премиум</label>
                        <input class="" type="checkbox" name="is_premium">
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Добавить">
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-layout>
