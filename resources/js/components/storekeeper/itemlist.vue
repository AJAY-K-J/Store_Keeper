<template >
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-md-6 bold">
          <h5 class="card-title mb-0">ITEM LIST</h5>
        </div>
        <div class="col-md-6 text-end">
          <button
            type="button"
            class="btn btn-sm btn-success text-end"
            data-toggle="modal"
            data-target="#add-item"
            name=""
          >
            Add New Item
          </button>
        </div>
    
      </div>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
  <th scope="col">Item Name</th>
          <th scope="col">Category Name</th>
        <th scope="col">Description of Item</th>
          <th scope="col">Status</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="item in items" :key="item.id">
          <td scope="row">{{ item.id }}</td>
          <td>{{item.name }}</td>
          <td>{{item.category_name }}</td>
         <td>{{item.description_item }}</td>
          <td>{{item.status }}</td>
          <td>
            <button
              type="button"
              class="btn btn-sm btn-success text-end"
              data-toggle="modal"
              data-target="#edit-item"
              name=""
              @click="edit_item(item)"
            >
              edit
            </button>
            <button class="btn btn-danger btn-sm m-0" @click="delete_item(item.id)">Delete</button></td>
          
        </tr>
      </tbody>
    </table>




    <!-- Modal -->

    <div class="modal fade" id="edit-item" data-backdrop="static" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">EDIT ITEM</h5>
                          <!--  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>-->
                        </div>
                        <div class="modal-body">

                            <add-new-item  :edit='true' :category_details="category_details" > </add-new-item>
                        </div>

                    </div>
                </div>
            </div>


  </div>
</template>

<script>
export default {
   props: ["category_details"],
  data() {
    return {
    
  items: {},
    };
  },

  created() {


    this.get_item();
    var vm = this;
    bus.$on("item-added", function () {
      vm.get_item();
   
    });
  },

  methods: {
    get_item() {
      axios.get("/api/add_item").then((response) => (this.items = response.data));
    },


    edit_item(items) {
      bus.$emit("edit-item",items);
   
    },
    delete_item(id){
   
 axios.delete('/api/add_item/'+id).then((response) => {
          console.log(response);
          if (response.data == "Success") {
          this.get_item();
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