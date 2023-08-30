<template>
  <div class="auth-container">
    <router-link :to="{ name: 'login' }" class="font-m" v-if="!isUser">login</router-link>
    <router-link :to="{ name: 'register' }" class="font-m" v-if="!isUser">register</router-link>
    <a @click="logout" class="font-m" v-if="isUser"></a>
  </div>
</template>
<script lang="ts">
import { user } from '@/state'
import { defineComponent } from 'vue'

export default defineComponent({
  name: 'AuthHeader',
  computed: {
    isUser(): boolean {
      return user.isSet()
    }
  },
  methods: {
    logout() {
      this.$axios.post(`/user?userId=${user.data.userId}/logout`)
    }
  }
})
</script>
<style lang="scss">
.auth-container {
  display: flex;
  flex-direction: row;
  gap: 2rem;
}
</style>
