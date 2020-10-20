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
    this.updateTeams();
  },
  methods: {
    updateTeams() {
      const updateTeamsData = teams => {
        this.teams = teams;
      };
      const afterRequest = () => {
        console.log('turn off the loading');
      };
      console.log('turn on the loading')
      teamsService.get(updateTeamsData, afterRequest);
    },
  },
}
</script>
