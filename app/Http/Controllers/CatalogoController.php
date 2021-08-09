<?php

namespace App\Http\Controllers;

use App\Models\Catalogue;
use Illuminate\Http\Request;

class CatalogoController extends Controller
{
    //
   public function index() {

   
    $catalogo = Catalogue::where('categoria','bodas')->get();
    $catalogo2 = Catalogue::where('categoria','postres')->get();
    $catalogo3 = Catalogue::where('categoria','infantiles')->get();
    $catalogo4 = Catalogue::where('categoria','bocaditos')->get();


        return view('web.catalogo', compact('catalogo','catalogo2','catalogo3','catalogo4'));
    }

    public function show($id){

        $catalogo = Catalogue::find($id);
      
        return view('catalogo.catalogodetalle', compact('catalogo'));
    }
}
