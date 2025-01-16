import { createApp } from 'vue'
import './style.css'
import router from './router';
import App from './App.vue'
import HomePage from './pages/HomePage.vue';

createApp(App).use(router).mount('#app');

