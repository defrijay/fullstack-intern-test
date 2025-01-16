<template>
      <Navbar />
      <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">Welcome to Home Page, {{ username }}</h1>
        <input type="text" v-model="searchQuery" @input="filterData" placeholder="Search..." class="w-full p-2 mb-4 border border-gray-300 rounded-md" />
        <div v-if="filteredData.length > 0" class="space-y-2">
          <div v-for="(item, index) in paginatedData" :key="index" class="p-4 bg-white shadow-md rounded-md">
            <p>{{ item }}</p>
          </div>
        </div>
        <Pagination :totalItems="filteredData.length" :itemsPerPage="itemsPerPage" @page-changed="handlePageChange" />
      </div>
  </template>
  
  <script>
  import Navbar from '../components/Navbar.vue';
  import Pagination from '../components/Pagination.vue';
  
  export default {
    components: { Navbar, Pagination },
    data() {
      return {
        username: localStorage.getItem('username'),
        searchQuery: '',
        data: ['Agus', 'Budi', 'Citra', 'Dian', 'Eko', 'Fira', 'Gilang', 'Hana'],
        filteredData: [],
        currentPage: 1,
        itemsPerPage: 3,
      };
    },
    computed: {
      paginatedData() {
        const start = (this.currentPage - 1) * this.itemsPerPage;
        const end = start + this.itemsPerPage;
        return this.filteredData.slice(start, end);
      },
    },
    watch: {
      searchQuery() {
        this.filterData();
      },
    },
    methods: {
      filterData() {
        this.filteredData = this.data.filter(item => item.toLowerCase().includes(this.searchQuery.toLowerCase()));
        this.currentPage = 1;
      },
      handlePageChange(page) {
        this.currentPage = page;
      },
    },
    created() {
      this.filteredData = this.data;
    },
  };
  </script>
  