@extends('layouts.plantilla')
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Roles</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card table-responsive">
                        <div class="card-body">
{{-- Definimos las directivas de laravel permission --}}
                            @can('crear-rol')
                            @endcan
                                <a class="btn btn-warning" href="{{route('roles.create')}}">Nuevo</a>
                            
                            
                            <table class="table table-striped mt-2">


                                    <thead class="thead-dark">
                                        <tr>
                                           <th style="color:#fff;">ID</th>
                                           <th style="color:#fff;">Rol</th>
                                           <th style="color:#fff;">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($roles as $role)
                                        <tr>
                                            <td>{{$role->id}}</td>
                                           <td>{{$role->name}}</td>
                                           <td>
                                               @can('editar-rol')
                                               @endcan
                                                    <a class="btn btn-info" href="{{ route('roles.edit',$role->id)}}">Editar</a>
                                               

                                               @can('borrar-rol')
                                               @endcan
                                                    {!! Form::open(['method'=>'DELETE', 'route'=>['roles.destroy', $role->id], 'style'=>'display:inline'])!!}
                                                        {!!Form::submit('Borrar', ['class'=> 'btn btn-danger'])!!}
                                                    {!! Form::close()!!}
                                               

                                           </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

