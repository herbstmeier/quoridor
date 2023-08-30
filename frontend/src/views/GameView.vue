<template>
  <div>
    <BoardComponentVue :cell-size="'7vh'" :move-table="moveTable" />
  </div>
</template>

<script lang="ts">
import { Bitmatrix } from '@/classes/Bitmatrix'
import BoardComponentVue from '@/components/BoardComponent.vue'
import { Game } from '@/models/Game'
import { Move } from '@/models/Move'
import { Position } from '@/models/Position'
import { User } from '@/models/User'
import { defineComponent } from 'vue'

export default defineComponent({
  name: 'GameView',
  components: { BoardComponentVue },
  data() {
    return {
      game: new Game({}),
      moves: new Array<Move>(),
      players: new Array<User>(),
      positions: new Array<Position>(),
      moveTable: new Bitmatrix(9)
    }
  },
  methods: {
    genTables() {
      // this.moveTable.fillMatrix((x:number,y:number)=>{
      // })
    }
  },
  created: function () {
    this.$axios
      .get(`/game?gameId=${this.$route.params.id}/full`)
      .then(
        (res: { data: { game: Game; moves: Move[]; players: User[]; positions: Position[] } }) => {
          this.game = res.data.game
          this.moves = res.data.moves
          this.players = res.data.players
          this.positions = res.data.positions

          this.genTables()
        }
      )
  }
})
</script>

<style scoped></style>
