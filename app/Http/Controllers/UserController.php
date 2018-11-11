<?php

namespace Larav\Http\Controllers;

use Illuminate\Http\Request;
use Larav\Usuario;
use Session;
use Larav\Http\Requests\StoreUsuarioRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('formulario.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formulario.vista');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUsuarioRequest $request)
    {
        

        $usuario = new Usuario();
        $usuario->nombre = $request->input('nombre');
        $usuario->apellido = $request->input('apellido');
        $usuario->email = $request->input('email');
        $usuario->slug = $request->input('nombre');
        $usuario->save();
        return redirect()->route('user.index', [$usuario])->with('status','Usuario Creado');
    }

    /**
     * Display the specified resource.
     *  $usuario = Usuario::where('$usuario', '>', 100)->paginate(5);
     *  $usuario = Usuario::all();
     *  return view('formulario.show',['usuario' => $usuario]);
     *  
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $usuarios = Usuario::all();
        // $usuario = Usuario::paginate(5);
        //  return view('formulario.show')->withUsers($usuario);
        return view('formulario.show',compact('usuarios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        // dd($usuario);
        $usuario = Usuario::find($id);

        // $usuario = Usuario::find($usuario->slug);
         // $usuario = Usuario::where('slug', $usuario->slug)->first();
        // return $usuario;
          return view('formulario.edit', compact('usuario'));
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

        $usuario = Usuario::find($id);
        $usuario->nombre = $request->input('nombre');
        $usuario->apellido = $request->input('apellido');
        $usuario->email = $request->input('email');
        $usuario->slug = $request->input('nombre');
        // $usuario->fill($request->all());
        
        // $usuario->slug = $request->input('nombre');
        
       
        $usuario->save();

        return redirect()->route('user.show', compact('usuario'))->with('status','Usuario Modificado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();
        // $usuario = Usuario::destroy($id);
        // return view('formulario.show',compact('usuario') );
         return redirect()->route('user.index')->with('status','Usuario Eliminado');
         //return 'ELIMINDO!!!!';
    }
}
