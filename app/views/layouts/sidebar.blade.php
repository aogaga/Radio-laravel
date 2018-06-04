<div class="row">
    <!-- uncomment code for absolute positioning tweek see top comment in css -->
    <!-- <div class="absolute-wrapper"> </div> -->
    <!-- Menu -->
    <div class="side-menu">

    <nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <div class="brand-wrapper">
            <!-- Hamburger -->
            <button type="button" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Brand -->
            <div class="brand-name-wrapper">
                <a class="navbar-brand" href="#">
                    All Top Radio
                </a>
            </div>

            <!-- Search -->
            <a data-toggle="collapse" href="#search" class="btn btn-default" id="search-trigger">
                <span class="glyphicon glyphicon-search"></span>
            </a>

            <!-- Search body -->
            <div id="search" class="panel-collapse collapse">
                <div class="panel-body">
                    <form class="navbar-form" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default "><span class="glyphicon glyphicon-ok"></span></button>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- Main Menu -->
    <div class="side-menu-container">
        <ul class="nav navbar-nav">

            <li><a href="{{URL::to('/dashboard')}}"><span class="glyphicon glyphicon-th"></span> DashBord</a></li>


             <!-- Dropdown-->
                        <li class="panel panel-default" id="dropdown">
                            <a data-toggle="collapse" href="#dropdown-lvl1">
                               <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>  Manage Stations<span class="caret"></span>
                            </a>

                            <!-- Dropdown level 1 -->
                            <div id="dropdown-lvl1" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul class="nav navbar-nav">
                                        <li><a href="{{URL::to('/admin/stations')}}"> <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>Stations</a></li>
                                        <li><a href="{{URL::to('/admin/addstations')}}"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Stations</a></li>
                                        <li><a href="{{URL::to('/admin/category')}}"> <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>Categories</a></li>
                                        <li><a href="{{URL::to('/admin/addcategory')}}"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> New Category</a></li>



                                    </ul>
                                </div>
                            </div>
                        </li>






            <li><a href="{{URL::to('/admin/updateaccount')}}"><span class="glyphicon glyphicon-user"></span> Update Account</a></li>

             <li><a href="{{URL::to('/admin/updateaccountpassword')}}"> <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Change Password</a></li>






            <li><a href="{{URL::to('/logout')}}"><span class="glyphicon glyphicon-off"></span> Log Out</a></li>

        </ul>
    </div><!-- /.navbar-collapse -->
</nav>

    </div>