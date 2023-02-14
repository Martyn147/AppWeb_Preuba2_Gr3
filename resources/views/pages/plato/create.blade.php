<x-layouts.app.app title="Platos">
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Plato</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('platos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            <div class="box box-info padding-1">
                                <div class="box-body">
                                    
                                   
                            
                                    <div class="form-group">
                                        {{ Form::label('categoria_id') }}
                                        {{ Form::select('categoria_id', $categorias , $plato->categoria_id, ['class' => 'form-control' . ($errors->has('categoria_id') ? ' is-invalid' : ''), 'placeholder' => 'Categoria Id']) }}
                                        {!! $errors->first('categoria_id', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                            
                            
                                    <div class="form-group">
                                        {{ Form::label('nombre') }}
                                        {{ Form::text('nombre', $plato->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
                                        {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                            
                            
                                    <div class="form-group">
                                        {{ Form::label('caracteristicas') }}
                                        {{ Form::text('caracteristicas', $plato->caracteristicas, ['class' => 'form-control' . ($errors->has('caracteristicas') ? ' is-invalid' : ''), 'placeholder' => 'Caracteristicas']) }}
                                        {!! $errors->first('caracteristicas', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                            
                                    
                                    {{-- <div class="form-group">
                                        {{ Form::label('Foto') }}
                                        {{ Form::text('Foto', $plato->Foto, ['class' => 'form-control' . ($errors->has('Foto') ? ' is-invalid' : ''), 'placeholder' => 'Foto']) }}
                                        {!! $errors->first('Foto', '<div class="invalid-feedback">:message</div>') !!}
                                    </div> --}}
                            
                                    <label for="Foto"> Foto </label>
                                    <br>
                                    <input class="btn btn-success" type="file" name="Foto"  id="Foto">
                            
                                    
                                </div>
                                <div class="box-footer mt20">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app.app>