<script lang="ts">
import { defineComponent } from 'vue'
import GameList from '@/components/GameList.vue'
import LeaderboardComponent from '@/components/LeaderboardComponent.vue'
import { user } from '@/state'
import { Game } from '@/models/Game'
import NewGameComponentVue from '@/components/NewGameComponent.vue'

export default defineComponent({
  name: 'HomeView',
  data() {
    return {
      createdGames: new Array<Game>(),
      ongoingGames: new Array<Game>(),
      userOngoingGames: new Array<Game>()
    }
  },
  components: {
    GameList,
    LeaderboardComponent,
    NewGameComponentVue
  },
  methods: {},
  mounted: async function () {
    this.$axios.get('/game?state=0').then((res: { data: Game[] }) => {
      this.createdGames = res.data
    })
    this.$axios.get('/game?state=1').then((res: { data: Game[] }) => {
      this.ongoingGames = res.data
      if (user.isSet()) {
        this.userOngoingGames = this.ongoingGames.filter((value: Game) => {
          return value.hasUser(user.data.userId)
        })
      }
    })
  }
})
</script>

<template>
  <div class="home-container">
    <LeaderboardComponent />
    <GameList
      v-if="userOngoingGames.length > 0"
      :games="userOngoingGames"
      :icon="'fas fa-chess-board'"
    />
    <GameList v-if="createdGames.length > 0" :games="createdGames" :icon="'fas fa-hat-cowboy'" />
    <GameList v-if="ongoingGames.length > 0" :games="ongoingGames" :icon="'fas fa-binoculars'" />
    <NewGameComponentVue class="new-game-card" />
  </div>
</template>

<style lang="scss">
.home-container {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 5rem;

  .new-game-card {
    grid-area: 2/1 / span 1 / span 3;
  }
}
</style>
