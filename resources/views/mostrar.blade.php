{{-- <style>
    .ver
    {
        display: block;
        margin-right: auto;
        margin-left: auto;
        margin-bottom: 5px;
        width: 200px;
    }

    
</style> --}}

@php
    use Illuminate\Support\Str;
@endphp

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           {{$region->nombre}}
        </h2>

    </x-slot>

    @role('admin')
    <div class="m-3">
        <a  class="bg-green-500  hover:bg-green-700 mb-5 text-white font-bold py-2 px-4 rounded" href="{{route('crears')}}">Crear</a>     
    </div>
    @endrole
    <div class=" flex flex-wrap justify-center">
        @foreach ($region->sitios as $data)
            <div class="card p-4 mx-3 my-6" style="width: 18rem;">
                <img src="{{asset($data->imagen)}}" class="card-img-top " alt="...">
                <div class="card-body">
                    <h2 class="text-lg font-semibold">{{$data->nombre}}</h2>
                    <p class="card-text mb-3">{{Str::limit($data->descripcion, 50, '..')}}</p>
                    <a href="{{route('sitios_turisticos', ['id' => $data->id])}}" class="w-52 mb-1 mr-auto my-auto btn btn-primary ">Ver</a>

                    @role('admin')

                    <form method="post" action="{{ route('eliminars', ['id' => $data->id]) }}">
                        @csrf
                        @method('delete')

                        <input type="submit" class="w-52 mb-1 mr-auto my-auto bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded  btn btn-warning" value="Eliminar">
                       

                        
                    </form>
                    
                    <a href="{{ route('edits', ['id' => $data->id]) }}" class="w-52 mb-1 mr-auto my-auto  bg-yellow-400 hover:bg-yellow-700   text-white font-bold py-2 px-4 rounded btn btn-warning  ">Editar</a>
                    @endrole
                </div>
            </div>

            
        @endforeach
    </div>

    

</x-app-layout>
