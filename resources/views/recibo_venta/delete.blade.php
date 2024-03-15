<!-- Modal -->
<div class="modal fade" id="modal-delete-{{$recibo_venta->ID_RECIBO}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <form action="{{route('recibo_venta.destroy',$recibo_venta->ID_RECIBO)}}" method="POST">
          @csrf
          @method('DELETE')   
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title " id="exampleModalLabel">Eliminacion de recibos</h1>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Deseas eliminar el recibo
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cerrar</button>
        <input type="submit" class="btn btn-danger btn-sm" value="Eliminar">
      </div>
    </div>
  </form>
  </div>
</div>