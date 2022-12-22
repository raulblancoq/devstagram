@extends('layouts.app')

@section('titulo')
    Edita tu perfil {{$user->username}}
@endsection

@section('contenido')
    <div class="md:flex md:justify-center">
        <div class="md:w-1/2 bg-white shadow p-6">
            <form action="{{ route('perfil.store',$user)}}" method="POST" class="mt-10 md:mt-0" enctype="multipart/form-data">
                @csrf
                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">Username</label> 
                    <input type="text" id="username" name="username" value="{{ $user->username }}" placeholder="Ingresa tu username"
                    class="border p-3 w-full rounded-lg @error('username') border-red-500 @enderror">
                    @error('username')
                        <p class="text-red-600 p-3 text-sm font-bold">{{ $message}}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="imagen" class="mb-2 block uppercase text-gray-500 font-bold">Imagen</label> 
                    <input type="file" id="imagen" name="imagen" value="" accept=".jpg,.jpeg,.png"
                    class="border p-3 w-full rounded-lg ">
                    @error('imagen')
                        <p class="text-red-600 p-3 text-sm font-bold">{{ $message}}</p>
                    @enderror
                </div>
                <input type="submit" value="Guardar Cambios" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer
                uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </div>
@endsection