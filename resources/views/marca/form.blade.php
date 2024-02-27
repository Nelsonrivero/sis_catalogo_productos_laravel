<div class="card shadow">
    <div class="card-header text-white" style="background:black;">
        <h5 class="mb-0">Crear o Editar Marca</h5>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label for="nombre_marca" class="font-weight-bold">Nombre de la Marca</label>
            <input type="text" class="form-control{{ $errors->has('nombre_marca') ? ' is-invalid' : '' }}" id="nombre_marca" name="nombre_marca" value="{{ old('nombre_marca', $marca->nombre_marca) }}" placeholder="Ingresa el nombre Marca">
            {!! $errors->first('nombre_marca', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Crear</button>
    </div>
</div>
