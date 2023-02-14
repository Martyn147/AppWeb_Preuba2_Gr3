<x-layouts.app.app title="Contact">
    <div class="container-fluid">
      <h2>Contactanos</h2>
      <div class="row">
        <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-5" >
          <div class="container-fluid">
              <img src="https://grupoteaa.com/wp-content/uploads/2017/09/mensaje-enviado.png" alt="IMG" class="w-100">
          </div>
        </div>
        
        <form class="col-12 col-sm-9 col-md-8 col-lg-7 p-5" action="{{route('contact.store')}}" method="POST">
          @csrf
          <span class="contact1-form-title">
          </span>
          <x-partials.messages.messages class="container"/>
          <div class="validate-input" data-validate="Name is required">
            <input class="form-control bg-dark text-light m-1 mb-2 p-2" type="text" name="name" placeholder="Nombre">
           
          </div>
          <div class=" validate-input" data-validate="Valid email is required: ex@abc.xyz">
            <input class="form-control bg-dark text-light m-1 mb-2 p-2" type="text" name="email" placeholder="Correo">

          </div>
          <div class="validate-input" data-validate="Subject is required">
            <input class="form-control bg-dark text-light m-1 mb-2 p-2" type="text" name="subject" placeholder="Asunto">

          </div>
          <div class="validate-input" data-validate="Message is required">
            <textarea class="form-control bg-dark text-light m-1 mb-2 p-2" name="message" placeholder="Mensaje"></textarea>

          </div>
          <div class="container text-center">
            <button class="btn btn-dark">
              <span>
                 Enviar correo
              <i class="bx-arrow-right nav_icon" aria-hidden="true"></i>
              </span>
            </button>
          </div>
        </form>
      </div>
    </div>
</x-layouts.app.app>
