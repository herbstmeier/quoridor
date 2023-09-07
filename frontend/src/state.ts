import { reactive } from 'vue'
import { User } from './models/User'
import { axiosSetup } from './setup/axiosSetup'

const axios = axiosSetup()

export const theme = reactive({
    value: '',
    isUserPreference: false,
    setTheme(theme: string) {
        if (document.body.classList.contains(this.value)) {
            document.body.classList.replace(this.value, theme)
        } else {
            document.body.classList.add(theme)
        }
        this.value = theme
    }
})

export const user = reactive({
    data: new User({}),
    isSet(): boolean {
        return this.data?.userId > 0
    },
    set(obj: User) {
        this.data = obj
    },
    updateDb() {
        axios.put(`/user?userId=${this.data.userId}`, this.data)
    },
    getFromDb(userId: number | string) {
        return axios.get(`/user?userId=${userId}`)
    },
    getFromStorage() {
        const token = localStorage.getItem('jwtToken')
        const id = localStorage.getItem('userId')
        if (token !== null && id !== null) {
            this.getFromDb(id).then((res: { data: User }) => {
                this.data = res.data
            })
        }
    },
    setStorage(token: any, userId: number | string) {
        localStorage.setItem('jwtToken', token)
        localStorage.setItem('userId', userId.toString())
    }
})