import { createMemoryHistory, createRouter } from 'vue-router'
import Navigasi from './components/navigasi.vue';
import Pengaturan from './components/pengaturan-pengguna/pengaturan.vue';

const routes = [
  {path: '/dashboard', component: Navigasi},
  {path: '/pengaturan', component: Pengaturan},
];

const router = createRouter({
  history: createMemoryHistory(),
  routes,
});

export default router;