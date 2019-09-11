<template>

    <div class="container">
      <form @submit.prevent="register" >
        <div class="form-group">
          <label >Name</label>
          <input type="text" class="form-control" v-model="form.name"  placeholder="Enter name">
          <span class="text-danger" v-if="errors.name">{{errors.name[0]}}</span>

        </div>
  <div class="form-group">
    <label >Email address</label>
    <input type="email" class="form-control" v-model="form.email"   placeholder="Enter email">
    <span class="text-danger" v-if="errors.email">{{errors.email[0]}}</span>
  </div>
  <div class="form-group">
    <label >Password</label>
    <input type="password" class="form-control" v-model="form.password" placeholder="Password">
    <span class="text-danger" v-if="errors.password">{{errors.password[0]}}</span>

  </div>
  <div class="form-group">
    <label >Confirm Password</label>
    <input type="password" class="form-control" v-model="form.password_confirmation" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>

</template>

<script>
export default {
  data(){
    return{
      form:{
        email:'',
        password:'',
        name:'',
        password_confirmation:''
      },
      errors:{}

    }
  },
  methods:{
    register(){
      axios.post('/api/auth/register',this.form)
    .then(res => User.responseAfterLogin(res))
    .catch(error =>this.errors = error.response.data.errors)

    }
  }
}
</script>

<style lang="css" scoped>
</style>
