<template>
  <div>
    <form method="post" @submit.prevent="adddesignation()">
      <div class="row">
        <div class="col-12">
          <div class="form-group">
            <label>Designation Name</label>
            <input
              type="text"
              class="form-control"
              placeholder="Name"
              name="name"
              v-model="designations.name"
            />
            <small class="text-danger" v-if="errors.name">{{
              errors.name[0]
            }}</small>
          </div>
          
 
          


        </div>
      </div>
      <div class="row mt-4">
        <div class="col-12">
          <div class="form-group text-end">
            <button
              class="btn btn-secondary float-right mr-2"
              data-dismiss="modal"
              ref="cancel_btn"
              type="button"
              @click="clear_data"
            >
              Cancel
            </button>
            <button class="btn btn-primary float-right" type="submit">
              Save
            </button>
          </div>
        </div>
      </div>
    </form>
  </div>
</template>

<script>
export default {
  props: ["edit"],


created() {
      if(this.edit)
      {
       
          var vm = this;
          bus.$on('edit-designation',function(designation) {
          vm.clear_data();
           vm.designations.id = designation.id;
            vm.designations.name = designation.name;
          
          });
      }
      
    },








  data() {
    return {
     designations: {
        name: "",
     
       
      },
      errors: {},
    };
  },


  methods: {
    clear_data() {
      for (let designation in this.designations) {
        this.designations[designation] = null;
      }

      for (let er in this.errors) {
        this.errors[er] = null;
      }
    },

    adddesignation() {
console.log(this.designations);

      axios
        .post("./api/add_designation", this.designations)
        .then((response) => {
          console.log(response);
          if (response.data == "Success") {
            this.$refs.cancel_btn.click();
            this.clear_data();
          }

          bus.$emit("designation-added");
        })
        .catch((error) => {
          this.errors = error.response.data.errors;
        });
    },
  },
};
</script>
