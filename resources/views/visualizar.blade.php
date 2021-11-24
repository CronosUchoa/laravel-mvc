
 @extends('templates.template')

@section('content')

<div class="place-content-start md:place-content-center ">
<h1 class=" text-base  text-4xl m-7 text-center">Detalhes da música: <h1>
<table class="table-auto mx-auto">
 <thead>
   <tr>
     <th class="px-4 py-2">Nome da música</th>
     <th class="px-4 py-2">Artista</th>
     <th class="px-4 py-2">Gênero</th>
     <th class="px-4 py-2">Preço</th>
     <th class="px-4 py-2">Duração da música em minutos</th>
     <th class="px-4 py-2"><a href="http://127.0.0.1:8000/dashboard" class="bg-gray-800 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded" data-toggle="modal" data-target="#exampleModalTwo">Voltar pra página inicial</a></th>
   </tr>
 </thead>
 <tbody>



    <tr>
     <td class="border px-4 py-2 text-center">{{$albumAll->nomedamusica}}</td>
     <td class="border px-4 py-2 text-center">{{$albumAll->artista}}</td>
     <td class="border px-4 py-2 text-center">{{$albumAll->genero}}</td>
     <td class="border px-4 py-2 text-center">{{$albumAll->preco}}</td>
     <td class="border px-4 py-2 text-center">{{$albumAll->duracao}}</td>
   </tr>

 </tbody>
</table>
        <img src="{{$albumAll->urlImagem}}" class="w-1/4 mx-auto m-7 border-double border-4 border-light-blue-500 rounded-full "   alt="Imagem da banda ou artista">


</div>


@endsection
