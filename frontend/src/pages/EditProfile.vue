<template>
    <div>
      <Navbar />
      <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">Edit Profile</h1>
        <input
          type="text"
          v-model="username"
          placeholder="Enter your full name"
          class="w-full p-2 mb-4 border border-gray-300 rounded-md"
        />
        <button @click="saveProfile" class="w-full p-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Save</button>
      </div>
    </div>
  </template>
  
  <script>
  import Navbar from '../components/Navbar.vue';
  
  export default {
    components: { Navbar },
    data() {
      return {
        username: localStorage.getItem('username') || '',
      };
    },
    methods: {
      saveProfile() {
        localStorage.setItem('username', this.username);
        this.$router.push('/home');
      },
    },
  };
  </script>
  