
@extends('layouts.master')



@section('content')

    <h3>Reset Password</h3>

<hr/>
        <div class="col-md-8">

 @include('layouts.alerts')
        {{ Form::open() }}


                        <fieldset>
                            <div class="form-group">

                                      {{Form::label('old', 'Old Password')}}

                                      {{Form::text('old',null, array('class'=>'form-control', 'id'=>'firstname', 'placeholder'=>'old password'))}}

                                    </div>
                                    <div class="form-group">
                                      {{Form::label('newpassword', 'Lastname (Surname)')}}

                                          {{Form::text('newpassword', null, array('class'=>'form-control', 'id'=>'firstname', 'placeholder'=>'New Password'))}}

                                    </div>



                                    <div class="form-group">
                                                                          {{Form::label('confirm_password', 'Confirm password')}}

                                                                              {{Form::text('confirm_password',null, array('class'=>'form-control', 'id'=>'confirm_password', 'placeholder'=>'Confirm password'))}}

                                                                        </div>


                                    <button type="submit" class="btn btn-primary">Submit</button>


                        </fieldset>
                {{Form::close()}}


        </div>

@stop