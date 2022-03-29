import { createApp } from 'vue';
import ResidentVacancies from './components/ResidentVacancies.vue';
import autocomplete from 'vuejs-auto-complete';
const app = createApp({});

//register the component
app.component('Residentvacancies', ResidentVacancies);

//..HTML element to mount the Vue application
app.mount('#app');

require('./bootstrap');