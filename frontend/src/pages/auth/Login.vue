<template>
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
      <div class="p-6 bg-white shadow-md rounded-md w-80">
        <h2 class="text-xl font-semibold text-center mb-4">Login</h2>
        <form @submit.prevent="handleLogin">
          <input type="text" v-model="username" placeholder="Username" class="w-full p-2 mb-4 border border-gray-300 rounded-md" />
          <input type="password" v-model="password" placeholder="Password" class="w-full p-2 mb-4 border border-gray-300 rounded-md" />
          <button type="submit" class="w-full p-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Login</button>
        </form>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        username: '',
        password: '',
      };
    },
    methods: {
      handleLogin() {
        if (this.username === 'admin' && this.password === 'password') {
          localStorage.setItem('isAuthenticated', true);
          localStorage.setItem('username', this.username);
          this.$router.push('/home');
        } else {
          alert('Invalid Credentials');
        }
      },
    },
  };
  </script>
  