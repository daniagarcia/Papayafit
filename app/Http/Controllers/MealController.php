<?php

namespace App\Http\Controllers;

use App\Meal;
use Illuminate\Http\Request;

class MealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Meal::all();
    }


    public function render(){

      //consulta para traer solo las de tales calorias
        // $meals = Meal::all();
        // $productos= $this->$productos;
        // $precio = Price::all();
        // return $productos;
        // $verify = User::join('roles', 'users.rol_id', '=', 'roles.id')
        // ->where('users.id', '=', Auth::user()->id)
        // ->where('users.status', '=', 1)
        // ->select('roles.*', 'users.token')
        // ->first();
        // select * from papayafit.meals where meals.calories = "2000"
        $meals = Meal::select('meals.*')->where("meals.id", "=","121")->get();    
        $snack = Meal::select('meals.*')->where("meals.id", "=","136")->get();    
        $comida = Meal::select('meals.*')->where("meals.id", "=","126")->get();  
        $snack2 = Meal::select('meals.*')->where("meals.id", "=","141")->get();  
        $cena = Meal::select('meals.*')->where("meals.id", "=","131")->get();  
        // $meals = Meal::table('meals')->where('calories', '2000')->first();  
        $meals2 = Meal::select('meals.*')->where("meals.id", "=","122")->get();    
        $snackdos = Meal::select('meals.*')->where("meals.id", "=","137")->get();    
        $comida2 = Meal::select('meals.*')->where("meals.id", "=","127")->get();  
        $snack22 = Meal::select('meals.*')->where("meals.id", "=","142")->get();  
        $cena2 = Meal::select('meals.*')->where("meals.id", "=","132")->get();  
        // where('meals.calories', '=', "1200")->first();
        $meals3 = Meal::select('meals.*')->where("meals.id", "=","123")->get();    
        $snack3 = Meal::select('meals.*')->where("meals.id", "=","138")->get();    
        $comida3 = Meal::select('meals.*')->where("meals.id", "=","128")->get();  
        $snack33 = Meal::select('meals.*')->where("meals.id", "=","143")->get();  
        $cena3 = Meal::select('meals.*')->where("meals.id", "=","133")->get();       
        // dd($meals);
        $meals4 = Meal::select('meals.*')->where("meals.id", "=","124")->get();    
        $snack4 = Meal::select('meals.*')->where("meals.id", "=","139")->get();    
        $comida4 = Meal::select('meals.*')->where("meals.id", "=","129")->get();  
        $snack44 = Meal::select('meals.*')->where("meals.id", "=","144")->get();  
        $cena4 = Meal::select('meals.*')->where("meals.id", "=","134")->get(); 
         // dd($meals);
         $meals5 = Meal::select('meals.*')->where("meals.id", "=","125")->get();    
         $snack5 = Meal::select('meals.*')->where("meals.id", "=","140")->get();    
         $comida5 = Meal::select('meals.*')->where("meals.id", "=","130")->get();  
         $snack55 = Meal::select('meals.*')->where("meals.id", "=","145")->get();  
         $cena5 = Meal::select('meals.*')->where("meals.id", "=","135")->get(); 






         $mealsdetalles = Meal::select('meals.*')->where("meals.id", "=","121")->get();  
         $mealsdetalles2 = Meal::select('meals.*')->where("meals.id", "=","136")->get();  



        return view('templates.calendario', ['meals' => $meals , "snack" => $snack , "comida" => $comida,"snack2" => $snack2 ,"cena" => $cena,
        'meals2' => $meals2 , "snackdos" => $snackdos , "comida2" => $comida2,"snack22" => $snack22 ,"cena2" => $cena2,
        'meals3' => $meals3 , "snack3" => $snack3 , "comida3" => $comida3,"snack33" => $snack33 ,"cena3" => $cena3,
        'meals4' => $meals4 , "snack4" => $snack4 , "comida4" => $comida4,"snack44" => $snack44 ,"cena4" => $cena4,
        'meals5' => $meals5 , "snack5" => $snack5 , "comida5" => $comida5,"snack55" => $snack55 ,"cena5" => $cena5,
        "mealsdetalles" => $mealsdetalles ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function show(Meal $meal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function edit(Meal $meal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Meal $meal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meal $meal)
    {
        //
    }
}
