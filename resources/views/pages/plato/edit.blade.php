<x-layouts.app.app title="Platos">
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Plato</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('platos.update', $plato->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('plato.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app.app>
