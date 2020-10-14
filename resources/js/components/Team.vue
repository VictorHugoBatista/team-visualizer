<template>
  <div class="team">
      <div class="team-inner">
        <div class="team-title">
            {{ name }}
        </div>
        <div class="row">
          <div class="col-6" v-for="member in members" :key="member.name">
            <div>{{ member.name }}</div>
            <div>{{ member.role }}</div>
          </div>
        </div>
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
          members: [],
      };
  },
  mounted() {
    this.name = this.data.name;
    this.members = this.data.members;
  },
}
</script>
