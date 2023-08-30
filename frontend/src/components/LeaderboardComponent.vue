<template>
  <div class="list-card">
    <!-- <div class="font-s">leaderboard</div> -->
    <div class="list-title">
      <font-awesome-icon icon="fas fa-trophy" />
    </div>
    <div class="list-container">
      <div class="list-item-container top-row">
        <div>username</div>
        <div>wins</div>
      </div>
      <UserListItem :user="user" v-for="user in users" :key="user.userId" />
    </div>
  </div>
</template>
<script lang="ts">
import { defineComponent } from 'vue'
import UserListItem from './UserListItem.vue'
import { User } from '@/models/User'

export default defineComponent({
  name: 'LeaderboardComponent',
  components: { UserListItem },
  data() {
    return {
      // users: new Array<User>()
      users: [User.getFake(), User.getFake()]
    }
  },
  mounted: async function () {
    this.$axios.get('/user').then((res: { data: User[] }) => {
      this.users = res.data.sort((userA: User, userB: User) => {
        return userA.wins - userB.wins
      })
    })
  }
})
</script>
<style lang="scss"></style>
