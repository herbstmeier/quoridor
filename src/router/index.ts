import { createWebHashHistory, createRouter } from "vue-router"
import { type RouteRecordRaw } from "vue-router"

const routes: Array<RouteRecordRaw> = [
  {
    path: '/',
    name: 'home',
    component: () => import('@/views/HomeView.vue'),
  },
  {
    path: '/about',
    name: 'about',
    component: () => import('@/views/AboutView.vue'),
  },
  {
    path: '/login',
    name: 'login',
    component: () => import('@/views/LoginView.vue'),
  },
  {
    path: '/register',
    name: 'register',
    component: () => import('@/views/RegisterView.vue'),
  },
  {
    path: '/user/:id',
    name: 'user',
    component: () => import('@/views/UserView.vue'),
  },
  {
    path: '/game/:id',
    name: 'game',
    component: () => import('@/views/GameView.vue'),
  }
]

const router = createRouter({
  history: createWebHashHistory(),
  routes,
})

export default router