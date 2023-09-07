<template>
  <div class="auth-form-container">
    <span class="font-m">Register</span>
    <form
      class="auth-form list-card"
      novalidate
      @submit.prevent="registerSubmit"
      ref="registerForm"
    >
      <BigInput
        :label="'username'"
        :val="{ required: true, minlength: 3, maxlength: 30, type: 'text' }"
        @change="onUsernameChange"
        @validation="onUsernameVal"
      />
      <BigInput
        :label="'password'"
        :val="{
          required: true,
          minlength: 4,
          maxlength: 50,
          type: 'password',
          pattern: '^(?=.*[a-z])(?=.*[A-Z])(?=.*\\d)(?=.*[^a-zA-Z\\d]).{4,50}$'
        }"
        :customError="'password must be at least 4 characters long and include at least one digit, lowercase letter, uppercase letter and special character'"
        @change="onPwChange"
        @validation="onPwVal"
      />
      <BigInput
        :label="'confirm password'"
        :val="{ required: true, type: 'password' }"
        :customError="confirmError"
        :forceCustomError="true"
        @change="onPwConfirmChange"
        @validation="onPwConfirmVal"
        ref="pwConfirmBigInput"
      />
      <button class="auth-submit" type="submit" :disabled="!isValid">sign up</button>
    </form>
  </div>
</template>

<script lang="ts">
import BigInput from '@/components/BigInput.vue'
import type { User } from '@/models/User'
import { user } from '@/state'
import { defineComponent } from 'vue'

export default defineComponent({
  name: 'RegisterView',
  components: {
    BigInput
  },
  data() {
    return {
      username: { value: '', valid: false },
      password: { value: '', valid: false },
      passwordConfirm: { value: '', valid: false },
      confirmError: ''
    }
  },
  methods: {
    registerSubmit(e: Event) {
      const data = new FormData(e.target as HTMLFormElement)
      data.append('themeId', '-1')
      this.$axios
        .post('/user/register', data)
        .then((res: { data: { userData: User; jwt: any } }) => {
          user.set(res.data.userData)
          user.setStorage(res.data.jwt, res.data.userData.userId)
        })
    },
    onUsernameChange(value: string) {
      this.username.value = value
    },
    onPwChange(value: string) {
      this.password.value = value
      if (this.password.value != this.passwordConfirm.value) {
        this.confirmError = 'passwords must match'
      } else {
        this.confirmError = ''
      }
    },
    onPwConfirmChange(value: string) {
      this.passwordConfirm.value = value
      if (this.password.value != this.passwordConfirm.value) {
        this.confirmError = 'passwords must match'
      } else {
        this.confirmError = ''
      }
    },
    onUsernameVal(isValid: boolean) {
      this.username.valid = isValid
    },
    onPwVal(isValid: boolean) {
      this.password.valid = isValid
    },
    onPwConfirmVal(isValid: boolean) {
      this.passwordConfirm.valid = isValid
    }
  },
  computed: {
    isValid() {
      return (
        this.username.valid &&
        this.password.valid &&
        this.passwordConfirm.valid &&
        this.password.value == this.passwordConfirm.value
      )
    }
  }
})
</script>

<style scoped></style>
