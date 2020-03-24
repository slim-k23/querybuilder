<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Produit; // import Produit Model : important

class ProudctController extends Controller
{
    //
     public function all_products(){
         
        //$produits= Produit::all();
        
        /* Query Builder */
        // ORM :Object Relational Mapping
        
        $produits  = DB::table('produits')->get(); // select * from users
        
        $nombre_de_produit  = DB::table('produits')->count(); // select count(*) from produits
        
        $where_clause  = DB::table('produits')->where('id', 1)->get(); // select count(*) from produits where id = 1
        
        $like_query  = DB::table('produits')->where('title', 'like' , 'G%')->get(); // select * from produits where title like T%
        
        $two_where = DB::table('produits')->where('id', '=', 1)->where('title', 'like', 'G%')->get(); // select from produits wheres id = 1 and title like G%
        
        $jointure_produits_categorie = DB::table('produits')
        ->join('categories', 'produits.categorie_id', 'categories.id')
        ->orderby('title')
        ->get();
        
        // SELECT * FROM produits inner join categories on produits.categories_id = categories.id
        dd($jointure_produits_categorie);
        return view('produit', compact('nombre_de_produit', 'produits')); 
    }
    
    
    public function detail($id){
        
        $produit_unique = DB::table('produits')->where('id', $id)->get();
        
        return  view('details',compact('produit_unique'));
        
    }
    
    
    
}
