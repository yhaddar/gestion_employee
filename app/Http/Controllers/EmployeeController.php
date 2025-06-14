<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        return view("employee.index", compact("employees"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("employee.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $employee = new Employee();
        $employee->prenom = $request->prenom;
        $employee->nom = $request->nom;
        $employee->email = $request->email;
        $employee->post =  $request->post;
        $employee->date_embauche = $request->date_embauche;
        $employee->salaire = $request->salaire;

        if($employee->save()){
            return redirect()->route("employee.index");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $employee = Employee::where("id", "=", $id)->first();
        return view("employee.show", compact("employee"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employee = Employee::where("id", "=", $id)->first();
        return view("employee.edit", compact("employee"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $employee = Employee::find($id);
        $employee->prenom = $request->prenom;
        $employee->nom = $request->nom;
        $employee->email = $request->email;
        $employee->post =  $request->post;
        $employee->date_embauche = $request->date_embauche;
        $employee->salaire = $request->salaire;

        if($employee->save()){
            return redirect()->route("employee.index");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employee = Employee::destroy($id);
        return redirect()->route("employee.index");
    }
}
