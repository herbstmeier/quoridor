<template>
  <div class="big-input-container">
    <label class="field-label font-s" :for="fieldName">{{ label }}</label>
    <input
      class="field-input font-s"
      :name="fieldName"
      v-bind="val"
      v-model="value"
      @input.prevent="onInput"
    />
    <span class="field-error font-xs" v-if="isError">{{ errorMsg }}</span>
  </div>
</template>
<script lang="ts">
import { nextTick } from 'vue'
import { defineComponent } from 'vue'

export default defineComponent({
  name: 'BigInput',
  props: {
    label: String,
    val: Object,
    customError: {
      type: String,
      default: ''
    },
    forceCustomError: Boolean
  },
  data() {
    return {
      value: null,
      fieldName: this.label?.replace(/[^a-zA-Z]/g, ''),
      isError: false,
      error: '',
      useCustomError: false
    }
  },
  emits: {
    change: null,
    validation: null
  },
  methods: {
    async onInput(e: Event) {
      const input = e.target as HTMLInputElement
      this.$emit('change', input.value)
      await nextTick()
      if (input.checkValidity()) {
        this.$emit('validation', true)
        this.error = ''
        this.isError = false
      } else {
        this.$emit('validation', false)
        this.isError = true
        if (input.validity.patternMismatch) {
          this.error = ''
          this.useCustomError = true
        } else {
          this.error = input.validationMessage.toLocaleLowerCase() ?? ''
        }
      }
    }
  },
  computed: {
    errorMsg() {
      if (this.forceCustomError) {
        if (this.customError) {
          return this.customError
        } else {
          return this.error
        }
      } else if (this.useCustomError) {
        return this.customError
      } else {
        return this.error
      }
    }
  }
})
</script>
<style lang="scss">
.big-input-container {
  display: flex;
  flex-direction: column;
  gap: 5px;
  width: 100%;

  .field-input {
    border: none;
    padding: 5px 1rem;
    &:focus-visible {
      outline: solid var(--color-primary);
      border-radius: var(--default-radius);
    }
    &:hover {
      border-radius: var(--default-radius);
    }
  }

  .field-error {
    color: var(--color-error);
  }
}
</style>
