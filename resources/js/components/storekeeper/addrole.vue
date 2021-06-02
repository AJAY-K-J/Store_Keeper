<template>
  <div>
    <form method="post" @submit.prevent="addrole()">
      <div class="row">
        <div class="col-12">
          <div class="form-group">
            <label>Role Name</label>
            <input
              type="text"
              class="form-control"
              placeholder="Name"
              name="name"
              v-model="roles.name"
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
          bus.$on('edit-role',function(role) {
          vm.clear_data();
           vm.roles.id = role.id;
            vm.roles.name = role.name;
          
          });
      }
      
    },








  data() {
    return {
   roles: {
        name: "",
       
      },
      errors: {},
    };
  },


  methods: {
    clear_data() {
      for (let role in this.roles) {
        this.roles[role] = null;
      }

      for (let er in this.errors) {
        this.errors[er] = null;
      }
    },

    addrole() {
      axios
        .post("./api/add_role", this.roles)
        .then((response) => {
          console.log(response);
          if (response.data == "Success") {
            this.$refs.cancel_btn.click();
            this.clear_data();
          }

          bus.$emit("role-added");
        })
        .catch((error) => {
          this.errors = error.response.data.errors;
        });
    },
  },
};
</script>
