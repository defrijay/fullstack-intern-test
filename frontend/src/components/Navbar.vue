<template>
    <nav class="flex justify-between items-center p-4 bg-gray-800 text-white">
      <div class="text-lg font-bold">Aksamedia</div>
      <div class="relative">
        <button @click="toggleDropdown" class="flex items-center">
          {{ username }}
          <img src="../../public/vite.svg" alt="logo user" width="32" class="ms-4 bg-slate-600 p-1 rounded-full">
        </button>
        <div
          v-if="dropdownOpen"
          class="absolute right-0 mt-2 w-48 bg-white text-black shadow-lg rounded-md"
        >
          <a href="/edit-profile" class="block px-4 py-2 hover:bg-gray-200">Edit Profile</a>
          <button @click="logout" class="block w-full text-left px-4 py-2 hover:bg-gray-200">
            Logout
          </button>
        </div>
      </div>
    </nav>
  </template>
  
  <script>
export default {
  data() {
    return {
      dropdownOpen: false,
      username: localStorage.getItem('username') || 'User',
    };
  },
  computed: {
    darkMode() {
      return this.$store.state.darkMode;
    },
  },
  methods: {
    toggleDropdown() {
      this.dropdownOpen = !this.dropdownOpen;
    },
    logout() {
      this.$store.dispatch('logout');
      this.$router.push('/login');
    },
    toggleDarkMode() {
      this.$store.dispatch('toggleDarkMode');
    },
  },
};
</script>