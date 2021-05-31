<template >
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-md-6 bold">
          <h5 class="card-title mb-0">USERS LIST</h5>
        </div>
        <div class="col-md-6 text-end">
          <button
            type="button"
            class="btn btn-sm btn-success text-end"
            data-toggle="modal"
            data-target="#add-user"
            name=""
          
          >
            Add New User
          </button>
        </div>
      </div>
    </div>
    <table class="table">
      <thead >
        <tr>
          <th scope="col" >#</th>
          <th scope="col">Role</th>
          <th scope="col">Name</th>
          <th scope="col">User Name</th>
          <th scope="col">Email</th>
          <th scope="col">Designation</th>
          <th scope="col">role</th>
          <th scope="col">Status</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="lis in list" :key="lis.id">
          <th scope="row">{{ lis.id }}</th>
          <td>{{ lis.name }}</td>
          <td>{{ lis.username }}</td>
          <td>{{ lis.email }}</td>
          <td>{{ lis.designation }}</td>
          <td>{{ lis.role }}</td>
          <td>{{ lis.status }}</td>
        </tr>
      </tbody>
    </table>
      <!-- Modal -->

  </div>
</template>

<script>
export default {
  data() {
    return {
      name:'',
      list: {},
    };
  },

  created() {
    axios.get("/api/adduser").then((response) => (this.list = response.data));
  },

methods:{




}


};
</script>

<style>
.table thead th {
  
    font-weight: bold;
    color: black;
}

</style>