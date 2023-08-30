import './assets/main.scss'
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

const axiosInstance = axiosSetup()
app.config.globalProperties.$axios = axiosInstance
declare module 'vue' {
    interface ComponentCustomProperties {
        $axios: typeof axiosInstance,
    }
}