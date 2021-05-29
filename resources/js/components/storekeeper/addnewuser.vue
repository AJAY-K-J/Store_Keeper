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
                            name="name" v-model="name"
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
                           
                            name="username" v-model="username"
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
                              name="email" v-model="email"
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
                              name="designation" v-model="designation"
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
                                name="role" v-model="role"
                            required
                        />
                        <small class="text-danger"></small>
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
                        >
                            Close
                        </button>
                        <button
                            class="btn btn-primary float-right"
                            type="submit"
                        >
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
    data(){

return{
    name:'',
    username:'',
    email:'',
    designation:'',
    role:''

}
    },
    mounted() {
        console.log("Component mounted.");
    },
    methods:{
adduser(){
axios.post('./api/adduser',{
    name:this.name,
      username:this.username,
    email:this.email,
    designation:this. designation,
    role:this.role,
    
    })

}


    }
};
</script>
