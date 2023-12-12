<style>



</style>

<x-app-layout>


    <div class="mx-4 my-2 py-5 flex flex-col text-lg">

        @include('alertas')


        <div class="my-2 py-2 bg-white px-2 border-4 border-gray-500  flex rounded-md shadow-md">
            <form action="{{ route('mostrar') }}" method="get">
                @csrf
                <label class="font-semibold  w-full" for="region">Selecciona una Region:</label>
                <select class="w-60" id="region" name="region">
                    @foreach ($regiones as $region)
                        <option value="{{ $region->id }}">{{ $region->nombre }}</option>
                    @endforeach
                </select>

                <button class="bg-blue-500 w-40 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                    type="submit">
                    filtrar
                </button>
            </form>

        </div>
        @role('admin')
            <div class="py-2 bg-white px-2 border-4 border-gray-500  flex rounded-md shadow-md">
                <form action="{{ route('crear') }}" method="post">
                    @csrf
                    <label class="font-semibold w-full" for="">Agregar region:</label>
                    <input class="w-60" type="text" name="nombre" required>
                    <button class="bg-blue-500 w-40 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                        type="submit">
                        crear
                    </button>

                </form>
            </div>

            <div class="py-2 my-2 bg-white px-2 border-4 border-gray-500  flex rounded-md shadow-md">
                <form action="{{ route('eliminar') }}" method="post">
                    @csrf
                    <label class="font-semibold w-full" for="">Eliminar una region:</label>
                    <select class="w-60" id="region" name="region" >
                        <option disabled selected>Elimine una región</option>
                        @foreach ($regiones as $region)
                            <option value="{{ $region->id }}">{{ $region->nombre }}</option>
                        @endforeach
                    </select>

                    <button class="bg-red-500 w-40 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" type="submit">
                        eliminar
                    </button>
                </form>

            </div>



            <div class="py-2 my-2 bg-white px-2 border-4 border-gray-500  flex rounded-md shadow-md">
                <form action="{{ route('asignar_rol') }}" method="post">
                    @csrf
                    <label class="font-semibold w-full" for="">Usuarios Registrados:</label>
                    <select class="w-60" id="usuario" name="usuario" >
                        <option disabled selected>Seleccione un usuario</option>
                        @foreach ($usuarios as $usuario)
                            <option value="{{ $usuario->id }}">{{ $usuario->name }}</option>
                        @endforeach
                    </select>



                    <label class="font-semibold w-full " for="">Roles:</label>
                    <select class="w-60" id="rol" name="rol" >
                        <option disabled selected>Asigna un rol</option>
                        @foreach ($roles as $rol)
                            <option value="{{ $rol->id }}">{{ $rol->name }}</option>
                        @endforeach
                    </select>

                    <button class="bg-red-500 w-40 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" type="submit">
                        asignar
                    </button>
                </form>
            </div>


            <div class="rol_users mt-2 mb-2 py-2 bg-white px-2 border-4 border-gray-500  flex rounded-md shadow-md">
                <form action="{{ route('quitar_rol') }}" method="post">
                    @csrf
                    <label class="font-semibold w-full" for="">Usuarios:</label>
                    <select class="w-60" id="usuario" name="usuario" 
                        required>
                        <option disabled selected>Seleccione un usuario</option>
                        @foreach ($usuarios as $usuario)
                            <option value="{{ $usuario->id }}">{{ $usuario->name }}</option>
                        @endforeach
                    </select>



                    <label class="font-semibold w-full" for="">Quitar Roles:</label>
                    <select class="w-60" id="rol" name="rol" 
                        required>
                        <option disabled selected>Quitar un rol</option>
                        @foreach ($roles as $rol)
                            <option value="{{ $rol->id }}">{{ $rol['name'] }}</option>
                        @endforeach
                    </select>

                    <button class="bg-red-500 w-40 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" type="submit">
                        remover rol
                    </button>
                </form>
            </div>

            <div class="rol_users mt-2 mb-2 py-2 bg-white px-2 border-4 border-gray-500  flex rounded-md shadow-md">
                <form action="{{ route('eliminarUsuario') }}" method="post">
                    @csrf
                    <label class="font-semibold w-full" for="">Eliminar Usuario:</label>
                    <select class="w-60" id="usuario" name="usuario" required>
                        <option disabled selected>Seleccione un usuario</option>
                        @foreach ($usuarios as $usuario)
                            @if(auth()->user()->id !== $usuario->id)  {{-- Evitar que el usuario autenticado aparezca en la lista --}}
                                <option value="{{ $usuario->id }}">{{ $usuario->name }}</option>
                            @endif
                        @endforeach
                    </select>
                    <button class="bg-red-500 w-45 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" type="submit">
                        Eliminar usuario
                    </button>
                </form>
            </div>
            



        @endrole

    </div>
</x-app-layout>
