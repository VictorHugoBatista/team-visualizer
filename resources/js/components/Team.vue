<template>
  <div class="team">
      <div class="team-title">
          {{ name }}
      </div>
  </div>
</template>

<script>
export default {
  name: 'Team',
  props: [
      'data',
  ],
  data() {
      return {
          name: 'Team',
      };
  },
  mounted() {
    this.name = this.data.name;
  },
}
</script>
