<x-main-layout>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <p class="text-center display-3">Laboratório de FileSystem</p>
                <hr>
                <div class="d-flex gap-5">
                    <a href="{{ route('storage.local.create') }}" class="btn btn-primary">Criar arquivo no Storage
                        Local</a>
                        <a href="{{ route('storage.local.append') }}" class="btn btn-primary">Acrescentar arquivo no Storage
                        Local</a>
                </div>
            </div>
        </div>
    </div>
</x-main-layout>
