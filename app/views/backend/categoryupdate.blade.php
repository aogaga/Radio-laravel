
@extends('layouts.master')



@section('content')

    <h3>Add New Category</h3>

<hr/>
        <div class="col-md-8">

 @include('layouts.alerts')
        {{ Form::model($cat, array($cat->id)) }}


                        <fieldset>
                            <div class="form-group">

                                      {{Form::label('name', 'Category Title')}}

                                      {{Form::text('name', null, array('class'=>'form-control', 'id'=>'exampleInputEmail1', 'placeholder'=>'eg Gospel'))}}

                                    </div>
                                    <div class="form-group">
                                      {{Form::label('description', 'Category Description')}}

                                      {{Form::textarea('description', null, array('class'=>'form-control', 'rows'=>'5', 'cols'=>'5', 'placeholder'=>'A little text is all ya need'))}}

                                    </div>


                                    <button type="submit" class="btn btn-primary">Submit</button>


                        </fieldset>
                {{Form::close()}}


        </div>

@stop