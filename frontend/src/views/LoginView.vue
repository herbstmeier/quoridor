<template>
  <div class="auth-form-container">
    <span class="font-m">Login</span>
    <form class="auth-form list-card" novalidate @submit.prevent="loginSubmit">
      <BigInput
        :label="'username'"
        :val="{ required: true, type: 'text' }"
        @validation="onUsernameVal"
      />
      <BigInput
        :label="'password'"
        :val="{ required: true, type: 'password' }"
        @validation="onPasswordVal"
      />
      <button class="auth-submit" type="submit" :disabled="!isValid">sign in</button>
    </form>
  </div>
</template>

<script lang="ts">
import BigInput from '@/components/BigInput.vue'
import { defineComponent } from 'vue'
import { user } from '@/state'
import type { User } from '@/models/User'

export default defineComponent({
  name: 'LoginView',
  data() {
    return {
      username: { value: '', valid: false },
      password: { value: '', valid: false }
    }
  },
  methods: {
    async loginSubmit(e: Event) {
      this.$axios
        .post('/user/login', new FormData(e.target as HTMLFormElement))
        .then((res: { data: { userData: User; jwt: any } }) => {
          user.set(res.data.userData)
          user.setStorage(res.data.jwt, res.data.userData.userId)
        })
    },
    onUsernameVal(isValid: boolean) {
      this.username.valid = isValid
    },
    onPasswordVal(isValid: boolean) {
      this.password.valid = isValid
    }
  },
  components: { BigInput },
  computed: {
    isValid() {
      return this.username.valid && this.password.valid
    }
  }
})
</script>

<style scoped></style>
