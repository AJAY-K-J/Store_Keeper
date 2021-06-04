<template>
  



 <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-md-6 bold">
          <h5 class="card-title mb-0">pending Confirmation</h5>
        </div>
        <div class="col-md-6 text-end">
          <button
            type="button"
            class="btn btn-sm btn-success text-end"
            data-toggle="modal"
            data-target="#add-user"
            name=""
          >
            Update Remarks
          </button>
        </div>
    
      </div>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>

          <th scope="col">Date</th>
          <th scope="col">Item</th>
          <th scope="col">Description of item</th>
          <th scope="col">Quantity</th>
          <th scope="col">Invoice No</th>
          <th scope="col">Remarks</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="data in section_details" :key="data.id">

<td> {{data.id}}</td>

<td> {{data.date}}</td>

<td> {{data.item_name}}</td>

<td> {{data.description_of_item}}</td>

<td> {{data.quantity}}</td>

<td> {{data.invoice}}</td>

<td> {{data.remarks}}</td>

          <td>
            <button
              type="button"
              class="btn btn-sm btn-success text-end"
              data-toggle="modal"
              data-target="#"
              name=""
            
            >
              view
            </button>
            <button class="btn btn-danger btn-sm m-0" >Delete</button></td>
          
        </tr>
      </tbody>
    </table>




    <!-- Modal -->

    <div class="modal fade" id="" data-backdrop="static" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                          <!--  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>-->
                        </div>
                        <div class="modal-body">

                            
                        </div>

                    </div>
                </div>
            </div>


  </div>




</template>

<script>
export default {
  props:['section_details'],

}
</script>

<style>

</style>