
@extends('layouts.master')



@section('content')
<h3>Radio Stations</h3>

<hr />
 @include('layouts.alerts')
        <div class="col-md-12">


                @if((!empty($sts)))
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th> Logo</th>
                                <th> Name</th>

                                <th> Url </th>
                                <th> Email</th>
                                <th> Phone</th>
                                <th> View</th>
                                <th> Update</th>
                                <th> Delete</th>
                                </tr>
                            </thead>
                            <tbody>



                    @foreach($sts as $st)

                                <tr>
                                <td><div class="small-img">
                                {{HTML::image('/img/'.$st->logo)}}
                                </div></td>
                                <td>  {{$st->name}}</td>
                                <td>  {{$st->url}}</td>
                                <td>  {{$st->email}}</td>
                                <td>  {{$st->phone}}</td>

                                  <td>  {{link_to("admin/stationview/$st->id", 'View')}}</td>

<td>  {{link_to("admin/stationupdate/$st->id", 'Update')}}</td>

<td>  {{link_to("admin/stationdelete/$st->id", 'delete')}}</td>

                                </tr>


                    @endforeach
                                </tbody>
                    </table>


                    {{ $sts->links() }}
                @endif


        </div>

@stop