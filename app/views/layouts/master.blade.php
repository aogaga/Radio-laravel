<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> All Top Radio </title>

	{{HTML::style('css/screen.css')}}

</head>
<body>


@include('layouts.sidebar')


        <header>

         <div class="row">
         <div class="col-md-12">
          <p class="pull-right">Howdy {{@Auth::user()->firstname}}  {{@Auth::user()->lastname}}</p>

         </div>
         </div>
        </header>
<!-- Main Content -->
    <div class="container-fluid">
        <div class="side-body">

                                <div class="row">


                                </div>

                    <div class="row">


                      @yield('content')

                    </div>


        </div>
    </div>


<footer></footer>
</div>



	   {{HTML::script('js/app.js')}}
	
</body>
</html>