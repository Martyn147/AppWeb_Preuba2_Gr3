
<x-layouts.auth>
    <div class="container me-5 ms-5 pe-3 ps-3 pt-5 pb-5" style="background-color: rgba(4, 7, 9, 0.882); height:500px;">
        <x-slot name='title'>Iniciar Sesión</x-slot>
        <h2 class="text-light">Iniciar Sesión</h2>
        <div class="container pe-4 ps-4">
            <form action="/login" method="POST">
                @csrf
                <label for="username" class="form-label text-light pt-2">Usuario/Email</label>
                <input type="text" name="username" id="username" class="form-control">
                @if ($errors->has('username'))
                    span class="text-danger text-left">{{ $errors->first('username') }}</span>
                @endif
                <label for="password" class="form-label text-light pt-2">Contraseña</label>
                <input type="password" name="password" id="password" class="form-control"/>
                @if ($errors->has('username'))
                    <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                @endif
                <br>
                <x-layouts.partials.messages class="container"/>
                <br>
                <input type="submit" value="Iniciar Sesión"  class="btn btn-secondary mb-3">
            </form>
            <a href="/register">Crear nueva cuenta</a>
        </div>
    </div>
</x-layouts.auth>