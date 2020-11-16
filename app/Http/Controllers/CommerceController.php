<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commerce;
use Illuminate\Support\Facades\DB;

class CommerceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$commerces=Commerce::all();
        $commerces=Commerce::paginate(5);
        // test dd($commerces);
            // test echo $commerces;
            return view('commerce.list',compact('commerces'));
    }
     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $commerce = DB::table('commerces')->delete($id);
        return redirect()->route('commerces.index')->with('success','suppression réussie');

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('commerce.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //  dd($request);
       $this->validate($request,[
           'nom'=>'required',
           'src'=>'required',
           'prix'=>'required|numeric',
           'marque'=>'required',
           'quantite'=>'required|numeric', 
           'description'=>'required',
                            ]);
    
    $com=$request->all();
    Commerce::create($com);//insertion dans la basz par Eloquent
    return redirect()->route('commerces.index')->with('success','success Ajout');
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $commerce = DB::table('commerces')->find($id);
       //dd($commerce); test
      return view('commerce.show',compact('commerce'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //dd($id);
        $com=DB::table('commerces')->find($id);
        //dd($com);
      return view('commerce.edit',compact('com')) ; 
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
        $this->validate($request,[
            'nom'=>'required',
            'src'=>'required',
           
            'marque'=>'required',
            'prix'=>'required|numeric',
            'quantite'=>'required|numeric', 
            'description'=>'required',
                             ]);
     
    //$com=$request->all();
    // Commerce::update($com);//insertion dans la basz par Eloquent
     Commerce::where('id', $id)->update($request->all());
     return redirect()->route('commerces.index')->with('success','success modification');
    }

   
}
