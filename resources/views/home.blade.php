@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="notify mb-4">
                <h4 class="mb-0">Todas las tareas</h4>
            </div>
            <div class="notify mb-4">
                <h4>Asignaturas</h4>
                <div class="row px-2">
                    @foreach ($subjects as $subject)
                        <div class="notify m-1 col" onclick="javascript:document.getElementById('form_{{$subject->id}}_subject').submit()" >
                            <h6 class="mb-0 text-center text-nowrap text-truncate">{{ $subject->subject }}</h6>
                            <form id="form_{{$subject->id}}_subject" action="{{route('subjectView', $subject->id)}}" method="GET" hidden></form>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="notify notify-button">
               
                <div class="col-12 justify-content-end d-flex">
                    <p class="text-primary text-center mb-0">Para:12/09/20</p>
                </div>
                <div class="col-12">
                    <h5>Esta es la tarea que hay que hacer con resumen de las tareas y dibujos y hacer una presentación.</h5>
                </div>
                <div class="d-flex">
                    <div class="col">
                        <p class="text-center mb-0">Cómputo distribuido</p>
                    </div>
                    <div class="col d-none d-md-block">
                        <p class="text-center mb-0">José Armando</p>
                    </div>
                    <div class="col">
                        <p class="text-primary text-center mb-0">Pendiente</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
