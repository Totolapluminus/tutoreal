<x-layout>
    <x-header>Редактировать тему</x-header>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <form action="{{route('topics.update', $topic->id)}}" method="POST">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Наименование" value="{{$topic->title}}">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Изменить">
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-layout>
