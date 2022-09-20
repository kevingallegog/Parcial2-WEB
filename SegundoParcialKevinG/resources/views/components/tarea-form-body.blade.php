
        @csrf
        <div class="row">
            <div class="col-sm-12">
                <label for="InputNombre" class="form-label">* Nombre del cliente: </label>
                <input type="text" name="nombre" id="InputNombre" class="form-control" placeholder="..." value="{{ old('nombre',$tarea->nombre) }}">
            </div>
            <div class="col-sm-4">
                <label for="InputDpi" class="form-label">* DPI del cliente:</label>
                <input type="text" name="dpi" id="InputDpi" class="form-control" placeholder="..." value="{{ old('dpi',$tarea->dpi) }}">
            </div>
            <div class="col-sm-4">
                <label for="SelectUrgencia" class="form-label">* Residencia: </label>
                <select name="urgencia" id="SelectUrgencia" class="form-select">
                    @for($x = 0; $x < count($urgencias); $x++)
                        <option value="{{ $x }}" @selected(old('urgencia',$tarea->urgencia)) >{{ $urgencias[$x] }}</option>   
                    @endfor
                </select>
            </div>
            <div class="col-sm-4">
                <label for="InputFechaLimite" class="form-label">* Fecha de registro: </label>
                <input type="datetime-local" name="fecha_limite" id="InputFechaLimite" class="form-control" value="{{ old('fecha_limite', $tarea->fecha_limite ->format('Y-m-d\TH:i'))}}">
            </div>
            <div class="col-sm-12">
                <label for="TextAreaDescripcion" class="form-label">Observaciones generales del cliente: </label>
                <textarea name="descripcion" id="TextAreaDescripcion" cols="30" rows="10" class="form-control" > {{ old('descripcion', $tarea->descripcion)}}</textarea>
            </div>
            <div class="col-sm-12 text-end my-2">
                <button type="submit" class="btn btn-primary">
                    Guardar cliente
                </button>
            </div>
        </div>