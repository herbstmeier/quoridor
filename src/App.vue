<script lang="ts">
import { defineComponent } from 'vue'
import HeaderView from '@/components/HeaderComponent.vue'
import { theme, user } from '@/state'

export default defineComponent({
  name: 'App',
  components: {
    HeaderView
  },
  methods: {
    getThemeFromBrowser() {
      if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
        theme.setTheme('dark')
      } else {
        theme.setTheme('light')
      }

      window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (event) => {
        theme.setTheme(event.matches ? 'dark' : 'light')
      })
    }
  },
  created: function () {
    this.getThemeFromBrowser()
    user.getFromStorage()
  }
})
</script>

<template>
  <HeaderView />
  <main>
    <RouterView />
  </main>
</template>

<style scoped></style>
