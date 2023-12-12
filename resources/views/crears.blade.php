<x-app-layout>

<div class="p-5">  
    
    <form action="{{route('insertars')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
            <input type="text"  name="nombre" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline-blue focus:border-blue-300">
        </div>

        
        
        <div class="mb-4">
            <label for="descripcion" class="block text-gray-700 text-sm font-bold mb-2">Descripción:</label>
            <textarea id="descripcion" name="descripcion" rows="10" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline-blue focus:border-blue-300"></textarea>
        </div>
        
        <div class="mb-4">
            <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Precios:</label>
            <input type="text"  name="precios" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline-blue focus:border-blue-300">
        </div>
        
        
        <div class="mb-4">
            <label for="imagen" class="block text-gray-700 text-sm font-bold mb-2">Imagen:</label>
            <input type="file" id="imagen" name="imagen" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline-blue focus:border-blue-300">
            <p class="text-gray-600 text-xs mt-2">Sube una imagen en formato JPG, JPEG, o PNG.</p>
        </div>
        

        


        <div class="mb-4">
            <label for="region_id" class="block text-gray-700 text-sm font-bold mb-2">Selecciona una Región:</label>
            <select id="region_id" name="region_id" class="block w-full p-2 border border-gray-300 rounded-md">
                @foreach($regiones as $region)
                    <option value="{{ $region->id }}">{{ $region->nombre }}</option>
                @endforeach
            </select>
        </div>
        
        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
            Crear
        </button>
        


    </form>

</div>  

</x-app-layout>
