import { createApp } from 'vue';
import axios from 'axios';
import App from './App.vue';
import Playlist from './Components/PlaylistComponent.vue';


axios.defaults.baseURL = '/';
axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
axios.defaults.withCredentials = true;

const app = createApp({});

app.component('App', App);
app.component('Playlist', Playlist);

app.config.globalProperties.$axios = axios;

app.mount('#app');
