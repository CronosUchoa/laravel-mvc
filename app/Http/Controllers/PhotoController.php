<?php


namespace App\Http\Controllers;
use App\Models\modelAlbum;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    private $objAlbum;
    public function __construct(){
        $this->objAlbum =  new modelAlbum();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albumAll = $this->objAlbum->all()->sortBy('nomedamusica');;
         return view('dashboard', compact("albumAll"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $verificadorOK =  $this->objAlbum->create([
            'nomedamusica'=>$request->fnomedamusica,
            'artista'=>$request->fartista,
            'genero'=>$request->fgenero,
            'preco'=>$request->fpreco,
            'duracao'=>$request->fduracao,
            'urlImagem'=>$request->furlImagem

        ]);

        if($verificadorOK){
            echo "
				<script type=\"text/javascript\">
					alert(\"Grupo Cadastrado com Sucesso.\");
				</script>
			";
            $albumAll = $this->objAlbum->all()->sortBy('nomedamusica');;
            return view('dashboard', compact("albumAll"));

        }else {
            echo "
				<script type=\"text/javascript\">
					alert(\"Grupo não foi cadastrado com Sucesso.\");
				</script>
			";
            return view('cadastro');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
     {
    //     $albumAll = $this->objAlbum->all();
        //  return view('dashboard', compact("albumAll"));
        $albumAll = $this->objAlbum->find("$id");
         return view('visualizar', compact("albumAll"));

    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
