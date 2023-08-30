<template>
  <nav class="header-container">
    <router-link to="/" class="font-l">quoridor</router-link>
    <theme-selector />
    <AuthHeaderVue />
  </nav>
</template>

<script lang="ts">
import { defineComponent } from 'vue'
import ThemeSelector from './ThemeSelector.vue'
import AuthHeaderVue from './AuthHeader.vue';

export default defineComponent({
  name: 'HeaderComponent',
  data() {
    return {}
  },
  components: { ThemeSelector, AuthHeaderVue }
})
</script>

<style lang="scss">
.header-container {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  justify-items: center;
  align-items: center;
  background: var(--color-translucent);
}
</style>
