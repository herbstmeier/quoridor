<template>
  <div class="theme-container">
    <font-awesome-icon
      :class="{ selected: isLightTheme }"
      icon="fas fa-sun"
      @click="setTheme('light')"
    />
    <font-awesome-icon
      :class="{ selected: !isLightTheme }"
      icon="fas fa-moon"
      @click="setTheme('dark')"
    />
  </div>
</template>
<script lang="ts">
import { defineComponent } from 'vue'
import { theme, user } from '@/state'

export default defineComponent({
  name: 'ThemeSelector',
  data() {
    return {}
  },
  computed: {
    isLightTheme(): boolean {
      return theme.value === 'light'
    }
  },
  methods: {
    setTheme(val: string) {
      theme.setTheme(val)
      if (user.isSet()) {
        user.data.theme = val
        user.updateDb()
      }
    }
  }
})
</script>
<style lang="scss">
.theme-container {
  display: flex;
  border-radius: var(--default-radius);
  user-select: none;
  > * {
    padding: 10px;
    cursor: pointer;
    font-size: var(--font-s);
    min-width: var(--font-s);
    box-sizing: border-box;
    border: solid 2px transparent;
    transition: all 0.1s ease-in-out;

    &:first-child {
      border-radius: var(--default-radius) 0 0 var(--default-radius);
    }
    &:last-child {
      border-radius: 0 var(--default-radius) var(--default-radius) 0;
    }
    &.selected {
      background-color: var(--color-translucent);
      color: var(--color-primary);
    }
    &:not(.selected) {
      background-color: transparent;
      color: var(--color-translucent);
      border-color: var(--color-translucent);
    }

    &:hover {
      color: var(--color-primary);
    }
  }
}
</style>
