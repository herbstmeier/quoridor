import './assets/main.scss'
import axios from 'axios'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import { faSetup } from './setup/faSetup'
import { axiosSetup } from './setup/axiosSetup'

faSetup()

const app = createApp(App)
app.component('font-awesome-icon', FontAwesomeIcon)
app.use(router)
app.mount('#app')

app.config.globalProperties.$axios = axiosSetup()
declare module 'vue' {
    interface ComponentCustomProperties {
        $axios: typeof axios,
    }
}