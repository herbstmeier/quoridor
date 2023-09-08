<template>
  <div class="card">
    <div class="card-title">
      <font-awesome-icon v-if="icon" v-bind="{icon: icon}" />
      <div v-if="title" class="font-s">{{ title }}</div>
    </div>
    <div class="list-container">
      <div class="list-item-container top-row">
        <div>name</div>
        <div>author</div>
      </div>
      <GameListItem v-for="game in games" :key="game.game_id" :game="game" />
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from 'vue'
import GameListItem from './GameListItem.vue'

export default defineComponent({
  name: 'GameList',
  props: {
    title: String,
    icon: String,
    games: {
      type: Array<any>,
      required: true
    }
  },
  components: { GameListItem },
  methods: {}
})
</script>

<style lang="scss" scoped></style>
