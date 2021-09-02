require('./bootstrap');


import { createApp } from 'vue'
import example from './components/ExampleComponent.vue'
import test from './components/test.vue'

createApp({
    components:{
        example,
        test,
    }

}).mount('#app')

