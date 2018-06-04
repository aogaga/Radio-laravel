<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> All Top Radio </title>
    {{HTML::style('css/screen.css')}}
</head>



<body>
            <div class="container">
                <div class="row vertical-offset-100">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">                                
                                <div class="row-fluid user-row">
                                    <h2>All Top Radio</h2>
                                </div>
                            </div>
                            <div class="panel-body">
                     {{Form::open(array('class'=>'form-signin'))}}



                                   @include('layouts.alerts')

                                    <fieldset>

              <label class="panel-login">
                                            <div class="login_result"></div>
                                        </label>
    

                             {{Form::text('email', null, array( 'class'=>'form-control', 'placeholder'=>'Email', 'id'=>'username'))}}
            
                                        
{{Form::password('password', array('class'=>'form-control','placeholder'=>'Password','id'=>'password' ))}}

 <input class="btn btn-lg btn-danger btn-block" type="submit" id="login" value="Login »">


                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </body>
</html>