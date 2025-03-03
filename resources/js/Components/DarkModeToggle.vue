<template>
    <button @click="toggleDarkMode" class="p-2 rounded-lg border border:gray dark:bg-gray-700">
      <span v-if="isDarkMode">🌙</span>
      <span v-else>☀️</span>
    </button>
  </template>
  
  <script>
  export default {
    data() {
      return {
        isDarkMode: false,
      };
    },
    mounted() {
      // Check for saved preference in localStorage
      if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        this.enableDarkMode();
      } else {
        this.disableDarkMode();
      }
    },
    methods: {
      toggleDarkMode() {
        this.isDarkMode = !this.isDarkMode;
        if (this.isDarkMode) {
          this.enableDarkMode();
        } else {
          this.disableDarkMode();
        }
      },
      enableDarkMode() {
        document.documentElement.classList.add('dark');
        localStorage.theme = 'dark';
      },
      disableDarkMode() {
        document.documentElement.classList.remove('dark');
        localStorage.theme = 'light';
      },
    },
  };
  </script>