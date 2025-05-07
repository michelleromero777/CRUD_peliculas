<div class="mb-3">
    <label>Título</label>
    <input type="text" name="titulo" class="form-control" value="{{ old('titulo', $pelicula->titulo ?? '') }}">
</div>
<div class="mb-3">
    <label>Descripción</label>
    <textarea name="descripcion" class="form-control">{{ old('descripcion', $pelicula->descripcion ?? '') }}</textarea>
</div>
<div class="mb-3">
    <label>Género</label>
    <input type="text" name="genero" class="form-control" value="{{ old('genero', $pelicula->genero ?? '') }}">
</div>
<div class="mb-3">
    <label>Director</label>
    <input type="text" name="director" class="form-control" value="{{ old('director', $pelicula->director ?? '') }}">
</div>
<div class="mb-3">
    <label>Fecha de Estreno</label>
    <input type="date" name="fecha_estreno" class="form-control" value="{{ old('fecha_estreno', $pelicula->fecha_estreno ?? '') }}">
</div>
<button type="submit" class="btn btn-primary">Guardar</button>
