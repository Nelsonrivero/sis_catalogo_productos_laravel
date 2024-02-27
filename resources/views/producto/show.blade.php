@extends('layouts.app')

@section('template_title')
    {{ $producto->name ?? "{{ __('Show') Producto" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('productos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Producto:</strong>
                            {{ $producto->nombre_producto }}
                        </div>
                        <div class="form-group">
                            <strong>Referencia:</strong>
                            {{ $producto->referencia }}
                        </div>
                        <div class="form-group">
                            <strong>Talla:</strong>
                            {{ $producto->talla }}
                        </div>
                        <div class="form-group">
                            <strong>Observaciones:</strong>
                            {{ $producto->observaciones }}
                        </div>
                        <div class="form-group">
                            <strong>Marca Id:</strong>
                            {{ $producto->marca_id }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad Inventario:</strong>
                            {{ $producto->cantidad_inventario }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Embarque:</strong>
                            {{ $producto->fecha_embarque }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
