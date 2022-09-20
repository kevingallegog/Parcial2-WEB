<div>
    <div class="row">
        <div class="col-sm-9">
            <input type="text" name="" id="" placeholder="Buscar..." class ="form-control" wire:model="busqueda">
        </div>
        <div class="col-sm-3">
            <select name="" id="" class="form-select" wire:model="paginacion">
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
        </div>
    </div>
    <table class="table table-stripped table-hover ">
        <thead>
            <tr>
                <th>
                    Nombre cliente
                </th>
                <th>
                    DPI
                </th>
                <th>
                    Fecha de registro
                </th>
                <th>
                    Residencia
                </th>
                <th>
                    Observacion
                </th>
                <th>
                    Opciones
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tareas as $tarea)
            <tr>
                <td>
                    {{ $tarea -> nombre }}
                </td>
                <td>
                    {{ $tarea -> dpi }}
                </td>
                <td>
                    {{ $tarea -> fecha_limite -> format('H:i d / m / y') }}
                </td>
                <td> 
                    {{ $tarea -> urgencia() }}
                </td>
                <td>
                    {{ $tarea -> descripcion }}
                </td> 
                <td>
                    <a href="{{ route('tarea.edit',$tarea) }}">Editar</a>
                    <a href="{{ route('tarea.show',$tarea) }}">Ver</a>
                </td>
            </tr>
                
            @endforeach
        </tbody>
        
    </table>
    {{ $tareas->links() }}
</div>
