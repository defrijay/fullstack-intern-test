import { createRouter, createWebHistory } from 'vue-router';
import Login from '../pages/auth/Login.vue';
import HomePage from '../pages/HomePage.vue';
import EditProfile from '../pages/EditProfile.vue';

const routes = [
  { path: '/', redirect: '/login' },
  { path: '/login', component: Login },
  { path: '/home', component: HomePage, meta: { requiresAuth: true } },
  { path: '/edit-profile', component: EditProfile, meta: { requiresAuth: true } },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

router.beforeEach((to, _, next) => {
  const isAuthenticated = localStorage.getItem('isAuthenticated');
  if (to.meta.requiresAuth && !isAuthenticated) next('/login');
  else next();
});

export default router;
