@extends('templates.template')

@section('content')

<div class="place-content-start md:place-content-center ">
<div class="flex justify-end ">
        <a href="http://127.0.0.1:8000/dashboard" class="bg-gray-800 hover:bg-gray-600 text-white font-bold py-2 px-3 rounded m-2">Voltar pra página inicial</a>
    </div>
    <h1 class=" text-base  text-4xl m-7 text-center">Cadastre o álbum: <h1>

            <div class="w-full max-w-xs mx-auto">
                <form class="bg-white shadow-md rounded px-8 pt-6 p-8 mb-4" name="formCard" id="formCard" method="post" action="{{url('cadastrar')}}">
                    @csrf

                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-4" type='text' name="fnomedamusica" id="fnomedamusica" required placeholder="nome da musica">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-4" type='text' name="fartista" id="fartista" placeholder="artista ou nome da banda">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-4" type='text' name="fgenero" id="fgenero" placeholder="gênero">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-4" type='text' name="fpreco" id="fpreco" placeholder="preço">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-4" type='number' name="fduracao" id="fduracao" required placeholder="duração em minutos">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-4" type='text' name="furlImagem" id="furlImagem" placeholder="link da imagem">
                    <div class="flex justify-center ">
                    <button class="bg-gray-800 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded" type='submit'>Enviar</button>
                    </div>
                </form>

            </div>


</div>


@endsection
