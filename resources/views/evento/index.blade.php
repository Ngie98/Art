@extends('layouts.calendario')
@extends('layouts.head')
@yield('content')

    <div class="container">
        <div id="agenda">
            Entró
        </div>
    </div>


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#evento">
    Launch
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="evento" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title">Modal title</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
              </div>
              <div class="modal-body">
                  <form action="">
                      <!--Permite trabajar con todos los datos que llegan, es un dato oculto-->
                      {!!csrf_field()!!}
                      <!--Este es el id-->
                      <div class="form-group">
                        <label for="id">ID:</label>
                        <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Help text</small>
                      </div>
  
                      <!--Debe ser title porque fullcalendar respeta inglés-->
                      <div class="form-group">
                        <label for="title">Título:</label>
                        <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="">
                        <small id="helpId" class="form-text text-muted">Help text</small>
                      </div>
  
                      <!--Aquí va la descripción-->
                      <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <textarea class="form-control" name="" id="descripcion" rows="3"></textarea>
                      </div>
  
                      <!--Fecha de inicio y final, también en inglés-->
                      <div class="form-group">
                        <label for="start">Inicio:</label>
                        <input type="date" name="" id="start" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Help text</small>
                      </div>
                      <div class="form-group">
                        <label for="end">Final</label>
                        <input type="date" name="" id="end" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Help text</small>
                      </div>
  
                  </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success" id="btnGuardar" >Guardar</button>
                  <button type="button" class="btn btn-warning" id="btnEditar" >Editar</button>
                  <button type="button" class="btn btn-danger" id="btnEliminar" >Eliminar</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              </div>
          </div>
      </div>
  </div>
  