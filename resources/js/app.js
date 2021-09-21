require('./bootstrap');


import { createApp } from 'vue'
import example from './components/ExampleComponent.vue'
import test from './components/test.vue'
import contact from './components/contact.vue'
import features from './components/features.vue'

createApp({
    components:{
        example,
        test,
        contact,
        features,
    }

}).mount('#app')

