<template>
    <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Users Table</h3>

                <div class="card-tools">
                    <!-- Button trigger modal -->
                    <button class="btn btn-success" data-toggle="modal" data-target="#addNewUser"><i class="fas fa-user-plus fa-fw"></i> Add New User</button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <tbody><tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Type</th>
                    <th>Photo</th>
                    <th>Bio</th>
                    <th>Created_at</th>
                    <th>Action</th>
                  </tr>
                 <!-- 
                     * users table
                    *  display all users
                  -->
                  <tr v-for="user in users" :key="user.id">
                    <td>{{ user.id }}</td>
                    <td>{{ user.name | capitalize}}</td>
                    <td>{{ user.email }}</td>
                    <td>{{user.type | capitalize}}</td>
                    <td>{{ user.photo }}</td>
                    <td>{{ user.bio }}</td>
                    <td>{{ user.created_at |datetime }}</td>
                    <td>
                        <a href="#"><i class="fa fa-edit text-green"></i></a> &nbsp;&nbsp;
                        <a href="#"><i class="fa fa-trash text-red"></i></a>
                    </td>
                  </tr>
                  
                </tbody></table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /. row -->

        <!-- Modal -->
        <div class="modal fade" id="addNewUser" tabindex="-1" role="dialog" aria-labelledby="addNewUserLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addNewUserLabel">Add New User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
            <!-- forms -->
            <form @submit.prevent="createUser" >
                <div class="modal-body">
                    <!-- name -->
                    <div class="form-group">
                        <input v-model="form.name" id="name" placeholder="Name"
                                type="text" name="name"
                                class="form-control"
                                :class="{ 'is-invalid': form.errors.has('name') }"> 
                        <has-error :form="form" field="name"></has-error>
                    </div>

                    <!-- Email -->
                    <div class="form-group">
                        <input v-model="form.email" id="email" placeholder="Email Address"
                                type="text" name="email"
                                class="form-control"
                                :class="{ 'is-invalid': form.errors.has('email') }"> 
                        <has-error :form="form" field="email"></has-error>
                    </div>

                    <!-- Password -->
                    <div class="form-group">
                        <input v-model="form.password" id="password" placeholder="Password"
                                type="text" name="password"
                                class="form-control"
                                :class="{ 'is-invalid': form.errors.has('password') }"> 
                        <has-error :form="form" field="password"></has-error>
                    </div>

                    <!-- Bio -->
                    <div class="form-group">
                        <textarea v-model="form.bio" id="bio" placeholder="Short Bio for user(optional)"
                                rows="5"
                                type="text" name="bio"
                                class="form-control"
                                :class="{ 'is-invalid': form.errors.has('bio') }"> 
                        </textarea>
                        <has-error :form="form" field="Bio"></has-error>
                    </div>

                    <!-- type or role -->
                    <div class="form-group">
                        <select v-model="form.type" placeholder="Role" id="type"
                                type="text" name="type"
                                class="form-control"
                                :class="{ 'is-invalid': form.errors.has('type') }"> 
                                <option value="">Select User Role</option>
                                <option value="admin">Admin</option>
                                <option value="user">Standard User</option>
                                <option value="author">Author</option> 
                        </select>
                        <has-error :form="form" field="type"></has-error>
                    </div>

            </div>
            <!-- ./modal-body -->
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Create</button>
            </div>
            <!-- ./footer -->
            </form>
        </div> <!-- ./modal content -->
    </div> <!-- ./modal dialog -->
    </div> <!-- ./end of modal  -->
    </div>
    <!-- /.container -->
</template>

<script>


    import { Form, HasError, AlertError } from 'vform'

    export default {
        
        data () {
            return {
                //user object
                users: {},

                // Create a new form instance
                form: new Form({
                        name: '',
                        password: '',
                        email: ''
                        })
                    }
                }, // end of data
        methods:{
                createUser(){
                    this.$Progress.start();
                    this.form.post('api/user');

                    $('#addNewUser').modal('hide');

                    toast({
                        type: 'success',
                        title: 'User Created'
                        });
                        
                    this.$Progress.finish();

                },
                loadUsers(){
                    axios.get("api/user")
                         .then( 
                            ({data})  => (this.users = data.data)
                          );
                }
        },
        created(){
            this.loadUsers();
            
            setInterval(() => {
                this.loadUsers();
            }, 3000);
        }
    }
</script>
