<template>
    <div class="flex justify-center mt-4">
      <button
        v-for="page in totalPages"
        :key="page"
        @click="changePage(page)"
        :class="{'bg-blue-500 text-white': currentPage === page, 'bg-gray-300': currentPage !== page}"
        class="px-3 py-2 mx-1 rounded-md"
      >
        {{ page }}
      </button>
    </div>
  </template>
  
  <script>
  export default {
    props: {
      totalItems: Number,
      itemsPerPage: Number,
    },
    data() {
      return {
        currentPage: 1,
      };
    },
    computed: {
      totalPages() {
        return Math.ceil(this.totalItems / this.itemsPerPage);
      },
    },
    methods: {
      changePage(page) {
        this.currentPage = page;
        this.$emit('page-changed', page);
      },
    },
  };
  </script>
  