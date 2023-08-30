<template>
  <router-link :to="{ name: 'user', params: { id: user.userId } }" class="list-item-container">
    <div>{{ user.username }}</div>
    <div>{{ user.wins }}</div>
  </router-link>
</template>
<script lang="ts">
import { defineComponent } from 'vue'

export default defineComponent({
  name: 'UserListItem',
  props: {
    user: {
      type: Object,
      required: true
    }
  }
})
</script>
<style lang="scss"></style>
