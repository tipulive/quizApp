import { createApp } from 'vue'
import App from './App.vue'
import Home from './components/Home.vue'
import Result from './components/Result.vue'
import {createRouter, createWebHistory} from 'vue-router'

const router = createRouter({
    history: createWebHistory(),
    routes:[
        {path:'/',name:'Home',component:Home},
        {path:'/Result',name:'Result',component:Result},
    ]
})

createApp(App).use(router).mount('#app')
