<x-layout>
    <x-header>Создать урок</x-header>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <form action="{{route('lessons.store', ['course' => $course])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="title" value="{{old('title')}}" class="form-control" placeholder="Название урока">
                    </div>
                    <div class="form-group">
                        <input type="text" name="description" value="{{old('description')}}" class="form-control" placeholder="Описание урока">
                    </div>
                    <div class="form-group">
                        <label for="video">Видео урока</label>
                        <input type="file" name="video" value="{{old('video')}}" class="form-control" placeholder="Видеоматериал">
                    </div>
                    <div class="form-group">
                        <label for="material">Архив урока</label>
                        <input type="file" name="material" value="{{old('material')}}" class="form-control" placeholder="Архив с материалами">
                    </div>


                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Создать">
                    </div>
                </form>
                </form>
            </div>
        </div>
    </section>
</x-layout>
