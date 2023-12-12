{{-- <style>
    .formulario label
    {
        display: flex;
        flex-direction: column;
        margin-bottom: 15px;
    }

</style> --}}

<x-app-layout>
    
    <div class="p-5">
    
        <form action="{{route('updates',['id' => $id->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')


            <div class="mb-4">
                <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
                <input type="text" value="{{$id->nombre}}" name="nombre" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline-blue focus:border-blue-300">
            </div>

            <div class="mb-4">
                <label for="descripcion" class="block text-gray-700 text-sm font-bold mb-2">Descripción:</label>
                <textarea id="descripcion" name="descripcion" rows="10" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline-blue focus:border-blue-300">{{$id->descripcion}}</textarea>
            </div>

            <div class="mb-4">
                <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Precios:</label>
                <input type="text" value="{{$id->precios}}" name="precios" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline-blue focus:border-blue-300">
            </div>
            
            <div class="mb-4">
                <label for="imagen" class="block text-gray-700 text-sm font-bold mb-2">Imagen Actual:</label>
                <img src="{{asset($id->imagen)}}" width="200" height="200"   alt="">
            </div>

            <div class="mb-4">
                <label for="imagen" class="block text-gray-700 text-sm font-bold mb-2">Imagen Nueva:</label>
                <input type="file" id="imagen" name="imagen" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline-blue focus:border-blue-300">
                <p class="text-gray-600 text-xs mt-2">Sube una imagen en formato JPG, JPEG, o PNG.</p>
            </div>
            
            
            

            
        
            <div class="mb-4 flex items-center">
                <label for="region_id" class="mr-2 text-gray-700 text-sm font-bold">Región Actual:</label>
                <select id="region_id" name="region_id" class="w-40 h-10 p-2 border border-gray-300 rounded-md overflow-y-auto">
                    <option id="defecto" value="{{ $id->region->id }}">{{ $id->region->nombre }}</option>
                    @foreach($regiones as $region)
                        <option value="{{ $region->id }}">{{ $region->nombre }}</option>
                    @endforeach
                </select>
            </div>
            
            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                Actualizar
            </button>
            
        
        </form>
        
    </div>
        
        



</x-app-layout>
  
<script>
    const region_id = document.getElementById('region_id');
    const defecto = document.getElementById('defecto');

    region_id.addEventListener('click', function () {
        defecto.style.display = 'none'; // Oculta la opción
    });
</script>