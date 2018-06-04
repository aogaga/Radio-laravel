
@extends('layouts.master')



@section('content')

    <h3>Update Account</h3>

<hr/>
        <div class="col-md-8">

 @include('layouts.alerts')
        {{ Form::model($user, array($user->id)) }}


                        <fieldset>
                            <div class="form-group">

                                      {{Form::label('firstname', 'Firstname')}}

                                      {{Form::text('firstname', $user->firstname
                                      , array('class'=>'form-control', 'id'=>'firstname', 'placeholder'=>'eg John'))}}

                                    </div>
                                    <div class="form-group">
                                      {{Form::label('lastname', 'Lastname (Surname)')}}

                                          {{Form::text('lastname', $user->lastname, array('class'=>'form-control', 'id'=>'firstname', 'placeholder'=>'eg Obidi'))}}

                                    </div>


                                    <button type="submit" class="btn btn-primary">Submit</button>


                        </fieldset>
                {{Form::close()}}


        </div>

@stop