@csrf
<div class="row">
    <div class="col-sm-12">
        <label for="InputNombre" class="form-label">* nombre </label>
        <input type="text" name="nombre" id="InputNombre" class="form-control" placeholder="..." value="{{ old('nombre', $tarea->nombre) }}">
    </div>

    <div class="col-sm-12">
        <label for="InputNombre" class="form-label">* apellido </label>
        <input type="text" name="apellido" id="InputNombre" class="form-control" placeholder="..." value="{{ old('apellido', $tarea->apellido) }}">
    </div>

    <div class="col-sm-12">
        <label for="InputNombre" class="form-label">* direccion </label>
        <input type="text" name="direccion" id="InputNombre" class="form-control" placeholder="..." value="{{ old('direccion', $tarea->direccion) }}">
    </div>

    <div class="col-sm-12">
        <label for="InputNombre" class="form-label">* telefono </label>
        <input type="text" name="telefono" id="InputNombre" class="form-control" placeholder="..." value="{{ old('telefono', $tarea->telefono) }}">
    </div>

    <div class="col-sm-12 text-end" my="2">
        <button type="submit" class="btn-btn-primary">
            Guardar
        </button>
    </div>
</div>
</form>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
       @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
