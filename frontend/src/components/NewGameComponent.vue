<template>
  <div class="card">
    <div class="card-title">
      <font-awesome-icon icon="fas fa-plus" />
    </div>
    <div class="create-container">
        <div class="setup-container">
            
        </div>
        <button>go</button>
    </div>
  </div>
</template>
<script lang="ts">
import { defineComponent } from 'vue'

export default defineComponent({
  name: 'NewGameComponent'
})
</script>
<style lang="scss">
.create-container {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    gap: 2rem;
    padding: 1rem;
}
</style>
