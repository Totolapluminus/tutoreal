<x-layout>
    <x-header>Создать тему</x-header>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <form action="{{route('topics.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Наименование">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Добавить">
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-layout>
