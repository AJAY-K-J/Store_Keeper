@extends('layouts.main')


@section('sidebar0')


<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
    href="/d" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
        class="hide-menu">Dashboard</span></a></li>
@endsection

@section('sidebar1')
<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
    href="adduser" aria-expanded="false"><i class="mdi mdi-account-multiple-plus"></i><span
        class="hide-menu">Add User</span></a></li>
    
@endsection

@section('sidebar2')
<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
    href="widgets.html" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span
        class="hide-menu">Add Designations</span></a></li>
    
@endsection
@section('sidebar3')

<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
    href="tables.html" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span
        class="hide-menu">Add Roles</span></a></li>
    
@endsection
@section('sidebar4')

<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
    href="grid.html" aria-expanded="false"><i class="mdi mdi-blur-linear"></i><span
        class="hide-menu">Add Sections</span></a></li>
    
@endsection
@section('sidebar5')
<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
    href="grid.html" aria-expanded="false"><i class="mdi mdi-blur-linear"></i><span
        class="hide-menu">Add Categories</span></a></li>
    
@endsection
@section('sidebar6')

<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
    href="grid.html" aria-expanded="false"><i class="mdi mdi-blur-linear"></i><span
        class="hide-menu">Add Items</span></a></li>
    
@endsection
@section('sidebar7')

<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
    href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-face"></i><span
        class="hide-menu">Icons </span></a>
<ul aria-expanded="false" class="collapse  first-level">
    <li class="sidebar-item"><a href="icon-material.html" class="sidebar-link"><i
                class="mdi mdi-emoticon"></i><span class="hide-menu"> Material Icons
            </span></a></li>
    <li class="sidebar-item"><a href="icon-fontawesome.html" class="sidebar-link"><i
                class="mdi mdi-emoticon-cool"></i><span class="hide-menu"> Font Awesome
                Icons </span></a></li>
</ul>
</li>
    
@endsection
@section('sidebar8')
<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
    href="pages-elements.html" aria-expanded="false"><i class="mdi mdi-pencil"></i><span
        class="hide-menu">Elements</span></a></li>
    
@endsection
@section('sidebar9')
       
<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
    href="javascript:void(0)" aria-expanded="false"><i
        class="mdi mdi-move-resize-variant"></i><span class="hide-menu">Addons </span></a>
<ul aria-expanded="false" class="collapse  first-level">
    <li class="sidebar-item"><a href="index2.html" class="sidebar-link"><i
                class="mdi mdi-view-dashboard"></i><span class="hide-menu"> Dashboard-2
            </span></a></li>
    <li class="sidebar-item"><a href="pages-gallery.html" class="sidebar-link"><i
                class="mdi mdi-multiplication-box"></i><span class="hide-menu"> Gallery
            </span></a></li>
    <li class="sidebar-item"><a href="pages-calendar.html" class="sidebar-link"><i
                class="mdi mdi-calendar-check"></i><span class="hide-menu"> Calendar
            </span></a></li>
    <li class="sidebar-item"><a href="pages-invoice.html" class="sidebar-link"><i
                class="mdi mdi-bulletin-board"></i><span class="hide-menu"> Invoice
            </span></a></li>
    <li class="sidebar-item"><a href="pages-chat.html" class="sidebar-link"><i
                class="mdi mdi-message-outline"></i><span class="hide-menu"> Chat Option
            </span></a></li>
</ul>
</li>
    
@endsection

 <!-- Column -->
          <!-- ============================================================== -->
                    <!-- ============================================================== -->
                              <!-- ============================================================== -->




@section('Column1')

                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                       <a href="/storedashboard"> <div class="card card-hover">
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


            <div class="card ">

                <form class="form-horizontal" method="POST" action="/addarrivals">
                    @csrf

                    <div class="card-body ">

                        <h4 class="card-title text-center "> <b>STORE ARRIVAL REGISTER </b></h4>
                        <div class="row">
                            <div class="col-md-3 ">



                                <div class="form-group ">
                                    <label for="date" class=" control-label col-form-label">Date
                                    </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="  form-control" id="date" name="date" placeholder="Date ">
                                    </div>
                        @error('date')
                        <span class="storearrivalspan"> {{$message}} </span>
                            
                        @enderror
                                        
                         
                                </div>
                                <div class="form-group ">
                                    <label for="quantity" class="  control-label col-form-label">Quantity</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="quantity" name="quantity"
                                            placeholder="Quantity Here">
                                    </div>

                                    @error('quantity')
                                    <span class="storearrivalspan"> {{$message}} </span>
                                        
                                    @enderror
                                                   
                              
                                </div>
                                <div class="form-group ">
                                    <label for="dcdate" class=" control-label col-form-label"> DC Date</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="dcdate" name="dcdate"
                                            placeholder=" DC Date ">
                                    </div>

                                    @error('dcdate')
                                    <span class="storearrivalspan"> {{$message}} </span>
                                        
                                    @enderror
                                                   
                       
                                </div>




                            </div>
                            <div class="col-md-3">
                                <div class="form-group ">
                                    <label for="supplier" class=" control-label col-form-label">Details of
                                        supplier</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control form-height " id="supplier"
                                            name="supplier"></textarea>
                                    </div>
                                    @error('supplier')
                                    <span class="storearrivalspan"> {{$message}} </span>
                                        
                                    @enderror
                                                   
                                
                                </div>


                                <div class="form-group ">
                                    <label for="price" class="  control-label col-form-label">Price</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="price" name="price"
                                            placeholder="Price Here">
                                    </div>
                                    @error('price')
                                    <span class="storearrivalspan"> {{$message}} </span>
                                        
                                    @enderror
                                                   
                          
                                </div>
                                <div class="form-group ">
                                    <label for="section" class=" control-label col-form-label">Name of Section
                                    </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="section" name="section"
                                            placeholder="Name of Section Here">
                                    </div>
                                    @error('section')
                                    <span class="storearrivalspan"> {{$message}} </span>
                                        
                                    @enderror
                                                   
                                  
                                </div>



                            </div>
                            <div class="col-md-3">


                                <div class="form-group ">
                                    <label for="item" class="control-label col-form-label">Description of
                                        item</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control form-height" name="Descriptionitem"></textarea>
                                    </div>
                                    @error('Descriptionitem')
                                    <span class="storearrivalspan"> {{$message}} </span>
                                        
                                    @enderror
                                                   
                             
                                </div>

                                <div class="form-group ">
                                    <label for="invoice" class="  control-label col-form-label">Invoice No</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="invoice" name="invoice"
                                            placeholder="Invoice No Here">
                                    </div>
                                    @error('invoice')
                                    <span class="storearrivalspan"> {{$message}} </span>
                                        
                                    @enderror
                                                   
                               
                                </div>



                                <div class="form-group ">
                                    <label for="officer" class=" control-label col-form-label">Name of
                                        officer </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="officer" name="officer"
                                            placeholder="Name Inspection officer ">
                                    </div>
                                    @error('officer')
                                    <span class="storearrivalspan"> {{$message}} </span>
                                        
                                    @enderror
                                                   
                                
                                </div>





                            </div>
                            <div class="col-md-3">
                                <div class="form-group ">
                                    <label for="itemname" class=" control-label col-form-label">Name of
                                        item </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="itemname" name="itemname"
                                            placeholder="Name of item ">
                                    </div>
                                    @error('itemname')
                                    <span class="storearrivalspan"> {{$message}} </span>
                                        
                                    @enderror
                                                   
                                 
                                </div>


                                <div class="form-group ">
                                    <label for="dcno" class=" control-label col-form-label">DC No</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="dcno" name="dcno"
                                            placeholder="DC No Here">
                                    </div>
                                    @error('dcno')
                                    <span class="storearrivalspan"> {{$message}} </span>
                                        
                                    @enderror
                                                   
                                  
                                </div>





                                <div class="form-group ">
                                    <label for="remarks" class="  control-label col-form-label">Remarks</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control form-height" name="remarks"></textarea>
                                    </div>
                                    
                                </div>






                            </div>

                            <div class="border-top">
                                <div class="card-body text-end">
                                    <button type="submit" class="btn btn-primary  " name="arrivalsave">Submit</button>
                                </div>
                            </div>
                            
                        </div>



                    </div>
                </form>
            </div>
        </div>


    @endsection
