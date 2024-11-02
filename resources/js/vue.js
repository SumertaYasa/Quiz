// import vue
import { createApp } from 'vue';
import router from './router';

// import component
import Welcome from '../js/components/welcome.vue';
import Login from '../js/components/login.vue';
import navigasi from './components/navigasi.vue';
import pengaturan from './components/pengaturan-pengguna/pengaturan.vue';

// mount component
createApp(Welcome).mount('#welcome');
createApp(Login).mount('#login');
createApp(navigasi).use(router).mount('#navigasi');
// createApp(pengaturan).mount('#navigasi');

