

<x-app-layout>
    
    
    <div class="max-w-screen-lg mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4">{{$id->nombre}}</h1>
        <p class="text-gray-700 mb-4">{{$id->descripcion}}</p>
        <p class="text-green-500 font-bold mb-4">Precio: {{$id->precios}}</p>
        <img src="{{ asset($id->imagen) }}" class="w-full max-w-lg h-auto mb-4" alt="Imagen del producto">
        
    </div>
    
    
    
</x-app-layout>
