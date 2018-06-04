
@extends('layouts.master')



@section('content')

    <h3>Radio Station Details</h3>

<hr/>
        <div class="col-md-8">

                  <table class="table table-bordered">
                        <tr>
                               <td><strong> Radio Station Name</strong> </td>

                               <td> {{$ct->name}}</td>
                        </tr>


                          <tr>
                             <td> <strong>Url</strong></td>
                            <td> {{$ct->url}}</td>
                         </tr>



                         <tr>
                              <td> <strong>Description</strong></td>
                               <td> {{$ct->description}}</td>
                        </tr>


                         
                         
                         
                       <tr><td> <strong>Category</strong></td>
                         <td> {{$ct->getcategoryname()}}</td>
                         </tr>




                          <tr>
                              <td> <strong>Email</strong></td>
                               <td> {{$ct->email}}</td>
                               </tr>


                     <tr><td> <strong>Telephone</strong></td>
                         <td> {{$ct->phone}}</td>
                         </tr>





                          <tr>
                                                       <td> <strong>City</strong></td>
                                                        <td> {{$ct->city}}</td>
                                                        </tr>


                                              <tr><td> <strong>Country</strong></td>
                                                  <td> {{$ct->getCountry()}}</td>
                                                  </tr>







                          <tr>
                                                       <td> <strong>Website</strong></td>
                                                        <td> {{$ct->website}}</td>
                                                        </tr>


                                              <tr><td> <strong>Facebook</strong></td>
                                                  <td> {{$ct->facebook}}</td>
                                                  </tr>





                    </table>

        </div>

@stop