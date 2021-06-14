<template >
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-md-6 bold">
          <h5 class="card-title mb-0">ROLE LIST</h5>
        </div>
        <div class="col-md-6 text-end">
          <button
            type="button"
            class="btn btn-sm btn-success text-end"
            data-toggle="modal"
            data-target="#add-role"
            name=""
          >
            Add New Role
          </button>
        </div>
      </div>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>

          <th scope="col">Role Name</th>

          <th scope="col">Status</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="role in roles" :key="role.id">
          <td scope="row">{{ role.id }}</td>
          <td>{{ role.name }}</td>

          <td>{{ role.status }}</td>
          <td>
            <button
              type="button"
              class="btn btn-sm btn-success text-end"
              data-toggle="modal"
              data-target="#edit-role"
              name=""
              @click="edit_role(role)"
            ></button>
            <button
              class="btn btn-danger btn-sm m-0"
              @click="delete_role(role.id)"
            >
              <i class="ti-trash"> </i>
            </button>
          </td>
        </tr>
      </tbody>
    </table>

    <!-- Modal -->

    <div
      class="modal fade"
      id="edit-role"
      data-backdrop="static"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalCenterTitle"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">EDIT ROLE</h5>
            <!--  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>-->
          </div>
          <div class="modal-body">
            <add-new-role :edit="true"> </add-new-role>
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
      roles: {},
    };
  },

  created() {
    this.get_role();
    var vm = this;
    bus.$on("role-added", function () {
      vm.get_role();
    });
  },

  methods: {
    get_role() {
      axios
        .get("/api/add_role")
        .then((response) => (this.roles = response.data));
    },

    edit_role(role) {
      bus.$emit("edit-role", role);
    },
    delete_role(id) {
      axios.delete("/api/add_role/" + id).then((response) => {
        console.log(response);
        if (response.data == "Success") {
          this.get_role();
        }
      });
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