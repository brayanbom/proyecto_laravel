<div>
    @if (session('quitar_rol'))
        <div class="text-white font-bold p-3 bg-pink-900">
            {{ session('quitar_rol') }}
        </div>
    @endif

    @if (session('usuario'))
        <div class="text-white font-bold p-3 bg-purple-700">
            {{ session('usuario') }}
        </div>
    @endif

    @if (session('sitio_turistico_actualizado'))
        <div class="text-white font-bold p-3 bg-yellow-500">
            {{ session('sitio_turistico_actualizado') }}
        </div>
    @endif

    @if (session('eliminar_sitio'))
        <div class="text-white font-bold p-3 bg-red-500">
            {{ session('eliminar_sitio') }}
        </div>
    @endif

    @if (session('success'))
        <div class="text-white font-bold p-3 bg-green-500">
            {{ session('success') }}
        </div>
    @endif

    @if (session('creaste'))
        <div class="text-white font-bold p-3 bg-blue-500">
            {{ session('creaste') }}
        </div>
    @endif

    @if (session('danger'))
        <div class="text-white font-bold p-3 bg-red-500">
            {{ session('danger') }}
        </div>
    @endif
</div>