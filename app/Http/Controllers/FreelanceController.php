<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use App\Models\Freelance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FreelanceController extends Controller
{


    public function __construct(){
    
        $this->middleware('auth')->except('index','search');
        // $this->middleware('admin');
    
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

   
    
    public function index()
    {
        //

        $category = Category::all();
        $freelance = Freelance::with('users')->orderBy('created_at','asc')->paginate(6);
        
        return view('pages.freelance',compact('category','freelance'));
    }

    public function search(Request $request){
        $category = Category::all();
        $q = $request->input('q');
        $freelance = Freelance::where('specialite', 'like', "%$q%")->with('users')->orderBy('created_at','asc')->paginate(6);
    //    dd($freelance);
        return view('pages.freelance',compact('category','freelance'));

    }

    public function mesannonces()
    {
        // 
        $category = Category::all();
        $user =User::get();
        $freelance =Auth::user()->freelances()->orderBy('created_at','asc')->paginate(6);
        return view('pages.userFreelance.annonceUser',compact('category','freelance','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $category = Category::all();
        return view('pages.userFreelance.form_freelance',compact('category'));
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
        $data = $request->validate([
            'nom'=>'required',
            'specialite'=>'required',
            'experience'=>'required',
            'contact'=>'required|numeric|unique:freelances',
            'email'=>'required|unique:freelances',
            'detail'=>'required',
        ]);
            if (Auth::check()) {
                Freelance::create([
                    'nom' => $request->nom,
                    'specialite' => $request->specialite,
                    'experience' => $request->experience,
                    'contact' => $request->contact,
                    'email' => $request->email,
                    'detail' => $request->detail,
                    'user_id' =>$request->user()->id
                  ]);
            }
        return back()->with('SuccessMsg', 'votre poste validé avec success' );
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
    public function edit(Request $request,Freelance $freelance  )
    {
        //
        $category = Category::all();

        return view('pages.userFreelance.edit_freelance',compact('category'),['freelances'=>$freelance]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Freelance $freelance)
    {
        //
        $data = $request->validate([
            'nom'=>'required',
            'specialite'=>'required',
            'experience'=>'required',
            'contact'=>'required|numeric',
            'email'=>'required',
            'detail'=>'required',
        ]);
         $freelance->update($request->all());
        return redirect()->route('freelance.mesannonces')->with('SuccessMsg', 'votre poste a été modifié avec success' );
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Freelance $freelance)
    {
        //
        $freelance->delete();
        return back()->with('errorMsg', 'votre poste a éte supprimé' );
    }
}
