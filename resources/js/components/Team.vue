<template>
  <div class="team">
      <div class="team-inner">
        <div class="team-title">
            {{ name }}
        </div>
        <div class="team-content">
          <div class="team-member" v-for="member in members" :key="member.name">
            <div class="row no-gutters">
              <div class="col-4">
                <div class="team-member-thumbnail">
                  <img :src="member.thumbnail" :alt="member.name" />
                </div>
              </div>
              <div class="col-8">
                <div class="team-member-title">
                  {{ member.name }}
                </div>
                <div class="team-member-subtitle">
                  {{ member.role }}
                </div>
              </div>
            </div>
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
