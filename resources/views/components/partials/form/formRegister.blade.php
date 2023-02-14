<form class="container p-3 text-center"action="/register" method="POST">
    @csrf
    <x-partials.messages.messages  class="container"/>
    <input type="text" placeholder="Nombre" name="name" class="form-control mb-3">
    <input type="email" placeholder="Correo Electronico" name="email" class="form-control mb-3">
    <input type="text" placeholder="Nombre de Usuario" name="username" class="form-control mb-2">
    <input type="password" placeholder="Contraseña" name="password" class="form-control mb-3">
    <input type="password" placeholder="Confirma Contraseña" name="password_confirmation" class="form-control mb-2">
    <div class="row container">
        <div class="col-3 text-end" >
            <label for="datenac" style="color: white"><b>Fecha de Nacimiento:</b></label>
        </div>
        <div class="col-9 form-switch text-start ps-5  pe-5">
            <input  class="form-control" type="date" name="birthday" id="datenac" max="{{date('Y-m-d',strtotime(date('Y-m-d').'-3 year'))}}">
        </div>
    </div>
    <div class="row container">
        <div class="col-2 text-end" >
        
            <label for="is_enabled" style="color: white"><b>Tipo de Usuario:  </b></label>
        </div>
        <div class="col-10 form-switch text-start ps-5  pe-5">
            <select name="type_user" class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option value="" selected>-- Elija una opción----</option>
                <option value="Cliente">Cliente</option>
                <option value="Afiliado">Afiliado</option>
                <option value="Administrador">Administrador</option>
            </select>
        </div>
    </div>
    <br>
    <input class="btn btn-dark mb-3" type="submit" value="Registrar">
</form>