@extends('layouts.app')

@section('title', 'Registrarse')

@section('content')

    <!--<script type="text/javascript">
        function disableSending() {
            document.loginform.submit.disabled = !document.loginform.terms.checked;
        };
    </script>-->


    <div class="block mx-auto my-12 p-8 bg-white w-1/3 border-gray-200 rounded-lg shadow-lg">

        <h1 class="text-3xl text-center font-bold">Regístrese aquí</h1>

            <form class="mt-4" method="POST" action="">
                @csrf

                <input type="text" class= "border border-gray-200 rounded-md bg-gray-200 w-full 
                text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Nombre" 
                id="name" name="name">

                @error('name')
                    <p class="border border-red-500 rounded-md bg-red-100 w-full 
                    text-red-600 p-2 my-2">* {{ $message }}</p>
                @enderror

                <input type="email" class= "border border-gray-200 rounded-md bg-gray-200 w-full 
                text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Correo" 
                id="email" name="email">

                @error('email')
                    <p class="border border-red-500 rounded-md bg-red-100 w-full 
                    text-red-600 p-2 my-2">* {{ $message }}</p>
                @enderror

                <input type="password" class= "border border-gray-200 rounded-md bg-gray-200 w-full 
                text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Contraseña" 
                id="password" name="password">

                @error('password')
                    <p class="border border-red-500 rounded-md bg-red-100 w-full 
                    text-red-600 p-2 my-2">* {{ $message }}</p>
                @enderror

                <input type="password" class= "border border-gray-200 rounded-md bg-gray-200 w-full 
                text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Confirmar Contraseña" 
                id="password_confirmation" name="password_confirmation">

                
                <!--<div class="terms">
                <input type="checkbox" name="terms" onclick="disableSending()">
                <label for="terms"><a href="./politicaprivacidad.html">Acepto Términos Y Condiciones</a></label>
                </div> -->

                <button type="submit" class="rounded-md bg-blue-500 w-full text-lg 
                text-white font-semibold p-2 my-3 hover:bg-blue-600">¡Regístrese ya!</button>

            </form>

    </div>

@endsection