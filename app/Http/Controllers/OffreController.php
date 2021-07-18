<?php

namespace App\Http\Controllers;
use App\Models\Type;
use App\Models\Offre;
use App\Models\Category;
use Illuminate\Http\Request;
use Spatie\Searchable\Search;
// use App\Models\Category_Offre;

class OffreController extends Controller
{


public function __construct(){
    
  
    $this->middleware('admin')->except('index','search','useroffre','filtre');
   

}


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    //   if (request('category')) {
    //      return "OK";
    //   }
        $type = Type::all();
        $offre=Offre::orderBy('created_at','desc')->paginate(6);
        $category = Category::all();
        if (request('category')) {
            $offre=Offre::where('category_id',request('category'))->orderBy('id','desc')->paginate(4);
            return view('pages.offre',compact('category','offre','type'));

        }
      
        return view('pages.offre',compact('category','offre','type'));
    }



public function search(Request $request){
    
    // $searchResults = (new search())
    //             ->registerModel(Offre::class,'type')
    //             ->registerModel(Category::class,'libelle')
    //             ->perform($request->input('query'));
    //             // dd(  $searchResults );
    //             return view('pages.offre',compact('searchResults'));


    //    dd($category);
    //     return view('pages.offre',compact('category','offre'));

    $type = Type::all();
    $offre=Offre::all();
   $category = Category::all();
    $query =$request->input('query');
 
    $offre = Offre::where('type', 'like', "%$query%")->get();
          return view('pages.offre',compact('category','offre','type'));


}


public function filtre(Request $request){
    

    $type = Type::all();
    $offre=Offre::all();
   $category = Category::all();
    $query =$request->input('query');
    $search =$request->input('search');
 
    $offre = Offre::select('offres.*')
    ->join('categories', 'offres.category_id', '=', 'categories.id')
    ->where('categories.libelle', 'like', "%$query%")
    ->where('offres.type', 'like', "%$search%")
    ->orderBy('created_at','asc')->paginate(6);
   
          return view('pages.offre',compact('category','offre','type'));


}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $type=Type::all();
        $category=Category::all();
       $offre=Offre::with('categories')->orderBy('id','desc')->paginate(4);
      
        return view('backend.gestion_offre.offre_create',compact('category','offre','type'));
    }

    public function useroffre()
    {
        //
        $type=Type::all();
        $category=Category::all();
      
        return view('pages.userOffre.useroffre_create',compact('category','type'));
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
        $request->validate([
            'titre'=>'required',
            'detail'=>'required',
            'date_expire'=>'required',
            'type'=>'required'
        ]);
     $offre = new Offre($request->all());
     $offre->titre=$request->titre;
     $offre->detail=$request->detail;
     $offre->titre=$request->titre;
     $offre->date_expire=$request->date_expire;
     $offre->category_id=$request->category_id;
     $offre->type=$request->type;
     $offre->save();
    //   $offre->categories()->attach($request->category);
        return back()->with('SuccessMsg', 'Une offre Ajouté' );
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Offre $offre )
    {
        //
      
        $offre=Offre::all();
        return view('backend.gestion_offre.offre_create',compact('offre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Offre $offre, Category $category, Type $type)
    {
        //
       $category=Category::all();
       $type=Type::all();
        return view('backend.gestion_offre.offre_edit',[
            'offres'=>$offre,
            'categories'=>$category,
            'types'=>$type
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Offre $offre)
    {
        //
        $offre->update($request->all());
        // $offre->categories()->sync($request->category);
        return redirect()->route('offre.create')->with('SuccessMsg', 'Modifiaction réussi' );

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( Offre $offre)
    {
        //
        $offre->delete();
        return redirect()->route('offre.create')->with('DestroyMsg',  $offre->titre);

    }
}
