<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Formation;
use Illuminate\Http\Request;
use \Illuminate\Support\Str;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formations = Formation::all();
        return view("formation.index", compact("formations"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $employees = Employee::all();
        return view("formation.create", compact("employees"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formation = new Formation();
        $formation->employee_id = $request->employee_id;
        $formation->nom = $request->nom;
        $formation->description = $request->description;
        $formation->date_debut = $request->date_debut;
        $formation->date_fin = $request->date_fin;

        if($formation->save()){
            return redirect()->route("formation.index");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $formation = Formation::where("id", "=", $id)->first();
        return view("formation.show", compact("formation"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $formation = Formation::where("id", "=", $id)->first();
        $employees = Employee::all();
        return view("formation.edit", compact("formation", "employees"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $formation = Formation::where("id", "=", $id)->first();
        $formation->employee_id = $request->employee_id;
        $formation->nom = $request->nom;
        $formation->description = $request->description;
        $formation->date_debut = $request->date_debut;
        $formation->date_fin = $request->date_fin;

        if($formation->save()){
            return redirect()->route("formation.index");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $formation = Formation::destroy($id);
        return redirect()->route("formation.index");
    }
}
