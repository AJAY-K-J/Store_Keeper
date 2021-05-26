@extends('layouts.main')


@section('main')


    <div class="row">

        <div class="col-md-12">


            <div class="card">

                <form class="form-horizontal">


                    <div class="card-body " style="border: 1px solid red">

                        <h4 class="card-title text-center ">Registration</h4>
<div class="row">
                        <div class="col-md-3 " >

                            

                            <div class="form-group ">
                                <label for="lname" class=" control-label col-form-label">Date
                                </label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" id="lname" placeholder="Last Name Here">
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="lname" class=" control-label col-form-label">Details of
                                    supplies</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="email1" class="control-label col-form-label">Description of
                                    items</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>

                        </div>
                            <div class="col-md-3">


                            <div class="form-group ">
                                <label for="cono1" class="  control-label col-form-label">Quantity</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="cono1" placeholder="Quantity Here">
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="cono1" class="  control-label col-form-label">Price</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="cono1" placeholder="Price Here">
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="cono1" class="  control-label col-form-label">Invoice No</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="cono1" placeholder="Invoice No Here">
                                </div>
                            </div>

                    

                        </div>
                        <div class="col-md-3">


                            <div class="form-group ">
                                <label for="cono1" class=" control-label col-form-label">DC No</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="cono1" placeholder="DC No Here">
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="cono1" class=" control-label col-form-label"> DC No Date</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" id="cono1" placeholder="Date Here">
                                </div>
                            </div>
                          
                            <div class="form-group ">
                                <label for="cono1" class=" control-label col-form-label">Name of Section 
                                </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="cono1"
                                        placeholder="Name of Section Here">
                                </div>
                            </div>


                  

                        </div>
                        <div class="col-md-3">


                            <div class="form-group ">
                                <label for="cono1" class=" control-label col-form-label">Name of 
                                    officer </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="cono1"
                                       placeholder="Name Inspection officer ">
                                </div>
                            </div>
                           
                            <div class="form-group ">
                                <label for="cono1" class="  control-label col-form-label">Remarks</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>
                           
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="button" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                       

                

                        </div>
                    </div>
                </form>
            </div>
        </div>


    @endsection
