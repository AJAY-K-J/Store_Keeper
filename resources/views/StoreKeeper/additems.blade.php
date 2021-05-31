@extends('layouts.main')


@section('sidebar0')


<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
    href="/storedashboard" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
        class="hide-menu">Dashboard</span></a></li>
@endsection

@section('sidebar1')
<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
    href="adduser" aria-expanded="false"><i class="mdi mdi-account-multiple-plus"></i><span
        class="hide-menu">Add User</span></a></li>
    
@endsection

@section('sidebar2')
<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
    href="adddesignations" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span
        class="hide-menu">Add Designations</span></a></li>
    
@endsection
@section('sidebar3')

<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
    href="addroles" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span
        class="hide-menu">Add Roles</span></a></li>
    
@endsection
@section('sidebar4')

<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
    href="addsections" aria-expanded="false"><i class="mdi mdi-blur-linear"></i><span
        class="hide-menu">Add Sections</span></a></li>
    
@endsection
@section('sidebar5')
<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
    href="addcategories" aria-expanded="false"><i class="mdi mdi-blur-linear"></i><span
        class="hide-menu">Add Categories</span></a></li>
    
@endsection
@section('sidebar6')

<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
    href="additems" aria-expanded="false"><i class="mdi mdi-blur-linear"></i><span
        class="hide-menu">Add Items</span></a></li>
    
@endsection
@section('sidebar7')


    
@endsection
@section('sidebar8')

    
@endsection
@section('sidebar9')
       

    
@endsection

 <!-- Column -->
          <!-- ============================================================== -->
                    <!-- ============================================================== -->
                              <!-- ============================================================== -->




@section('Column1')

                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                       <a href="/d"> <div class="card card-hover">
                            <div class="box bg-cyan text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                                <h6 class="text-white">Dashboard</h6>
                            </div>
                        </div></a>
                    </div>
    
@endsection



@section('Column2')
 <!-- Column -->

                    
 <div class="col-md-6 col-lg-4 col-xlg-3">
    <div class="card card-hover">
        <div class="box bg-success text-center">
            <h1 class="font-light text-white"><i class="mdi mdi-chart-areaspline"></i></h1>
            <h6 class="text-white">Store Arrival Book</h6>
        </div>
    </div>
</div>
@endsection

@section('Column3')

                   
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-warning text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-collage"></i></h1>
                                <h6 class="text-white">GR book</h6>
                            </div>
                        </div>
                    </div>
@endsection
@section('Column4')

                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-danger text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-border-outside"></i></h1>
                                <h6 class="text-white">Cadex</h6>
                            </div>
                        </div>
                    </div>
@endsection
@section('Column5')
 <!-- Column -->
 <div class="col-md-6 col-lg-2 col-xlg-3">
    <div class="card card-hover">
        <div class="box bg-info text-center">
            <h1 class="font-light text-white"><i class="mdi mdi-arrow-all"></i></h1>
            <h6 class="text-white">Full Width</h6>
        </div>
    </div>
</div>
<!-- Column -->
@endsection
@section('Column6')
     <!-- Column -->
     <div class="col-md-6 col-lg-4 col-xlg-3">
        <div class="card card-hover">
            <div class="box bg-danger text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-receipt"></i></h1>
                <h6 class="text-white">Forms</h6>
            </div>
        </div>
    </div>
@endsection
@section('Column7')

                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-info text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-relative-scale"></i></h1>
                                <h6 class="text-white">Buttons</h6>
                            </div>
                        </div>
                    </div>
@endsection
@section('Column8')
     <!-- Column -->
     <div class="col-md-6 col-lg-2 col-xlg-3">
        <div class="card card-hover">
            <div class="box bg-cyan text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-pencil"></i></h1>
                <h6 class="text-white">Elements</h6>
            </div>
        </div>
    </div>
@endsection
@section('Column9')
<div class="col-md-6 col-lg-2 col-xlg-3">
    <div class="card card-hover">
        <div class="box bg-success text-center">
            <h1 class="font-light text-white"><i class="mdi mdi-calendar-check"></i></h1>
            <h6 class="text-white">Calnedar</h6>
        </div>
    </div>
</div>
@endsection
@section('Column10')
     <!-- Column -->
     <div class="col-md-6 col-lg-2 col-xlg-3">
        <div class="card card-hover">
            <div class="box bg-warning text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-alert"></i></h1>
                <h6 class="text-white">Errors</h6>
            </div>
        </div>
    </div>
@endsection





          <!-- ============================================================== -->
                    <!-- ============================================================== -->
                              <!-- ============================================================== -->



@section('main')


    <div class="row">

        <div class="col-md-12">

            <div class="card">
                <div class="">
                    

                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 bold"><h5 class="card-title mb-0">ITEMS LIST</h5></div>
                        <div class="col-md-6 text-end"><button type="submit" class="btn btn-sm btn-success text-end " name="">Add New Item</button></div>
                    </div>
                    
                    
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Role</th>
                            <th scope="col">Name</th>
                            <th scope="col">catagory</th> 	
                            <th scope="col">Status</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div></div>
        </div>
    @endsection