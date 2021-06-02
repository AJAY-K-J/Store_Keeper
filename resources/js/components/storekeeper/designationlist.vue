<template >
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-md-6 bold">
          <h5 class="card-title mb-0">DESIGNATION LIST</h5>
        </div>
        <div class="col-md-6 text-end">
          <button
            type="button"
            class="btn btn-sm btn-success text-end"
            data-toggle="modal"
            data-target="#add-designation"
            name=""
          >
            Add New Designation
          </button>
        </div>
        <div v-if="msg" class="alert alert-success mt-1" role="alert">
          New Designation Added
        </div>
      </div>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
  <th scope="col">Designation Name</th>
       
        
          <th scope="col">Status</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="designation in designations" :key="designation.id">
          <td scope="row">{{ designation.id }}</td>
          <td>{{designation.name }}</td>
       
         
          <td>{{designation.status }}</td>
          <td>
            <button
              type="button"
              class="btn btn-sm btn-success text-end"
              data-toggle="modal"
              data-target="#edit-designation"
              name=""
              @click="edit_designation(designation)"
            >
              edit
            </button>
            <td><button class="btn btn-danger btn-sm m-0" @click="delete_designation(designation.id)">Delete</button></td>
          
        </tr>
      </tbody>
    </table>




    <!-- Modal -->

    <div class="modal fade" id="edit-designation" data-backdrop="static" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">EDIT DESIGNATION</h5>
                          <!--  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>-->
                        </div>
                        <div class="modal-body">

                            <add-new-designation :edit='true'> </add-new-designation>
                        </div>

                    </div>
                </div>
            </div>


  </div>
</template>

<script>
export default {
  data() {
    return {
      msg: false,
      name: "",
  designations: {},
    };
  },

  created() {
    this.get_designation();
    var vm = this;
    bus.$on("designation-added", function () {
      vm.get_designation();
      vm.showmsg();
    });
  },

  methods: {
    get_designation() {
      axios.get("/api/add_designation").then((response) => (this.designations = response.data));
    },

    showmsg() {
      this.msg = true;
    },

    edit_designation(designation) {
      bus.$emit("edit-designation",designation);
   
    },
    delete_designation(id){
   
 axios.delete('/api/add_designation/'+id).then((response) => {
          console.log(response);
          if (response.data == "Success") {
          this.get_designation();
          }

        
        })

    },
  },
};
</script>

<style>
.table thead th {
  font-weight: bold;
  color: black;
}
</style>