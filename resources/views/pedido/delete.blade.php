<!-- Modal -->
<div class="modal fade" id="modal-delete-{{$pedido->ID_PEDIDO_PROVEEDOR}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <form action="{{route('pedido.destroy',$pedido->ID_PEDIDO_PROVEEDOR)}}" method="POST">
          @csrf
          @method('DELETE')   
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title " id="exampleModalLabel">Eliminacion de Pedidos</h1>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Deseas eliminar el pedido
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cerrar</button>
        <input type="submit" class="btn btn-danger btn-sm" value="Eliminar">
      </div>
    </div>
  </form>
  </div>
</div>