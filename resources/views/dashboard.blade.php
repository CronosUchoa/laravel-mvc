@extends('templates.template')

@section('content')

<div class="place-content-start md:place-content-center ">
    <h1 class=" text-base  text-4xl m-7 text-center">Listar Álbuns: <h1>
            <div class="flex justify-center">
                <form class="bg-white shadow-md rounded px-8 pt-6 p-8 mb-4" name="formFiltro" id="formCard" method="post" action="{{url("pesquisar")}}"">
                    @csrf
                    <select  name="search[]" class="form-control">
                    @foreach($albumAll as $albumAlls)
                    <option>{{$albumAlls->genero}}</option>"
                    @endforeach
                    </select>
                    <!-- <input type="text" name="search" placeholder="Filtrar por gênero"> -->
                    <button class="bg-gray-800 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded" type='submit'>Pesquisar</button>
                </form>
            </div>

            <table class="table-auto mx-auto bg-white shadow-md rounded px-8 pt-6 p-8 mb-4">
                <thead>
                    <tr>
                        <th class="px-4 py-2">Nome da música</th>
                        <th class="px-4 py-2">.</th>
                        <th class="px-4 py-2">.</th>
                        <th class="px-4 py-2">.</th>
                        <th class="px-4 py-2"><a  href="{{url("cadastrar/create")}}" class="bg-gray-800 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded" data-toggle="modal" data-target="#exampleModalTwo">Cadastrar</a></th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($albumAll as $albumAlls)


                    <tr>
                        <td class="border px-4 py-2 text-center">{{$albumAlls->nomedamusica}}</td>
                        <td class="border px-4 py-2"><a href="{{url("visualizar/$albumAlls->id")}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">visualizar</a></td>
                        <td class="border px-4 py-2"><a href="{{url("$albumAlls->id/edit")}}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Editar</a></td>
                        <td class="border px-4 py-2"><a href="{{url("$albumAlls->id")}}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Deletar</a></td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
</div>


@endsection
