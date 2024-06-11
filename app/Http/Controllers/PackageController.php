<?php

namespace App\Http\Controllers;
use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    //
    public function listar()
    {
        $paquetes = Package::orderBy('id','desc')->get();
        return view('package_c.listar', compact('paquetes'));

    }

    public function create()
    {
        return view('package_c.create');
    }

    public function store(Request $request)
    {
        $paq = new Package();
        $paq->codigo = $request->codigo;
        $paq->descripcion = $request->descripcion;
        $paq->destinatario = $request->destinatario;
        $paq->direccion = $request->direccion;
        $paq->save();

        return redirect()->route('package.listar');
    }

    public function show ($id)
    {
        $paq=Package::find($id);
        return view('package_c.show', compact('paq'));
    }

    public function destroy ( Package $paq)
    {
        $paq->delete();
        return redirect()->route('package.listar');
    }

    public function edit(Package $paq)
    {
        return view('package_c.edit', compact('paq'));
    }

    public function update(Request $request, Package $paq)
    {
        $paq->codigo = $request->codigo;
        $paq->descripcion = $request->descripcion;
        $paq->destinatario = $request->destinatario;
        $paq->direccion = $request->direccion;
        $paq->save();

        return redirect()->route('package.listar');
    }
}
