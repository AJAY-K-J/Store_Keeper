<template>
  <div>
    <form method="post" @submit.prevent="adduser()">
      <div class="row">
        <div class="col-12">
          <div class="form-group">
            <label>Name</label>
            <input
              type="text"
              class="form-control"
              placeholder="Name"
              name="name"
              v-model="user.name"
              required
            />
            <small class="text-danger"></small>
          </div>
          <div class="form-group">
            <label>User Name</label>
            <input
              type="text"
              class="form-control"
              placeholder="User Name"
              name="username"
              v-model="user.username"
              required
            />
            <small class="text-danger"></small>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input
              type="email"
              class="form-control"
              placeholder="Email"
              name="email"
              v-model="user.email"
              required
            />
            <small class="text-danger"></small>
          </div>
          <div class="form-group">
            <label>Designation</label>
            <input
              type="text"
              class="form-control"
              placeholder="Designation"
              name="designation"
              v-model="user.designation"
              required
            />
            <small class="text-danger"></small>
          </div>
          <div class="form-group">
            <label>Role</label>
            <input
              type="text"
              class="form-control"
              placeholder="Role"
              name="role"
              v-model="user.role"
              required
            />
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
  data() {
    return {
      user: {
        name: "",
        username: "",
        email: "",
        designation: "",
        role: "",
      },
    };
  },

  mounted() {
    console.log("Component mounted.");
  },

  methods: {
    clear_data() {
      this.user.name = "";
      this.user.username = "";
      this.user.email = "";
      this.user.designation = "";
      this.user.role = "";
    },

    adduser() {
      axios.post("./api/adduser", this.user).then((response) => {
      console.log(response);
        if (response.data == 'Success') {

          this.$refs.cancel_btn.click();
          this.clear_data();
          alert('added');
        }

        bus.$emit("user-added");
      });
    },
  },
};
</script>
