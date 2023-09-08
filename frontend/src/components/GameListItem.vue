<template>
  <router-link :to="{ name: 'game', params: { id: game.gameId } }" class="list-item-container" v-if="game.gameId">
    <div>{{ author.username }}</div>
    <div>{{ timeSinceCreated }}</div>
    <div>{{ game.nPlayers }}</div>
  </router-link>
</template>

<script lang="ts">
import { Game } from '@/models/Game'
import { User } from '@/models/User'
import { defineComponent } from 'vue'

export default defineComponent({
  name: 'GameListItem',
  props: {
    game: {
      type: Game,
      required: true
    }
  },
  data() {
    return {
      author: User.getEmpty()
    }
  },
  computed: {
    timeSinceCreated() {
      let str = ''
      const sec = (Date.now() - new Date(this.game.createdAt).getTime()) / 1000
      const min = sec / 60
      const hou = min / 60
      const day = hou / 24
      if (day > 0) {
        str = day + 'd'
      } else if (hou > 0) {
        str = hou + 'h'
      } else if (min > 0) {
        str = min + 'm'
      } else {
        str = sec + 's'
      }
      return str
    }
  },
  mounted: function () {
    if (this.game) {
      this.$axios.get(`/user?userId=${this.game.createdBy}`).then((res) => {
        this.author = res.data.user
      })
    }
  }
})
</script>

<style scoped lang="scss"></style>
