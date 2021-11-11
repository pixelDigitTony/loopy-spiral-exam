require('./bootstrap');
import { createApp } from '@vue/runtime-dom';
import ExampleComponent from './components/ExampleComponent.vue';

createApp({

    components: {
        ExampleComponent,
    }

}).mount('#app')