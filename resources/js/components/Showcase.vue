<template>
  <div class="showcase">
    <carousel :per-page="4" :mouse-drag="true">
      <slide v-for="team in teams" :key="team.name">
        <Team :data="team"></Team>
      </slide>
    </carousel>
  </div>
</template>

<script>
import Team from './Team';
import teamsService from '../services/teams';

export default {
  name: 'Showcase',
  components: {
    Team,
  },
  data() {
    return {
      teams: [],
    };
  },
  mounted() {
    teamsService.get(teams => this.teams = teams);
  },
}
</script>
