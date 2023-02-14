<x-layouts.app.app title="Platos">
    <div class="container-fluid" style="height: calc(100rem-1px)">
        @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
        @endif
        <div class="row">
            <div class="col-sm-12">
                <div class="container">
                    <div class="container">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <h3>{{ __('Plato') }}</h3>
                            </span>

                             <div class="float-right">
                                <a href="{{ route('platos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                    {{ __('Crear Nuevo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                </div>
                <div class="card-body" >
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" table-dark thead-dark text-center" >
                                <tr>
                                    <th >No</th>
                                        <th>Categoria</th>
                                        <th>Nombre</th>
                                        <th>Caracteristicas</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach ($platos as $plato)
                                    <tr >
                                        <td>{{ ++$i }}</td>
                                        <td>
                                            {{ $plato->categoria->nombre }}
                                        </td>
                                        <td>{{ $plato->nombre }}</td>
                                        <td>{{ $plato->caracteristicas }}</td>
                                        <td>
                                            <form action="{{ route('platos.destroy',$plato->id) }}" method="POST">
                                                <a class="btn btn-sm btn-primary " href="{{ route('platos.show',$plato->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                <a class="btn btn-sm btn-success" href="{{ route('platos.edit',$plato->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                {!! $platos->links() !!}
            </div>
        </div>
    </div>

</x-layouts.app.app>
