<x-main-layout>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <p class="text-center display-3">Laboratório de FileSystem</p>
                <hr>
                <div class="d-flex gap-5 mb-5">
                    <a href="{{ route('storage.local.create') }}" class="btn btn-primary">Criar arquivo no Storage
                        Local</a>
                    <a href="{{ route('storage.local.append') }}" class="btn btn-primary">Acrescentar arquivo no Storage
                        Local</a>
                    <a href="{{ route('storage.local.read') }}" class="btn btn-primary">Ler conteúdo do Storage
                        Local</a>
                    <a href="{{ route('storage.local.read.multi') }}" class="btn btn-primary">Ler arquivo com múltiplas
                        linhas</a>
                </div>
                <div class="d-flex gap-5 mb-5"><a href="{{ route('storage.local.check.file') }}"
                        class="btn btn-primary">Verificar a existência de arquivo</a>
                    <a href="{{ route('storage.local.store.json') }}" class="btn btn-primary">Guardar JSON</a>
                    <a href="{{ route('storage.local.read.json') }}" class="btn btn-primary">Ler JSON</a>
                </div>
            </div>
        </div>
    </div>
</x-main-layout>
