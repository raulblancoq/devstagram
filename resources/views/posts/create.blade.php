@extends('layouts.app')

@section('titulo')
    Crea una publicación
@endsection

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush
@section('contenido')
    <div class="md:flex md:items-center">
        <div class="md:w-1/2 px-10">
            <form action="{{ route('imagenes.store')}}" id="dropzone" method="POST" enctype="multipart/form-data"
            class="dropzone border-dashed border-2 w-full h-96 rounded flex flex-col justify-center items-center">
                @csrf
            </form>
            @error('imagen')
                <p class="text-red-600 p-3 text-sm font-bold">{{ $message}}</p>
            @enderror
        </div>
        <div class="md:w-1/2 p-10 bg-white rounded-lg shadow-xl mt-10 md:mt-0">
            <form action=" {{route('posts.store')}}" method="POST" novalidate>
                @csrf
                <div class="mb-5">
                    <label for="titulo" class="mb-2 block uppercase text-gray-500 font-bold">Título</label> 
                    <input type="text" id="titulo" name="titulo" placeholder="Titulo de la publicación"
                    class="border p-3 w-full rounded-lg @error('titulo') border-red-500 @enderror"
                    value="{{old('titulo')}}">
                    @error('titulo')
                        <p class="text-red-600 p-3 text-sm font-bold">{{ $message}}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="descripcion" class="mb-2 block uppercase text-gray-500 font-bold">Descripción</label> 
                    <textarea name="descripcion" id="descripcion" cols="10" rows="2" placeholder="Descripción"
                    class="border p-3 w-full rounded-lg @error('descripcion') border-red-500 @enderror"
                    value="{{old('descripcion')}}"
                    >

                    </textarea>
                    @error('descripcion')
                        <p class="text-red-600 p-3 text-sm font-bold">{{ $message}}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <input type="hidden" name="imagen" value="{{ old('imagen')}}">
                </div>
                <input type="submit" value="Publicar" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer
                uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </div>
@endsection