@extends('templates.template')

@section('content')

<div class="place-content-start md:place-content-center ">

    <h1 class=" text-base  text-4xl m-7 text-center">@if(isset($albumAll))Edite o álbum @else Cadastre o álbum @endif<h1>

            <div class="w-full max-w-xs mx-auto">
                @if(isset($albumAll))

                <form class="bg-white shadow-md rounded px-8 pt-6 p-8 mb-4" name="formEdit" id="formCard" method="post" action="{{url("$albumAll->id/edit")}}">
                @method('PUT')


                @else

                <form class="bg-white shadow-md rounded px-8 pt-6 p-8 mb-4" name="formCard" id="formCard" method="post" action="{{url('cadastrar')}}">

                @endif
                @csrf
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="fnomedamusica">Nome da música</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-4" type='text' name="fnomedamusica" id="fnomedamusica" required placeholder="nome da musica" value="{{$albumAll->nomedamusica ?? ' '}}">

                    <label class="block text-gray-700 text-sm font-bold mb-2" for="fartista">Nome do artista ou banda</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-4" type='text' name="fartista" id="fartista" placeholder="artista ou nome da banda" value="{{$albumAll->artista ?? ' '}}">

                    <label class="block text-gray-700 text-sm font-bold mb-2" for="fgenero">Gênero musical</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-4" type='text' name="fgenero" id="fgenero" placeholder="gênero" value="{{$albumAll->genero ?? ' '}}">

                    <label class="block text-gray-700 text-sm font-bold mb-2" for="fpreco">Preço</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-4" type='text' name="fpreco" id="fpreco" placeholder="preço" value="{{$albumAll->preco ?? ' '}}">

                    <label class="block text-gray-700 text-sm font-bold mb-2" for="fduracao">Duração em minutos</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-4" type='number' name="fduracao" id="fduracao" required placeholder="duração em minutos" value="{{$albumAll->duracao ?? ' '}}">

                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">URL da imagem</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-4" type='text' name="furlImagem" id="furlImagem" placeholder="link da imagem" value="{{$albumAll->urlImagem ?? ' '}}">

                    <div class="flex justify-center ">
                    <button class="bg-gray-800 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded" type='submit'>@if(isset($albumAll))Editar @else Cadastrar @endif</button>
                    </div>
                </form>

            </div>


</div>


@endsection
