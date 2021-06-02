<template>
  <div>
    <form method="post" @submit.prevent="additem()">
      <div class="row">
        <div class="col-12">
          <div class="form-group">
            <label>Item Name</label>
            <input
              type="text"
              class="form-control"
              placeholder="Name"
              name="name"
              v-model="items.name"
            />
            <small class="text-danger" v-if="errors.name">{{
              errors.name[0]
            }}</small>
          </div>
          
   <div class="form-group">
            <label>Category Name</label>
            <input
              type="text"
              class="form-control"
              placeholder="Category Name"
              name="category_name"
              v-model="items.category_name"
            />
            <small class="text-danger" v-if="errors.category_name">{{
              errors.category_name[0]
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
          bus.$on('edit-item',function(item) {
          vm.clear_data();
           vm.items.id = item.id;
            vm.items.name = item.name;
           vm.items.category_name = item.category_name;
          });
      }
      
    },








  data() {
    return {
      items: {
        name: "",
       category_name:"",
       
      },
      errors: {},
    };
  },


  methods: {
    clear_data() {
      for (let item in this.items) {
        this.items[item] = null;
      }

      for (let er in this.errors) {
        this.errors[er] = null;
      }
    },

    additem() {
console.log(this.items);

      axios
        .post("./api/add_item", this.items)
        .then((response) => {
          console.log(response);
          if (response.data == "Success") {
            this.$refs.cancel_btn.click();
            this.clear_data();
          }

          bus.$emit("item-added");
        })
        .catch((error) => {
          this.errors = error.response.data.errors;
        });
    },
  },
};
</script>
