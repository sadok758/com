<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
      $categories=Categorie::paginate(5);
      
          return view('categorie.list',compact('categories'));  
    }
    public function destroy(Categorie $categorie)
    {
        $categorie = DB::table('categories')->delete($id);
        return redirect()->route('categorie.index')->with('success','suppression réussie');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('categorie.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nom'=>'required',
            'src'=>'required',
            ]);
     
     $cat=$request->all();
     Categorie::create($com);//insertion dans la basz par Eloquent
     return redirect()->route('categorie.index')->with('success','success Ajout');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function show(Categorie $categorie)
    {
        $categorie = DB::table('categories')->find($id);
       //dd($commerce); test
      return view('categorie.show',compact('categorie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cat=DB::table('categories')->find($id);
        //dd($com);
      return view('categorie.edit',compact('cat')) ; 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categorie $categorie)
    {
        $this->validate($request,[
            'nom'=>'required',
            'src'=>'required',
            ]);
    
    $data = request()->all();
    Categorie::find($id)->update ($data);// il enregistre 
    return redirect()->to('categorie')->with('success','success modification');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    
}
