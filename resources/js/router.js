import { createMemoryHistory, createRouter } from 'vue-router'
import Navigasi from './components/navigasi.vue';
import Pengaturan from './components/pengaturan-pengguna/pengaturan.vue';
import Table from './components/table.vue';

const routes = [
  {path: '/dashboard', component: Navigasi},
  {path: '/pengaturan', component: Pengaturan},
  {path: '/table', component: Table},
];

const router = createRouter({
  history: createMemoryHistory(),
  routes,
});

export default router;