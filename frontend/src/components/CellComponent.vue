<template>
  <div class="cell-container" :class="{ option: isMoveOption && isMoveOption > 0 }">
    {{ player }}
  </div>
</template>
<script lang="ts">
import { defineComponent } from 'vue'
import { theme, user } from '@/state'

export default defineComponent({
  name: 'CellComponent',
  props: {
    position: Object,
    size: String,
    room: Number,
    isMoveOption: Number,
    player: Number
  },
  data() {
    return {
    }
  },
  methods: {
  },
  computed: {
    cellColor() {
      return `hsl(${user?.data?.boardHue ?? 22} 30% ${ theme.value === 'dark' ? '40%' : '60%' } / 1)`
    }
  },
  created: function () {
  }
})
</script>
<style lang="scss">
.cell-container {
  width: v-bind(size);
  height: v-bind(size);
  background-color: v-bind(cellColor);
  border-radius: var(--default-radius);
  //border: 1px solid var(--color-translucent);

  &.option {
    background-color: var(--color-cell-option);
  }
}
</style>
