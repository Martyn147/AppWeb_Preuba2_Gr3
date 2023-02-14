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

        
        <div class="form-group">
            <img src="{{ asset('storage').'/'.$plato->Foto}}"  width="200" alt="">
            <input class="form-control" type="file" name="Foto" value="{{$plato -> Foto }}" id="Foto">
            <br>

        {{-- <label for="Foto"> Foto </label>
        <br>
        <input class="btn btn-success" type="file" name="Foto"  id="Foto"> --}}

        
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>