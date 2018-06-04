
@extends('layouts.master')



@section('content')
<h3>Radio Station Categories</h3>

<hr />
 @include('layouts.alerts')
        <div class="col-md-12">


                @if((!empty($cats)))
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th> Name</th>
                                <th> Description</th>

                                <th> Update </th>
                                <th> Delete</th>
                                </tr>
                            </thead>
                            <tbody>



                    @foreach($cats as $cat)

                                <tr>
                                <td>  {{$cat->name}}</td>
                                <td>  {{$cat->description}}</td>

                                <td>  {{link_to("admin/categoryupdate/$cat->id", 'Update')}}</td>

                                <td>  {{link_to("admin/destroycategory/$cat->id", 'Delete')}}</td>

                                </tr>


                    @endforeach
                                </tbody>
                    </table>


                    {{ $cats->links() }}
                @endif


        </div>

@stop