@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="notify mb-4">
                    <h4 class="mb-0">Agregar nueva asignatura</h4>
                </div>
                <section class="notify">
                    <form action="{{route('newSubject')}}" method="POST" class="form">
                        @csrf
                        <div class="form-group">
                            <h5 class="text-center">Datos de la asignatura</h4>
                            <input required type="text" class="form-control mb-2" name="name" id="name" placeholder="Asignatura" value="{{ old('name') }}">
                            <input required type="text" class="form-control" name="teacher" id="teacher" placeholder="Nombre del profesor" value="{{ old('teacher') }}">
                        </div>
                        <div class="form-group">
                            <h5 class="text-center">Ingrese sus horarios en la semana</h4>
                            <table class="table table-sm table-responsive-md">
                                <head>
                                    <tr>
                                        <th class="text-center">Lunes</th>
                                        <th class="text-center">Martes</th>
                                        <th class="text-center">Miércoles</th>
                                        <th class="text-center">Jueves</th>
                                        <th class="text-center">Viernes</th>
                                    </tr>
                                </head>
                                <body>
                                    <tr>
                                        <td>
                                            <input required type="text" name="lun" class="form-control" id="lun" placeholder="00pm-00pm" value="{{old('lun')}}">
                                        </td>
                                        <td>
                                            <input required type="text" name="mar" class="form-control" id="mar" placeholder="00pm-00pm" value="{{old('mar')}}">
                                        </td>
                                        <td>
                                            <input required type="text" name="mie" class="form-control" id="mie" placeholder="00pm-00pm" value="{{old('mie')}}">
                                        </td>
                                        <td>
                                            <input required type="text" name="jue" class="form-control" id="jue" placeholder="00pm-00pm" value="{{old('jue')}}">
                                        </td>
                                        <td>
                                            <input required type="text" name="vie" class="form-control" id="vie" placeholder="00pm-00pm" value="{{old('vie')}}">
                                        </td>
                                    </tr>
                                </body>
                            </table>
                            <label  class="small m-0 form-text">Nota: si no tienes clases en un día sólo agrega un guión -> "-"</label>
                        </div>
                        <div class="form-group d-flex justify-content-center">
                            <input type="submit" value="Aceptar" class="btn btn-primary">
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
@endsection