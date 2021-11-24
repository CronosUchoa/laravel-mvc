
 @extends('templates.template')

@section('content')

<div class="place-content-start md:place-content-center ">
<h1 class=" text-base  text-4xl m-7 text-center">Listar Álbuns: <h1>
<table class="table-auto mx-auto">
 <thead>
   <tr>
     <th class="px-4 py-2">Nome do álbum</th>
     <th class="px-4 py-2">.</th>
     <th class="px-4 py-2">.</th>
     <th class="px-4 py-2">.</th>
     <th class="px-4 py-2"><button class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded">Cadastrar</button></th>
   </tr>
 </thead>
 <tbody>
   <tr>
     <td class="border px-4 py-2 text-center">Djonga</td>
     <td class="border px-4 py-2"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">visualizar</button></td>
     <td class="border px-4 py-2"><button class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Editar</button></td>
     <td class="border px-4 py-2"><button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Deletar</button></td>
   </tr>
   <tr>
     <td class="border px-4 py-2 text-center">Outro álbum do djonga</td>

     <td class="border px-4 py-2"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">visualizar</button></td>
     <td class="border px-4 py-2"><button class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Editar</button></td>
     <td class="border px-4 py-2"><button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Deletar</button></td>

   </tr>
 </tbody>
</table>
</div>


@endsection
