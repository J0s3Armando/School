@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="notify mb-4">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="mb-0 text-center">{{$subject->subject}}</h5>
                        </div>
                        <div class="col-md-6">
                            <p class="mb-0 text-center">{{$subject->teacher}}</p>
                        </div>
                    </div>
                </div>
                <section class="notify">
                    <h4>Horario</h4>
                    <table class="table table-responsive-sm">
                        <thead>
                            <tr>
                                <th class="text-center align-middle">Lunes</th>
                                <th class="text-center align-middle">Martes</th>
                                <th class="text-center align-middle">Miércoles</th>
                                <th class="text-center align-middle">Jueves</th>
                                <th class="text-center align-middle">Viernes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center align-middle">{{$days[0]}}</td>
                                <td class="text-center align-middle">{{$days[1]}}</td>
                                <td class="text-center align-middle">{{$days[2]}}</td>
                                <td class="text-center align-middle">{{$days[3]}}</td>
                                <td class="text-center align-middle">{{$days[4]}}</td>
                            </tr>
                        </tbody>
                    </table>
                    
                </section>
            </div>
        </div>
    </div>
@endsection