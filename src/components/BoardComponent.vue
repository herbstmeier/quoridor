<template>
  <div class="board-container" v-show="isLoaded">
    <template v-for="y in 9" :key="y">
      <CellComponentVue
        v-for="x in 9"
        :key="x"
        :size="cellSize"
        :position="{ x, y }"
        :is-move-option="moveTable?.matrix?.[y]?.[x]"
        />
    </template>
  </div>
</template>
<script lang="ts">
import { defineComponent } from 'vue'
import CellComponentVue from './CellComponent.vue'
import { theme } from '@/state'
import { Bitmatrix } from '@/classes/Bitmatrix'

export default defineComponent({
  name: 'BoardComponent',
  props: {
    cellSize: String,
    players: Array<object>,
    moveTable: Bitmatrix
  },
  data() {
    return {
      isLoaded: false
    }
  },
  components: { CellComponentVue },
  methods: {
    // getPlayerByStart(start: string) {
    //     return this.players?.find(player => {
    //         return player?.start.charAt(0) === start.charAt(0);
    //     });
    // },
    // genStateFromMoves(moves: Array<string>) {
    //     const bricks = [];
    //     moves.forEach(move => {
    //         let player;
    //         let orientation = -1;
    //         let posX;
    //         let posY;
    //         for (let i = 0; i < move.length; i++) {
    //             let char = move.charAt(i);
    //             switch (i) {
    //                 case 0:
    //                     player = this.getPlayerByStart(char);
    //                     break;
    //                 case 1:
    //                     orientation = Brick.orientationStringToNumber(char);
    //                     break;
    //                 case 2:
    //                     posX = parseInt(char);
    //                     break;
    //                 case 3:
    //                     posY = parseInt(char);
    //                     break;
    //             }
    //         }
    //         if (orientation !== -1) {
    //             const brick = new Brick(new Position(posX, posY), orientation);
    //             bricks.push(brick);
    //             brick.draw();
    //             player.nBricks--;
    //         }
    //         else {
    //             player.position.go(posX, posY);
    //         }
    //     });
    // }
  },
  computed: {
    boardColor(): string {
      return `hsl(${this.boardHue} 30% ${theme.value === 'dark' ? '60%' : '40%'} / 1)`
    }
  },
  created: function () {
    this.isLoaded = true
  }
})
</script>
<style lang="scss">
.board-container {
  display: grid;
  grid-template-columns: repeat(9, 1fr);
  grid-template-rows: repeat(9, 1fr);
  gap: 4px;
  padding: 6px;
  width: fit-content;
  height: fit-content;
  //border: 5px solid var(--color-translucent);
  background-color: v-bind(boardColor);
  border-radius: var(--default-radius);
  * {
    user-select: none;
  }
}
</style>
