<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
         //data read start-------------------------------------------------//
    public function  showUsers(){
       
        $products =DB::table('products')
        ->simplePaginate(6);
       return view ('welcome',['data'=>$products]);
    }

        //dataread end-------------------------------------------------//


     //insert start-------------------------------------------------//
     public function singleUsers(string $id){
        $products =DB::table('products')->where('id',$id)->get();
        return $products;
    }
    public function addproudct(Request $req){
        $product= DB::table('products')
        ->insert([
            
            'name'=>$req->name,
            'quantity'=>$req->quantity,
            'price'=>$req->price
        ]);
        if($product){
            return redirect()->route('home');
        }
        

    }
     //insert end-------------------------------------------------//


      //update start-------------------------------------------------//
      public function updatePage(string $id){
        
        $product =DB::table('products')->find($id);
        return view ('updateproduct',['data'=>$product]);
    }
     
    public function updateusers(Request $req, $id){
        $product= DB::table('products')
        ->where('id', $id)
        ->update([
            'name'=>$req->name,
            'quantity'=>$req->quantity,
            'price'=>$req->price,
            
        ]);
        if($product){
            return redirect()->route('home');
        }
    }

     //update end-------------------------------------------------//


    //delete start-------------------------------------------------//

    public function deleteusers( string $id){
        $product= DB::table('products')
        ->where('id', $id)
        ->delete();
        
        if($product){
            return redirect()->route('home');
        }
    }
     //delete end-------------------------------------------------//
}
