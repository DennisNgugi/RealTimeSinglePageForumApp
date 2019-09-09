<template>
  <div>
    <div class="container">
      <form>
  <div class="form-group">
    <label >Email address</label>
    <input type="email" class="form-control" v-model="form.email"   placeholder="Enter email">
  </div>
  <div class="form-group">
    <label >Password</label>
    <input type="password" class="form-control" v-model="form.password"  placeholder="Password">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
  </div>
</template>

<script>
export default {
  data(){
    return {
      form:{
        email:'',
        password:''
      }
    }
  }
}
</script>

<style lang="css" scoped>
</style>
