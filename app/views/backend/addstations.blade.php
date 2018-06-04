
@extends('layouts.master')

@section('content')

        <h3>Add New Radio Station</h3>
<hr />
 {{Form::open(array('role'=>'form', 'enctype'=>'multipart/form-data'))}}



        <div class="col-md-7">

 @include('layouts.alerts')


                        <fieldset>


<div class="form-group">

   {{Form::label('name', 'Station Name')}}

    {{Form::text('name', null, array('class'=>'form-control', 'id'=>'name', 'placeholder'=>'eg Radio 9.6'))}}

</div>


                                    <div class="form-group">

                                        {{Form::label('url', 'Channel Url')}}

                                        {{Form::text('url', null, array('class'=>'form-control', 'id'=>'url', 'placeholder'=>'http://radio-guguru.com/livestream'))}}

                                    </div>




                                    <div class="form-group">
                                      {{Form::label('description', 'Description')}}

                                      {{Form::textarea('description', null, array('class'=>'form-control', 'rows'=>'5', 'cols'=>'5', 'placeholder'=>'A little text is all ya need'))}}

                                    </div>




                            <div class="form-group">

                               {{Form::label('categorys', 'Category')}}

                                {{Form::select('categorys_id', $cat, null, array('class'=>'form-control'))}}

                            </div>




                                              <div class="form-group">

                                                {{Form::label('phone', 'Phone number')}}

                                                  {{Form::text('phone', null, array('class'=>'form-control', 'id'=>'phone', 'placeholder'=>'08039999'))}}

                                                   </div>



                  <div class="form-group">

                                        {{Form::label('email', 'Email Address')}}

                                        {{Form::text('email', null, array('class'=>'form-control', 'id'=>'email', 'placeholder'=>'eg. radionnigeria@yahoo.com'))}}

                                    </div>






 <div class="form-group">

                                        {{Form::label('city', 'City - State')}}

                                        {{Form::text('city', null, array('class'=>'form-control', 'id'=>'email', 'placeholder'=>'eg. Ikeja - Lagos'))}}

                                    </div>






                            <div class="form-group">

                               {{Form::label('country', 'Country')}}

                                {{Form::select('country', $ct, null, array('class'=>'form-control'))}}

                            </div>





                                    <div class="form-group">

                                        {{Form::label('website', 'Website Address')}}

                                        {{Form::text('website', null, array('class'=>'form-control', 'id'=>'website', 'placeholder'=>'http://wwww.radio-guguru.com/'))}}

                                    </div>





                              <div class="form-group">

                                   {{Form::label('facebook', 'Facebook Url')}}

                                   {{Form::text('facebook', null, array('class'=>'form-control', 'id'=>'facebook', 'placeholder'=>'http://wwww.facebook.com/radionigeria'))}}
                              </div>



                        <div class="form-group">

                                                           {{Form::label('twitter', 'Twitter Handle')}}

                                                           {{Form::text('twitter', null, array('class'=>'form-control', 'id'=>'facebok', 'placeholder'=>'http://wwww.facebook.com/radionigeria'))}}
                                                      </div>




                                    <button type="submit" class="btn btn-primary">Submit</button>


                        </fieldset>



        </div>



            <div class="col-md-3">
          
               {{HTML::image('/img/station.jpeg', null, array('id'=>'previewimg', 'class'=>'elastic-image'))}}

                <hr />
               <input accept="image/*" class="img-responsive" id="logo" name="logo" onchange="loadname(this,'previewimg')" type="file" value="">

           
            </div>


 {{Form::close()}}
@stop