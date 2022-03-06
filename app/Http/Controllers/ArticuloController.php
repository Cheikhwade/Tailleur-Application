<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;

class ArticuloController extends Controller
{
     public function __construct(){
         $this->middleware('auth');
     }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articulos = Articulo::all();
        return view('articulo.index')->with('articulos',$articulos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articulo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $articulos = new Articulo();

        $articulos->codigo = $request->get('codigo');
        $articulos->descripcion = $request->get('descripcion');
        $articulos->cantidad = $request->get('cantidad');
        $articulos->precio = $request->get('precio');
        $articulos->mesure = $request->get('mesure');
        $articulos->avance = $request->get('avance');
        $articulos->poitrine = $request->get('poitrine');
        $articulos->epaule = $request->get('epaule');
        $articulos->taille = $request->get('taille');
        $articulos->manche = $request->get('manche');
        $articulos->fesse = $request->get('fesse');
        $articulos->cou = $request->get('cou');
        $articulos->tourh = $request->get('tourh');
        $articulos->longp = $request->get('longp');
        $articulos->ceint = $request->get('ceint');
        $articulos->longb = $request->get('longb');
        $articulos->longj = $request->get('longj');
        $articulos->cuisse = $request->get('cuisse');
        $articulos->manchec = $request->get('manchec');
        $articulos->manchel = $request->get('manchel');

        $articulos->save();

        return redirect('/articulos');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $articulo = Articulo::find($id);
        return view('articulo.edit')->with('articulo',$articulo);
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
        $articulo = Articulo::find($id);

        $articulo->codigo = $request->get('codigo');
        $articulo->descripcion = $request->get('descripcion');
        $articulo->cantidad = $request->get('cantidad');
        $articulo->precio = $request->get('precio');
        $articulo->mesure = $request->get('mesure');
        $articulo->avance = $request->get('avance');
        $articulo->poitrine = $request->get('poitrine');
        $articulo->epaule = $request->get('epaule');
        $articulo->taille = $request->get('taille');
        $articulo->manche = $request->get('manche');
        $articulo->fesse = $request->get('fesse');
        $articulo->cou = $request->get('cou');
        $articulo->tourh = $request->get('tourh');
        $articulo->longp = $request->get('longp');
        $articulo->ceint = $request->get('ceint');
        $articulo->longb = $request->get('longb');
        $articulo->longj = $request->get('longj');
        $articulo->cuisse = $request->get('cuisse');
        $articulo->manchec = $request->get('manchec');
        $articulo->manchel = $request->get('manchel');

        $articulo->save();

        return redirect('/articulos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articulo = Articulo::find($id);
        $articulo->delete();
        return redirect('/articulos');
    }
}
