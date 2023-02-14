<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RestaurantRequest;
use App\Models\Restaurant;
use Cloudder;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        
        return view('pages.restaurant.index',['restaurants'=>Restaurant::latest()->paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.restaurant.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RestaurantRequest $request)
    {

        $restaurant=new Restaurant;
        $restaurant->ruc=$request->get('ruc');
        $restaurant->local_name=$request->input('local_name');
        $restaurant->local_address=$request->input('local_address');
        $restaurant->type_local=$request->input('type_local');
        $restaurant->owner_name=$request->input('owner_name');
        $restaurant->local_email=$request->input('local_email');
        $restaurant->local_tel=$request->input('local_tel');
        $restaurant->description=$request->input('description');
        $restaurant->id_user=$request->input('id_user');
        $restaurant->id=$request->input('id');
        $restaurant->save();
        $id=$restaurant->id;
        $direction='StarRestaurants/restaurants/restaurant_'.$id;
            if(isset($request['avatar'])){
                $image = $request->file('avatar');
                $obj = Cloudinary::upload($image->getRealPath(),['folder'=>$direction]);
                $url = $obj -> getSecurePath();
                $imagenID = $obj -> getPublicID();
                $restaurant->image()->create(['url'=>$url,'public_id'=>$imagenID]);
            }
           
        

        return redirect()->route('restaurants')->with('success','Se ha creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('pages.restaurant.show',['restaurant'=>Restaurant::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('pages.restaurant.edit',['restaurant'=>Restaurant::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Restaurant $restaurant)
    {
        $restaurant->ruc=$request->get('ruc');
        $restaurant->local_name=$request->input('local_name');
        $restaurant->local_address=$request->input('local_address');
        $restaurant->type_local=$request->input('type_local');
        $restaurant->owner_name=$request->input('owner_name');
        $restaurant->local_email=$request->input('local_email');
        $restaurant->local_tel=$request->input('local_tel');
        $restaurant->description=$request->input('description');
        $restaurant->id_user=$request->input('id_user');
        
        $id=$restaurant->id;
        $direction='StarRestaurants/restaurants/restaurant_'.$id;
        $restaurant->save();
        if(isset($request['avatar'])){
            $image = $request->file('avatar');
            $obj = Cloudinary::upload($image->getRealPath(),['folder'=>$direction]);
            $url = $obj -> getSecurePath();
            $imagenID = $obj -> getPublicID();
            if(isset($restaurant-> image->public_id))
            {
                Cloudinary::destroy($restaurant-> image->public_id);
                $restaurant->image()->update(['url'=>$url,'public_id'=>$imagenID]);
            }else{
                $restaurant->image()->create(['url'=>$url,'public_id'=>$imagenID]);
            }
        }
        
            
        return redirect()->route('restaurants')->with('success','Se ha actualizado correctamente su información');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurant $restaurant)
    {
        
        if(isset($restaurant->image->public_id)){
            $fotoID = $restaurant->image->public_id;
            Cloudinary::destroy($fotoID);
        }
        
        $restaurant->delete();
        return to_route('restaurants')->with('success','Se ha eliminado correctamente su información');
    }
}
