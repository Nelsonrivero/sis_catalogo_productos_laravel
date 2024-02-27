<?php

namespace App\Http\Controllers;
use Illuminate\Database\QueryException;

use App\Models\Marca;
use App\Models\Producto;
use Illuminate\Http\Request;

/**
 * Class ProductoController
 * @package App\Http\Controllers
 */
class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::paginate();

        return view('producto.index', compact('productos'))
            ->with('i', (request()->input('page', 1) - 1) * $productos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $producto = new Producto();
        $marcas = Marca::pluck('nombre_marca', 'id');
        return view('producto.create', compact('producto', 'marcas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'referencia' => 'required|unique:productos'
            ]);
    
            $producto = Producto::create($request->all());
    
            return redirect()->route('productos.index')
                ->with('success', 'Producto creado correctamente.');
        } catch (QueryException $e) {
            if ($e->errorInfo[1] == 1062) {
                return back()->withErrors(['referencia' => 'Ya existe un producto con esta referencia.'])->withInput();
            }
    
            return back()->withErrors(['error' => 'Ocurrió un error al procesar la solicitud. Por favor, intenta de nuevo más tarde.'])->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Producto::find($id);

        return view('producto.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Producto::find($id);

        $marcas = Marca::pluck('nombre_marca', 'id');

        return view('producto.edit', compact('producto', 'marcas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Producto $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
{
    try {
        $request->validate([
            'referencia' => 'required|unique:productos,referencia,' . $producto->id
        ]);

        $producto->update($request->all());

        return redirect()->route('productos.index')
            ->with('success', 'Producto actualizado correctamente.');
    } catch (QueryException $e) {
        if ($e->errorInfo[1] == 1062) {
            return back()->withErrors(['referencia' => 'Ya existe un producto con esta referencia.'])->withInput();
        }

        return back()->withErrors(['error' => 'Ocurrió un error al procesar la solicitud. Por favor, intenta de nuevo más tarde.'])->withInput();
    }
}

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $producto = Producto::find($id)->delete();

        return redirect()->route('productos.index')
            ->with('success', 'Producto Eliminado Correctamente');
    }
}
