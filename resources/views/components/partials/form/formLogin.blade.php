<div class="container">
    <br>
    <form action="/login" method="POST">
        @csrf
        <label for="username" class="form-label text-light pt-2">Usuario/Email</label>
        <input type="text" name="username" id="username" class="form-control">
        @if ($errors->has('username'))
            <span class="text-danger text-left">{{ $errors->first('username') }}</span>
        @endif
        <label for="password" class="form-label text-light pt-2">Contraseña</label>
        <input type="password" name="password" id="password" class="form-control"/>
        @if ($errors->has('username'))
            <span class="text-danger text-left">{{ $errors->first('username') }}</span>
        @endif
        <br>
        <x-partials.messages.messages class="container"/>
        <br>
        <input type="submit" value="Iniciar Sesión"  class="btn btn-secondary mb-3">
    </form>
    <a class="btn btn-primary" href="#" role="button"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook me-2" viewBox="0 0 16 18">
        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
      </svg>  Iniciar Sesión con Facebook</a>
    <br>
    <br>
    <a href="/register">Crear nueva cuenta</a>
</div>