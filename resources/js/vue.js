// import vue
import { createApp } from 'vue';

// import component
import Welcome from '../views/components/welcome.vue';
import Login from '../views/components/login.vue';

// mount component
createApp(Welcome).mount('#welcome');
createApp(Login).mount('#login');