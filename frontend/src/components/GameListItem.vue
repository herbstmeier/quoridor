<template>
    <router-link :to="{ name: 'game', params: { id: game.gameId } }" class="list-item-container">
        <div>{{ game.gameName }}</div>
        <div>{{  }}</div>
        <div>{{ game.nPlayers }}</div>
    </router-link>
</template>

<script lang="ts">
import { Game } from '@/models/Game';
import { defineComponent } from 'vue'

export default defineComponent({
    name: 'GameListItem',
    props: {
        game: {
            type: Game,
            required: true
        }
        
    }
})
</script>

<style scoped lang="scss">

</style>