@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="notify mb-4">
                   <h4 class="mb-0">¿Tienes una nueva tarea?, no te olvides!</h4>
                </div>
                <section class="notify">
                    <h4 class="text-center">Anota tu tarea</h4>
                    <form action="" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="subjectid">Asignatura</label>
                            <select class="form-control" name="subject" id="subjectid">
                                <option value="" disabled aria-readonly="true">Materia</option>
                                <option value="#">Matematicas</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="deliveryDate">Fecha de entrega</label>
                            <input type="date" class="form-control" type="date" name="deliveryDate" id="deliveryDate">
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <label for="">Hora de entrega</label>
                            </div>
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-12"><p class="text-center mb-0">Hora de inicio*</p></div>
                                    <div class="col-6">
                                        <input type="number" min="1" max="12" placeholder="Hora" class="form-control" name="initialHour" id="initialHour">
                                    </div>
                                    <div class="col-6">
                                        <input type="number" placeholder="Minutos" min="1" max="59" name="initialMin" maxlength="2" class="form-control" id="initialMin">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="col-12"><p class="text-center mb-0">Hora final</p></div>
                                    </div>
                                    <div class="col-6">
                                        <input type="number" min="1" max="12" placeholder="Hora" class="form-control" name="finalHour" id="finalHour">
                                    </div>
                                    <div class="col-6">
                                        <input type="number" placeholder="Minutos" min="1" max="59" name="finalMin" maxlength="2" class="form-control" id="finalMin">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="homework">¿Cómo es tu tarea?</label>
                            <textarea name="homework" style="max-height: 150px; min-height:100px;" id="homework" class="form-control" placeholder="Describe como es tu tarea..."></textarea>
                            <small id="homework" class="text-muted">Anota tu tarea para que no te olvides.</small>
                        </div>
                        <div class="form-group">
                          <label for="observation">¿Cómo quiere la tarea el profesor?</label>
                          <textarea name="observation" class="form-control" id="observation" style="max-height: 150px; min-height:100px;" placeholder="Describe el formato de entrega...">{{old('observation')}}</textarea>
                          <small id="observation" class="text-muted">¿Como vas a hacer esta tarea y como lo vas a entregar?</small>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
@endsection