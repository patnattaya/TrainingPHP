<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User as UserMod;
use App\Model\Shop as ShopMod;
use App\Model\Product as ProductMod;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $mods = UserMod::paginate(15);
           return view('admin.user.lists', compact('mods'));
           //return view('admin.layouts.template');
            //$mods = UserMod::all();
            //return view('test', compact('mods'));

   /*$data = [
           'name' => 'My Name',
           'surname' => 'My SurName',
           'email' => 'myemail@gmail.com'
       ];

        $user = UserMod::find(1);
        $mods = UserMod::all();

        return view('test', compact('data', 'user', 'mods'));*/

         /*$data = [
            'name' => 'My Name',
            'surname' => 'My SurName',
            'email' => 'myemail@gmail2.com'
        ];

        return view('test', $data);*/

        //$mods = UserMod::all();
        
        /*$mods = UserMod::where('active', 1)
               ->where('city','bangkok')
               ->orderBy('name', 'desc')
               ->get();*/

       /* $mods = UserMod::find([1, 2, 3]);
        foreach ($mods as $item) {
            echo $item->name." ".$item->surname." ".$item->email."<br />";
        }*/
         /*$data = [
            'name' => 'My Name',
            'surname' => 'My SurName',
            'email' => 'myemail@gmail.com'
        ];

        $item = [
            'item1' => 'My Value1',
            'item2' => 'My Value2'
        ];

        $results = [
            'data' => $data,
            'item' => $item
        ];

        return view('test', $results);*/

     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request); exit;
        /*$mod = new UserMod;
        $mod->name = $request->name;
        $mod->email = $request->email;
        $mod->password = bcrypt($request->password);
        $mod->save();*/
        echo "Save new data to table";

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       // $shop = UserMod::find($id)->shop;

        //echo $shop->name;
        //echo "<br />";
        //echo $shop->user->name;
        /*$products = ShopMod::find(1)->products;
 
       foreach ($products as $product) {
        echo $product->name;
        echo "<br />";
      }*/

       /*echo "OR <br /><br />";

      $shop = ShopMod::find($id);
      echo $shop->name;
      echo "<br />";

       foreach($shop->products as $product){
        echo $product->name;
        echo "<br />";
       }*/
        $product = ProductMod::find($id);
        echo "Product Name Is : ".$product->name;
        echo "<br /><br />";
        echo "Shop Owner Is : ".$product->shop->name;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
         $mod = UserMod::find($id);
         $mod->name = $request->name;
         $mod->email= $request->email;
         $mod->password = bcrypt($request->password); 
         $mod->save();
         echo "update success";

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mod = UserMod::find($id);
        $mod->delete();
        echo "Delete Success";

    }
}
