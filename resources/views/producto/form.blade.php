<div class="card shadow">
    <div class="card-header bg-black text-white">
        <h5 class="mb-0">Crear o Editar Producto</h5>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label for="nombre_producto" class="font-weight-bold">Nombre del Producto</label>
            <input type="text" class="form-control{{ $errors->has('nombre_producto') ? ' is-invalid' : '' }}"
                id="nombre_producto" name="nombre_producto"
                value="{{ old('nombre_producto', $producto->nombre_producto) }}" placeholder="Nombre Producto">
            {!! $errors->first('nombre_producto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            <label for="referencia" class="font-weight-bold">Referencia</label>
            <input type="text" class="form-control{{ $errors->has('referencia') ? ' is-invalid' : '' }}" id="referencia"
                name="referencia" value="{{ old('referencia', $producto->referencia) }}" placeholder="Referencia">
            {!! $errors->first('referencia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('talla', 'Talla') }}
            {{ Form::select('talla', ['S' => 'S', 'M' => 'M', 'L' => 'L'], $producto->talla, ['class' => 'form-control'
            . ($errors->has('talla') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar Talla']) }}
            {!! $errors->first('talla', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            <label for="observaciones" class="font-weight-bold">Observaciones</label>
            <input type="text" class="form-control{{ $errors->has('observaciones') ? ' is-invalid' : '' }}"
                id="observaciones" name="observaciones" value="{{ old('observaciones', $producto->observaciones) }}"
                placeholder="Observaciones">
            {!! $errors->first('observaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('marca_id', 'Marca') }}
            {{ Form::select('marca_id', $marcas, $producto->marca_id, ['id' => 'marca_id', 'class' => 'form-control' .
            ($errors->has('marca_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar Marca']) }}
            {!! $errors->first('marca_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            <label for="cantidad_inventario" class="font-weight-bold">Cantidad en Inventario</label>
            <input type="text" class="form-control{{ $errors->has('cantidad_inventario') ? ' is-invalid' : '' }}"
                id="cantidad_inventario" name="cantidad_inventario"
                value="{{ old('cantidad_inventario', $producto->cantidad_inventario) }}"
                placeholder="Cantidad Inventario">
            {!! $errors->first('cantidad_inventario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            <label for="fecha_embarque" class="font-weight-bold">Fecha de Embarque</label>
            <input type="date" class="form-control{{ $errors->has('fecha_embarque') ? ' is-invalid' : '' }}"
                id="fecha_embarque" name="fecha_embarque" value="{{ old('fecha_embarque', $producto->fecha_embarque) }}"
                placeholder="Fecha Embarque">
            {!! $errors->first('fecha_embarque', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="card-footer mt-4">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>