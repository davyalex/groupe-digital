<?php

namespace App\Http\Controllers;
use App\Models\Offre;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $category=Category::orderBy('id','asc')->paginate(3);
        // return view('backend.gestion_offre.offre_create',compact('category'));
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $category=Category::orderBy('id','asc')->paginate(3);
        // return view('backend.gestion_offre.offre_create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data=$request->validate([
            'libelle'=>'required'
        ]);


        $category=Category::firstOrCreate([
            'libelle'=>request('libelle')
        ]);
        $category->save();
        return back()->with('SuccessMsg', $request->libelle );

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
    public function edit(Category $category)
    {
        //
      
        return view('backend.gestion_cat.cat_edit',['categories'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
        $data=$request->validate([
            'libelle'=>'required'
        ]);


        $category->update($request->all());
     
        return redirect()->route('cat.create')->with('SuccessMsg', 'Modifiaction réussi' );
            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
        $category->delete();
        return back()->with('DestroyMsg', $category->libelle );
    }
}
