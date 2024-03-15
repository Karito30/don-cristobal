<!-- Modal -->
<div class="modal fade" id="modal-delete-{{$producto->ID_PRODUCTO}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{route('producto.destroy',$producto->ID_PRODUCTO)}}" method="POST">
            @csrf
            @method('DELETE')   
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title " id="exampleModalLabel">Eliminacion de proveedor</h1>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Deseas eliminar el Producto {{$producto->NOM_PRODUCTO}}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cerrar</button>
          <input type="submit" class="btn btn-danger btn-sm" value="Eliminar">
        </div>
      </div>
    </form>
    </div>
  </div>