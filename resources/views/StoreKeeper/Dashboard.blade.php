@extends('layouts.main')


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
