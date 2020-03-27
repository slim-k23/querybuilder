<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth; // import Auth class

// Auth

use App\Produit; // import Produit Model : important

class ProudctController extends Controller
{
    //
     public function all_products(){
         
         if(Auth::check()) { // verifier si l'utilisateur est connecté
             //$produits= Produit::all();
        
            /* Query Builder */
            
            $produits  = DB::table('produits')->get(); // select * from users
            
            $nombre_de_produit  = DB::table('produits')->count(); // select count(*) from produits
            
            $where_clause  = DB::table('produits')->where('id', 1)->get(); // select count(*) from produits where id = 1
            
            $like_query  = DB::table('produits')->where('title', 'like' , 'G%')->get(); // select * from produits where title like T%
            
            $two_where = DB::table('produits')->where('id', '=', 1)->where('title', 'like', 'G%')->get(); // select from produits wheres id = 1 and title like G%
            
            $jointure_produits_categorie = DB::table('produits')
            ->join('categories', 'produits.categorie_id', 'categories.id')->orderby('title')->get();
            
            // SELECT * FROM produits inner join categories on produits.categories_id = categories.id
            return view('produit', compact('nombre_de_produit', 'produits'));
             
         }
         
        return redirect('/')->with('messageLogin' , "you must be authenticated");
         
         
    }
    
    
    public function detail($id){
        
        $produit_unique = DB::table('produits')->where('id', $id)->get();
        
        return  view('details',compact('produit_unique'));
        
    }
    
    
    public function getform(){
        
       
        $categories = DB::table('categories')->get();
        //dd($categories);
        return view('create',compact('categories')); 
        
        
    }
    
     public function insertform(Request $request){
         $request->validate([
             'title'=>'required',
             'price'=>"required",
             'description'=>'required',
             'categorie'=>'required'
            ]);
        $title = $request->input('title'); // $request->title
        $price = $request->input('price');
        $description = $request->input('description');
        $categorie = $request->input('categorie');
        
        DB::table('produits')->insert(
            ['title'=>$title, "price"=>$price, "description"=>$description, 'categorie_id'=>$categorie]    
        );
        
        
        
        return redirect('/produits/create');
        
        
    }
    
    //http://slimk23.sites.3wa.io:8000/produits/update/1 ==> id
    /*
          #items: array:1 [▼
      0 => {#265 ▼
      +"id": 1
      +"title": "Google Pixel"
      +"price": 7000
      +"description": "latest google phone"
      +"created_at": "2020-03-24 11:55:31"
      +"updated_at": "2020-03-24 11:55:31"
      +"categorie_id": 2
    }
  ]
    
    
    */
    public function getupdate($id){

        $produit = DB::table('produits')->where('id', $id)->get();
        // recuperez le produit k je vais modifier
        // get all categories
        $categories = DB::table('categories')->get() ;// SELECT * FROM categories
        
        return view('update', compact('categories','produit'));
    }
    
    
    public function putupdate(Request $request){
        
        
  
 
        $request->validate([
            'id_produit'=>'required',
            'title'=>'required',
            'price'=>'required',
            'description'=>'required',
            'categorie'=>'required'
            ]);

        
            
             $title= $request->input('title');
             $price= $request->input('price');
             $description= $request->input('description');
             $categorie= $request->input('categorie');
             $id = $request->input('id_produit');
             
             
            DB:: table('produits') ->where('id', $id)->update(
                 ['title'=>$title, 'price'=>$price, 'description'=>$description, 'categorie_id'=>$categorie]
                 
            );
                 
                return back(); 
        
    }
    
    
    
}
