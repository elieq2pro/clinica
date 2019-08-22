<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PacientesController extends Controller
{
    function __construct()
    {
        $this->middleware(['auth','roles:admin']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all()->where('role_id',3);
        return view('pacientes.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pacientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'role_id' => 3,
        ]);
        $user=User::all();
        $user->last()->patient()->create([
            'dni' => $request['dni'],
            'gender' => $request['gender'],
            'birthdate' => $request['birthdate'],
            'marital_status' => $request['marital_status'],
            'insurance_company' => $request['insurance_company'],
        ]);
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('pacientes.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('pacientes.edit', compact('user'));
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
        $user = User::findOrFail($id);

        $user->update([
            'name' => $request['name'],
            'email' => $request['email'],
        ]);
        $user->patient()->update([
            'dni' => $request['dni'],
            'gender' => $request['gender'],
            'birthdate' => $request['birthdate'],
            'marital_status' => $request['marital_status'],
            'insurance_company' => $request['insurance_company'],
        ]);

        return back()->with('info', 'Paciente actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->patient->delete();
        $user->delete();

        return back();
    }
}
