@extends('layouts.app')

@section('titulo')
    inicia sesión en Devstagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12">
            <img src="{{ asset('img/login.jpg')}}" alt="Imagen de login de usuario">
        </div>
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{ route('login') }}" method="POST" novalidate>
                @csrf
                @if (session('mensaje'))
                    <p class="text-red-600 p-3 text-sm font-bold">{{ session('mensaje') }}</p>
                @endif
                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">Email</label>
                    <input type="email" id="email" name="email" placeholder="Tu email"
                    class="border p-3 w-full rounded-lg @error('username') border-red-500 @enderror"
                    value="{{old('email')}}">
                    @error('email')
                        <p class="text-red-600 p-3 text-sm font-bold">{{ $message}}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Contraseña</label>
                    <input type="password" id="password" name="password" placeholder="Tu contraseña"
                    class="border p-3 w-full rounded-lg @error('username') border-red-500 @enderror">
                    @error('password')
                        <p class="text-red-600 p-3 text-sm font-bold">{{ $message}}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <input type="checkbox" name="remember"> 
                        <label class="text-gray-500 text-sm" for="">
                            Mantener mi sesión abierta
                        </label>
                </div>
                <input type="submit" value="Iniciar Sesión" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer
                uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </div>
@endsection